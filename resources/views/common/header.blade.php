<div class="allpagewrp">            <!-- Header Start -->
    <header>

        <div class="topssec">
            <div class="container">
                <div class="bars_menu fa fa-bars menu_brgr"></div>
                <a class="logo" href="{{env("APP_URL")}}"> <img class="tab_logo"
                                                                  src="{{asset('images/mobile_logo.png')}}"
                                                                  alt="Logo">
                    <img class="ful_logo" src="{{asset('images/logo.png')}}"
                         alt=""> </a>
                <div class="menuandall">
                    <div class="sepmenus">
                        <ul class="exploreall">
                            <li class=""><a
                                    href="{{env("APP_URL")}}">
                                    <span class="sprte cmnexplor "></span><!-- <strong>Flights</strong> -->
                                    <strong>@lang('b2c/header.flights')</strong> </a></li>
                            <li class=""><a
                                    href="">
                                    <span class="sprte cmnexplor "></span><!-- <strong>Hotels</strong> -->
                                    <strong>@lang('b2c/header.hotels')</strong> </a></li>
                            <li class=""><a href=""> <span class="sprte cmnexplor"></span>
                                    <strong>@lang('b2c/header.extranet')</strong> </a></li>
                            <li class=""><a href=""> <span
                                        class="sprte cmnexplor"></span> <strong>@lang('b2c/header.become partner')</strong> </a>
                            </li>
                            <li class=""><a href=""> <span
                                        class="sprte cmnexplor"></span> <strong>@lang('b2c/header.about us')</strong> </a></li>
                        </ul>
                    </div>
                    <div class="ritsude">
                        <div class="sidebtn flagss"><a class="topa dropdown-toggle" data-toggle="dropdown"
                                                       aria-expanded="false">
                                <div class="reglognorml">
                                    <div class="flags"> {{ trans( session('language', 'english') == 'english' ? 'b2c/header.english' : 'b2c/header.french' ) }}</div>
                                    <b class="caret cartdown"></b></div>
                            </a>
                            <ul class="dropdown-menu exploreul explorecntry logdowndiv" style="">
                                <li class="currency_li english"><a
                                        data-href="{{\Illuminate\Support\Facades\URL::to('/set_preferred_language/english')}}"
                                        class="app-preferred-language" data-language="en">
                                        <span class="name_currency"> @lang('b2c/header.english')</span> </a></li>
                                <li class="currency_li french"><a
                                        data-href="{{\Illuminate\Support\Facades\URL::to('/set_preferred_language/french')}}"
                                        class="app-preferred-language" data-language="fr">
                                        <span class="name_currency"> @lang('b2c/header.french')</span> </a></li>
                                <script>                        $(document).ready(function () {
                                        $('.app-preferred-language').on('click', function (e) {

                                            var _update_language_url = $(this).attr('data-href');
                                            $.get(_update_language_url, function (response) {
                                                if (response.status == true) {
                                                    $('.wrapper').css('opacity', '.1');
                                                    location.reload()
                                                }
                                            })
                                        })
                                    });
                                </script>
                            </ul>
                        </div>

                        <div class="sidebtn flagss"><a class="topa dropdown-toggle" data-toggle="dropdown"
                                                       aria-expanded="false">
                                <div class="reglognorml">
                                    <div class="flag_images"><span id="disply_curr"
                                                                   class="disply_curr curncy_img sprte {{strtolower(session('currency', ['name'=>'EUR','symbol' => 'EUR'])['name'])}}"></span></div>
                                    <div class="flags"> {{session('currency', ['name'=>'EUR','symbol' => 'EUR'])['name']}}</div>
                                    <b class="caret cartdown"></b></div>
                            </a>
                            <ul class="dropdown-menu exploreul explorecntry logdowndiv" style="">
                                @foreach(\Request()->get('currencies') as $currency)
                                    <li class="currency_li {{session('currency', ['name'=>'EUR','symbol' => 'EUR'])['name'] == $currency['name'] ? 'active' : ''}}"><a
                                            data-href="{{\Illuminate\Support\Facades\URL::to('/set_preferred_currency/' . $currency['name'] . '/' . $currency['symbol']) }}"
                                            class="app-preferred-currency" data-currency="{{$currency['name']}}"><span
                                                class="curncy_img sprte {{strtolower($currency['name'])}}"></span><span class="name_currency"> {{$currency['name']}}</span><span
                                                class="side_curency">{{$currency['symbol']}}</span></a></li>
                                @endforeach
                                <script>$(document).ready(function ($) {
                                        $('.app-preferred-currency').on('click', function (e) {
                                            e.preventDefault();
                                            var _update_currency_url = $(this).attr('data-href');
                                            $.get(_update_currency_url, function (response) {
                                                if (response.status == true) {
                                                    $('.wrapper').css('opacity', '.1');
                                                    location.reload()
                                                }
                                            })
                                        })
                                    });</script>
                            </ul>
                        </div>

                        @if(auth()->user())
                            <div class="sidebtn">
                                <a class="topa logindown dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <div class="reglog">
                                        <div class="userimage"><img src="{{asset('system/template_list/template_v3/images/user.png')}}" alt=""></div>
                                        <div class="userorlogin"> {{auth()->user()->title . ' ' . auth()->user()->first_name . ' ' . auth()->user()->last_name}} <b class="caret cartdown"></b>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu mysign exploreul logdowndiv">
                                    <div class="signdiv">
                                        <div class="clearfix">
                                            <ul>
                                                <li><a href="{{\Illuminate\Support\Facades\URL::to('user/profile')}}">@lang('b2c/header.my account')</a></li>
                                                <li class="divider"></li>
                                                <li><a href="{{\Illuminate\Support\Facades\URL::to('auth/change_password')}}">@lang('b2c/header.change password')</a></li>
                                                <li class="divider"></li>
{{--                                                <li><a class="user_logout_button">@lang('b2c/header.logout')</a></li>--}}
                                                <li><a href="{{\Illuminate\Support\Facades\URL::to('auth/logout')}}">@lang('b2c/header.logout')</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="sidebtn"><a class="topa logindown" data-toggle="modal" data-target="#show_log">
                                    <div class="reglog">
                                        <div class="userimage"><img
                                                src="{{asset('system/template_list/template_v3/images/user.png')}}" alt=""></div>
                                        <div class="userorlogin">@lang('b2c/header.login')</div>
                                </a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </header>            <!-- Header End -->
</div>
