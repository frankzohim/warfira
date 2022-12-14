@extends('layout')
@section('content')

    <?php
    // getting last search params from session if exists
    $flight_search_params = session()->get('flight_search_params');
    ?>
    <script src="{{asset('system/template_list/template_v3/javascript/page_resource/flight_search.js')}}" defer="defer"
            charset="UTF-8"></script>

    <script>

        var search_session_alert_expiry = "<?php echo 10; ?>";
        var search_session_expiry = "<?php echo 10; ?>";
        var search_hash = '';
        var session_time_out_function_call = 0;

        var load_flights = function(){
            $.ajax({
                type: 'GET',
                url: app_base_url+ '/ajax/get_flight_list',
                async: true,
                cache: true,
                dataType: 'json',
                data: <?php echo json_encode($flight_search_params)?>,
                success: function(res) {
                    // console.log(res);

                    var dui;
                    var r = res;
                    dui = setInterval(function(){

                        if (typeof(process_result_update) != "undefined" && $.isFunction(process_result_update) == true) {

                            clearInterval(dui);

                            process_result_update(r);

                            post_load_audio();
                            // search_hash = r.session_expiry_details.search_hash;

                            //check_session_time_out(search_hash, r.session_expiry_details.session_start_time); // check session expired or not
                        }
                    }, 1);
                    $('#onwFltContainer').hide();
                }
            });
        }
        $(document).ready(function() {
            pre_load_audio();
        });
        load_flights();

        /*
            append hidden element search_hash for booking form when submiting
        */
        $('body').on('submit', '.book-form-wrapper, #multi-flight-form', function(){
            $('<input />').attr('type', 'hidden')
                .attr('name', "search_hash")
                .attr('value', search_hash)
                .appendTo(this);
            return true;
        });

    </script>

    <span class="hide">
        <input type="hidden" id="pri_preferred_currency" value='<?="EUR"?>'>
        <input type="hidden" id="pri_trip_type" value=''>
        <input type="hidden" id="pri_active_source" value=''>
        <input type="hidden" id="pri_search_id" value=''>
        <input type="hidden" id="pri_airline_lg_path" value='<?=asset('images/airline_logo/')?>'>
        <input type="hidden" id="pri_search_params" value='<?=json_encode($flight_search_params)?>'>
        <input type="hidden" name="" id="pri_template_image_path" value="<?=asset('images')?>">
        <input type="hidden" id="pri_def_curr" value='{{session('currency', ['name'=>'EUR','symbol' => '???'])['symbol']}}'>
    </span>

    <?php

    $data['trip_details'] = $flight_search_params;
    $data['airline_list'] = [];//Balu A
    $template_images = asset('images');
    $mini_loading_image = '<div class="text-center loader-image"><img src="'.$template_images.'loader_v3.gif" alt="Loading........"/></div>';
    $loading_image = '<div class="text-center loader-image"><img src="'.$template_images.'loader_v1.gif" alt="Loading........"/></div>';
    $flight_o_direction_icon = '<img src="'.$template_images.'icons/flight-search-result-up-icon.png" alt="Flight Search Result Up Icon">';
    ?>

    @include('flight.search_panel_summary', $flight_search_params)

    <!-- Page Scripts -->

    <section class="search-result onlyfrflty">

        <div class="container"  id="page-parent">
            @include('flight.flight_result_preloader', ['trip_details' => $flight_search_params])

            <div class="resultalls">
                <div class="coleft">
                    <div class="flteboxwrp">
                        <div class="filtersho">
                            <div class="avlhtls"><strong id="total_records"> </strong> <span id="flights_text"><?="Flights";?></span> <?="Found";?>
                            </div>
                            <span class="close_fil_box"><i class="fas fa-times"></i></span>
                        </div>
                        <!-- Refine Search Filters Start -->
                        <div class="fltrboxin">
                            <div class="celsrch">
                                <div class="row">
                                    <a class="pull-right" id="reset_filters"><?="Reset All";?></a>
                                </div>
                                <div class="rangebox">
                                    <button data-target="#collapse501" data-toggle="collapse" class="collapsebtn" type="button">
                                        <?='Price';?>
                                    </button>
                                    <div id="collapse501" class="in">
                                        <div class="price_slider1">
                                            <div id="core_min_max_slider_values" class="hide">
                                                <input type="hiden" id="core_minimum_range_value" value="">
                                                <input type="hiden" id="core_maximum_range_value" value="">
                                            </div>
                                            <p id="amount" class="level"></p>
                                            <div id="slider-range" class="" aria-disabled="false"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="septor"></div>
                                <div class="rangebox">
                                    <button data-target="#collapse502" data-toggle="collapse" class="collapsebtn" type="button">
                                        <?='No.of Stop';?>
                                    </button>
                                    <div id="collapse502" class="collapse in">
                                        <div class="boxins marret" id="stopCountWrapper">

                                            <a class="stopone toglefil stop-wrapper">
                                                <input type="checkbox" class="hidecheck stopcount" value="1"></input>
                                                <div class="starin">
                                                    <div class="stopbig"> 0 <span class="stopsml"><?="Stop";?></span></div>
                                                    <span class="htlcount min-price">-</span>
                                                </div>
                                            </a>

                                            <a class="stopone toglefil stop-wrapper">
                                                <input type="checkbox" class="hidecheck stopcount" value="2"></input>
                                                <div class="starin">
                                                    <div class="stopbig"> 1 <span class="stopsml"><?="Stop";?></span></div>
                                                    <span class="htlcount min-price">-</span>
                                                </div>
                                            </a>

                                            <a class="stopone toglefil stop-wrapper">
                                                <input type="checkbox" class="stopcount hidecheck" value="3"></input>
                                                <div class="starin">
                                                    <div class="stopbig"> 1+ <span class="stopsml"><?="Stop";?></span></div>
                                                    <span class="htlcount min-price">-</span>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="septor"></div>
                                <div class="rangebox">
                                    <button data-target="#collapse503" data-toggle="collapse" class="collapsebtn" type="button">
                                        <?="Departure time";?>
                                    </button>
                                    <div id="collapse503" class="collapse in">
                                        <div class="boxins marret" id="departureTimeWrapper">
                                            <a class="timone toglefil time-wrapper">

                                                <div class="starin">
                                                    <div class="tmxdv">
                                                        <input type="checkbox" class="time-category hidecheck" value="1">
                                                        <label class="ckboxdv"><?="Early"."Morning";?></label>
                                                    </div>
                                                    <div class="flitsprt mng1"></div>
                                                    <span class="htlcount">12-6AM</span>
                                                </div>

                                            </a>
                                            <a class="timone toglefil time-wrapper">

                                                <div class="starin">
                                                    <div class="tmxdv">
                                                        <input type="checkbox" class="time-category hidecheck" value="2">
                                                        <label class="ckboxdv"><?="Morning";?></label>
                                                    </div>
                                                    <div class="flitsprt mng2"></div>
                                                    <span class="htlcount">6-12AM</span>
                                                </div>

                                            </a>
                                            <a class="timone toglefil time-wrapper">

                                                <div class="starin">
                                                    <div class="tmxdv">
                                                        <input type="checkbox" class="time-category hidecheck" value="3">
                                                        <label class="ckboxdv"><?="Mid-Day";?></label>
                                                    </div>
                                                    <div class="flitsprt mng3"></div>
                                                    <span class="htlcount">12-6PM</span>
                                                </div>
                                            </a>
                                            <a class="timone toglefil time-wrapper">
                                                <div class="tmxdv">
                                                    <input type="checkbox" class="hidecheck time-category" value="4">
                                                    <label class="ckboxdv"><?="Evening";?></label>
                                                </div>
                                                <div class="starin">
                                                    <div class="flitsprt mng4"></div>
                                                    <span class="htlcount">6-12PM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="septor"></div>
                                <div class="rangebox">
                                    <button data-target="#collapse504" data-toggle="collapse" class="collapsebtn" type="button">
                                        <?="Arrival Time";?>
                                    </button>
                                    <div id="collapse504" class="collapse in">
                                        <div class="boxins marret" id="arrivalTimeWrapper">
                                            <a class="timone toglefil time-wrapper">
                                                <div class="tmxdv">
                                                    <input type="checkbox" class="time-category hidecheck" value="1">
                                                    <label class="ckboxdv"><?="Early"."Morning";?></label>
                                                </div>
                                                <div class="starin">
                                                    <div class="flitsprt mng1"></div>
                                                    <span class="htlcount">12-6AM</span>
                                                </div>
                                            </a>
                                            <a class="timone toglefil time-wrapper">
                                                <div class="tmxdv">
                                                    <input type="checkbox" class="time-category hidecheck" value="2">
                                                    <label class="ckboxdv"><?="Morning";?></label>
                                                </div>
                                                <div class="starin">
                                                    <div class="flitsprt mng2"></div>
                                                    <span class="htlcount">6-12AM</span>
                                                </div>
                                            </a>
                                            <a class="timone toglefil time-wrapper">
                                                <div class="tmxdv">
                                                    <input type="checkbox" class="time-category hidecheck" value="3">
                                                    <label class="ckboxdv"><?="Mid-Day";?></label>
                                                </div>
                                                <div class="starin">
                                                    <div class="flitsprt mng3"></div>
                                                    <span class="htlcount">12-6PM</span>
                                                </div>
                                            </a>
                                            <a class="timone toglefil time-wrapper">
                                                <div class="tmxdv">
                                                    <input type="checkbox" class="time-category hidecheck" value="4">
                                                    <label class="ckboxdv"><?="Evening";?></label>
                                                </div>
                                                <div class="starin">
                                                    <div class="flitsprt mng4"></div>
                                                    <span class="htlcount">6-12PM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="septor"></div>
                                <div class="rangebox">
                                    <button data-target="#collapse505" data-toggle="collapse" class="collapsebtn" type="button">
                                        <?='Airlines';?>
                                    </button>
                                    <div id="collapse505" class="collapse in">
                                        <div class="boxins" id="allairlines">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="septor"></div> -->
                            </div>
                        </div>
                    </div>
                    <!-- Refine Search Filters End -->
                </div>

                <div class="colrit">
                    <div class="insidebosc">
                        <!-- Fare Calander -->
                        <?php if (isset($is_domestic_one_way_flight) == true) : ?>
                        <div class="calandcal" id="fare_calendar_wrapper">
                            <div class="col-xs-12 nopad">
                                <div class="farenewcal">
                                    <div class="matrx">
                                        <div id="farecal" class="owl-carousel matrixcarsl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <?php endif; // Checking if one way domestic?>
                    <!-- Fare Calander End -->
                        <!-- Airline Slider Start -->
                        <div class="airlinrmatrix" id="clone-list-container">
                            <div class="inside_shadow_airline">
                                <div class="linefstr">
                                    <div class="airlineall"><?='All';?> <?='Airline';?></div>
                                </div>
                                <div class="linescndr">
                                    <div class="matrx">
                                        <div id="arlinemtrx" class="owl-carousel matrixcarsl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Airline Slider End -->
                        <div class="clearfix"></div>
                        <!--  Current Selection  -->
                        <div class="fixincrmnt hide" id="multi-flight-summary-container">
                            <div class="insidecurent">
                                <div class="col-xs-10 nopad">
                                    <div class="col-xs-6 nopad">
                                        <div class="selctarln colorretn">
                                            <div class="col-xs-3 nopad flightimage">
                                                <div class="fligthsmll">
                                                    <img class="departure-flight-icon" src="<?=$template_images?>/airline.png" alt="" />
                                                </div>
                                                <div class="airlinename departure-flight-name">Please Select</div>
                                            </div>
                                            <div class="col-xs-9 nopad listfull">
                                                <div class="sidenamedesc">
                                                    <div class="celhtl width80">
                                                        <div class="waymensn">
                                                            <div class="flitruo">
                                                                <div class="outbound-details">
                                                                </div>
                                                                <div class="detlnavi outbound-timing-details">
                                                                    <div class="col-xs-4 padflt widfty">
                                                                        <span class="timlbl departure"></span>
                                                                    </div>
                                                                    <div class="col-xs-4 padflt nonefity">
                                                                        <div class="lyovrtime">
                                                                            <span class="flect duration"></span>
                                                                            <div class='flect stop-image'></div>
                                                                            <span class="flect stop-count"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4 padflt widfty">
                                                                        <span class="timlbl arrival text_algn_rit"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 nopad">
                                        <div class="selctarln cloroutbnd">
                                            <div class="col-xs-3 nopad flightimage">
                                                <div class="fligthsmll">
                                                    <img class="arrival-flight-icon" src="<?=$template_images?>/airline.png" alt="" />
                                                </div>
                                                <div class="airlinename arrival-flight-name"></div>
                                            </div>
                                            <div class="col-xs-9 nopad listfull">
                                                <div class="sidenamedesc">
                                                    <div class="celhtl width80">
                                                        <div class="waymensn">
                                                            <div class="flitruo">
                                                                <div class="inbound-details">
                                                                </div>
                                                                <div class="detlnavi inbound-timing-details">
                                                                    <div class="col-xs-4 padflt widfty">
                                                                        <span class="timlbl departure"></span>
                                                                    </div>
                                                                    <div class="col-xs-4 padflt nonefity">
                                                                        <div class="lyovrtime">
                                                                            <span class="flect duration"></span>
                                                                            <div class='flect stop-image1'></div>
                                                                            <span class="flect stop-count"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4 padflt widfty">
                                                                        <span class="timlbl arrival text_algn_rit"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 nopad">
                                    <div class="sidepricewrp">
                                        <div class="col-xs-12 nopad">
                                            <div class="sidepricebig">
                                                <strong class="currency"></strong> <span class="f-p"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 nopad">
                                            <div class="bookbtn">
                                                <input type="hidden" id="flight-from-price" value="0">
                                                <input type="hidden" id="flight-to-price" value="0">
                                                <form id="multi-flight-form" action="" method="POST">
                                                    <div class="hide" id="trip-way-wrapper"></div>
                                                    <button class="btn-flat booknow" type="submit" id="multi-flight-booking-btn">Book</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Current Selection  End  -->
                        <div class="clearfix"></div>
                        <div class="filter_tab fa fa-filter"></div>
                        <?php $sorting_list = '';?>
                        <?php
                        $round_way_trip_filter='';
                        if($flight_search_params['trip_type']=="circle"){
                            $round_way_trip_filter ='addtwofilter';
                        }
                        ?>
                        <div class="filterforall <?=$round_way_trip_filter?>" id="top-sort-list-wrapper">
                            <div class="topmisty" id="top-sort-list-1">
                                <div class="col-xs-12 nopad">
                                    <div class="divinsidefltr">
                                        <div class="insidemyt col-xs-12 nopad">
                                            <?php
                                            $sorting_list .= '<ul class="sortul">';
                                            $sorting_list .= '<li class="sortli hide_lines">';
                                            $sorting_list .= '<a class="sorta name-l-2-h loader asc"><i class="fal fa-plane"></i> <strong>'."Airline".'</strong></a>';
                                            $sorting_list .= '<a class="sorta name-h-2-l hide loader des"><i class="fal fa-plane"></i> <strong>'."Airline".'</strong></a>';
                                            $sorting_list .= '</li>';
                                            $sorting_list .= '<li class="sortli">';
                                            $sorting_list .= '<a class="sorta departure-l-2-h loader asc"><i class="fal fa-calendar-alt"></i> <strong>'."Depart".'</strong></a>';
                                            $sorting_list .= '<a class="sorta departure-h-2-l hide loader des"><i class="fal fa-calendar-alt"></i> <strong>'."Depart".'</strong></a>';
                                            $sorting_list .= '</li>';
                                            $sorting_list .= '<li class="sortli hide_lines">';
                                            $sorting_list .= '<a class="sorta duration-l-2-h loader asc"><i class="fal fa-clock"></i> <strong>'."Duration".'</strong></a>';
                                            $sorting_list .= '<a class="sorta duration-h-2-l hide loader des"><i class="fal fa-clock"></i> <strong>'."Duration".'</strong></a>';
                                            $sorting_list .= '</li>';
                                            $sorting_list .= '<li class="sortli">';
                                            $sorting_list .= '<a class="sorta arrival-l-2-h loader asc"><i class="fal fa-calendar-alt"></i> <strong>'."Arrive".'</strong></a>';
                                            $sorting_list .= '<a class="sorta arrival-h-2-l hide loader des"><i class="fal fa-calendar-alt"></i> <strong>'."Arrive".'</strong></a>';
                                            $sorting_list .= '</li>';
                                            $sorting_list .= '<li class="sortli">';
                                            $sorting_list .= '<a class="sorta price-l-2-h loader asc"><i class="fal fa-tag"></i> <strong>'."price".'</strong></a>';
                                            $sorting_list .= '<a class="sorta price-h-2-l hide loader des"><i class="fal fa-tag"></i> <strong>'."price".'</strong></a>';
                                            $sorting_list .= '</li>';
                                            $sorting_list .= '</ul>';
                                            echo $sorting_list;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($flight_search_params['trip_type']=="circle") { ?>
                            <div class="topmisty" id="top-sort-list-2">
                                <div class="col-xs-10 nopad divinsidefltr">
                                    <div class="insidemyt">
                                        <?php echo $sorting_list?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                        <!-- FLIGHT SEARCH RESULT START -->
                        <div class="srch_ldr hide">
                            <img src="<?=asset('images/image_loader.gif')?>" />
                        </div>
                        <div class="clearfix"></div>
                        <div  class="allresult" id="flight_search_result">
                            <div class="fl width100 fltRndTripWrap" id="onwFltContainer">
                                <!-- <div class="fl padTB5 width100">
                                </div> -->
                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>
                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>

                                <div class="fl width100">
                                    <div class="card fl width100 marginTB10">

                                        <div class="card-block fl width100 padT20 marginT10 padB10 padLR20">
                                            <div class="col-md-2 col-sm-2 col-xs-2 padT10">
                                                <span class="db padB10 marginR20 marginB10 col-md-8 animated-background"></span>
                                                <span class="db padT10 animated-background col-md-8 marginR20"></span>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 padT10 padLR0 brdRight">
                                                <div class="fl width100">
                                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>

                                                    <div class="col-md-3 col-sm-3 col-xs-3 padLR0">
                                                        <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                        <span class="animated-background db padB10 marginR20"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-xs-3 col-sm-3 fltPrice">
                                                <div class="col-md-5 col-sm-8 col-xs-8 fr padT10">
                                                    <span class="animated-background db padT10 marginB5 marginR20"></span>
                                                    <span class="animated-background db padB10 marginR20"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fl width100 padTB10 animated-background"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div  class="" id="empty_flight_search_result" style="display:none">
                            <div class="noresultfnd">
                                <div class="imagenofnd"><img src="<?=$template_images?>/empty.jpg" alt="Empty" /></div>
                                <div class="lablfnd">@lang('b2c/header.noresult')</div>
                            </div>
                        </div>
                        <!-- FLIGHT SEARCH RESULT END -->
                    </div>
                </div>

            </div>


        </div>

        <div id="empty-search-result" class="jumbotron container" style="display:none">
            <h1><i class="fal fa-plane"></i> Oops!</h1>
            <p>@lang('b2c/header.noflight')</p>
            <p>
            @lang('b2c/header.noflight text')
            </p>
        </div>


        <div class="hide">
            <audio id="landing-load">
                <source src="{{asset('system/template_list/template_v1/audio/ogg/landing-load.ogg')}}" type="audio/ogg">
                <source src="{{asset('system/template_list/template_v1/audio/mp3/landing-load.mp3')}}" type="audio/mpeg">
            </audio>
            <audio id="pre-load">
                <source src="{{asset('system/template_list/template_v1/audio/ogg/flight-pre-load.ogg')}}" type="audio/ogg">
                <source src="{{asset('system/template_list/template_v1/audio/mp3/flight-pre-load.mp3')}}" type="audio/mpeg">
            </audio>
            <audio id="post-load">
                <source src="{{asset('system/template_list/template_v1/audio/ogg/flight-post-load.ogg')}}" type="audio/ogg">
                <source src="{{asset('system/template_list/template_v1/audio/mp3/flight-post-load.mp3')}}" type="audio/mpeg">
            </audio>
            <audio id="empty-load">
                <source src="{{asset('system/template_list/template_v1/audio/ogg/all-empty-result.ogg')}}" type="audio/ogg">
                <source src="{{asset('system/template_list/template_v1/audio/mp3/all-empty-result.mp3')}}" type="audio/mpeg">
            </audio>
        </div>

    </section>

    <script>
        $(document).ready(function() {

            $(".close_fil_box").click(function(){
                $(".coleft").hide();
                $(".resultalls").removeClass("open");
            });

            //************************** **********/
            //airline price sort
            <?php
            $i=1;
            for ($i=1; $i<=2; $i++) ://Multiple Filters Need to be loaded - Balu A
            ?>
            $("#top-sort-list-<?=$i?> .price-l-2-h").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .price-h-2-l').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.f-p:first',
                    item: '.r-r-i',
                    order: 'asc',
                    is_num: true
                });
            });
            $("#top-sort-list-<?=$i?> .price-h-2-l").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .price-l-2-h').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.f-p:first',
                    item: '.r-r-i',
                    order: 'desc',
                    is_num: true
                });
            });
            //airline name sort
            $("#top-sort-list-<?=$i?> .name-l-2-h").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .name-h-2-l').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.a-n:first',
                    item: '.r-r-i',
                    order: 'asc',
                    is_num: false
                });
            });
            $("#top-sort-list-<?=$i?> .name-h-2-l").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .name-l-2-h').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.a-n:first',
                    item: '.r-r-i',
                    order: 'desc',
                    is_num: false
                });
            });
            //duration sort
            $("#top-sort-list-<?=$i?> .duration-l-2-h").click(function() {

                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .duration-h-2-l').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.f-d:first',
                    item: '.r-r-i',
                    order: 'asc',
                    is_num: true
                });
            });
            $("#top-sort-list-<?=$i?> .duration-h-2-l").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .duration-l-2-h').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.f-d:first',
                    item: '.r-r-i',
                    order: 'desc',
                    is_num: true
                });
            });
            //departure name sort
            $("#top-sort-list-<?=$i?> .departure-l-2-h").click(function() {

                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .departure-h-2-l').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.fdtv:first',
                    item: '.r-r-i',
                    order: 'asc',
                    is_num: true
                });
            });
            $("#top-sort-list-<?=$i?> .departure-h-2-l").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .departure-l-2-h').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.fdtv:first',
                    item: '.r-r-i',
                    order: 'desc',
                    is_num: true
                });
            });
            //arrival sort
            $("#top-sort-list-<?=$i?> .arrival-l-2-h").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .arrival-h-2-l').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.fatv:first',
                    item: '.r-r-i',
                    order: 'asc',
                    is_num: true
                });
            });
            $("#top-sort-list-<?=$i?> .arrival-h-2-l").click(function() {
                $(this).addClass('hide');
                $('#top-sort-list-<?=$i?> .arrival-l-2-h').removeClass('hide');
                $("#flight_search_result #t-w-i-<?=$i?>").jSort({
                    sort_by: '.fatv:first',
                    item: '.r-r-i',
                    order: 'desc',
                    is_num: true
                });
            });
            <?php
            endfor;
            //End Multiple Filter Looping - Balu A
            ?>

        });
    </script>


@endsection
