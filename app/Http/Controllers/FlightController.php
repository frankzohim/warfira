<?php

namespace App\Http\Controllers;

use App\Http\Services\FlightServices;
use App\Models\FlightAirport;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_airport_list(Request $request)
    {
        $term = $request->all()['term'];
        $serve = FlightServices::get_airport_list($term);
        return response()->json($serve);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_flight_list(Request $request)
    {
        $flight_search_params = $request->all();
        $response = FlightServices::get_flight_list($flight_search_params);

        $response['status'] = array_key_exists("data", $response);
        $response['msg'] = '';

        if ($response['status'] && count($response["data"]) > 0) {
            try {
                $response['data'] = view('flight.tbo_col2x_search_result')->with([
                    'raw_flights' => $response,
                    'flight_search_params' => $flight_search_params,
                ])->render();
            }catch (\Exception $exception){
                return response()->json(['error' => $exception->getMessage()]);
            }
        }


        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        return response()->json($response);
    }
}
