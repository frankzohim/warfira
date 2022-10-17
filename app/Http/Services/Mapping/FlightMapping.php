<?php


namespace App\Http\Services\Mapping;


use App\Http\Middleware\AppMiddlewares\DefaultWebMiddleware;
use App\Http\Services\Utilities;
use App\Models\FlightAirport;

class FlightMapping
{
    public static function searchResult($mapping_params){

        $flights_list = $mapping_params['flights'];
        $flight = $flights_list['data'][$mapping_params['flight_index']];
        $flight_search_params = $mapping_params['flight_search_params'];

        $mapping_result = array();

        $mapping_result['airline_code'] = $flight['validatingAirlineCodes'][0];
        $mapping_result['airline_logo_src']= file_exists(public_path('images/airline_logo/' . $mapping_result['airline_code'] . '.gif')) ? asset('images/airline_logo/' . $mapping_result['airline_code'] . '.gif') : asset('images/favicon/favicon.ico');
        $mapping_result['first_airline_number'] = $flight['itineraries'][0]['segments'][0]['number'];
        $mapping_result['airline_name'] = $flights_list['dictionaries']['carriers'][''.$mapping_result['airline_code']];

        $mapping_result['departure_date_time'] = $flight['itineraries'][0]['segments'][0]['departure']['at'];
        $mapping_result['departure_time'] = date('H:i', strtotime($mapping_result['departure_date_time']));
        $mapping_result['departure_time_number'] = date('Hi', strtotime($mapping_result['departure_date_time']));
        $mapping_result['departure_code'] = $flight['itineraries'][0]['segments'][0]['departure']['iataCode'];
        $mapping_result['departure_name'] = $flight_search_params['from'];
        $mapping_result['departure_data_category'] = Utilities::time_filter_category($mapping_result['departure_date_time']);
        $mapping_result['departure_data_datetime'] = (number_format((strtotime($mapping_result['departure_date_time']) * 1000), 0, null, ''));

        $mapping_result['arrival_date_time'] = Utilities::getValueOrIndexAt($flight['itineraries'][0]['segments'], -1)['arrival']['at'];
        $mapping_result['arrival_time'] = date('H:i', strtotime($mapping_result['arrival_date_time']));
        $mapping_result['arrival_time_number'] = date('Hi', strtotime($mapping_result['arrival_date_time']));
        $mapping_result['arrival_code'] = Utilities::getValueOrIndexAt($flight['itineraries'][0]['segments'], -1)['arrival']['iataCode'];
        $mapping_result['arrival_name'] = $flight_search_params['to'];
        $mapping_result['arrival_data_category'] = Utilities::time_filter_category($mapping_result['arrival_date_time']);
        $mapping_result['arrival_data_datetime'] = (number_format((strtotime($mapping_result['arrival_date_time']) * 1000), 0, null, ''));

        $mapping_result['duration_in_minutes'] = Utilities::getDuration($flight['itineraries'][0]['segments'][0]['departure']['at'], Utilities::getValueOrIndexAt($flight['itineraries'][0]['segments'], -1)['arrival']['at'], true);
        $mapping_result['duration'] = Utilities::getDuration($flight['itineraries'][0]['segments'][0]['departure']['at'], Utilities::getValueOrIndexAt($flight['itineraries'][0]['segments'], -1)['arrival']['at']);

        $mapping_result['cabin'] = strtolower($flight['travelerPricings'][0]['fareDetailsBySegment'][0]['cabin']);
        $mapping_result['stops'] = count($flight['itineraries'][0]['segments']) -1;
        $mapping_result['stop_data_category'] = Utilities::stop_filter_category($mapping_result['stops']);
        $mapping_result['stop_air_1'] = '';
        if($mapping_result['stops'] > 0){
            $mapping_result['stop_air_1'] .= $flight['itineraries'][0]['segments'][1]['departure']['iataCode'];
        }

        if(in_array($flight['price']['currency'], DefaultWebMiddleware::getSupportedCurrencyNames())){
            foreach (DefaultWebMiddleware::getSupportedCurrencyNames() as $key => $name){
                if($name == $flight['price']['currency']){
                    $currency = DefaultWebMiddleware::getSupportedCurrencySymbols()[$key];
                    break;
                }
            }
        }else{
            $currency = $flight['price']['currency'];
        }

        $mapping_result['currency'] = $currency; //session('currency', ['name'=>'EUR','symbol' => 'EUR'])['name'];
        $mapping_result['base_price'] = Utilities::roundoff_number($flight['price']['base']);
        $mapping_result['price'] = Utilities::roundoff_number($flight['price']['grandTotal']);
        $mapping_result['tax_and_fees'] = $mapping_result['price'] - $mapping_result['base_price'];
        $mapping_result['resa_dead_line'] = date('l, d M Y', strtotime($flight['lastTicketingDate']));


        $mapping_result['fees'] = 0;
        foreach ($flight['price']['fees'] as $fee){ $mapping_result['fees'] += floatval($fee['amount']); }
        if(array_key_exists('additionalServices', $flight['price'])){
            foreach ($flight['price']['additionalServices'] as $fee){ $mapping_result['fees'] += floatval($fee['amount']); }
        }
        $mapping_result['fees'] = strval($mapping_result['fees']);


        $mapping_result['segments'] = array();
        $escales_names = array();
        foreach ($flight['itineraries'][0]['segments'] as $seg_key => $segment){

            $sg['carrier_number'] = $segment['number'];
            $sg['carrier_code'] = array_key_exists('operating', $segment) ? $segment['operating']['carrierCode']: $segment['carrierCode'];
            $sg['aircraft_code'] = array_key_exists('aircraft', $segment) ? $segment['aircraft']['code'] : '';

            $sg['departure_date'] = date('d-m-Y', strtotime($segment['departure']['at']));
            $sg['departure_time'] = date('H:i', strtotime($segment['departure']['at']));
            $sg['departure_name'] = FlightAirport::where('airport_code', $segment['departure']['iataCode'])->first()->airport_city . ' (' . $segment['departure']['iataCode'] . ')';

            $sg['arrival_date'] = date('d-m-Y', strtotime($segment['arrival']['at']));
            $sg['arrival_time'] = date('H:i', strtotime($segment['arrival']['at']));
            $sg['arrival_name'] = FlightAirport::where('airport_code', $segment['arrival']['iataCode'])->first()->airport_city . ' (' . $segment['arrival']['iataCode'] . ')';

            $sg['duration'] = Utilities::getDuration($segment['departure']['at'], $segment['arrival']['at']);
            $sg['stop_id'] = $seg_key;
            $sg['pcs_count'] = array_key_exists('quantity', $flight['travelerPricings'][0]['fareDetailsBySegment'][$seg_key]['includedCheckedBags']) ? $flight['travelerPricings'][0]['fareDetailsBySegment'][$seg_key]['includedCheckedBags']['quantity'] : 0;
            $sg['seats_count'] = $flight['numberOfBookableSeats'];

            if($seg_key < count($flight['itineraries'][0]['segments']) - 1){
                $sg['stop_waiting_duration'] = Utilities::getDuration($segment['arrival']['at'], $flight['itineraries'][0]['segments'][$seg_key+1]['departure']['at']);
            }

            array_push($mapping_result['segments'], $sg);
        }

        return $mapping_result;
    }

}
