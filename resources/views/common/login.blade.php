<?php
use App\Models\Country;
$db_countries = Country::where('origin', '>', 0)->orderBy('en_name', 'asc')->get();
?>
<div class="my_account_dropdown mysign exploreul">
    <button type="button" class="close log_close" data-dismiss="modal">×</button>
    <div class="signdiv">

        <div class="insigndiv for_sign_in">
            <div class="leftpul"><span class="hide"><input type="hidden" id="pri_fb_app_id"
                                                           value="1664173763932763"></span>
                <script>function statusChangeCallback(response) {
                        if (response.status === 'connected') {
                            updateCallback(true)
                        } else {
                            updateCallback(false)
                        }
                    }

                    function checkLoginState() {
                        FB.getLoginStatus(function (response) {
                            statusChangeCallback(response)
                        })
                    }

                    window.fbAsyncInit = function () {
                        FB.init({
                            appId: document.getElementById('pri_fb_app_id').value,
                            cookie: true,
                            xfbml: true,
                            version: 'v2.0'
                        });
                        FB.getLoginStatus(function (response) {
                            statusChangeCallback(response)
                        })
                    };
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = '//connect.facebook.net/en_US/sdk.js';
                        fjs.parentNode.insertBefore(js, fjs)
                    }(document, 'script', 'facebook-jssdk'));

                    function updateCallback(post) {
                        FB.api('/me?fields=id,name,email', function (response) {
                            var req = '';
                            if (post == true) {
                                req = response;
                                $.post(app_base_url + 'index.php/auth/social_network_login_auth/facebook', req, function (result) {
                                    if (result && result.status) {
                                        login_into_app()
                                    }
                                })
                            }
                        })
                    }

                    function login_into_app() {
                        $('.my_account_dropdown').hide();
                        location.reload()
                    }

                    function fb_login() {
                        FB.login(function (response) {
                            if (response.authResponse) {
                                access_token = response.authResponse.accessToken;
                                user_id = response.authResponse.userID;
                                FB.api('/me?fields=id,name,email', function (response) {
                                    $.post(app_base_url + 'index.php/auth/social_network_login_auth/facebook', response, function (result) {
                                        if (result && result.status) {
                                            login_into_app()
                                        }
                                    })
                                })
                            }
                        }, {scope: 'publish_actions,email'})
                    }</script>

{{--                <a href="#" onclick="fb_login()" class="logspecify facecolor" id="fb_login">--}}
{{--                    <div class="mensionsoc">Login with Facebook</div>--}}
{{--                </a>--}}


{{--                <div id="g-signin-btn" class="g-signin2 hide" data-onsuccess="onSignIn" data-gapiscan="true"--}}
{{--                     data-onload="true">--}}
{{--                    <div style="height:36px;width:120px;" class="abcRioButton abcRioButtonLightBlue">--}}


