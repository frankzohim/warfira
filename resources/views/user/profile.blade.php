@extends('layout')
@section('content')

    <?php
    use App\Models\Country;
    $db_countries = Country::where('origin', '>', 0)->orderBy('en_name', 'asc')->get();
    ?>

    <div class="content-wrapper dashboard_section" style="min-height: 820px;">
        <div class="container">
            <div class="staffareadash">
                <ul class="nav nav-tabs customteam customteam2" role="tablist">
                    <li data-role="presentation" class="{{(!isset($active) || $active=='dashbrd') ? 'active' : ''}}"><a class="a_dashboard" href="#dashbrd"
                                                                   data-aria-controls="home" data-role="tab"
                                                                   data-toggle="tab"><span
                                class="fa fa-dashboard icon_sml_mob"></span><strong>Dashboard</strong></a></li>
                    <li data-role="presentation" class="{{(isset($active) && $active=='profile') ? 'active' : ''}}"><a class="a_profile" href="#profile" data-aria-controls="home"
                                                             data-role="tab" data-toggle="tab"><span
                                class="fa fa-user icon_sml_mob"></span><strong>Profile</strong></a></li>
                    <li data-role="presentation" class="{{(isset($active) && $active=='travellerinfo') ? 'active' : ''}}"><a class="a_traveller" href="#travellerinfo"
                                                             data-aria-controls="home" data-role="tab"
                                                             data-toggle="tab"><span
                                class="fa fa-users icon_sml_mob"></span><strong>Traveller Information</strong></a></li>
{{--                    <li data-role="presentation" class=""><a href="{{\Illuminate\Support\Facades\URL::to('report/flights')}}"><span--}}
{{--                                class="fa fa-ticket icon_sml_mob"></span><strong>Bookings</strong></a></li>--}}
                    <li data-role="presentation" class=""><a href="{{\Illuminate\Support\Facades\URL::to('user/profile')}}"><span
                                class="fa fa-ticket icon_sml_mob"></span><strong>Bookings</strong></a></li>
                </ul>
                <div class="tab-content sidewise_tab">

                    <div role="tabpanel" class="tab-pane {{(!isset($active) || $active=='dashbrd') ? 'active' : ''}}" id="dashbrd">
                        <div class="trvlwrap">
                            <div class="seperate_shadow"><h3 class="welcmnotespl">Hi, {{auth()->user()->title . ' ' . auth()->user()->first_name . ' ' . auth()->user()->last_name}} </h3>
                                <div class="smlwel">
                                    All your trips booked with us will appear here and you'll be able to manage everything!
                                </div>
                                <div class="bokinstts">
                                    <div class="col-xs-3 nopad">
                                        <div class="insidebx color1">
                                            <div class="ritlstxt">
                                                <div class="contbokd">0</div> Flights booked
                                            </div>
                                            <span class="witbook fa fa-plane"></span> <a
                                                href="{{\Illuminate\Support\Facades\URL::to('report/flights?default_view=VHCID1420613784')}}"
                                                class="htview"> View Detail <span class="far fa-arrow-right"></span>
                                            </a></div>
                                    </div>
                                    <div class="col-xs-3 nopad">
                                        <div class="insidebx color2">
                                            <div class="ritlstxt">
                                                <div class="contbokd">0</div> Hotels booked
                                            </div>
                                            <span class="witbook fa fa-bed"></span> <a
                                                href="{{\Illuminate\Support\Facades\URL::to('report/hotels?default_view=VHCID1420613784')}}"
                                                class="htview"> View Detail <span class="far fa-arrow-right"></span>
                                            </a></div>
                                    </div>
                                    <div class="col-xs-3 nopad">
                                        <div class="insidebx color2">
                                            <div class="ritlstxt">
                                                <div class="contbokd">0</div> Hotels booked CRS
                                            </div>
                                            <span class="witbook fa fa-bed"></span> <a
                                                href="{{\Illuminate\Support\Facades\URL::to('report/hotel_crs?default_view=VHCID1420613784')}}"
                                                class="htview"> View Detail <span class="far fa-arrow-right"></span>
                                            </a></div>
                                    </div>
                                    <!-- <div class="col-xs-3 nopad"><div class="insidebx color3"><div class="ritlstxt"><div class="contbokd">0</div>Buses booked </div><span class="witbook fa fa-bus"></span> <a href="https://warfira.com/index.php/report/buses?default_view=VHCID1433498307" class="htview"> View detail <span class="far fa-arrow-right"></span> </a> </div></div> -->
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="retnset">
                                <div class="col-xs-6 nopad full_nty">
                                    <div class="pading_spl">
                                        <div class="spl_box"><h4 class="dskrty">Recent Activities</h4>
                                            <div class="backfully">
                                                <div class="col-md-12">
                                                    <center>No Activities Found</center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane {{(isset($active) && $active=='profile') ? 'active' : ''}}" id="profile">
                        <div class="dashdiv">
                            <div class="alldasbord">
                                <div class="userfstep">
                                    <div class="step_head">
                                        <h3 class="welcmnote">Hi, {{auth()->user()->title . ' ' . auth()->user()->first_name . ' ' . auth()->user()->last_name}} </h3>
                                        <a href="#edit_user_profile" data-aria-controls="home" data-role="tab" data-toggle="tab" class="editpro">
                                            Edit profile</a></div>
                                    <div class="clearfix"></div><!-- Edit User Profile starts-->
                                    <div class="tab-content">
                                        <div role="tabpanel filldiv" class="tab-pane active" id="show_user_profile">
                                            <div class="colusrdash"><img
                                                    src="{{ empty(auth()->user()->image) ? asset('system/template_list/template_v3/images/user.png') : (env('APP_URL') . auth()->user()->image)}}"
                                                    alt="profile Image"></div>
                                            <div class="useralldets"><h4 class="dashuser"> {{auth()->user()->title . ' ' . auth()->user()->first_name . ' ' . auth()->user()->last_name}} </h4>
                                                <div class="rowother"><span class="far fa-envelope"></span> <span
                                                        class="labrti">{{auth()->user()->email}}</span></div>
                                                <div class="rowother"><span class="far fa-phone"></span> <span
                                                        class="labrti">({{auth()->user()->country_code}}) {{auth()->user()->mobile_number}}</span></div>
                                                <div class="rowother"><span class="far fa-map-marker"></span> <span
                                                        class="labrti">{{ empty(auth()->user()->address) ? '---' : auth()->user()->address}}</span></div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="edit_user_profile">
                                            <form action="{{\Illuminate\Support\Facades\URL::to('user/profile?active=profile')}}"
                                                  method="post" name="edit_user_form" id="edit_user_form"
                                                  enctype="multipart/form-data" autocomplete="off">
                                                @csrf
                                                <div class="infowone">
                                                    <div class="clearfix"></div>
                                                    <div class="paspertorgn2 paspertedit">
                                                        <div class="col-xs-3 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">Title <span
                                                                        class="text-danger">*</span></div>
                                                                <div class="lablmain cellpas"><select name="title"
                                                                                                      class="clainput"
                                                                                                      required="required">
                                                                        <option value="Mr" {{auth()->user()->title == 'MR' ? 'selected' : ''}}>Mr</option>
                                                                        <option value="Ms" {{auth()->user()->title == 'Ms' ? 'selected' : ''}}>Ms</option>
                                                                        <option value="Miss" {{auth()->user()->title == 'Miss' ? 'selected' : ''}}>Miss</option>
                                                                        <option value="Master" {{auth()->user()->title == 'Master' ? 'selected' : ''}}>Master</option>
                                                                        <option value="Mrs" {{auth()->user()->title == 'Mrs' ? 'selected' : ''}}>Mrs</option>
                                                                        <option value="Mstr" {{auth()->user()->title == 'Mstr' ? 'selected' : ''}}>Mstr</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">First Name <span
                                                                        class="text-danger">*</span></div>
                                                                <div class="lablmain cellpas"><input type="text"
                                                                                                     name="first_name"
                                                                                                     placeholder="First Name"
                                                                                                     value="{{auth()->user()->first_name}}"
                                                                                                     class="clainput alpha"
                                                                                                     maxlength="45"
                                                                                                     required=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-5 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">Last Name <span
                                                                        class="text-danger">*</span></div>
                                                                <div class="lablmain cellpas"><input type="text"
                                                                                                     name="last_name"
                                                                                                     placeholder="Last Name"
                                                                                                     value="{{auth()->user()->last_name}}"
                                                                                                     class="clainput alpha"
                                                                                                     maxlength="45"
                                                                                                     required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">Country<span
                                                                        class="text-danger">*</span></div>
                                                                <div class="lablmain cellpas"><select
                                                                        name="country_code" class="clainput"
                                                                        required="required">
                                                                        @foreach($db_countries as $country)
                                                                            <option value="{{$country->origin}}" {{auth()->user()->country_code == $country->phone_code ? 'selected' : ''}}>{{$country->en_name}} {{$country->phone_code}}</option>
                                                                        @endforeach
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-4 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">Mobile Number <span
                                                                        class="text-danger">*</span></div>
                                                                <div class="lablmain cellpas"><input type="text"
                                                                                                     name="phone"
                                                                                                     placeholder="mobile number"
                                                                                                     value="{{auth()->user()->mobile_number}}"
                                                                                                     class="clainput numeric"
                                                                                                     required="required"
                                                                                                     maxlength="10">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-5 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">Address <span
                                                                        class="text-danger">*</span></div>
                                                                <div class="lablmain cellpas"><textarea name="address"
                                                                                                        placeholder=""
                                                                                                        class="clainput"
                                                                                                        required="required">{{auth()->user()->address}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-5 margpas">
                                                            <div class="tnlepasport">
                                                                <div class="paspolbl cellpas">Profile Image</div>
                                                                <div class="lablmain cellpas"><input type="file"
                                                                                                     name="image"
                                                                                                     accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <button type="submit" class="savepspot">Update</button>
                                                        <a href="#show_user_profile" data-aria-controls="home"
                                                           data-role="tab" data-toggle="tab" class="cancelll">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- Edit User Profile Ends--></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div data-role="tabpanel" class="tab-pane {{(isset($active) && $active=='travellerinfo') ? 'active' : ''}}" id="travellerinfo">
                        <div class="trvlwrap">
                            <div class="alldasbord">
                                <div class="step_head"><h3 class="welcmnote">Traveller Information</h3><a
                                        class="addbutton" data-toggle="modal" data-target="#add_traveller_tab">Add
                                        Traveller</a></div><!-- Add traveller Modal Starts-->
                                <div class="modal fade" id="add_traveller_tab" data-aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Add Traveller</h4></div>
                                            <div class="modal-body">
                                                <div class="othinformtn">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" role="tabpanel">
                                                            <div class="infowone">
                                                                <form
                                                                    action="{{\Illuminate\Support\Facades\URL::to('user/add_traveller?active=traveller')}}"
                                                                    method="post" name="add_traveller_form"
                                                                    id="add_traveller_form" autocomplete="off">
                                                                    @csrf
                                                                    <div class="paspertedit">
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">First Name<span
                                                                                        class="text-dange">*</span>
                                                                                </div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_first_name"
                                                                                        type="text"
                                                                                        class="clainput alpha"
                                                                                        placeholder="First Name"
                                                                                        maxlength="45"
                                                                                        required="required"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Last
                                                                                    Name<span
                                                                                        class="text-dange">*</span>
                                                                                </div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_last_name"
                                                                                        type="text"
                                                                                        class="clainput alpha"
                                                                                        placeholder="Last Name"
                                                                                        maxlength="45"
                                                                                        required="required"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-3 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">DOB<span
                                                                                        class="text-dange">*</span>
                                                                                </div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_date_of_birth"
                                                                                        id="add-travel-date-picker"
                                                                                        type="text"
                                                                                        class="disable-date-auto-update auto-datepicker clainput traveller_dob"
                                                                                        placeholder="DOB" readonly=""
                                                                                        required="required"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Email
                                                                                    <span class="text-dange">*</span>
                                                                                </div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_email"
                                                                                        type="text"
                                                                                        class="clainput validate_email"
                                                                                        placeholder="Email"
                                                                                        maxlength="80"
                                                                                        required="required"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <button type="submit" id="add_traveller_btn"
                                                                                class="savepspot">Add
                                                                        </button>
                                                                        <a class="cancelll"
                                                                           data-dismiss="modal">Cancel</a></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Add traveller Modal Ends-->
                                <div class="fulltable">
                                    <div class="col-xs-3 tblpad"><span class="lavltr">Traveller names</span></div>
                                    <div class="col-xs-2 tblpad"><span class="lavltr">DOB</span></div>
                                    <div class="col-xs-3 tblpad"><span class="lavltr">Email</span></div>
                                    <div class="col-xs-2 tblpad"><span class="lavltr textalgn_rit">Action</span></div>
                                </div>

                                @if(!isset($travellers) || count($travellers) == 0)
                                    <div class="col-md-12">
                                        <center>No Travellers Added</center>
                                    </div>
                                @else
                                    @foreach($travellers as $key => $traveller)
                                        <form
                                            action="{{\Illuminate\Support\Facades\URL::to('user/update_traveller_details')}}"
                                            method="post" name="update_traveller_details_from" autocomplete="off">
                                            <input type="hidden" name="traveller_id" value="{{$traveller->id}}">
                                            @csrf
                                            <div class="trow">
                                                <div class="col-xs-3 tblpad"><span class="lavltr_mgc"></span> <span
                                                        class="lavltr">{{$traveller->first_name}} {{$traveller->last_name}}</span></div>
                                                <div class="col-xs-2 tblpad"><span class="lavltr_mgc">DOB</span> <span
                                                        class="lavltr">{{$traveller->date_of_birth}}</span></div>
                                                <div class="col-xs-3 tblpad"><span class="lavltr_mgc">Email</span> <span
                                                        class="lavltr">{{$traveller->email}}</span></div>
                                                <div class="col-xs-2 tblpad"><span class="lavltr pull-right"> <a
                                                            class="detilac" data-toggle="collapse"
                                                            data-target="#traveller_details_row{{$key}}" aria-expanded="true">Detail</a> </span>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div id="traveller_details_row{{$key}}" class="collapse">
                                                <div class="travemore">
                                                    <div class="othinformtn">
                                                        <ul class="nav nav-tabs tabssyb" role="tablist">
                                                            <li data-role="presentation" class="active"><a
                                                                    href="#traveller_user_details{{$key}}" data-role="tab"
                                                                    data-toggle="tab" aria-expanded="true">User
                                                                    Information</a></li>
                                                            <li data-role="presentation" class=""><a
                                                                    href="#traveller_passport_details{{$key}}" data-role="tab"
                                                                    data-toggle="tab" aria-expanded="true">Passport
                                                                    Information</a></li>
                                                        </ul>
                                                        <div class="tab-content">

                                                            <div role="tabpanel" class="tab-pane active"
                                                                 id="traveller_user_details{{$key}}">
                                                                <div class="infowone">
                                                                    <div class="paspertorgnl">
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas"></div>
                                                                                <div class="lablmain cellpas">
                                                                                    {{$traveller->first_name}} {{$traveller->last_name}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">DOB</div>
                                                                                <div class="lablmain cellpas">
                                                                                    {{$traveller->date_of_birth}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Email</div>
                                                                                <div class="lablmain cellpas">
                                                                                    {{$traveller->email}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <a class="editpasport">Edit profile</a></div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="paspertorgnl paspertedit">
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">First
                                                                                    Name<span class="text-dange">*</span>
                                                                                </div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_first_name"
                                                                                        type="text" value="{{$traveller->first_name}}"
                                                                                        class="clainput alpha"
                                                                                        placeholder="First Name"
                                                                                        required="required" maxlength="45">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Last Name<span
                                                                                        class="text-dange">*</span></div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_last_name"
                                                                                        type="text" value="{{$traveller->last_name}}"
                                                                                        class="clainput alpha"
                                                                                        placeholder="Last Name"
                                                                                        required="required" maxlength="45">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">DOB<span
                                                                                        class="text-dange">*</span></div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_date_of_birth"
                                                                                        id="traveller_date_of_birth{{$key}}"
                                                                                        type="text" value="{{$traveller->date_of_birth}}"
                                                                                        class="clainput traveller_dob auto-datepicker disable-date-auto-update"
                                                                                        placeholder="DOB" readonly=""
                                                                                        required="required"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Email <span
                                                                                        class="text-danger">*</span></div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="traveller_email" type="text"
                                                                                        value="{{$traveller->email}}"
                                                                                        class="clainput validate_email"
                                                                                        placeholder="Email" maxlength="80"
                                                                                        required="required"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <button type="submit" class="savepspot">Save
                                                                        </button>
                                                                        <a class="cancelll">Cancel</a></div>
                                                                </div>
                                                            </div>

                                                            <div role="tabpanel" class="tab-pane"
                                                                 id="traveller_passport_details{{$key}}">
                                                                <div class="infowone">
                                                                    <div class="paspertorgnl">
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Passport Holder Name</div>
                                                                                <div class="lablmain cellpas">{{!empty($traveller->passport_user_name) ? $traveller->passport_user_name : '---'}}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Nationality</div>
                                                                                <div class="lablmain cellpas">{{!empty($traveller->passport_nationality_country) ? ($traveller->passport_nationality_country->en_name . ' (' . $traveller->passport_nationality_country->phone_code . ')') : '---'}}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Passport
                                                                                    Expiry Date
                                                                                </div>
                                                                                <div class="lablmain cellpas">{{!empty($traveller->passport_expiry_day) ? $traveller->passport_expiry_day : '-'}} {{!empty($traveller->passport_expiry_month) ? (' - ' . $traveller->passport_expiry_month . ' - ') : '-'}} {{!empty($traveller->passport_expiry_year) ? $traveller->passport_expiry_year : '-'}}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Passport Number</div>
                                                                                <div class="lablmain cellpas">{{!empty($traveller->passport_number) ? $traveller->passport_number : '---'}}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Issuing Country</div>
                                                                                <div class="lablmain cellpas">{{!empty($traveller->passport_issuing_country) ? ($traveller->passport_issuing_country->en_name . ' (' . $traveller->passport_issuing_country->phone_code . ')') : '---'}}</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <a class="editpasport">Edit profile</a></div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="paspertorgnl paspertedit">
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Passport Holder Name</div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        type="text"
                                                                                        name="passport_user_name" value="{{$traveller->passport_user_name}}"
                                                                                        placeholder=""
                                                                                        class="clainput alpha"
                                                                                        maxlength="45"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Nationality
                                                                                </div>
                                                                                <div class="lablmain cellpas"><select
                                                                                        name="passport_nationality"
                                                                                        class="clainput">
                                                                                        @foreach($db_countries as $country)
                                                                                            <option value="{{$country->origin}}" {{(empty($traveller->passport_nationality_country_code) ? auth()->user()->country_code : $traveller->passport_nationality_country_code) == (empty($traveller->passport_nationality_country_code)?$country->phone_code:$country->origin) ? 'selected' : ''}}>{{$country->en_name}} {{$country->phone_code}}</option>
                                                                                        @endforeach
                                                                                    </select></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Passport
                                                                                    Expiry Date
                                                                                </div>
                                                                                <div class="lablmain cellpas">
                                                                                    <div class="retnmar">
                                                                                        <div class="col-xs-4 splinmar">
                                                                                            <select
                                                                                                name="passport_expiry_day"
                                                                                                class="clainput">
                                                                                                <option value="">DD</option>
                                                                                                <option value="1" {{$traveller->passport_expiry_day == 1 ? 'selected' : ''}}>1</option>
                                                                                                <option value="2" {{$traveller->passport_expiry_day == 2 ? 'selected' : ''}}>2</option>
                                                                                                <option value="3" {{$traveller->passport_expiry_day == 3 ? 'selected' : ''}}>3</option>
                                                                                                <option value="4" {{$traveller->passport_expiry_day == 4 ? 'selected' : ''}}>4</option>
                                                                                                <option value="5" {{$traveller->passport_expiry_day == 5 ? 'selected' : ''}}>5</option>
                                                                                                <option value="6" {{$traveller->passport_expiry_day == 6 ? 'selected' : ''}}>6</option>
                                                                                                <option value="7">7 {{$traveller->passport_expiry_day == 7 ? 'selected' : ''}}</option>
                                                                                                <option value="8">8 {{$traveller->passport_expiry_day == 8 ? 'selected' : ''}}</option>
                                                                                                <option value="9">9 {{$traveller->passport_expiry_day == 9 ? 'selected' : ''}}</option>
                                                                                                <option value="10" {{$traveller->passport_expiry_day == 10 ? 'selected' : ''}}>10</option>
                                                                                                <option value="11" {{$traveller->passport_expiry_day == 11 ? 'selected' : ''}}>11</option>
                                                                                                <option value="12" {{$traveller->passport_expiry_day == 12 ? 'selected' : ''}}>12</option>
                                                                                                <option value="13" {{$traveller->passport_expiry_day == 13 ? 'selected' : ''}}>13</option>
                                                                                                <option value="14" {{$traveller->passport_expiry_day == 14 ? 'selected' : ''}}>14</option>
                                                                                                <option value="15" {{$traveller->passport_expiry_day == 15 ? 'selected' : ''}}>15</option>
                                                                                                <option value="16" {{$traveller->passport_expiry_day == 16 ? 'selected' : ''}}>16</option>
                                                                                                <option value="17" {{$traveller->passport_expiry_day == 17 ? 'selected' : ''}}>17</option>
                                                                                                <option value="18" {{$traveller->passport_expiry_day == 18 ? 'selected' : ''}}>18</option>
                                                                                                <option value="19" {{$traveller->passport_expiry_day == 19 ? 'selected' : ''}}>19</option>
                                                                                                <option value="20" {{$traveller->passport_expiry_day == 20 ? 'selected' : ''}}>20</option>
                                                                                                <option value="21" {{$traveller->passport_expiry_day == 21 ? 'selected' : ''}}>21</option>
                                                                                                <option value="22" {{$traveller->passport_expiry_day == 22 ? 'selected' : ''}}>22</option>
                                                                                                <option value="23" {{$traveller->passport_expiry_day == 23 ? 'selected' : ''}}>23</option>
                                                                                                <option value="24" {{$traveller->passport_expiry_day == 24 ? 'selected' : ''}}>24</option>
                                                                                                <option value="25" {{$traveller->passport_expiry_day == 25 ? 'selected' : ''}}>25</option>
                                                                                                <option value="26" {{$traveller->passport_expiry_day == 26 ? 'selected' : ''}}>26</option>
                                                                                                <option value="27" {{$traveller->passport_expiry_day == 27 ? 'selected' : ''}}>27</option>
                                                                                                <option value="28" {{$traveller->passport_expiry_day == 28 ? 'selected' : ''}}>28</option>
                                                                                                <option value="29" {{$traveller->passport_expiry_day == 29 ? 'selected' : ''}}>29</option>
                                                                                                <option value="30" {{$traveller->passport_expiry_day == 30 ? 'selected' : ''}}>30</option>
                                                                                                <option value="31" {{$traveller->passport_expiry_day == 31 ? 'selected' : ''}}>31</option>
                                                                                            </select></div>
                                                                                        <div class="col-xs-4 splinmar">
                                                                                            <select
                                                                                                name="passport_expiry_month"
                                                                                                class="clainput">
                                                                                                <option value="">MM</option>
                                                                                                <option value="1" {{$traveller->passport_expiry_month == 1 ? 'selected' : ''}}>Jan</option>
                                                                                                <option value="2" {{$traveller->passport_expiry_month == 2 ? 'selected' : ''}}>Feb</option>
                                                                                                <option value="3" {{$traveller->passport_expiry_month == 3 ? 'selected' : ''}}>Mar</option>
                                                                                                <option value="4" {{$traveller->passport_expiry_month == 4 ? 'selected' : ''}}>Apr</option>
                                                                                                <option value="5" {{$traveller->passport_expiry_month == 5 ? 'selected' : ''}}>May</option>
                                                                                                <option value="6" {{$traveller->passport_expiry_month == 6 ? 'selected' : ''}}>Jun</option>
                                                                                                <option value="7" {{$traveller->passport_expiry_month == 7 ? 'selected' : ''}}>Jul</option>
                                                                                                <option value="8" {{$traveller->passport_expiry_month == 8 ? 'selected' : ''}}>Aug</option>
                                                                                                <option value="9" {{$traveller->passport_expiry_month == 9 ? 'selected' : ''}}>Sep</option>
                                                                                                <option value="10" {{$traveller->passport_expiry_month == 10 ? 'selected' : ''}}>Oct</option>
                                                                                                <option value="11" {{$traveller->passport_expiry_month == 11 ? 'selected' : ''}}>Nov</option>
                                                                                                <option value="12" {{$traveller->passport_expiry_month == 12 ? 'selected' : ''}}>Dec</option>
                                                                                            </select></div>
                                                                                        <div class="col-xs-4 splinmar">
                                                                                            <select
                                                                                                name="passport_expiry_year"
                                                                                                class="clainput">
                                                                                                <option value="">YYYY
                                                                                                </option>
                                                                                                @for($i=0; $i< 15; $i++)
                                                                                                    <option value="{{date('Y') + $i}}" {{$traveller->passport_expiry_year == date('Y') + $i ? 'selected' : ''}}>{{date('Y') + $i}}</option>
                                                                                                @endfor
                                                                                            </select></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Passport
                                                                                    Number
                                                                                </div>
                                                                                <div class="lablmain cellpas"><input
                                                                                        name="passport_number" value="{{$traveller->passport_number}}"
                                                                                        maxlength="10" type="text"
                                                                                        class="clainput"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6 margpas">
                                                                            <div class="tnlepasport">
                                                                                <div class="paspolbl cellpas">Issuing Country</div>
                                                                                <div class="lablmain cellpas">
                                                                                    <div class="selectwrp custombord">
                                                                                        <select
                                                                                            name="passport_issuing_country"
                                                                                            class="clainput">
                                                                                            <option value="">Please Select
                                                                                            </option>
                                                                                            @foreach($db_countries as $country)
                                                                                                <option value="{{$country->origin}}" {{(empty($traveller->passport_issuing_country_code) ? auth()->user()->country_code : $traveller->passport_issuing_country_code) == (empty($traveller->passport_issuing_country_code)?$country->phone_code:$country->origin) ? 'selected' : ''}}>{{$country->en_name}} {{$country->phone_code}}</option>
                                                                                            @endforeach
                                                                                        </select></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                        <button type="submit" class="savepspot">Save
                                                                        </button>
                                                                        <a class="cancelll">Cancel</a></div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#add_traveller_btn').click(function(e){
                e.preventDefault();
                var _status = true;
                var _focus = '';
                var email = $(this).closest('form').find('.validate_email').val().trim();
                $('input:required', $(this).closest('form')).each(function() {
                    if (this.value == '') {
                        $(this).addClass('invalid-ip');
                        if (_status == true) {
                            _status = false;
                            _focus = this;
                        }
                    } else if ($(this).hasClass('invalid-ip')) {
                        $(this).removeClass('invalid-ip');
                    }
                });
                if(email!='') {
                    if(validate_email(email) == false) {
                        _status = false;
                        $(this).val('').addClass('invalid-ip').attr('placeholder', '<?= 'invali_email_id';?>');
                    }
                }
                if(_status == true) {
                    $(this).closest('form').submit();
                }
            });
            $('.validate_email').change(function(){
                var email = $(this).val().trim();
                if(email!='') {
                    if(validate_email(email) == false) {
                        $(this).val('').addClass('invalid-ip').attr('placeholder', '<?= 'invali_email_id';?>');
                    } else {
                        $(this).removeClass('invalid-ip');
                    }
                } else {
                    $(this).removeClass('invalid-ip');
                }
            });
            $('.editpasport').click(function(){
                $(this).parent().parent('.infowone').addClass('editsave');
            });
            $('.cancelll').click(function(){
                $(this).parent().parent('.infowone').removeClass('editsave');
            });
            $('.traveller_dob').each(function(e){
                pastDatepicker($(this).attr('id'));
            });
        });
    </script>
@endsection
