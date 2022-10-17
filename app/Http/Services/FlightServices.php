<?php


namespace App\Http\Services;


use App\Http\Services\Messaging\SendMessage;
use App\Models\FlightAirport;
use Carbon\Carbon;

class FlightServices
{


    /**
     * @param $term
     * @return array
     */
    private static function get_airport_list_locally($term){

        if (strlen($term) < 1) return [];

        $result = array();
        $top_result = array();
        $res = FlightAirport::where(function ($query) use ($term){
            $query->where('airport_code', 'like', '%' . $term . '%')
                ->orWhere('airport_name', 'like', '%' . $term . '%')
                ->orWhere('airport_city', 'like', '%' . $term . '%');
        })->orderBy('airport_city', 'asc')->orderBy('airport_name', 'asc')->get();

        foreach ($res as $airport) {

            if(str_contains(strtolower($airport->airport_name), 'airport')){

                $name = str_replace('Airport', '', $airport->airport_name);
                $airports = array();
                $airports['label'] = $name . ' (' . $airport->airport_code . ')';
                $airports['value'] = $name . ' (' . $airport->airport_code . ')';
                $airports['id'] = $airport->airport_code;
                $airports['country_code'] = asset('images/flags/' . strtolower($airport->CountryCode).'.png');
                $airports['category'] = 'Airports';
                $airports['type'] = 'Airports';

                array_push($top_result, $airports);

            }
            else{

                $name = $airport->airport_city;
                $airports = array();
                $airports['label'] = $name . ' (' . $airport->airport_code . ')';
                $airports['value'] = $name . ' (' . $airport->airport_code . ')';
                $airports['id'] = $airport->airport_code;
                $airports['country_code'] = asset('images/flags/' . strtolower($airport->CountryCode).'.png');
                $airports['category'] = 'Cities';
                $airports['type'] = 'Cities';

                array_push($result, $airports);

            }
        }

        return array_merge($top_result, $result);
    }


    /**
     * @param $term
     * @return array
     */
    private static function get_airport_list_remotely($term){

        if (strlen($term) < 3) return [];

        $result = array();
        $top_result = array();

        $url = Params::$AMADEUS_BASE_URL . "/v1/reference-data/locations/cities";
        $params = array(
            "keyword" => $term,
            "max" => 20,
            "include" => "AIRPORTS"
        );

        $res = SendMessage::callAmadeusAPI($url, $params, false);

        if(array_key_exists('data', $res)){
            foreach ($res["data"] as $airport) {

                if(array_key_exists('iataCode', $airport)){
                    $airports = array();
                    $airports['label'] = $airport['name'] . ' (' . $airport['iataCode'] . ')'; // . ', ' . $airport['address']['countryCode'] ;
                    $airports['value'] = $airport['name'] . ' (' . $airport['iataCode'] . ')'; // . ' - ' . $airport['address']['countryCode'];
                    $airports['id'] = $airport['iataCode'];
                    $airports['country_code'] = asset('images/flags/' . strtolower($airport['address']['countryCode']).'.png');
                    $airports['category'] = 'Cities';
                    $airports['type'] = 'Cities';

                    array_push($result, $airports);
                }

                if(array_key_exists('relationships', $airport)){
                    foreach ($airport['relationships'] as $inc){
                        $inluded = $res['included']['airports'][''.$inc['id']];

                        $airports = array();
                        $airports['label'] = $inluded['name'] . ' (' . $inluded['iataCode'] . ')'; // . ', ' . $inluded['address']['countryCode'];
                        $airports['value'] = $inluded['name'] . ' (' . $inluded['iataCode'] . ')'; // . ' - ' . $airport['name'] . '/' . $inluded['address']['countryCode'];
                        $airports['id'] = $inluded['iataCode'];
                        $airports['country_code'] = asset('images/flags/' . strtolower($inluded['address']['countryCode']).'.png');
                        $airports['category'] = 'Airports';
                        $airports['type'] = 'Airports';

                        array_push($top_result, $airports);
                    }
                }
            }
        }

        return array_merge($top_result, $result);
    }


    /**
     * return a list of airport matching the specified search term
     * @param $term
     * @return array
     */
    public static function get_airport_list($term)
    {
        $locally = true;
        try {

            if($locally){
                // LOAD DATAS LOCALLY
                $local_result = FlightServices::get_airport_list_locally($term);
                return empty($local_result) ? FlightServices::get_airport_list_remotely($term) : $local_result;

            } else {
                // LOAD DATAS REMOTLY ON AMADEUS API
                return FlightServices::get_airport_list_remotely($term);
            }

        }catch (\Exception $exception){
            return [];
        }
    }


    /**
     * Return a list of flights matching the given criteria
     * @param array $flight_search_params
     * @return array
     */
    public static function get_flight_list(array $flight_search_params){

        $url = Params::$AMADEUS_BASE_URL . "/v2/shopping/flight-offers";
        $params = array(
            "originLocationCode" => Utilities::getValueOrIndexAt($flight_search_params['from_loc_id'], 0),
            "destinationLocationCode" => Utilities::getValueOrIndexAt($flight_search_params['to_loc_id'], -1),
            "departureDate" => Carbon::parse(Utilities::getValueOrIndexAt($flight_search_params['depature'], 0))->format("Y-m-d"),
            "returnDate" => array_key_exists("return", $flight_search_params) ? $flight_search_params['return'] : null,
            "adults" => $flight_search_params['adult'],
            "children" => $flight_search_params['child'],
            "infants" => $flight_search_params['infant'],
            "travelClass" => strtoupper($flight_search_params['v_class']),
            "nonStop" => "false", //is_array($flight_search_params['depature']) ? "false" : "true",
            "maxPrice" => null,
            "max" => 200,
            "currencyCode" => session('currency', ['name'=>'EUR','symbol' => 'EUR'])['name']
        );

        return SendMessage::callAmadeusAPI($url, $params, false);
    }
}