{{--                        <div class="abcRioButtonContentWrapper">--}}
{{--                            <div class="abcRioButtonIcon" style="padding:11px">--}}
{{--                                <div style="width:18px;height:18px;"--}}
{{--                                     class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18">--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"--}}
{{--                                         viewBox="0 0 48 48" class="abcRioButtonSvg">--}}
{{--                                        <g>--}}
{{--                                            <path fill="#EA4335"--}}
{{--                                                  d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>--}}
{{--                                            <path fill="#4285F4"--}}
{{--                                                  d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>--}}
{{--                                            <path fill="#FBBC05"--}}
{{--                                                  d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>--}}
{{--                                            <path fill="#34A853"--}}
{{--                                                  d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>--}}
{{--                                            <path fill="none" d="M0 0h48v48H0z"></path>--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span style="font-size:14px;line-height:40px;" class="abcRioButtonContents"><span--}}
{{--                                    id="not_signed_inndxasy3mok3e" style="color: white;">Sign in with Google</span><span--}}
{{--                                    id="connectedndxasy3mok3e" style="display:none">Signed in with Google</span></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="g-signin2 " data-width="255" data-height="42" data-longtitle="true"--}}
{{--                     data-onsuccess="onSignIn" data-gapiscan="true" data-onload="true">--}}
{{--                    <div style="height:42px;width:255px;" class="abcRioButton abcRioButtonLightBlue">--}}
{{--                        <div class="abcRioButtonContentWrapper">--}}
{{--                            <div class="abcRioButtonIcon" style="padding:11px">--}}
{{--                                <div style="width:18px;height:18px;"--}}
{{--                                     class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18">--}}
{{--                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"--}}
{{--                                         viewBox="0 0 48 48" class="abcRioButtonSvg">--}}
{{--                                        <g>--}}
{{--                                            <path fill="#EA4335"--}}
{{--                                                  d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>--}}
{{--                                            <path fill="#4285F4"--}}
{{--                                                  d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>--}}
{{--                                            <path fill="#FBBC05"--}}
{{--                                                  d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>--}}
{{--                                            <path fill="#34A853"--}}
{{--                                                  d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>--}}
{{--                                            <path fill="none" d="M0 0h48v48H0z"></path>--}}
{{--                                        </g>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <span style="font-size:14px;line-height:40px;" class="abcRioButtonContents"><span--}}
{{--                                    id="not_signed_inndxasy3mok3e">Sign in with Google</span><span--}}
{{--                                    id="connectedndxasy3mok3e">Signed in with Google</span>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <script>    function onSignIn(o) {
                        var t = o.getBasicProfile();
                        console.log(t), console.log("Image URL: " + t.getImageUrl()), $("body").css("opacity", ".1");
                        var n = {};
                        n.name = t.getName(), n.email = t.getEmail(), n.id = t.getId(), $.post(app_base_url + "index.php/auth/social_network_login_auth/google", n, function (o) {
                            // alert(o.status);
                            1 == o.status ? ($("body").css("opacity", ".1"), $(".my_account_dropdown").hide(), location.reload()) : ($("body").css("opacity", "1"))
                        })
                    }

                    function signOut() {
                        var o = gapi.auth2.getAuthInstance();
                        o.signOut().then(function () {
                            console.log("User signed out.")
                        })
                    }</script>
            </div>
            <div class="ritpul">
                <form role="form" id="login" action="" autocomplete="off" name="login">
                    <div class="rowput"><span class="fa fa-user"></span><input type="email"
                                                                               data-content="Username Ex: john@gmail.com"
                                                                               data-trigger="hover focus"
                                                                               data-placement="bottom"
                                                                               data-original-title="Here To Help"
                                                                               data-toggle="popover"
                                                                               data-container="body" id="email"
                                                                               class="email form-control logpadding"
                                                                               placeholder="Username"
                                                                               required="required" name="email"></div>
                    <div class="rowput"><span class="fa fa-lock"></span><input type="password" id="password"
                                                                               class="password form-control logpadding"
                                                                               placeholder="Password"
                                                                               required="required" name="password"
                                                                               value=""></div>
                    <div class="clearfix"></div>
                    <div id="login-status-wrapper" class="alert alert-danger" style="display: none"><p><i
                                class="fa fa-warning"></i></p></div>
                    <div class="clearfix"></div>
                    <div id="login_auth_loading_image" style="display: none">
                        <div class="text-center loader-image"><img
                                src="{{asset('system/template_list/template_v3/images/loader_v3.gif')}}"
                                alt="please wait"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="misclog"><a class="hand-cursor forgtpsw forgot_pasword" id="forgot-password">Forgot
                            Password? </a></div>
                    <div class="clearfix"></div>
                    <button class="submitlogin" id="login_submit">Login</button>
                    <div class="clear"></div>
                    <div class="dntacnt"> New User? <a class="hand-cursor open_register">Sign Up</a></div>
                </form>
            </div>
        </div>


        <div class="newacount_div for_sign_up">
            <div class="slpophd_new">Register with Warfira</div>
            <div class="othesend_regstr">
                <div class="ritpul">
                    <form autocomplete="off" method="post" id="register_user_form">
                        <div class="rowput has-feedback hidden"><span class="fa fa-user"></span><input type="text"
                                                                                                     class="validate_user_register form-control logpadding"
                                                                                                     value="Customer"
                                                                                                     placeholder="Name"
                                                                                                     name="first_name"
                                                                                                     required=""></div>
                        <div class="rowput has-feedback"><span class="fa fa-envelope"></span><input type="email"
                                                                                                    class="validate_user_register form-control logpadding"
                                                                                                    placeholder="Enter Your Email ID"
                                                                                                    value=""
                                                                                                    name="email"
                                                                                                    required=""><span
                                class="err_msg"> Email is required</span></div>
                        <div class="rowput has-feedback">
                            <span class="fa fa-mobile"></span>
                            <select name="country_code" class="validate_user_register form-control logpadding" required="">
                                <option value="">select country code</option>
                                @foreach($db_countries as $country)
                                    <option value="{{$country->origin}}">{{$country->en_name}} {{$country->phone_code}}</option>
                                @endforeach
                            </select>
                            <span class="err_msg"> country code Field is mandatory</span>
                        </div>
                        <div class="rowput has-feedback"><span class="fa fa-phone"></span><input type="phone"
                                                                                                 class="validate_user_register numeric form-control logpadding"
                                                                                                 maxlength="10"
                                                                                                 placeholder="Mobile Number"
                                                                                                 value="" name="phone"
                                                                                                 required=""><span
                                class="err_msg"> Mobile Number is required</span></div>
                        <div class="rowput has-feedback"><span class="fa fa-lock"></span><input type="password"
                                                                                                class="validate_user_register form-control logpadding"
                                                                                                placeholder="New Password"
                                                                                                value="" name="password"
                                                                                                required=""><span
                                class="err_msg"> Password is required</span></div>
                        <div class="rowput has-feedback"><span class="fa fa-lock"></span><input type="password"
                                                                                                class="validate_user_register form-control logpadding"
                                                                                                placeholder="Retype Password"
                                                                                                value=""
                                                                                                name="confirm_password"
                                                                                                required=""><span
                                class="err_msg">Retype Password is Required</span></div>
                        <div class="clearfix"></div>
                        <div class="row_submit">
                            <div class="col-xs-12 nopad">
                                <div class="agree_terms">
                                    <div class="squaredThree"><input type="checkbox" id="register_tc"
                                                                     class="airlinecheckbox validate_user_register"
                                                                     name="tc" required=""><label for="register_tc"
                                                                                                  class="register_tc"></label>
                                    </div>
                                    <label class="lbllbl" for="tc">By signing up you accept our <a target="_balnk"
                                                                                                   href="{{env('APP_URL')}}/terms-conditions">PRIVACY
                                            POLICY</a></label></div>
                            </div>
                            <div class="col-xs-12 nopad">
                                <button type="submit" id="register_user_button" class="submitlogin">Register</button>
                            </div>
                        </div>
                        <div class="loading hide" id="loading"><img
                                src="{{asset('system/template_list/template_v3/images/loader_v3.gif')}}"></div>
                        <div class="rowput alert alert-success hide" id="register-status-wrapper"></div>
                        <div class="rowput alert alert-danger hide" id="register-error-msg"></div>
                        <div class="clearfix"></div>
                        <!-- <div class="text_info">(You will receive an e-mail containing the account verification link.)</div> -->
                    </form>
                    <a class="open_sign_in">I have an Account</a></div>
            </div>
        </div>


        <div class="actual_forgot for_forgot">
            <div class="slpophd_new">Forgot Password?</div>
            <div class="othesend_regstr">
                <div class="rowput"><span class="fa fa-envelope"></span><input type="text" name="forgot_pwd_email"
                                                                               id="recover_email"
                                                                               class="logpadding form-control"
                                                                               placeholder="Enter Your Email ID"><span>This Field is mandatory</span>
                </div>
                <div class="rowput"><span class="fa fa-mobile"></span><input type="text" name="forgot_pwd_phone"
                                                                             id="recover_phone"
                                                                             class="logpadding form-control"
                                                                             placeholder="Registered Mobile Number"><span>This Field is mandatory</span>
                </div>
                <div class="clearfix"></div>
                <div id="recover-title-wrapper" class="alert alert-success" style="display: none"><p><i
                            class="fa fa-warning"></i> <span id="recover-title"></span></p></div>
                <div class="clearfix"></div>
                <button class="submitlogin" id="reset-password-trigger">Send EMail</button>
                <div class="clearfix"></div>
                <a class="open_sign_in">I am an Existing User</a></div>
        </div>

    </div>
</div>

<div id="forgotpaswrdpop" class="altpopup">
    <div class="comn_close_pop fa fa-times closepopup"></div>
    <div class="insideforgot">
        <div class="slpophd">Forgot Password?</div>
        <div class="othesend">
            <div class="rowput"><span class="fa fa-envelope"></span><input type="text" name="forgot_pwd_email"
                                                                           id="recover_email_book"
                                                                           class="logpadding form-control"
                                                                           placeholder="Enter Email"
                                                                           required="required"><span>This Field is mandatory</span>
            </div>
            <div class="rowput"><span class="fa fa-mobile"></span><input type="text" name="forgot_pwd_phone"
                                                                         id="recover_phone_book"
                                                                         class="logpadding form-control"
                                                                         placeholder="Enter Mobile Number"
                                                                         required="required"><span>This Field is mandatory</span>
            </div>
            <div class="clearfix"></div>
            <div id="recover-title-wrapper-book" class="alert alert-success" style="display: none"><p><i
                        class="fa fa-warning"></i> <span id="recover-title-book"></span></p></div>
            <div class="centerdprcd">
                <button class="bookcont" id="reset-password-trigger-book">Send Mail</button>
            </div>
        </div>
    </div>
</div>


<style>#register_user_form .err_msg.invalid-ip {
        color: #bf7070;
        display: block;
        border: 0 !important;
    }

    #register_user_form .err_msg {
        display: none;
    }
</style>

<script src="{{asset('system/template_list/template_v3/javascript/page_resource/login.js')}}" defer="defer" charset="UTF-8"></script>

