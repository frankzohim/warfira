<script type="text/javascript">
    $(document).ready(function() {
        $("#show_inbound").click(function(){
            $("#t-w-i-1").show();
            $("#top-sort-list-1").show();
            $("#t-w-i-2").hide();
            $("#top-sort-list-2").hide();
        });

        $("#show_outbound").click(function(){
            $("#t-w-i-2").show();
            $("#top-sort-list-2").show();
            $("#t-w-i-1").hide();
            $("#top-sort-list-1").hide();
        });

        $(".dom_tab_div a").click(function(){
            $(".dom_tab_div a").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>

<div class="row">
    <div class="rondnone r-w-g nopad" id="t-w-i-1">
        @foreach($raw_flights['data'] as $key => $flight)
            <?php
            $mapping_params = [
                'flight_index' => $key,
                'flights' => $raw_flights,
                'flight_search_params' => $flight_search_params
            ];
            ?>

            <div class="rowresult p-0 r-r-i t-w-i-1">

                <div class="madgrid" data-key="1{{$key}}">

                    <div class="f-s-d-w col-xs-8 nopad wayeght full_same">
                        <div class="allsegments outer-segment-{{$key}}">
                            <div class="quarter_wdth nopad col-xs-3">
                                <div class="fligthsmll"><img class="airline-logo" alt="{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_code']}} icon" src="{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_logo_src']}}"></div>
                                <div class="m-b-0 text-center">
                                    <div class="a-n airlinename" data-code="{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_code']}}">{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_name']}}
                                    </div>
                                    <strong> {{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_code']}} {{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['first_airline_number']}}</strong>
                                </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                                <div class="insidesame">
                                    <span class="fdtv hide">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['departure_time_number'] }}</span>
                                    <div class="f-d-t bigtimef">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['departure_time'] }}</div>
                                    <div class="from-loc smalairport_code">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['departure_code'] }}</div>
                                    <div class="from-loc smalairport">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['departure_name'] }}</div>
                                    <span class="dep_dt hide" data-category="{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['departure_data_category']}}" data-datetime="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['departure_data_datetime'] }}"></span></div>
                            </div>
                            <div class="col-md-1 p-tb-10 hide">
                                <div class="arocl fa fa-long-arrow-right"></div>
                            </div>
                            <div class="smal_udayp nopad col-xs-3"><span class="f-d hide">{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['duration_in_minutes']}}</span>
                                <div class="insidesame">
                                    <div class="durtntime">{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['duration']}}</div>
                                    <div class="stop_image"><img src="{{asset('system/template_list/template_v3/images/'. (\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['stops'] > 4 ? 'more_stop' : 'stop_' . \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['stops']) . '.png')}}" alt="stop_0"></div>
                                    <div class="stop-value">Stop:{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['stops'] }}</div>
                                    <div class="city_code1">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['stop_air_1'] }} </div>
                                    <div class="cabinclass hide">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['cabin'] }}</div>
                                </div>
                            </div>
                            <div class="col-xs-3 nopad quarter_wdth">
                                <div class="insidesame"><span class="fatv hide">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['arrival_time_number'] }}</span>
                                    <div class="f-a-t bigtimef">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['arrival_time'] }}</div>
                                    <div class="to-loc smalairport">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['arrival_name'] }}</div>
                                    <div class="smalairport_code">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['arrival_code'] }}</div>
                                    <span class="arr_dt hide" data-category="{{\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['arrival_data_category']}}" data-datetime="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['arrival_data_datetime'] }}"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 nopad wayfour full_same"><span class="hide stp" data-stp="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['stops'] }}"
                                                                        data-category="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['stop_data_category'] }}"></span>
                        <div class="priceanbook">
                            <div class="col-xs-6 nopad wayprice">
                                <div class="insidesame">
                                    <div class="priceflights"><strong class="display_currency"> {{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['currency'] }} </strong><span
                                            class="f-p">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['price'] }}</span></div>
                                    <span class="hide price" data-base_price="0" data-tax_price="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['price'] }}"
                                          data-price="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['price'] }}" data-original_price="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['price'] }}" data-original_markup="" data-markup_type=""
                                          data-api_offered_fare="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['price'] }}" data-currency="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['currency'] }}"></span>
                                    <div data-val="0" class="n-r n-r-t">@lang('b2c/header.norefund')</div>
                                </div>
                            </div>
                            <div class="col-xs-6 nopad waybook">
                                <div class="form-wrapper bookbtlfrt">
                                    <form method="GET" id="form-id-{{$key}}"
                                          action="{{\Illuminate\Support\Facades\URL::to('flight/booking')}}"
                                          class="book-form-wrapper">
                                        <input type="hidden" name="flight_id" class="" value="{{$key}}">
                                        <button class="b-btn bookallbtn" type="submit">@lang('b2c/header.booknow')</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="mrinfrmtn">
                        <a class="detailsflt iti-btn" data-id="fdp_1{{$key}}">
                            <span class="fal fa-info-circle fldetail" data-toggle="tooltip" title=""
                                data-original-title="Flight Itinerary">

                            </span>@lang('b2c/header.flight details')</a>

                        <a class="detailsflt iti-btn" data-id="fdp_1{{$key}}">
                            <span class="fal fa-info-circle fldetail" data-toggle="tooltip" title="" data-original-title="Reservation Deadline">
                            Deadline : {{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['resa_dead_line'] }}
                            </span></a>
                    </div>
                </div>

                <div class="propopum" id="fdp_1{{$key}}">
                    <div class="comn_close_pop closepopup">X</div>
                    <div class="p_i_w">
                        <div class="popuphed">
                            <div class="hdngpops">{{ $flight_search_params['from'] }} <span class="fa {{ false ? 'fa-exchange' : 'fa-long-arrow-right' }}"></span> {{ $flight_search_params['to'] }} <span class="hedtowr">@lang('b2c/header.deadline') : {{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['resa_dead_line'] }}</span></div>
                        </div>
                        <div class="popconyent">
                            <div class="contfare">
                                <ul role="tablist" class="nav nav-tabs flittwifil">
                                    <li class="active" data-role="presentation"><a data-toggle="tab" data-role="tab"
                                                                                   href="#iti_det_10">@lang('b2c/header.itinerary')</a></li>
                                    {{--                                    <li data-role="presentation"><a data-toggle="tab" data-form-id="form-id-10"--}}
                                    {{--                                                                    class="iti-fare-btn" data-role="tab"--}}
                                    {{--                                                                    href="#fare_det_10">Fare Details</a></li>--}}
                                </ul>
                                <div class="tab-content">
                                    {{--                                    <div id="fare_det_10" class="tab-pane i-i-f-s-t">--}}
                                    {{--                                        <div class="text-center loader-image">@lang('b2c/header.please wait')</div>--}}
                                    {{--                                        <div class="i-s-s-c tabmarg"></div>--}}
                                    {{--                                    </div>--}}
                                    <div id="iti_det_10" class="tab-pane active i-i-s-t ">
                                        <div class="tabmarg">
                                            <div class="alltwobnd">
                                                <div class="col-xs-8 nopad full_wher">

                                                    <div class="inboundiv seg-0">
                                                        <div class="hedtowr">
                                                            {{ $flight_search_params['from'] }} to {{ $flight_search_params['to'] }}
                                                            <strong>({{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['duration'] }})</strong>
                                                        </div>

                                                        @foreach(\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['segments'] as $seg_key => $segment)

                                                            <div class="flitone">
                                                                <div class="col-xs-3 nopad5">
                                                                    <div class="imagesmflt"><img alt="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_code'] }} icon"
                                                                                                 src="{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_logo_src']  }}">
                                                                    </div>
                                                                    <div class="flitsmdets">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['airline_name'] }}<strong>{{ $segment['carrier_code'] }} {{ $segment['carrier_number'] }} </strong></div>
                                                                </div>
                                                                <div class="col-xs-7 nopad5">
                                                                    <div class="col-xs-5 nopad5">
                                                                        <div class="dateone">{{ $segment['departure_time'] }}</div>
                                                                        <div class="dateone">{{ $segment['departure_date'] }}</div>
                                                                        <div class="termnl">{{ $segment['departure_name'] }}</div>
                                                                    </div>
                                                                    <div class="col-xs-2 nopad">
                                                                        <div class="arocl fa fa-long-arrow-right"></div>
                                                                    </div>
                                                                    <div class="col-xs-5 nopad5">
                                                                        <div class="dateone">{{ $segment['arrival_time'] }}</div>
                                                                        <div class="dateone">{{ $segment['arrival_date'] }}</div>
                                                                        <div class="termnl">{{ $segment['arrival_name'] }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-2 nopad5">
                                                                    <div class="ritstop">
                                                                        <div class="termnl">{{ $segment['duration'] }}</div>
                                                                        <div class="termnl1">Stop : {{ $segment['stop_id'] }}</div>
                                                                    </div>
                                                                </div>
                                                                <span style="float:left"><b></b></span>
                                                                <div class="Baggage_block">
                                                                    <div class="termnl1 flo_w"><em><i
                                                                                class="fa fa-suitcase bag_icon"></i>{{ $segment['pcs_count'] }} PC(s)</em>
                                                                    </div>
                                                                    <div class="termnl1 flo_w"><em><i
                                                                                class="air_seat timings icseats"></i>{{ $segment['seats_count'] }} @lang('b2c/header.seat')(s)</em>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            @if($seg_key < count(\App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['segments']) -1)
                                                                <div class="layoverdiv">
                                                                    <div class="centovr"><span class="fa fa-plane"></span>@lang('b2c/header.change plane') | <span class="fa fa-clock-o"></span> @lang('b2c/header.waiting') :
                                                                        {{ $segment['stop_waiting_duration'] }}
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            @endif

                                                        @endforeach

                                                    </div>
                                                </div>

                                                <div class="col-xs-4 nopad full_wher">
                                                    <div class="inboundiv sidefare"><h4 class="farehdng">@lang('b2c/header.total fare breakup')</h4>
                                                        <div class="inboundivinr">
                                                            <div class="rowfare">
                                                                <div class="col-xs-8 nopad"><span class="infolbl">@lang('b2c/header.base fare')</span>
                                                                </div>
                                                                <div class="col-xs-4 nopad"><span class="pricelbl"><span
                                                                            class="display_currency">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['currency'] }}</span> <span
                                                                            class="base_price"> {{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['base_price'] }}</span></span></div>
                                                            </div>
                                                            <div class="rowfare">
                                                                <div class="col-xs-8 nopad"><span class="infolbl">@lang('b2c/header.tax and fees')</span>
                                                                </div>
                                                                <div class="col-xs-4 nopad"><span class="pricelbl"><span
                                                                            class="display_currency">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['currency'] }}</span> <span
                                                                            class="tax_price"> {{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['tax_and_fees'] }}</span></span></div>
                                                            </div>
                                                            <div class="rowfare grandtl">
                                                                <div class="col-xs-8 nopad"><span class="infolbl">Grand Total</span>
                                                                </div>
                                                                <div class="col-xs-4 nopad"><span class="pricelbl"><span
                                                                            class="display_currency">{{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['currency'] }}</span> <span
                                                                            class="grand_total"> {{ \App\Http\Services\Mapping\FlightMapping::searchResult($mapping_params)['price'] }}</span></span></div>
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
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="{{asset('system/template_list/template_v3/javascript/provablib.js')}}" defer=""></script>
<script src="{{asset('system/template_list/template_v1/javascript/page_resource/booking_script.js')}}" defer=""></script>
<script src="{{asset('system/template_list/template_v3/javascript/page_resource/flight_booking.js')}}" defer=""></script>
<script src="{{asset('system/template_list/template_v3/javascript/page_resource/flight_extra_services.js')}}" defer=""></script>

