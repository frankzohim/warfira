@extends('layout')
@section('content')

    <div class="clearfix"></div>            <!-- UTILITY NAV For Application MESSAGES START -->
    <div class="container-fluid utility-nav clearfix">                <!-- ROW -->  <!-- /ROW -->            </div>
    <!-- UTILITY NAV For Application MESSAGES END -->            <!-- Body Printed Here -->
    <div class="fromtopmargin">


        <div class="searcharea">
            <div class="srchinarea">
                <div class="container">
                    <div class="captngrp">
                        <div id="big1" class="bigcaption">Bienvenue sur Warfir@</div>
                        <div id="desc" class="smalcaptn">L'expérience unique de voyage et d’hébergement</div>
                    </div>
                </div>
                <div class="allformst"><!-- Tab panes -->
                    <div class="container inspad">
                        <div class="secndblak">
                            <div class="tab-content custmtab">
                                <div class="tab-pane active" id="flight">
                                    @include('flight.flight_search')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab_border"><!-- Nav tabs -->
                        <ul class="nav nav-tabs tabstab hide">
                            <li class="active"><a href="#flight" role="tab" data-toggle="tab"><span
                                        class="sprte iconcmn"><i class="fal fa-plane"></i></span><label>Flights</label></a>
                            </li>
                            <li class=""><a href="#hotel" role="tab" data-toggle="tab"><span class="sprte iconcmn"><i
                                            class="fal fa-building"></i></span><label>Hotels</label></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dot-overlay"></div>
        </div>


        <div class="slides_img">
            <div class="container">
                <div id="TopAirLine_new" class="topAirSlider owl-carousel owl-theme"
                     style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper"
                             style="width: 1440px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                            <div class="owl-item" style="width: 720px;">
                                <div class="item">
                                    <div class="imgg">
                                        <div class="sld_img"><img
                                                src="https://warfira.com//extras/system/template_list/template_v1/images/TMX7754051595248256crs.jpeg">
                                        </div>
                                        <div class="sld_txt"><h4>-</h4>
                                            <p></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <div class="flight_routes">
            <div class="container">
                <div class="pagehdwrap"><h2 class="pagehding">@lang('b2c/header.topflight')</h2><span><i
                            class="fal fa-star"></i></span>
                    <p>@lang('b2c/header.topflight text')</p></div>
                <div class="routess">
                    <div class="col-md-4 col-sm-12 col-xs-12 padds"><a
                            href="https://warfira.com/index.php/general/pre_flight_search?trip_type=oneway&amp;from=Bangalore+%28BLR%29&amp;from_loc_id=801&amp;to=Chennai+%28MAA%29&amp;to_loc_id=4445&amp;depature=07-08-2022&amp;adult=1&amp;child=0&amp;infant=0&amp;v_class=Economy&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;search_flight=Search&amp;home_search=1">
                            <div class="mstoutimg"><img
                                    src="{{asset('custom/TMX7754051595248256/images/top-dest-fight-5.jpg')}}?&gt;"></div>
                            <div class="mstout_txt"><p>Bangalore <i class="fal fa-plane"></i> Chennai</p></div>
                        </a></div>
                    <div class="col-md-4 col-sm-12 col-xs-12 padds"><a
                            href="https://warfira.com/index.php/general/pre_flight_search?trip_type=oneway&amp;from=Abidjan+%28ABJ%29&amp;from_loc_id=8979&amp;to=Paris+%28CDG%29&amp;to_loc_id=1191&amp;depature=07-08-2022&amp;adult=1&amp;child=0&amp;infant=0&amp;v_class=Economy&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;search_flight=Search&amp;home_search=1">
                            <div class="mstoutimg"><img
                                    src="{{asset('custom/TMX7754051595248256/images/top-dest-fight-8.jpg')}}?&gt;"></div>
                            <div class="mstout_txt"><p>Abidjan <i class="fal fa-plane"></i> Paris</p></div>
                        </a></div>
                    <div class="col-md-4 col-sm-12 col-xs-12 padds"><a
                            href="https://warfira.com/index.php/general/pre_flight_search?trip_type=oneway&amp;from=Brazzaville+%28BZV%29&amp;from_loc_id=1108&amp;to=Paris+%28CDG%29&amp;to_loc_id=1191&amp;depature=07-08-2022&amp;adult=1&amp;child=0&amp;infant=0&amp;v_class=Economy&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;carrier%5B%5D=&amp;search_flight=Search&amp;home_search=1">
                            <div class="mstoutimg"><img
                                    src="{{asset('custom/TMX7754051595248256/images/top-dest-fight-9.jpg')}}?&gt;"></div>
                            <div class="mstout_txt"><p>Brazzaville <i class="fal fa-plane"></i> Paris</p></div>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="htldeals">
            <div class="container">
                <div class="pagehdwrap"><h2 class="pagehding">@lang('b2c/header.tophotel')</h2><span><i class="fal fa-star"></i></span>
                    <p>@lang('b2c/header.tophotel text')</p></div>
                <div class="tophtls">
                    <div class="grid">
                        <div id="owl-demo2" class="owl-carousel owlindex2">
                            <?php
                            $top_destination_hotel = [
                                [
                                    'origin' => 10417,
                                    'image' => asset('custom/TMX7754051595248256/images/top-dest-hotel-10417.jpg'),
                                    'city_name' => 'Douala',
                                    'country_name' => 'Cameroon'
                                ],

                                [
                                    'origin' => 42205,
                                    'image' => asset('custom/TMX7754051595248256/images/top-dest-hotel-422051.jpg'),
                                    'city_name' => 'Bengaluru',
                                    'country_name' => 'India'
                                ],

                                [
                                    'origin' => 45206,
                                    'image' => asset('custom/TMX7754051595248256/images/top-dest-hotel-45206.jpg'),
                                    'city_name' => 'Abidjan',
                                    'country_name' => 'Ivory Coast'
                                ],

                                [
                                    'origin' => 46323,
                                    'image' => asset('custom/TMX7754051595248256/images/top-dest-hotel-46323.jpg'),
                                    'city_name' => 'Brazzaville',
                                    'country_name' => 'Congo'
                                ]

                            ];
                            foreach ( $top_destination_hotel as $tk => $tv ) :
                            // debug($top_destination_hotel);exit;
                            ?>
                            <?php if(($tk-0)%10 == 0){?>
                            <div class="item">
                                <div class="col-sm-12 col-xs-12 pdfve htd-wrap">
                                    <div class="effect-marley figure">
                                        <img
                                            class="lazy lazy_loader"
                                            src="<?php echo $tv['image']; ?>"
                                            data-src="<?php echo $tv['image']; ?>"
                                            alt="<?=$tv['city_name']?>" />
                                        <div class="figcaption">
                                            <div class="width_70">
                                                <h3 class="clasdstntion"><?=$tv['city_name']?></h3>
                                            <!-- <p>(<?=rand(99, 500)?> Hotels)</p> -->
                                                <input type="hidden" class="top_des_id" value="<?php echo $tv['origin']?>">
                                                <input type="hidden"
                                                       class="top-des-val hand-cursor"
                                                       value="<?=$tv['city_name'] . ' ('.$tv['country_name'].')'?>">
                                                <a href="#">View more</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <?php } elseif (($tk-6)%10 == 0){ ?>

                            <div class="item">
                                <div class="col-sm-12 col-xs-12 pdfve htd-wrap">
                                    <div class="effect-marley figure">
                                        <img
                                            class="lazy lazy_loader"
                                            src="<?php echo $tv['image']; ?>"
                                            data-src="<?php echo $tv['image']; ?>"
                                            alt="<?=$tv['city_name']?>" />
                                        <div class="figcaption">
                                            <div class="width_70">
                                                <h3 class="clasdstntion"><?=$tv['city_name']?></h3>
                                            <!-- <p>(<?=rand(99, 500)?> Hotels)</p> -->
                                                <input type="hidden" class="top_des_id" value="<?php echo $tv['origin']?>">
                                                <input type="hidden"
                                                       class="top-des-val hand-cursor"
                                                       value="<?=$tv['city_name'] . ' ('.$tv['country_name'].')'?>">
                                                <a href="#">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } else {?>
                            <div class="item">
                                <div class="col-sm-12 col-xs-12 pdfve htd-wrap">
                                    <div class="effect-marley figure">
                                        <img
                                            class="lazy lazy_loader"
                                            src="<?php echo $tv['image']; ?>"
                                            data-src="<?php echo $tv['image']; ?>"
                                            alt="<?=$tv['city_name']?>" />
                                        <div class="figcaption">
                                            <div class="width_70">
                                                <h3 class="clasdstntion"><?=$tv['city_name']?></h3>
                                            <!-- <p>(<?=rand(99, 500)?> Hotels)</p> -->
                                                <input type="hidden" class="top_des_id" value="<?php echo $tv['origin']?>">
                                                <input type="hidden" class="top-des-val hand-cursor"
                                                       value="<?=$tv['city_name'] . ' ('.$tv['country_name'].')'?>">
                                                <a href="#">View more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div><!-- <div class="clearfix"></div> --><!-- <div class="clearfix"></div> -->
        <div class="clearfix"></div><!--     <div class="clearfix"></div> -->
        <div class="customer_section hide">
            <div class="customer_pattern pagehdwrap"><h2 class="pagehding">@lang('b2c/header.testimonials')</h2><span></span>
                <div class="container">
                    <div class="col-md-12">
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class=""></li>
                                <li data-target="#quote-carousel" data-slide-to="1" class="active"></li>
                            </ol>
                            <div class="carousel-inner"><!-- Quote 1 -->
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial-icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="row">
                                            <div class="col-sm-12"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit. Maecenas sed diam eget risus varius blandit sit amet non magna.
                                                    Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero,
                                                    a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                                                <small><strong>Vulputate M., Dolor</strong></small></div>
                                        </div>
                                    </div>
                                </div><!-- Quote 2 -->
                                <div class="item active">
                                    <div class="testimonial-content">
                                        <div class="testimonial-icon"><i class="fa fa-quote-left"></i></div>
                                        <div class="row">
                                            <div class="col-sm-12"><p>“Vivamus sagittis lacus vel augue laoreet rutrum
                                                    faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum
                                                    faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur.
                                                    Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus,
                                                    porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam.
                                                    Pellentesque ornare sem lacinia quam venenatis vestibulum.”</p>
                                                <small><strong>Fringilla A., Vulputate Sit</strong></small></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>    $(document).ready(function () {
                var owl3 = $("#owl-demo3");

                owl3.owlCarousel({
                    itemsCustom: [
                        [0, 1],
                        [450, 2],
                        [551, 3],
                        [700, 4],
                        [1000, 5],
                        [1200, 6],
                        [1400, 6],
                        [1600, 6]
                    ],
                    navigation: false

                });

            });</script>
    </div>
    <script src="{{asset('system/template_list/template_v1/javascript/backslider.js')}}" defer="defer" charset="UTF-8"></script>

@endsection
