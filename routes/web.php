<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AppMiddlewares\Authentificated;
use App\Http\Middleware\AppMiddlewares\DefaultWebMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('ip_address', function (Request $request){
    $request->session()->flush();

    $ip = $request->ip(); // Dynamic IP address
    $currentUserInfo = Location::get($ip);
    return view('all_test.ip_address', compact('currentUserInfo'));
});

Route::middleware(DefaultWebMiddleware::class)->group( function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/ajax/get_airport_list', [FlightController::class, 'get_airport_list']);

    Route::get('/pre_flight_search', function (Request $request) {
        $request_params = $request->all();
        if(!empty($request_params)){ session()->put('flight_search_params', $request_params); }
        if(!session()->has('flight_search_params')) return redirect()->to('/');
        return view('flight.search_result_page');
    });

    Route::get('/ajax/get_flight_list', [FlightController::class, 'get_flight_list']);

    Route::get('/flight/booking', function (Request $request) {
        if(auth()->user()){
            return view('flight.booking_page');
        }else{
            return view('flight.tbo_booking_page');
        }
    });

    Route::get('/set_preferred_currency/{currency_name}/{currency_symbol}', function (Request $request, $currency_name, $currency_symbol){
        if($request->ajax()){
            session(['currency' => ['name' => $currency_name, 'symbol' => $currency_symbol]]);
            return array('status' => true);
        }else return redirect()->to('/');
    });

    Route::get('/set_preferred_language/{language}', function (Request $request,$language){
        if($request->ajax()){
            session(['language' => $language]);
            return array('status' => true);
        }else return redirect()->to('/');
    });

    Route::post('/auth/register_on_light_box', function (Request $request){
        if($request->ajax()){
            return (new AuthController())->signup($request);
        }else return redirect()->to('/');
    });

    Route::post('/auth/login', function (Request $request){
        if($request->ajax()){
            return (new AuthController())->signin($request);
        }else return redirect()->to('/');
    });

    Route::post('/auth/forgot_password', function (Request $request){
        if($request->ajax()){
            return (new AuthController())->recover_password($request);
        }else return redirect()->to('/');
    });


    Route::get('/terms-conditions', function (Request $request){
        return view('welcome'); // later make the route return the view of terms and conditions of use
    });



    Route::middleware(Authentificated::class)->group( function () {

        Route::get('/auth/logout', function (Request $request){
            (new AuthController())->logout($request);
            return redirect()->to('/');
        });

        Route::get('/auth/change_password', function (Request $request){
            return view('user.change_password');
        });

        Route::post('/auth/change_password', function (Request $request){
            if($request->ajax()){
                return (new AuthController())->change_password($request);
            }else return redirect()->to('/');
        });

        Route::get('/user/profile', function (Request $request){
            return view('user.profile', $request->all())->with(['travellers' => (new UserController())->travellers($request)]);
        });

        Route::post('/user/profile', function (Request $request){
            $res = (new UserController())->edit_profile($request);
            return redirect()->to('/user/profile?active=profile')->with(['result' => $res]);
        });

        Route::post('/user/add_traveller', function (Request $request){
            $res = (new UserController())->add_traveller($request);
            return redirect()->to('/user/profile?active=travellerinfo')->with(['result' => $res]);
        });

        Route::post('/user/update_traveller_details', function (Request $request){
            $res = (new UserController())->update_traveller($request);
            return redirect()->to('/user/profile?active=travellerinfo')->with(['result' => $res]);
        });
    });
});