<link href="{{asset('system/template_list/template_v3/css/flight_extra_services.css')}}" rel="stylesheet">
<link href="{{asset('system/template_list/template_v1/css/shared.css')}}" rel="stylesheet">

<link href="{{asset('system/template_list/template_v3/css/flight_extra_services.css')}}" rel="stylesheet">

<script type="text/javascript">

    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });
    $(".cont_plus").click(function () {
        $(".cont_show").show(500).css('display', 'inline-block');
        $(".cont_minus").show(500);
        $(".cont_plus").hide(500);
    });
    $(".cont_minus").click(function () {
        $(".cont_show").hide(500);
        $('.cont_plus').show();
        $(".cont_minus").hide(500);
    });
    $('.insurance').hide();
    //  $(".passport_expiry_year").click(function () {
    //  	var travel_year = $('#travel_year').val();
    //  	var select_year = $(this).val()
    //  	if(select_year > travel_year){
    //  		var day_options ='';
    //  		for(i = 1; i<=31; i++){
    //  			day_options += '<option value='+i+'>'+i+'</option>';
    //  		}

    //  		var month_names = ["Jan" ,"Feb", "Mar", "Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"];
    //  		var month_options ='';
    //  		for(i = 0; i<month_names.length; i++){
    //  			month_options += '<option value='+i+'>'+month_names[i]+'</option>';
    //  		}
    //  		$('.passport_expiry_day').html(day_options);
    //  		$('.passport_expiry_month').html(month_options);
    //  	}
    //  	else{
    //  		alert('same');
    //  	}

    // });
</script>
<script type="text/javascript">
    function blockSpecialChar(e){
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
    }
</script>
