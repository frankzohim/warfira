<?php

namespace App\Http\Middleware\AppMiddlewares;

use App\Models\Country;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stevebauman\Location\Facades\Location;

class DefaultWebMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            // Supported currencies
            $request->attributes->add(["currencies" => self::getSupportedCurrencies()]);

            // Default params from user IP address
            $ip = $request->ip(); // Get IP address
            $currentUserInfo = Location::get($ip);

            if(session()->has('language')){
                App::setLocale(session('language', self::getCountryLanguage('US')));
            }else{
                App::setLocale(self::getCountryLanguage($currentUserInfo->countryCode));
            }

            if(!session()->has('currency')){
                $currency_name = self::getCountryCurrency($currentUserInfo->countryName);
                if (empty($currency_name) || !in_array($currency_name, self::getSupportedCurrencyNames())){
                    session(['currency' => ['name' => self::getSupportedCurrencyNames()[0], 'symbol' => self::getSupportedCurrencySymbols()[0]]]);
                }
                else{
                    $currency_symbol = $currency_name;
                    foreach (self::getSupportedCurrencyNames() as $key => $name){
                        if($name == $currency_name){
                            $currency_symbol = self::getSupportedCurrencySymbols()[$key];
                            break;
                        }
                    }
                    session(['currency' => ['name' => $currency_name, 'symbol' => $currency_symbol]]);
                }
            }

        }catch (\Exception $exception){}
        return $next($request);
    }


    public static function getCountryLanguage(string $country): string {
        $subtags = \ResourceBundle::create('likelySubtags', 'ICUDATA', false);
        $country = \Locale::canonicalize('und_'.$country);
        $locale = $subtags->get($country) ?: $subtags->get('und');
        return \Locale::getPrimaryLanguage($locale);
    }

    public static function getSupportedCurrencyNames(){
        return ['EUR', 'AED', 'GBP', 'INR', 'SAR', 'USD'];
    }

    public static function getSupportedCurrencySymbols(){
        return ['€', 'AED', '£', 'Rs', 'SAR', '$'];
    }

    public static function getSupportedCurrencies(){
        $currencies = [];

        foreach (self::getSupportedCurrencyNames() as $key => $currencyName){
            array_push($currencies, ['name' => $currencyName, 'symbol' => self::getSupportedCurrencySymbols()[$key]]);
        }
        return $currencies;
    }

    public static function getCountryCurrency(string $country_name): string{
        $codeToCountries = self::getCountriesCurrencies();
        $country = strtolower($country_name);
        foreach ($codeToCountries as $currency_code => $codeToCountry){
            if(str_contains(strtolower($codeToCountry), $country))
                return $currency_code;
        }
        return '';
    }

    public static function getCountriesCurrencies(){

        return [
            "AED" => "United Arab Emirates",
            "AFN" => "Afghanistan",
            "ALL" => "Albania",
            "AMD" => "Armenia",
            "ANG" => "Netherlands Antilles",
            "AOA" => "Angola",
            "ARS" => "Argentina",
            "AUD" => "Australia, Australian Antarctic Territory, Christmas Island, Cocos (Keeling) Islands, Heard and McDonald Islands, Kiribati, Nauru, Norfolk Island, Tuvalu",
            "AWG" => "Aruba",
            "AZN" => "Azerbaijan",
            "BAM" => "Bosnia and Herzegovina",
            "BBD" => "Barbados",
            "BDT" => "Bangladesh",
            "BGN" => "Bulgaria",
            "BHD" => "Bahrain",
            "BIF" => "Burundi",
            "BMD" => "Bermuda",
            "BND" => "Brunei",
            "BOB" => "Bolivia",
            "BOV" => "Bolivia",
            "BRL" => "Brazil",
            "BSD" => "Bahamas",
            "BTN" => "Bhutan",
            "BWP" => "Botswana",
            "BYR" => "Belarus",
            "BZD" => "Belize",
            "CAD" => "Canada",
            "CDF" => "Democratic Republic of Congo",
            "CHE" => "Switzerland",
            "CHF" => "Switzerland, Liechtenstein",
            "CHW" => "Switzerland",
            "CLF" => "Chile",
            "CLP" => "Chile",
            "CNY" => "Mainland China",
            "COP" => "Colombia",
            "COU" => "Colombia",
            "CRC" => "Costa Rica",
            "CUP" => "Cuba",
            "CVE" => "Cape Verde",
            "CYP" => "Cyprus",
            "CZK" => "Czech Republic",
            "DJF" => "Djibouti",
            "DKK" => "Denmark, Faroe Islands, Greenland",
            "DOP" => "Dominican Republic",
            "DZD" => "Algeria",
            "EEK" => "Estonia",
            "EGP" => "Egypt",
            "ERN" => "Eritrea",
            "ETB" => "Ethiopia",
            "EUR" => "European Union, see eurozone",
            "FJD" => "Fiji",
            "FKP" => "Falkland Islands",
            "GBP" => "United Kingdom",
            "GEL" => "Georgia",
            "GHS" => "Ghana",
            "GIP" => "Gibraltar",
            "GMD" => "Gambia",
            "GNF" => "Guinea",
            "GTQ" => "Guatemala",
            "GYD" => "Guyana",
            "HKD" => "Hong Kong Special Administrative Region",
            "HNL" => "Honduras",
            "HRK" => "Croatia",
            "HTG" => "Haiti",
            "HUF" => "Hungary",
            "IDR" => "Indonesia",
            "ILS" => "Israel",
            "INR" => "Bhutan, India",
            "IQD" => "Iraq",
            "IRR" => "Iran",
            "ISK" => "Iceland",
            "JMD" => "Jamaica",
            "JOD" => "Jordan",
            "JPY" => "Japan",
            "KES" => "Kenya",
            "KGS" => "Kyrgyzstan",
            "KHR" => "Cambodia",
            "KMF" => "Comoros",
            "KPW" => "North Korea",
            "KRW" => "South Korea",
            "KWD" => "Kuwait",
            "KYD" => "Cayman Islands",
            "KZT" => "Kazakhstan",
            "LAK" => "Laos",
            "LBP" => "Lebanon",
            "LKR" => "Sri Lanka",
            "LRD" => "Liberia",
            "LSL" => "Lesotho",
            "LTL" => "Lithuania",
            "LVL" => "Latvia",
            "LYD" => "Libya",
            "MAD" => "Morocco, Western Sahara",
            "MDL" => "Moldova",
            "MGA" => "Madagascar",
            "MKD" => "Former Yugoslav Republic of Macedonia",
            "MMK" => "Myanmar",
            "MNT" => "Mongolia",
            "MOP" => "Macau Special Administrative Region",
            "MRO" => "Mauritania",
            "MTL" => "Malta",
            "MUR" => "Mauritius",
            "MVR" => "Maldives",
            "MWK" => "Malawi",
            "MXN" => "Mexico",
            "MXV" => "Mexico",
            "MYR" => "Malaysia",
            "MZN" => "Mozambique",
            "NAD" => "Namibia",
            "NGN" => "Nigeria",
            "NIO" => "Nicaragua",
            "NOK" => "Norway",
            "NPR" => "Nepal",
            "NZD" => "Cook Islands, New Zealand, Niue, Pitcairn, Tokelau",
            "OMR" => "Oman",
            "PAB" => "Panama",
            "PEN" => "Peru",
            "PGK" => "Papua New Guinea",
            "PHP" => "Philippines",
            "PKR" => "Pakistan",
            "PLN" => "Poland",
            "PYG" => "Paraguay",
            "QAR" => "Qatar",
            "RON" => "Romania",
            "RSD" => "Serbia",
            "RUB" => "Russia, Abkhazia, South Ossetia",
            "RWF" => "Rwanda",
            "SAR" => "Saudi Arabia",
            "SBD" => "Solomon Islands",
            "SCR" => "Seychelles",
            "SDG" => "Sudan",
            "SEK" => "Sweden",
            "SGD" => "Singapore",
            "SHP" => "Saint Helena",
            "SKK" => "Slovakia",
            "SLL" => "Sierra Leone",
            "SOS" => "Somalia",
            "SRD" => "Suriname",
            "STD" => "São Tomé and Príncipe",
            "SYP" => "Syria",
            "SZL" => "Swaziland",
            "THB" => "Thailand",
            "TJS" => "Tajikistan",
            "TMM" => "Turkmenistan",
            "TND" => "Tunisia",
            "TOP" => "Tonga",
            "TRY" => "Turkey",
            "TTD" => "Trinidad and Tobago",
            "TWD" => "Taiwan and other islands that are under the effective control of the Republic of China (ROC)",
            "TZS" => "Tanzania",
            "UAH" => "Ukraine",
            "UGX" => "Uganda",
            "USD" => "American Samoa, British Indian Ocean Territory, Ecuador, El Salvador, Guam, Haiti, Marshall Islands, Micronesia, Northern Mariana Islands, Palau, Panama, Puerto Rico, East Timor, Turks and Caicos Islands, United States, Virgin Islands",
            "USN" => "United States",
            "USS" => "United States",
            "UYU" => "Uruguay",
            "UZS" => "Uzbekistan",
            "VEB" => "Venezuela",
            "VND" => "Vietnam",
            "VUV" => "Vanuatu",
            "WST" => "Samoa",
            "XAF" => "Cameroon, Central African Republic, Congo, Chad, Equatorial Guinea, Gabon",
            "XAG" => "",
            "XAU" => "",
            "XBA" => "",
            "XBB" => "",
            "XBC" => "",
            "XBD" => "",
            "XCD" => "Anguilla, Antigua and Barbuda, Dominica, Grenada, Montserrat, Saint Kitts and Nevis, Saint Lucia, Saint Vincent and the Grenadines",
            "XDR" => "International Monetary Fund",
            "XFO" => "Bank for International Settlements",
            "XFU" => "International Union of Railways",
            "XOF" => "Benin, Burkina Faso, Côte d'Ivoire, Guinea-Bissau, Mali, Niger, Senegal, Togo",
            "XPD" => "",
            "XPF" => "French Polynesia, New Caledonia, Wallis and Futuna",
            "XPT" => "",
            "XTS" => "",
            "XXX" => "",
            "YER" => "Yemen",
            "ZAR" => "South Africa",
            "ZMK" => 'Zambia',
            "ZWD" => "Zimbabwe"
        ];
    }

}
