@extends('layout')
@section('content')

    <style>    .topssec::after {
            display: none;
        }</style>
    <div class="fldealsec">
        <div class="container">
            <div class="tabcontnue">
                <div class="col-xs-4 nopadding">
                    <div class="rondsts  active "><a class="taba core_review_tab  review_tab_marker "
                                                     id="stepbk1">
                            <div class="iconstatus fa fa-eye"></div>
                            <div class="stausline">Review</div>
                        </a></div>
                </div>
                <div class="col-xs-4 nopadding">
                    <div class="rondsts "><a class="taba core_travellers_tab  inactive_travellers_tab_marker "
                                             id="stepbk2">
                            <div class="iconstatus fa fa-group"></div>
                            <div class="stausline">Travellers</div>
                        </a></div>
                </div>
                <div class="col-xs-4 nopadding">
                    <div class="rondsts"><a class="taba" id="stepbk3">
                            <div class="iconstatus fa fa-money"></div>
                            <div class="stausline">Payments</div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="alldownsectn">
        <div class="container">
            <div class="ovrgo">
                <div class="srch_ldr hide"><img
                        src="/extras/system/template_list/template_v3/images/image_loader.gif"></div>
                <div class="bktab1 xlbox  gohel ">                <!-- Balu A - Fare Summery -->
                    <div class="col-xs-8 nopadding full_summery_tab">
                        <div class="fligthsdets">
                            <div class="flitab1">                            <!-- Segment Details Starts-->
                                <div class="moreflt boksectn">
                                    <div class="ontyp">
                                        <div class="labltowr arimobold">Douala to Paris</div>
                                        <div class="allboxflt">
                                            <div class="col-xs-3 nopadding width_adjst">
                                                <div class="jetimg"><img alt="LX"
                                                                         src="/extras/system/library/images/airline_logo/LX.gif">
                                                </div>
                                                <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									4538</span></div>
                                            </div>
                                            <div class="col-xs-7 nopadding width_adjst">
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">22 Aug 2022, 19:00</span><span
                                                        class="portnme">Douala (DLA)</span></div>
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">22 Aug 2022, 19:50</span><span
                                                        class="portnme">Yaounde (NSI)</span></div>
                                            </div>
                                            <div class="col-xs-2 nopadding width_adjst"><span
                                                    class="portnme textcntr">50m </span><span
                                                    class="portnme textcntr">Stop : 0</span></div>
                                        </div>
                                        <div class="allboxflt">
                                            <div class="col-xs-3 nopadding width_adjst">
                                                <div class="jetimg"><img alt="LX"
                                                                         src="/extras/system/library/images/airline_logo/LX.gif">
                                                </div>
                                                <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									4538</span></div>
                                            </div>
                                            <div class="col-xs-7 nopadding width_adjst">
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">22 Aug 2022, 21:05</span><span
                                                        class="portnme">Yaounde (NSI)</span></div>
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">23 Aug 2022, 05:05</span><span
                                                        class="portnme">Brussels (BRU)</span></div>
                                            </div>
                                            <div class="col-xs-2 nopadding width_adjst"><span
                                                    class="portnme textcntr">7h </span><span
                                                    class="portnme textcntr">Stop : 1</span></div>
                                        </div>
                                        <div class="allboxflt">
                                            <div class="col-xs-3 nopadding width_adjst">
                                                <div class="jetimg"><img alt="LX"
                                                                         src="/extras/system/library/images/airline_logo/LX.gif">
                                                </div>
                                                <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									789</span></div>
                                            </div>
                                            <div class="col-xs-7 nopadding width_adjst">
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">23 Aug 2022, 20:15</span><span
                                                        class="portnme">Brussels (BRU)</span></div>
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">23 Aug 2022, 21:20</span><span
                                                        class="portnme">Zurich (ZRH)</span></div>
                                            </div>
                                            <div class="col-xs-2 nopadding width_adjst"><span
                                                    class="portnme textcntr">1h 5m </span><span
                                                    class="portnme textcntr">Stop : 2</span></div>
                                        </div>
                                        <div class="allboxflt">
                                            <div class="col-xs-3 nopadding width_adjst">
                                                <div class="jetimg"><img alt="LX"
                                                                         src="/extras/system/library/images/airline_logo/LX.gif">
                                                </div>
                                                <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									632</span></div>
                                            </div>
                                            <div class="col-xs-7 nopadding width_adjst">
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">24 Aug 2022, 07:30</span><span
                                                        class="portnme">Zurich (ZRH)</span></div>
                                                <div class="col-xs-6"><span
                                                        class="airlblxl">24 Aug 2022, 09:00</span><span
                                                        class="portnme">Paris (CDG)</span></div>
                                            </div>
                                            <div class="col-xs-2 nopadding width_adjst"><span
                                                    class="portnme textcntr">1h 30m </span><span
                                                    class="portnme textcntr">Stop : 3</span></div>
                                        </div>
                                    </div>
                                </div>                            <!-- Segment Details Ends-->
                                <div class="clearfix"></div>
                                <div class="sepertr"></div>

                                <!-- LOGIN SECTION STARTS -->
                                <div class="loginspld">
                                    <div class="logininwrap">
                                        <div class="signinhde"> Sign in now to Book Online</div>
                                        <div class="newloginsectn">
                                            <div class="col-xs-5 celoty nopad">
                                                <div class="insidechs">
                                                    <div class="mailenter"><input type="text"
                                                                                  name="booking_user_name"
                                                                                  id="booking_user_name"
                                                                                  maxlength="80"
                                                                                  placeholder="Your mail id"
                                                                                  class="newslterinput nputbrd _guest_validate">
                                                        <span class="error text-danger">Email is required</span>
                                                        <!-- <span class="err_msg">this field is required</span> -->
                                                    </div>
                                                    <div class="noteinote">Your booking details will be sent to
                                                        this email address.
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="havealrdy">
                                                        <div class="squaredThree"><input id="alreadyacnt"
                                                                                         type="checkbox"
                                                                                         name="check"
                                                                                         value="None"> <label
                                                                for="alreadyacnt"></label></div>
                                                        <label for="alreadyacnt" class="haveacntd">I have a
                                                            Warfira password</label></div>
                                                    <div class="clearfix"></div>
                                                    <div class="twotogle">
                                                        <div class="cntgust">
                                                            <div class="phoneumber">
                                                                <div class="col-xs-5 nopadding"><select
                                                                        class="newslterinput nputbrd _numeric_only"
                                                                        id="before_country_code">
                                                                        <option value="+93">Afghanistan +93
                                                                        </option>
                                                                        <option value="+355">Albania +355
                                                                        </option>
                                                                        <option value="+213">Algeria +213
                                                                        </option>
                                                                        <option value="+1684">American Samoa
                                                                            +1684
                                                                        </option>
                                                                        <option value="+376">Andorra +376
                                                                        </option>
                                                                        <option value="+244">Angola +244
                                                                        </option>
                                                                        <option value="+1264">Anguilla +1264
                                                                        </option>
                                                                        <option value="+1268">Antigua And
                                                                            Barbuda +1268
                                                                        </option>
                                                                        <option value="+54">Argentina +54
                                                                        </option>
                                                                        <option value="+374">Armenia +374
                                                                        </option>
                                                                        <option value="+297">Aruba +297</option>
                                                                        <option value="+61">Australia +61
                                                                        </option>
                                                                        <option value="+43">Austria +43</option>
                                                                        <option value="+994">Azerbaijan +994
                                                                        </option>
                                                                        <option value="+1242">Bahamas +1242
                                                                        </option>
                                                                        <option value="+973">Bahrain +973
                                                                        </option>
                                                                        <option value="+880">Bangladesh +880
                                                                        </option>
                                                                        <option value="+1246">Barbados +1246
                                                                        </option>
                                                                        <option value="+375">Belarus +375
                                                                        </option>
                                                                        <option value="+32">Belgium +32</option>
                                                                        <option value="+501">Belize +501
                                                                        </option>
                                                                        <option value="+229">Benin +229</option>
                                                                        <option value="+1441">Bermuda +1441
                                                                        </option>
                                                                        <option value="+975">Bhutan +975
                                                                        </option>
                                                                        <option value="+591">Bolivia +591
                                                                        </option>
                                                                        <option value="+387">Bosnia And
                                                                            Herzegovina +387
                                                                        </option>
                                                                        <option value="+267">Botswana +267
                                                                        </option>
                                                                        <option value="+55">Brazil +55</option>
                                                                        <option value="+673">Brunei Darussalam
                                                                            +673
                                                                        </option>
                                                                        <option value="+359">Bulgaria +359
                                                                        </option>
                                                                        <option value="+226">Burkina Faso +226
                                                                        </option>
                                                                        <option value="+257">Burundi +257
                                                                        </option>
                                                                        <option value="+855">Cambodia +855
                                                                        </option>
                                                                        <option value="+237">Cameroon +237
                                                                        </option>
                                                                        <option value="+1" selected="">Canada
                                                                            +1
                                                                        </option>
                                                                        <option value="+238">Cape Verde +238
                                                                        </option>
                                                                        <option value="+1345">Cayman Islands
                                                                            +1345
                                                                        </option>
                                                                        <option value="+236">Central African
                                                                            Republic +236
                                                                        </option>
                                                                        <option value="+235">Chad +235</option>
                                                                        <option value="+56">Chile +56</option>
                                                                        <option value="+86">China +86</option>
                                                                        <option value="+61">Christmas Island
                                                                            +61
                                                                        </option>
                                                                        <option value="+891">Cocos (Keeling)
                                                                            Islands +891
                                                                        </option>
                                                                        <option value="+57">Colombia +57
                                                                        </option>
                                                                        <option value="+269">Comoros +269
                                                                        </option>
                                                                        <option value="+242">Congo +242</option>
                                                                        <option value="+243">Congo, DR Of The
                                                                            +243
                                                                        </option>
                                                                        <option value="+682">Cook Islands +682
                                                                        </option>
                                                                        <option value="+506">Costa Rica +506
                                                                        </option>
                                                                        <option value="+385">Croatia +385
                                                                        </option>
                                                                        <option value="+357">Cyprus +357
                                                                        </option>
                                                                        <option value="+420">Czech Republic
                                                                            +420
                                                                        </option>
                                                                        <option value="+45">Denmark +45</option>
                                                                        <option value="+253">Djibouti +253
                                                                        </option>
                                                                        <option value="+1767">Dominica +1767
                                                                        </option>
                                                                        <option value="+1809">Dominican Republic
                                                                            +1809
                                                                        </option>
                                                                        <option value="+593">Ecuador +593
                                                                        </option>
                                                                        <option value="+20">Egypt +20</option>
                                                                        <option value="+503">El Salvador +503
                                                                        </option>
                                                                        <option value="+240">Equatorial Guinea
                                                                            +240
                                                                        </option>
                                                                        <option value="+291">Eritrea +291
                                                                        </option>
                                                                        <option value="+372">Estonia +372
                                                                        </option>
                                                                        <option value="+251">Ethiopia +251
                                                                        </option>
                                                                        <option value="+500">Falkland Islands
                                                                            +500
                                                                        </option>
                                                                        <option value="+298">Faroe Islands
                                                                            +298
                                                                        </option>
                                                                        <option value="+679">Fiji +679</option>
                                                                        <option value="+358">Finland +358
                                                                        </option>
                                                                        <option value="+33">France +33</option>
                                                                        <option value="+594">French Guiana
                                                                            +594
                                                                        </option>
                                                                        <option value="+689">French Polynesia
                                                                            +689
                                                                        </option>
                                                                        <option value="+241">Gabon +241</option>
                                                                        <option value="+220">Gambia +220
                                                                        </option>
                                                                        <option value="+995">Georgia +995
                                                                        </option>
                                                                        <option value="+49">Germany +49</option>
                                                                        <option value="+233">Ghana +233</option>
                                                                        <option value="+350">Gibralter +350
                                                                        </option>
                                                                        <option value="+30">Greece +30</option>
                                                                        <option value="+299">Greenland +299
                                                                        </option>
                                                                        <option value="+1473">Grenada +1473
                                                                        </option>
                                                                        <option value="+590">Guadeloupe +590
                                                                        </option>
                                                                        <option value="+1671">Guam +1671
                                                                        </option>
                                                                        <option value="+502">Guatemala +502
                                                                        </option>
                                                                        <option value="+224">Guinea +224
                                                                        </option>
                                                                        <option value="+245">Guinea-Bissau
                                                                            +245
                                                                        </option>
                                                                        <option value="+592">Guyana +592
                                                                        </option>
                                                                        <option value="+509">Haiti +509</option>
                                                                        <option value="+504">Honduras +504
                                                                        </option>
                                                                        <option value="+852">Hong Kong +852
                                                                        </option>
                                                                        <option value="+36">Hungary +36</option>
                                                                        <option value="+354">Iceland +354
                                                                        </option>
                                                                        <option value="+91">India +91</option>
                                                                        <option value="+62">Indonesia +62
                                                                        </option>
                                                                        <option value="+353">Ireland +353
                                                                        </option>
                                                                        <option value="+972">Israel +972
                                                                        </option>
                                                                        <option value="+39">Italy +39</option>
                                                                        <option value="+255">Ivory coast +255
                                                                        </option>
                                                                        <option value="+1876">Jamaica +1876
                                                                        </option>
                                                                        <option value="+81">Japan +81</option>
                                                                        <option value="+962">Jordan +962
                                                                        </option>
                                                                        <option value="+7">Kazakhstan +7
                                                                        </option>
                                                                        <option value="+254">Kenya +254</option>
                                                                        <option value="+686">Kiribati +686
                                                                        </option>
                                                                        <option value="+850">Korea, DPR Of
                                                                            +850
                                                                        </option>
                                                                        <option value="+82">Korea, Republic Of
                                                                            +82
                                                                        </option>
                                                                        <option value="+965">Kuwait +965
                                                                        </option>
                                                                        <option value="+996">Kyrgyzstan +996
                                                                        </option>
                                                                        <option value="+856">Laos +856</option>
                                                                        <option value="+371">Latvia +371
                                                                        </option>
                                                                        <option value="+961">Lebanon +961
                                                                        </option>
                                                                        <option value="+266">Lesotho +266
                                                                        </option>
                                                                        <option value="+218">Libyan Arab
                                                                            Jamahiriya +218
                                                                        </option>
                                                                        <option value="+423">Liechtenstein
                                                                            +423
                                                                        </option>
                                                                        <option value="+370">Lithuania +370
                                                                        </option>
                                                                        <option value="+352">Luxembourg +352
                                                                        </option>
                                                                        <option value="+853">Macao +853</option>
                                                                        <option value="+389">Macedonia, FYR Of
                                                                            +389
                                                                        </option>
                                                                        <option value="+261">Madagascar +261
                                                                        </option>
                                                                        <option value="+265">Malawi +265
                                                                        </option>
                                                                        <option value="+60">Malaysia +60
                                                                        </option>
                                                                        <option value="+960">Maldives +960
                                                                        </option>
                                                                        <option value="+223">Mali +223</option>
                                                                        <option value="+356">Malta +356</option>
                                                                        <option value="+692">Marshall Islands
                                                                            +692
                                                                        </option>
                                                                        <option value="+596">Martinique +596
                                                                        </option>
                                                                        <option value="+222">Mauritania +222
                                                                        </option>
                                                                        <option value="+230">Mauritius +230
                                                                        </option>
                                                                        <option value="+262">Mayotte +262
                                                                        </option>
                                                                        <option value="+52">Mexico +52</option>
                                                                        <option value="+691">Micronesia, FS Of
                                                                            +691
                                                                        </option>
                                                                        <option value="+373">Moldova, Republic
                                                                            Of +373
                                                                        </option>
                                                                        <option value="+377">Monaco +377
                                                                        </option>
                                                                        <option value="+976">Mongolia +976
                                                                        </option>
                                                                        <option value="+382">Montenegro +382
                                                                        </option>
                                                                        <option value="+1664">Montserrat +1664
                                                                        </option>
                                                                        <option value="+212">Morocco +212
                                                                        </option>
                                                                        <option value="+258">Mozambique +258
                                                                        </option>
                                                                        <option value="+95">Myanmar +95</option>
                                                                        <option value="+264">Namibia +264
                                                                        </option>
                                                                        <option value="+674">Nauru +674</option>
                                                                        <option value="+977">Nepal +977</option>
                                                                        <option value="+31">Netherlands +31
                                                                        </option>
                                                                        <option value="+687">New Caledonia
                                                                            +687
                                                                        </option>
                                                                        <option value="+64">New Zealand +64
                                                                        </option>
                                                                        <option value="+505">Nicaragua +505
                                                                        </option>
                                                                        <option value="+227">Niger +227</option>
                                                                        <option value="+234">Nigeria +234
                                                                        </option>
                                                                        <option value="+683">Niue +683</option>
                                                                        <option value="+672">Norfolk Island
                                                                            +672
                                                                        </option>
                                                                        <option value="+1670">Northern Mariana
                                                                            Islands +1670
                                                                        </option>
                                                                        <option value="+47">Norway +47</option>
                                                                        <option value="+968">Oman +968</option>
                                                                        <option value="+92">Pakistan +92
                                                                        </option>
                                                                        <option value="+680">Palau +680</option>
                                                                        <option value="+507">Panama +507
                                                                        </option>
                                                                        <option value="+675">Papua New Guinea
                                                                            +675
                                                                        </option>
                                                                        <option value="+595">Paragua +595
                                                                        </option>
                                                                        <option value="+595">Paraguay +595
                                                                        </option>
                                                                        <option value="+51">Peru +51</option>
                                                                        <option value="+63">Philippines +63
                                                                        </option>
                                                                        <option value="+870">Pitcairn +870
                                                                        </option>
                                                                        <option value="+48">Polan +48</option>
                                                                        <option value="+48">Poland +48</option>
                                                                        <option value="+351">Portugal +351
                                                                        </option>
                                                                        <option value="+1787">Puerto Rico
                                                                            +1787
                                                                        </option>
                                                                        <option value="+974">Qatar +974</option>
                                                                        <option value="+262">Reunion +262
                                                                        </option>
                                                                        <option value="+40">Romania +40</option>
                                                                        <option value="+7">Russian Federation
                                                                            +7
                                                                        </option>
                                                                        <option value="+250">Rwanda +250
                                                                        </option>
                                                                        <option value="+590">Saint Barthelemy
                                                                            +590
                                                                        </option>
                                                                        <option value="+1869">Saint Kitts And
                                                                            Nevis +1869
                                                                        </option>
                                                                        <option value="+1758">Saint Lucia
                                                                            +1758
                                                                        </option>
                                                                        <option value="+1599">Saint Martin
                                                                            +1599
                                                                        </option>
                                                                        <option value="+685">Samoa +685</option>
                                                                        <option value="+378">San Marino +378
                                                                        </option>
                                                                        <option value="+239">Sao Tome And
                                                                            Principe +239
                                                                        </option>
                                                                        <option value="+966">Saudi Arabia +966
                                                                        </option>
                                                                        <option value="+221">Senegal +221
                                                                        </option>
                                                                        <option value="+381">Serbia +381
                                                                        </option>
                                                                        <option value="+248">Seychelles +248
                                                                        </option>
                                                                        <option value="+232">Sierra Leone +232
                                                                        </option>
                                                                        <option value="+65">Singapore +65
                                                                        </option>
                                                                        <option value="+421">Slovakia (Slovak
                                                                            Republic) +421
                                                                        </option>
                                                                        <option value="+386">Slovenia +386
                                                                        </option>
                                                                        <option value="+677">Solomon Islands
                                                                            +677
                                                                        </option>
                                                                        <option value="+27">South Africa +27
                                                                        </option>
                                                                        <option value="+34">Spain +34</option>
                                                                        <option value="+94">Sri Lanka +94
                                                                        </option>
                                                                        <option value="+1784">St Vincent And The
                                                                            Grenadines +1784
                                                                        </option>
                                                                        <option value="+290">St. Helena +290
                                                                        </option>
                                                                        <option value="+508">St. Pierre And
                                                                            Miquelon +508
                                                                        </option>
                                                                        <option value="+249">Sudan +249</option>
                                                                        <option value="+597">Suriname +597
                                                                        </option>
                                                                        <option value="+47">Svalbard And Jan
                                                                            Mayen Islands +47
                                                                        </option>
                                                                        <option value="+268">Swaziland +268
                                                                        </option>
                                                                        <option value="+46">Sweden +46</option>
                                                                        <option value="+41">Switzerland +41
                                                                        </option>
                                                                        <option value="+886">Taiwan +886
                                                                        </option>
                                                                        <option value="+992">Tajikistan +992
                                                                        </option>
                                                                        <option value="+255">Tanzania +255
                                                                        </option>
                                                                        <option value="+66">Thailand +66
                                                                        </option>
                                                                        <option value="+228">Togo +228</option>
                                                                        <option value="+676">Tonga +676</option>
                                                                        <option value="+1868">Trinidad And
                                                                            Tobago +1868
                                                                        </option>
                                                                        <option value="+216">Tunisia +216
                                                                        </option>
                                                                        <option value="+90">Turkey +90</option>
                                                                        <option value="+993">Turkmenistan +993
                                                                        </option>
                                                                        <option value="+1649">Turks And Caicos
                                                                            Islands +1649
                                                                        </option>
                                                                        <option value="+688">Tuvalu +688
                                                                        </option>
                                                                        <option value="+256">Uganda +256
                                                                        </option>
                                                                        <option value="+380">Ukraine +380
                                                                        </option>
                                                                        <option value="+971">United Arab
                                                                            Emirates +971
                                                                        </option>
                                                                        <option value="+44">United Kingdom +44
                                                                        </option>
                                                                        <option value="+1" selected="">United
                                                                            States +1
                                                                        </option>
                                                                        <option value="+598">Uruguay +598
                                                                        </option>
                                                                        <option value="+1">US Minor Outlying
                                                                            Islands +1
                                                                        </option>
                                                                        <option value="+998">Uzbekistan +998
                                                                        </option>
                                                                        <option value="+678">Vanuatu +678
                                                                        </option>
                                                                        <option value="+379">Vatican City State
                                                                            +379
                                                                        </option>
                                                                        <option value="+58">Venezuela +58
                                                                        </option>
                                                                        <option value="+84">Viet Nam +84
                                                                        </option>
                                                                        <option value="+1284">Virgin Islands -
                                                                            British +1284
                                                                        </option>
                                                                        <option value="+1340">Virgin Islands -
                                                                            U.S. +1340
                                                                        </option>
                                                                        <option value="+681">Wallis And Futuna
                                                                            Islands +681
                                                                        </option>
                                                                        <option value="+967">Yemen +967</option>
                                                                        <option value="+381">Yugoslavia +381
                                                                        </option>
                                                                        <option value="+260">Zambia +260
                                                                        </option>
                                                                        <option value="+263">Zimbabwe +263
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-1 nopadding">
                                                                    <div class="sidepo">-</div>
                                                                </div>
                                                                <div class="col-xs-6 nopadding"><input
                                                                        type="text" id="booking_user_mobile"
                                                                        placeholder="Mobile Number"
                                                                        class="newslterinput _numeric_only _guest_validate"
                                                                        maxlength="10"> <span
                                                                        class="hidden error text-danger">Mobile Number is required</span>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <div class="noteinote">We'll use this number to
                                                                    send possible update alerts.
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="continye col-xs-8 nopad">
                                                                <button class="bookcont" id="continue_as_guest">
                                                                    Book as Guest
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="alrdyacnt">
                                                            <div class="col-xs-12 nopad">
                                                                <div class="relativemask">
                                                                    <input type="password"
                                                                           name="booking_user_password"
                                                                           id="booking_user_password"
                                                                           class="clainput"
                                                                           placeholder="Password"></div>
                                                                <div class="clearfix"></div>
                                                                <a class="frgotpaswrd">Forgot Password??</a>
                                                                <div style=""
                                                                     class="hide alert alert-danger"></div>
                                                            </div>
                                                            <div id="book_login_auth_loading_image"
                                                                 style="display: none">
                                                                <div class="text-center loader-image"><img
                                                                        src="/extras/system/template_list/template_v3/images/loader_v3.gif"
                                                                        alt="please wait"></div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="continye col-xs-8 nopad">
                                                                <button class="bookcont" id="continue_as_user">
                                                                    Proceed to Book
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-2 celoty nopad linetopbtm">
                                                <div class="orround">OR</div>
                                            </div>
                                            <div class="col-xs-5 celoty nopad">
                                                <div class="insidechs booklogin">
                                                    <div class="leftpul"><span class="hide"><input type="hidden"
                                                                                                   id="pri_fb_app_id"
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
                                                        <a href="#" onclick="fb_login()"
                                                           class="logspecify facecolor" id="fb_login">
                                                            <div class="mensionsoc">Login with Facebook</div>
                                                        </a>
                                                        <div id="g-signin-btn" class="g-signin2 hide"
                                                             data-onsuccess="onSignIn" data-gapiscan="true"
                                                             data-onload="true">
                                                            <div style="height:36px;width:120px;"
                                                                 class="abcRioButton abcRioButtonLightBlue">
                                                                <div class="abcRioButtonContentWrapper">
                                                                    <div class="abcRioButtonIcon"
                                                                         style="padding:8px">
                                                                        <div style="width:18px;height:18px;"
                                                                             class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18">
                                                                            <svg version="1.1"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 width="18px" height="18px"
                                                                                 viewBox="0 0 48 48"
                                                                                 class="abcRioButtonSvg">
                                                                                <g>
                                                                                    <path fill="#EA4335"
                                                                                          d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                                                                    <path fill="#4285F4"
                                                                                          d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                                                                    <path fill="#FBBC05"
                                                                                          d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                                                                    <path fill="#34A853"
                                                                                          d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                                                                    <path fill="none"
                                                                                          d="M0 0h48v48H0z"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        style="font-size:13px;line-height:34px;"
                                                                        class="abcRioButtonContents"><span
                                                                            id="not_signed_ino0hnak5fnu6r">Connexion</span><span
                                                                            id="connectedo0hnak5fnu6r"
                                                                            style="display:none">Signed in</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="g-signin2 " data-width="255"
                                                             data-height="42" data-longtitle="true"
                                                             data-onsuccess="onSignIn" data-gapiscan="true"
                                                             data-onload="true">
                                                            <div style="height:42px;width:255px;"
                                                                 class="abcRioButton abcRioButtonLightBlue">
                                                                <div class="abcRioButtonContentWrapper">
                                                                    <div class="abcRioButtonIcon"
                                                                         style="padding:11px">
                                                                        <div style="width:18px;height:18px;"
                                                                             class="abcRioButtonSvgImageWithFallback abcRioButtonIconImage abcRioButtonIconImage18">
                                                                            <svg version="1.1"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 width="18px" height="18px"
                                                                                 viewBox="0 0 48 48"
                                                                                 class="abcRioButtonSvg">
                                                                                <g>
                                                                                    <path fill="#EA4335"
                                                                                          d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path>
                                                                                    <path fill="#4285F4"
                                                                                          d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                                                                    <path fill="#FBBC05"
                                                                                          d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path>
                                                                                    <path fill="#34A853"
                                                                                          d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path>
                                                                                    <path fill="none"
                                                                                          d="M0 0h48v48H0z"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        style="font-size:14px;line-height:40px;"
                                                                        class="abcRioButtonContents"><span
                                                                            id="not_signed_inturvwhemqsmm">Sign in with Google</span><span
                                                                            id="connectedturvwhemqsmm"
                                                                            style="display:none">Signed in with Google</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- LOGIN SECTION ENDS -->                        </div>
                        </div>
                    </div>
                    <div class="col-xs-4 nopadding rit_summery">
                        <div class="copy_fare_summery">
                            <div class="insiefare">
                                <div class="farehd arimobold">Fare Summary</div>
                                <div class="fredivs">
                                    <div class="kindrest">
                                        <div class="freshd">Base Fare</div>
                                        <div class="reptallt">
                                            <div class="col-xs-8 nopadding">
                                                <div class="faresty">1 ADT(s) ‎(1 X 524.36)</div>
                                            </div>
                                            <div class="col-xs-4 nopadding">
                                                <div class="amnter"><span class="base_fare_span">€</span> <span
                                                        class="base_fare_value0">524 </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kindrest">
                                        <div class="freshd">Taxes</div>
                                        <div class="reptallt">
                                            <div class="col-xs-8 nopadding">
                                                <div class="faresty">Taxes</div>
                                            </div>
                                            <div class="col-xs-4 nopadding">
                                                <div class="amnter arimobold"><span
                                                        class="tax_fees_span">€</span> <span
                                                        class="tax_fees_value">1085 </span></div>
                                            </div>
                                            <div class="col-xs-8 nopadding">
                                                <div class="faresty">Convenience Fees</div>
                                            </div>
                                            <span class="org_convience_fee hide">10.00</span>
                                            <div class="col-xs-4 nopadding">
                                                <div class="amnter arimobold"><span
                                                        class="convenience_fees_span">€</span> <span
                                                        class="convenience_fees_value"> 161 </span></div>
                                            </div>
                                            <div class="col-xs-8 nopadding insurance " style="display: none;">
                                                <div class="faresty">Insurance</div>
                                            </div>
                                            <div class="col-xs-4 nopadding insurance " style="display: none;">
                                                <div class="amnter arimobold">0</div>
                                            </div>
                                            <div class="col-xs-8 nopadding promo_code_discount hide">
                                                <div class="faresty">Promo Code Discount</div>
                                            </div>
                                            <div class="col-xs-4 nopadding promo_code_discount hide">
                                                <div class="amnter arimobold promo_discount_val"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="reptalltftr">
                                        <div class="col-xs-6 nopadding">
                                            <div class="farestybig">Grand Total</div>
                                        </div>
                                        <div class="col-xs-6 nopadding ">
                                            <div id="grandtotal_valid" class="grandtotal_valid hide">1770</div>
                                            <div class="amnterbig arimobold grandtotal"><span
                                                    class="grandtotal_span"> € </span> <span
                                                    class="total_booking_amount grandtotal_value"> 1770</span>
                                            </div>
                                            <div class="hide" id="api_price_details"
                                                 data-api_price="eyJDdXJyZW5jeSI6IlVTRCIsIlRvdGFsRGlzcGxheUZhcmUiOjE3MTIuMzA4LCJQcmljZUJyZWFrdXAiOnsiQmFzaWNGYXJlIjo1NTcuODI5LCJUYXgiOjExNTQuNDc5LCJBZ2VudENvbW1pc3Npb24iOjAsIkFnZW50VGRzT25Db21taXNpb24iOjB9LCJQYXNzZW5nZXJCcmVha3VwIjp7IkFEVCI6eyJCYXNlUHJpY2UiOjU1Ny44MjksIlRheCI6MTE1NC40NzksIlRvdGFsUHJpY2UiOjE3MTIuMzA4LCJQYXNzZW5nZXJDb3VudCI6IjEifX19"></div>
                                            <div class="hide" id="api_markup_details"
                                                 data-markup_price="eyJDdXJyZW5jeSI6IkVVUiIsIkJhc2VGYXJlIjo1MjQuMzYsIlRheCI6MTA4NS4yMSwiUHVibGlzaGVkRmFyZSI6MTYwOS41NywiQWdlbnRDb21taXNzaW9uIjowLCJBZ2VudFRkc09uQ29tbWlzaW9uIjowLCJPZmZlcmVkRmFyZSI6MTYwOS41Nywib3JpZ2luYWxfbWFya3VwIjpudWxsLCJtYXJrdXBfdHlwZSI6bnVsbH0="></div>
                                            <div class="hide" id="convenience_fees_original"
                                                 data-convience_fee="eyJ2YWx1ZSI6IjEwLjAwIiwidHlwZSI6InBlcmNlbnRhZ2UiLCJwZXJfcGF4IjoiMSIsImNvbnZlbmllbmNlX2ZlZV9jdXJyZW5jeSI6IkVVUiJ9"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bktab2 xlbox  flight_booking_desc">
                    <div class="topalldesc">
                        <div class="col-xs-8 nopadding celtbcel segment_seg">
                            <div class="moreflt spltopbk">
                                <div class="ontypsec">
                                    <div class="allboxflt">
                                        <div class="col-xs-3 nopadding width_adjst">
                                            <div class="jetimg"><img class="airline-logo" alt="LX"
                                                                     src="/extras/system/library/images/airline_logo/LX.gif">
                                            </div>
                                            <div class="alldiscrpo"><span class="air_name">Swiss air</span><span
                                                    class="sgsmal"> LX4538</span></div>
                                        </div>
                                        <div class="col-xs-7 nopadding width_adjst">
                                            <div class="col-xs-6"><span
                                                    class="airlblxl">Douala (DLA)</span><span class="portnme">22 Aug 2022, 19:00</span>
                                            </div>
                                            <div class="col-xs-6"><span class="airlblxl">Paris (CDG)</span><span
                                                    class="portnme">24 Aug 2022, 09:00</span></div>
                                        </div>
                                        <div class="col-xs-2 nopadding width_adjst"><span
                                                class="portnme textcntr">37h </span><span
                                                class="portnme textcntr">Stop:3</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>                    <!-- Outer Summary -->
                        <div class="col-xs-4 nopadding celtbcel colrcelo">
                            <div class="bokkpricesml">
                                <div class="travlrs">Travellers:: <span class="fa fa-male"></span> 1 | <span
                                        class="fa fa-child"></span> 0 | <span class="infantbay"><img
                                            src="/extras/system/template_list/template_v3/images/infant.png"
                                            alt=""></span> 0
                                </div>
                                <div class="baggagecharge" id="extra_baggage_charge_label" style="display:none">
                                    Extra Baggage Charge €
                                    <span id="extra_baggage_charge"></span> <span class="btn btn-sm btn-default"
                                                                                  id="remove_extra_baggage"><i
                                            class="fa fa-times" aria-hidden="true"></i></span></div>
                                <div class="baggagecharge" id="extra_meal_charge_label" style="display:none">
                                    Meal Charge €
                                    <span id="extra_meal_charge"></span> <span class="btn btn-sm btn-default"
                                                                               id="remove_extra_meal"><i
                                            class="fa fa-times" aria-hidden="true"></i></span></div>
                                <div class="baggagecharge" id="extra_seat_charge_label" style="display:none">
                                    Seat Charge €
                                    <span id="extra_seat_charge"></span> <span class="btn btn-sm btn-default"
                                                                               id="remove_extra_seat"><i
                                            class="fa fa-times" aria-hidden="true"></i></span></div>
                                <div class="totlbkamnt"> Total Amount <span class="total_amount_span">€ </span>
                                    <span id="total_booking_amount">1771</span></div>
                                <input type="hidden" value="1771" id="new_total_booking_amount"> <input
                                    type="hidden" value="1610" id="flight_amount"> <a class="fligthdets"
                                                                                      data-toggle="collapse"
                                                                                      data-target="#fligtdetails">Flight
                                    Details</a></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>                <!-- Segment Details Starts-->
                    <div class="collapse splbukdets" id="fligtdetails">
                        <div class="moreflt insideagain">
                            <div class="ontyp">
                                <div class="labltowr arimobold">Douala to Paris</div>
                                <div class="allboxflt">
                                    <div class="col-xs-3 nopadding width_adjst">
                                        <div class="jetimg"><img alt="LX"
                                                                 src="/extras/system/library/images/airline_logo/LX.gif">
                                        </div>
                                        <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									4538</span></div>
                                    </div>
                                    <div class="col-xs-7 nopadding width_adjst">
                                        <div class="col-xs-6"><span
                                                class="airlblxl">22 Aug 2022, 19:00</span><span class="portnme">Douala (DLA)</span>
                                        </div>
                                        <div class="col-xs-6"><span
                                                class="airlblxl">22 Aug 2022, 19:50</span><span class="portnme">Yaounde (NSI)</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 nopadding width_adjst"><span class="portnme textcntr">50m </span><span
                                            class="portnme textcntr">Stop : 0</span></div>
                                </div>
                                <div class="allboxflt">
                                    <div class="col-xs-3 nopadding width_adjst">
                                        <div class="jetimg"><img alt="LX"
                                                                 src="/extras/system/library/images/airline_logo/LX.gif">
                                        </div>
                                        <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									4538</span></div>
                                    </div>
                                    <div class="col-xs-7 nopadding width_adjst">
                                        <div class="col-xs-6"><span
                                                class="airlblxl">22 Aug 2022, 21:05</span><span class="portnme">Yaounde (NSI)</span>
                                        </div>
                                        <div class="col-xs-6"><span
                                                class="airlblxl">23 Aug 2022, 05:05</span><span class="portnme">Brussels (BRU)</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 nopadding width_adjst"><span class="portnme textcntr">7h </span><span
                                            class="portnme textcntr">Stop : 1</span></div>
                                </div>
                                <div class="allboxflt">
                                    <div class="col-xs-3 nopadding width_adjst">
                                        <div class="jetimg"><img alt="LX"
                                                                 src="/extras/system/library/images/airline_logo/LX.gif">
                                        </div>
                                        <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									789</span></div>
                                    </div>
                                    <div class="col-xs-7 nopadding width_adjst">
                                        <div class="col-xs-6"><span
                                                class="airlblxl">23 Aug 2022, 20:15</span><span class="portnme">Brussels (BRU)</span>
                                        </div>
                                        <div class="col-xs-6"><span
                                                class="airlblxl">23 Aug 2022, 21:20</span><span class="portnme">Zurich (ZRH)</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 nopadding width_adjst"><span class="portnme textcntr">1h 5m </span><span
                                            class="portnme textcntr">Stop : 2</span></div>
                                </div>
                                <div class="allboxflt">
                                    <div class="col-xs-3 nopadding width_adjst">
                                        <div class="jetimg"><img alt="LX"
                                                                 src="/extras/system/library/images/airline_logo/LX.gif">
                                        </div>
                                        <div class="alldiscrpo">Swiss air<span class="sgsmal">LX
									632</span></div>
                                    </div>
                                    <div class="col-xs-7 nopadding width_adjst">
                                        <div class="col-xs-6"><span
                                                class="airlblxl">24 Aug 2022, 07:30</span><span class="portnme">Zurich (ZRH)</span>
                                        </div>
                                        <div class="col-xs-6"><span
                                                class="airlblxl">24 Aug 2022, 09:00</span><span class="portnme">Paris (CDG)</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 nopadding width_adjst"><span class="portnme textcntr">1h 30m </span><span
                                            class="portnme textcntr">Stop : 3</span></div>
                                </div>
                            </div>
                        </div>
                    </div>                <!-- Segment Details Ends-->

                    <div class="clearfix"></div>
                    <div class="padpaspotr">
                        <div class="col-md-8 col-xs-12 nopadding tab_pasnger">
                            <!-- Insuarance design starts here-->
                            <div class="wrapper center-block insrnce mt10 ">
                                <div class="panel-group mb0" id="accordion" role="tablist"
                                     aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading active" role="tab" id="headingOne">
                                            <h4 class="panel-title"><a role="button" data-toggle="collapse"
                                                                       data-parent="#accordion"
                                                                       href="#collapseOne" aria-expanded="true"
                                                                       aria-controls="collapseOne"><h5><i
                                                            class="fas fa-hand-holding-usd"></i> <strong>40% of
                                                            our customers insure their trip.</strong> See all
                                                        the benefits you get for just Rs </h5>
                                                    <!-- <span><img src="/extras/system/template_list/template_v1/images/ins.png"></span> -->
                                                </a></h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="insrnc_lst">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Trip Cancellation</span>
                                                        <span class="blk ins_clm"> <span class="ins_clm_cont">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt flt_dly blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Flight Delay</span>
                                                        <span class="blk ins_clm"> <span class="ins_clm_cont">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt los_bag blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Loss of baggage</span>
                                                        <span class="blk ins_clm"> <span class="ins_clm_cont">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_plus"
                                                     style="overflow: hidden; display: block;">
                                                    <div class="insrnc_info"><span
                                                            class="ins_plus blk robotomedium">+7</span> <span
                                                            class="blk font_12">View more</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt dely_bag blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Delay of baggage</span>
                                                        <span class="blk ins_clm"> <span class="ins_clm_cont">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt prsnl_acdnt blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Personal Accident</span>
                                                        <span class="blk ins_clm"> <span class="ins_clm_cont">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt acdnt_mdcl blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Accidental Medical Treatment</span>
                                                        <span class="blk ins_clm"> <span
                                                                class="insurance_claim_txt">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt trnsprt_mort blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Transportation of Mortal Remains</span>
                                                        <span class="blk ins_clm"> <span
                                                                class="insurance_claim_txt">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt trp_dely blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Trip Delay</span>
                                                        <span class="blk ins_clm"> <span
                                                                class="insurance_claim_txt">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt emrcny_htl blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Emergency Hotel</span>
                                                        <span class="blk ins_clm"> <span
                                                                class="insurance_claim_txt">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info"><span class="insrnc_img">                                                            <span
                                                                class="insrnc_flt emrcny_trvl blk"></span>                                                        </span>
                                                        <span class="blk ins_titl robotomedium ins_cont">Emergency Travel</span>
                                                        <span class="blk ins_clm"> <span
                                                                class="insurance_claim_txt">Claim upto </span><span
                                                                class="INR">Rs </span>20,000</span></div>
                                                </div>
                                                <div class="insrnc_lst cont_show">
                                                    <div class="insrnc_info cont_minus"
                                                         style="overflow: hidden; display: block;"><span
                                                            class="ins_plus blk robotomedium"></span> <span
                                                            class="blk font_12 ins_plus">Show Less -</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            <!-- Insuarance design ends here-->
                            <div class="fligthsdets">
                                <form action="https://warfira.com/index.php/flight/pre_booking/17013"
                                      method="POST" autocomplete="off" id="pre-booking-form">
                                    <div class="hide"><input type="hidden" required="required" name="search_id"
                                                             value="17013"> <input type="hidden"
                                                                                   required="required"
                                                                                   name="token"
                                                                                   value="YTo4OntzOjExOiJpc19kb21lc3RpYyI7czowOiIiO3M6NToidG9rZW4iO2E6MTp7aTowO2E6MTA6e3M6MTM6IkFpcmxpbmVSZW1hcmsiO3M6MDoiIjtzOjExOiJGYXJlRGV0YWlscyI7YToyOntzOjE2OiJiMmNfUHJpY2VEZXRhaWxzIjthOjY6e3M6ODoiQmFzZUZhcmUiO2Q6NTI0LjM2MDAwMDAwMDAwMDAxO3M6ODoiVG90YWxUYXgiO2Q6MTA4NS4yMTtzOjk6IlRvdGFsRmFyZSI7ZDoxNjA5LjU2OTk5OTk5OTk5OTk7czo4OiJDdXJyZW5jeSI7czozOiJFVVIiO3M6MTQ6IkN1cnJlbmN5U3ltYm9sIjtzOjM6IuKCrCI7czo0OiJfR1NUIjtzOjQ6IjAuMDAiO31zOjE2OiJhcGlfUHJpY2VEZXRhaWxzIjthOjk6e3M6ODoiQ3VycmVuY3kiO3M6MzoiRVVSIjtzOjg6IkJhc2VGYXJlIjtkOjUyNC4zNjAwMDAwMDAwMDAwMTtzOjM6IlRheCI7ZDoxMDg1LjIxO3M6MTM6IlB1Ymxpc2hlZEZhcmUiO2Q6MTYwOS41Njk5OTk5OTk5OTk5O3M6MTU6IkFnZW50Q29tbWlzc2lvbiI7ZDowO3M6MTk6IkFnZW50VGRzT25Db21taXNpb24iO2Q6MDtzOjExOiJPZmZlcmVkRmFyZSI7ZDoxNjA5LjU2OTk5OTk5OTk5OTk7czoxNToib3JpZ2luYWxfbWFya3VwIjtOO3M6MTE6Im1hcmt1cF90eXBlIjtOO319czoyNjoiYXBpX29yaWdpbmFsX3ByaWNlX2RldGFpbHMiO2E6NDp7czo4OiJDdXJyZW5jeSI7czozOiJVU0QiO3M6MTY6IlRvdGFsRGlzcGxheUZhcmUiO2Q6MTcxMi4zMDg7czoxMjoiUHJpY2VCcmVha3VwIjthOjQ6e3M6OToiQmFzaWNGYXJlIjtkOjU1Ny44Mjg5OTk5OTk5OTk5NTtzOjM6IlRheCI7ZDoxMTU0LjQ3OTtzOjE1OiJBZ2VudENvbW1pc3Npb24iO2k6MDtzOjE5OiJBZ2VudFRkc09uQ29tbWlzaW9uIjtpOjA7fXM6MTY6IlBhc3NlbmdlckJyZWFrdXAiO2E6MTp7czozOiJBRFQiO2E6NDp7czo5OiJCYXNlUHJpY2UiO2Q6NTU3LjgyODk5OTk5OTk5OTk1O3M6MzoiVGF4IjtkOjExNTQuNDc5O3M6MTA6IlRvdGFsUHJpY2UiO2Q6MTcxMi4zMDg7czoxNDoiUGFzc2VuZ2VyQ291bnQiO3M6MToiMSI7fX19czoyMjoiUGFzc2VuZ2VyRmFyZUJyZWFrZG93biI7YToxOntzOjM6IkFEVCI7YTo0OntzOjM6IlRheCI7ZDoxMTU0LjQ3OTtzOjEwOiJUb3RhbFByaWNlIjtkOjE3MTIuMzA4O3M6MTQ6IlBhc3NlbmdlckNvdW50IjtzOjE6IjEiO3M6ODoiQmFzZUZhcmUiO2Q6NTI0LjM2MDAwMDAwMDAwMDAxO319czoxNDoiU2VnbWVudFN1bW1hcnkiO2E6MTp7aTowO2E6NTp7czoxNDoiQWlybGluZURldGFpbHMiO2E6NTp7czoxMToiQWlybGluZUNvZGUiO3M6MjoiTFgiO3M6MTE6IkFpcmxpbmVOYW1lIjtzOjk6IlN3aXNzIGFpciI7czoxMjoiRmxpZ2h0TnVtYmVyIjtzOjQ6IjQ1MzgiO3M6OToiRmFyZUNsYXNzIjtzOjc6IkVDT05PTVkiO3M6MTM6IkZhcmVDbGFzc0NvZGUiO047fXM6MTM6Ik9yaWdpbkRldGFpbHMiO2E6Nzp7czoxMToiQWlycG9ydENvZGUiO3M6MzoiRExBIjtzOjg6IkNpdHlOYW1lIjtzOjY6IkRvdWFsYSI7czoxMToiQWlycG9ydE5hbWUiO3M6NjoiRG91YWxhIjtzOjg6IkRhdGVUaW1lIjtzOjE2OiIyMDIyLTA4LTIyIDE5OjAwIjtzOjQ6IkZEVFYiO2k6MTY2MTAwMjIwMDtzOjk6Il9EYXRlVGltZSI7czo1OiIxOTowMCI7czo1OiJfRGF0ZSI7czoxMDoiMjItMDgtMjAyMiI7fXM6MTg6IkRlc3RpbmF0aW9uRGV0YWlscyI7YTo3OntzOjExOiJBaXJwb3J0Q29kZSI7czozOiJDREciO3M6ODoiQ2l0eU5hbWUiO3M6NToiUGFyaXMiO3M6MTE6IkFpcnBvcnROYW1lIjtzOjU6IlBhcmlzIjtzOjg6IkRhdGVUaW1lIjtzOjE2OiIyMDIyLTA4LTI0IDA5OjAwIjtzOjQ6IkZBVFYiO2k6MTY2MDk2NjIwMDtzOjk6Il9EYXRlVGltZSI7czo1OiIwOTowMCI7czo1OiJfRGF0ZSI7czoxMDoiMjQtMDgtMjAyMiI7fXM6MTA6IlRvdGFsU3RvcHMiO2k6MztzOjE0OiJUb3RhbER1YXJhdGlvbiI7czo0OiIzN2ggIjt9fXM6MTQ6IlNlZ21lbnREZXRhaWxzIjthOjE6e2k6MDthOjQ6e2k6MDthOjg6e3M6NzoiQmFnZ2FnZSI7TjtzOjEyOiJDYWJpbkJhZ2dhZ2UiO3M6NzoiNUtHLDNLRyI7czoxNDoiQWlybGluZURldGFpbHMiO2E6NTp7czoxMToiQWlybGluZUNvZGUiO3M6MjoiTFgiO3M6MTE6IkFpcmxpbmVOYW1lIjtzOjk6IlN3aXNzIGFpciI7czoxMjoiRmxpZ2h0TnVtYmVyIjtzOjQ6IjQ1MzgiO3M6OToiRmFyZUNsYXNzIjtzOjc6IkVDT05PTVkiO3M6MTM6IkZhcmVDbGFzc0NvZGUiO047fXM6MTM6Ik9yaWdpbkRldGFpbHMiO2E6Nzp7czoxMToiQWlycG9ydENvZGUiO3M6MzoiRExBIjtzOjg6IkNpdHlOYW1lIjtzOjY6IkRvdWFsYSI7czoxMToiQWlycG9ydE5hbWUiO3M6NjoiRG91YWxhIjtzOjg6IkRhdGVUaW1lIjtzOjE2OiIyMDIyLTA4LTIyIDE5OjAwIjtzOjQ6IkZEVFYiO2k6MTY2MTAwMjIwMDtzOjk6Il9EYXRlVGltZSI7czo1OiIxOTowMCI7czo1OiJfRGF0ZSI7czoxMDoiMjItMDgtMjAyMiI7fXM6MTg6IkRlc3RpbmF0aW9uRGV0YWlscyI7YTo3OntzOjExOiJBaXJwb3J0Q29kZSI7czozOiJOU0kiO3M6ODoiQ2l0eU5hbWUiO3M6NzoiWWFvdW5kZSI7czoxMToiQWlycG9ydE5hbWUiO3M6NzoiWWFvdW5kZSI7czo4OiJEYXRlVGltZSI7czoxNjoiMjAyMi0wOC0yMiAxOTo1MCI7czo0OiJGQVRWIjtpOjE2NjEwMDUyMDA7czo5OiJfRGF0ZVRpbWUiO3M6NToiMTk6NTAiO3M6NToiX0RhdGUiO3M6MTA6IjIyLTA4LTIwMjIiO31zOjE1OiJTZWdtZW50RHVyYXRpb24iO3M6NDoiNTBtICI7czo4OiJTdG9wT3ZlciI7czowOiIiO3M6MTE6IldhaXRpbmdUaW1lIjtzOjc6IjFoIDE1bSAiO31pOjE7YTo4OntzOjc6IkJhZ2dhZ2UiO047czoxMjoiQ2FiaW5CYWdnYWdlIjtzOjc6IjVLRywzS0ciO3M6MTQ6IkFpcmxpbmVEZXRhaWxzIjthOjU6e3M6MTE6IkFpcmxpbmVDb2RlIjtzOjI6IkxYIjtzOjExOiJBaXJsaW5lTmFtZSI7czo5OiJTd2lzcyBhaXIiO3M6MTI6IkZsaWdodE51bWJlciI7czo0OiI0NTM4IjtzOjk6IkZhcmVDbGFzcyI7czo3OiJFQ09OT01ZIjtzOjEzOiJGYXJlQ2xhc3NDb2RlIjtOO31zOjEzOiJPcmlnaW5EZXRhaWxzIjthOjc6e3M6MTE6IkFpcnBvcnRDb2RlIjtzOjM6Ik5TSSI7czo4OiJDaXR5TmFtZSI7czo3OiJZYW91bmRlIjtzOjExOiJBaXJwb3J0TmFtZSI7czo3OiJZYW91bmRlIjtzOjg6IkRhdGVUaW1lIjtzOjE2OiIyMDIyLTA4LTIyIDIxOjA1IjtzOjQ6IkZEVFYiO2k6MTY2MTAwOTcwMDtzOjk6Il9EYXRlVGltZSI7czo1OiIyMTowNSI7czo1OiJfRGF0ZSI7czoxMDoiMjItMDgtMjAyMiI7fXM6MTg6IkRlc3RpbmF0aW9uRGV0YWlscyI7YTo3OntzOjExOiJBaXJwb3J0Q29kZSI7czozOiJCUlUiO3M6ODoiQ2l0eU5hbWUiO3M6ODoiQnJ1c3NlbHMiO3M6MTE6IkFpcnBvcnROYW1lIjtzOjg6IkJydXNzZWxzIjtzOjg6IkRhdGVUaW1lIjtzOjE2OiIyMDIyLTA4LTIzIDA1OjA1IjtzOjQ6IkZBVFYiO2k6MTY2MDk1MjEwMDtzOjk6Il9EYXRlVGltZSI7czo1OiIwNTowNSI7czo1OiJfRGF0ZSI7czoxMDoiMjMtMDgtMjAyMiI7fXM6MTU6IlNlZ21lbnREdXJhdGlvbiI7czozOiI3aCAiO3M6ODoiU3RvcE92ZXIiO3M6MDoiIjtzOjExOiJXYWl0aW5nVGltZSI7czo4OiIxNWggMTBtICI7fWk6MjthOjg6e3M6NzoiQmFnZ2FnZSI7TjtzOjEyOiJDYWJpbkJhZ2dhZ2UiO3M6NzoiNUtHLDNLRyI7czoxNDoiQWlybGluZURldGFpbHMiO2E6NTp7czoxMToiQWlybGluZUNvZGUiO3M6MjoiTFgiO3M6MTE6IkFpcmxpbmVOYW1lIjtzOjk6IlN3aXNzIGFpciI7czoxMjoiRmxpZ2h0TnVtYmVyIjtzOjM6Ijc4OSI7czo5OiJGYXJlQ2xhc3MiO3M6NzoiRUNPTk9NWSI7czoxMzoiRmFyZUNsYXNzQ29kZSI7Tjt9czoxMzoiT3JpZ2luRGV0YWlscyI7YTo3OntzOjExOiJBaXJwb3J0Q29kZSI7czozOiJCUlUiO3M6ODoiQ2l0eU5hbWUiO3M6ODoiQnJ1c3NlbHMiO3M6MTE6IkFpcnBvcnROYW1lIjtzOjg6IkJydXNzZWxzIjtzOjg6IkRhdGVUaW1lIjtzOjE2OiIyMDIyLTA4LTIzIDIwOjE1IjtzOjQ6IkZEVFYiO2k6MTY2MTAwNjcwMDtzOjk6Il9EYXRlVGltZSI7czo1OiIyMDoxNSI7czo1OiJfRGF0ZSI7czoxMDoiMjMtMDgtMjAyMiI7fXM6MTg6IkRlc3RpbmF0aW9uRGV0YWlscyI7YTo3OntzOjExOiJBaXJwb3J0Q29kZSI7czozOiJaUkgiO3M6ODoiQ2l0eU5hbWUiO3M6NjoiWnVyaWNoIjtzOjExOiJBaXJwb3J0TmFtZSI7czo2OiJadXJpY2giO3M6ODoiRGF0ZVRpbWUiO3M6MTY6IjIwMjItMDgtMjMgMjE6MjAiO3M6NDoiRkFUViI7aToxNjYxMDEwNjAwO3M6OToiX0RhdGVUaW1lIjtzOjU6IjIxOjIwIjtzOjU6Il9EYXRlIjtzOjEwOiIyMy0wOC0yMDIyIjt9czoxNToiU2VnbWVudER1cmF0aW9uIjtzOjY6IjFoIDVtICI7czo4OiJTdG9wT3ZlciI7czowOiIiO3M6MTE6IldhaXRpbmdUaW1lIjtzOjg6IjEwaCAxMG0gIjt9aTozO2E6Nzp7czo3OiJCYWdnYWdlIjtOO3M6MTI6IkNhYmluQmFnZ2FnZSI7czo3OiI1S0csM0tHIjtzOjE0OiJBaXJsaW5lRGV0YWlscyI7YTo1OntzOjExOiJBaXJsaW5lQ29kZSI7czoyOiJMWCI7czoxMToiQWlybGluZU5hbWUiO3M6OToiU3dpc3MgYWlyIjtzOjEyOiJGbGlnaHROdW1iZXIiO3M6MzoiNjMyIjtzOjk6IkZhcmVDbGFzcyI7czo3OiJFQ09OT01ZIjtzOjEzOiJGYXJlQ2xhc3NDb2RlIjtOO31zOjEzOiJPcmlnaW5EZXRhaWxzIjthOjc6e3M6MTE6IkFpcnBvcnRDb2RlIjtzOjM6IlpSSCI7czo4OiJDaXR5TmFtZSI7czo2OiJadXJpY2giO3M6MTE6IkFpcnBvcnROYW1lIjtzOjY6Ilp1cmljaCI7czo4OiJEYXRlVGltZSI7czoxNjoiMjAyMi0wOC0yNCAwNzozMCI7czo0OiJGRFRWIjtpOjE2NjA5NjA4MDA7czo5OiJfRGF0ZVRpbWUiO3M6NToiMDc6MzAiO3M6NToiX0RhdGUiO3M6MTA6IjI0LTA4LTIwMjIiO31zOjE4OiJEZXN0aW5hdGlvbkRldGFpbHMiO2E6Nzp7czoxMToiQWlycG9ydENvZGUiO3M6MzoiQ0RHIjtzOjg6IkNpdHlOYW1lIjtzOjU6IlBhcmlzIjtzOjExOiJBaXJwb3J0TmFtZSI7czo1OiJQYXJpcyI7czo4OiJEYXRlVGltZSI7czoxNjoiMjAyMi0wOC0yNCAwOTowMCI7czo0OiJGQVRWIjtpOjE2NjA5NjYyMDA7czo5OiJfRGF0ZVRpbWUiO3M6NToiMDk6MDAiO3M6NToiX0RhdGUiO3M6MTA6IjI0LTA4LTIwMjIiO31zOjE1OiJTZWdtZW50RHVyYXRpb24iO3M6NzoiMWggMzBtICI7czo4OiJTdG9wT3ZlciI7czowOiIiO319fXM6MTM6IlByb3ZhYkF1dGhLZXkiO3M6NTY6IjhmYTZkNGViMDhhZjg3NDk1ZjI1ZjU1YzlhNmNhMWNjKl8qMTkqXypQTUpFTmU2djdpcTJQVlFJIjtzOjE0OiJib29raW5nX3NvdXJjZSI7czoxNjoiUFRCU0lEMDAwMDAwMDAwMiI7czoxMDoiSG9sZFRpY2tldCI7YjoxO3M6NDoiQXR0ciI7YTozOntzOjEyOiJJc1JlZnVuZGFibGUiO3M6MDoiIjtzOjEzOiJBaXJsaW5lUmVtYXJrIjtzOjA6IiI7czozOiJBUEkiO3M6NzoiUEsgRmFyZSI7fX19czo5OiJ0b2tlbl9rZXkiO2E6MTp7aTowO3M6NDcyNDoiWVRvMU9udHpPakV6T2lKR2JHbG5hSFJFWlhSaGFXeHpJanRoT2pFNmUzTTZOem9pUkdWMFlXbHNjeUk3WVRveE9udHBPakE3WVRvME9udHBPakE3WVRveE16cDdjem8yT2lKUGNtbG5hVzRpTzJFNk5UcDdjem94TVRvaVFXbHljRzl5ZEVOdlpHVWlPM002TXpvaVJFeEJJanR6T2pnNklrTnBkSGxPWVcxbElqdHpPalk2SWtSdmRXRnNZU0k3Y3pveE1Ub2lRV2x5Y0c5eWRFNWhiV1VpTzNNNk5qb2lSRzkxWVd4aElqdHpPamc2SWtSaGRHVlVhVzFsSWp0ek9qRTJPaUl5TURJeUxUQTRMVEl5SURFNU9qQXdJanR6T2pRNklrWkVWRllpTzJrNk1UWTJNVEF3TWpJd01EdDljem94TVRvaVJHVnpkR2x1WVhScGIyNGlPMkU2TlRwN2N6b3hNVG9pUVdseWNHOXlkRU52WkdVaU8zTTZNem9pVGxOSklqdHpPamc2SWtOcGRIbE9ZVzFsSWp0ek9qYzZJbGxoYjNWdVpHVWlPM002TVRFNklrRnBjbkJ2Y25ST1lXMWxJanR6T2pjNklsbGhiM1Z1WkdVaU8zTTZPRG9pUkdGMFpWUnBiV1VpTzNNNk1UWTZJakl3TWpJdE1EZ3RNaklnTVRrNk5UQWlPM002TkRvaVJrRlVWaUk3YVRveE5qWXhNREExTWpBd08zMXpPakV5T2lKUGNHVnlZWFJ2Y2tOdlpHVWlPM002TWpvaVRGZ2lPM002TVRrNklrUnBjM0JzWVhsUGNHVnlZWFJ2Y2tOdlpHVWlPM002TURvaUlqdHpPakUzT2lKV1lXeHBaR0YwYVc1blFXbHliR2x1WlNJN2N6b3dPaUlpTzNNNk1USTZJazl3WlhKaGRHOXlUbUZ0WlNJN2N6bzVPaUpUZDJsemN5QmhhWElpTzNNNk1USTZJa1pzYVdkb2RFNTFiV0psY2lJN2N6bzBPaUkwTlRNNElqdHpPakV3T2lKRFlXSnBia05zWVhOeklqdHpPamM2SWtWRFQwNVBUVmtpTzNNNk1UYzZJazl3WlhKaGRHVmtZbmxoYVhKc2FXNWxJanRPTzNNNk1qRTZJazl3WlhKaGRHVmtZbmxoYVhKc2FXNWxibUZ0WlNJN1RqdHpPamc2SWtSMWNtRjBhVzl1SWp0cE9qWXlOVHR6T2pRNklrRjBkSElpTzJFNk1qcDdjem8zT2lKQ1lXZG5ZV2RsSWp0T08zTTZNVEk2SWtOaFltbHVRbUZuWjJGblpTSTdjem8zT2lJMVMwY3NNMHRISWp0OWN6bzVPaUp6ZEc5d1gyOTJaWElpTzNNNk1Eb2lJanQ5YVRveE8yRTZNVE02ZTNNNk5qb2lUM0pwWjJsdUlqdGhPalU2ZTNNNk1URTZJa0ZwY25CdmNuUkRiMlJsSWp0ek9qTTZJazVUU1NJN2N6bzRPaUpEYVhSNVRtRnRaU0k3Y3pvM09pSlpZVzkxYm1SbElqdHpPakV4T2lKQmFYSndiM0owVG1GdFpTSTdjem8zT2lKWllXOTFibVJsSWp0ek9qZzZJa1JoZEdWVWFXMWxJanR6T2pFMk9pSXlNREl5TFRBNExUSXlJREl4T2pBMUlqdHpPalE2SWtaRVZGWWlPMms2TVRZMk1UQXdPVGN3TUR0OWN6b3hNVG9pUkdWemRHbHVZWFJwYjI0aU8yRTZOVHA3Y3pveE1Ub2lRV2x5Y0c5eWRFTnZaR1VpTzNNNk16b2lRbEpWSWp0ek9qZzZJa05wZEhsT1lXMWxJanR6T2pnNklrSnlkWE56Wld4eklqdHpPakV4T2lKQmFYSndiM0owVG1GdFpTSTdjem80T2lKQ2NuVnpjMlZzY3lJN2N6bzRPaUpFWVhSbFZHbHRaU0k3Y3pveE5qb2lNakF5TWkwd09DMHlNeUF3TlRvd05TSTdjem8wT2lKR1FWUldJanRwT2pFMk5qQTVOVEl4TURBN2ZYTTZNVEk2SWs5d1pYSmhkRzl5UTI5a1pTSTdjem95T2lKTVdDSTdjem94T1RvaVJHbHpjR3hoZVU5d1pYSmhkRzl5UTI5a1pTSTdjem93T2lJaU8zTTZNVGM2SWxaaGJHbGtZWFJwYm1kQmFYSnNhVzVsSWp0ek9qQTZJaUk3Y3pveE1qb2lUM0JsY21GMGIzSk9ZVzFsSWp0ek9qazZJbE4zYVhOeklHRnBjaUk3Y3pveE1qb2lSbXhwWjJoMFRuVnRZbVZ5SWp0ek9qUTZJalExTXpnaU8zTTZNVEE2SWtOaFltbHVRMnhoYzNNaU8zTTZOem9pUlVOUFRrOU5XU0k3Y3pveE56b2lUM0JsY21GMFpXUmllV0ZwY214cGJtVWlPMDQ3Y3pveU1Ub2lUM0JsY21GMFpXUmllV0ZwY214cGJtVnVZVzFsSWp0T08zTTZPRG9pUkhWeVlYUnBiMjRpTzJrNk5qSTFPM002TkRvaVFYUjBjaUk3WVRveU9udHpPamM2SWtKaFoyZGhaMlVpTzA0N2N6b3hNam9pUTJGaWFXNUNZV2RuWVdkbElqdHpPamM2SWpWTFJ5d3pTMGNpTzMxek9qazZJbk4wYjNCZmIzWmxjaUk3Y3pvd09pSWlPMzFwT2pJN1lUb3hNenA3Y3pvMk9pSlBjbWxuYVc0aU8yRTZOVHA3Y3pveE1Ub2lRV2x5Y0c5eWRFTnZaR1VpTzNNNk16b2lRbEpWSWp0ek9qZzZJa05wZEhsT1lXMWxJanR6T2pnNklrSnlkWE56Wld4eklqdHpPakV4T2lKQmFYSndiM0owVG1GdFpTSTdjem80T2lKQ2NuVnpjMlZzY3lJN2N6bzRPaUpFWVhSbFZHbHRaU0k3Y3pveE5qb2lNakF5TWkwd09DMHlNeUF5TURveE5TSTdjem8wT2lKR1JGUldJanRwT2pFMk5qRXdNRFkzTURBN2ZYTTZNVEU2SWtSbGMzUnBibUYwYVc5dUlqdGhPalU2ZTNNNk1URTZJa0ZwY25CdmNuUkRiMlJsSWp0ek9qTTZJbHBTU0NJN2N6bzRPaUpEYVhSNVRtRnRaU0k3Y3pvMk9pSmFkWEpwWTJnaU8zTTZNVEU2SWtGcGNuQnZjblJPWVcxbElqdHpPalk2SWxwMWNtbGphQ0k3Y3pvNE9pSkVZWFJsVkdsdFpTSTdjem94TmpvaU1qQXlNaTB3T0MweU15QXlNVG95TUNJN2N6bzBPaUpHUVZSV0lqdHBPakUyTmpFd01UQTJNREE3ZlhNNk1USTZJazl3WlhKaGRHOXlRMjlrWlNJN2N6b3lPaUpNV0NJN2N6b3hPVG9pUkdsemNHeGhlVTl3WlhKaGRHOXlRMjlrWlNJN2N6b3dPaUlpTzNNNk1UYzZJbFpoYkdsa1lYUnBibWRCYVhKc2FXNWxJanR6T2pBNklpSTdjem94TWpvaVQzQmxjbUYwYjNKT1lXMWxJanR6T2prNklsTjNhWE56SUdGcGNpSTdjem94TWpvaVJteHBaMmgwVG5WdFltVnlJanR6T2pNNklqYzRPU0k3Y3pveE1Eb2lRMkZpYVc1RGJHRnpjeUk3Y3pvM09pSkZRMDlPVDAxWklqdHpPakUzT2lKUGNHVnlZWFJsWkdKNVlXbHliR2x1WlNJN1RqdHpPakl4T2lKUGNHVnlZWFJsWkdKNVlXbHliR2x1Wlc1aGJXVWlPMDQ3Y3pvNE9pSkVkWEpoZEdsdmJpSTdhVG8yTWpVN2N6bzBPaUpCZEhSeUlqdGhPakk2ZTNNNk56b2lRbUZuWjJGblpTSTdUanR6T2pFeU9pSkRZV0pwYmtKaFoyZGhaMlVpTzNNNk56b2lOVXRITEROTFJ5STdmWE02T1RvaWMzUnZjRjl2ZG1WeUlqdHpPakE2SWlJN2ZXazZNenRoT2pFek9udHpPalk2SWs5eWFXZHBiaUk3WVRvMU9udHpPakV4T2lKQmFYSndiM0owUTI5a1pTSTdjem96T2lKYVVrZ2lPM002T0RvaVEybDBlVTVoYldVaU8zTTZOam9pV25WeWFXTm9JanR6T2pFeE9pSkJhWEp3YjNKMFRtRnRaU0k3Y3pvMk9pSmFkWEpwWTJnaU8zTTZPRG9pUkdGMFpWUnBiV1VpTzNNNk1UWTZJakl3TWpJdE1EZ3RNalFnTURjNk16QWlPM002TkRvaVJrUlVWaUk3YVRveE5qWXdPVFl3T0RBd08zMXpPakV4T2lKRVpYTjBhVzVoZEdsdmJpSTdZVG8xT250ek9qRXhPaUpCYVhKd2IzSjBRMjlrWlNJN2N6b3pPaUpEUkVjaU8zTTZPRG9pUTJsMGVVNWhiV1VpTzNNNk5Ub2lVR0Z5YVhNaU8zTTZNVEU2SWtGcGNuQnZjblJPWVcxbElqdHpPalU2SWxCaGNtbHpJanR6T2pnNklrUmhkR1ZVYVcxbElqdHpPakUyT2lJeU1ESXlMVEE0TFRJMElEQTVPakF3SWp0ek9qUTZJa1pCVkZZaU8yazZNVFkyTURrMk5qSXdNRHQ5Y3pveE1qb2lUM0JsY21GMGIzSkRiMlJsSWp0ek9qSTZJa3hZSWp0ek9qRTVPaUpFYVhOd2JHRjVUM0JsY21GMGIzSkRiMlJsSWp0ek9qQTZJaUk3Y3pveE56b2lWbUZzYVdSaGRHbHVaMEZwY214cGJtVWlPM002TURvaUlqdHpPakV5T2lKUGNHVnlZWFJ2Y2s1aGJXVWlPM002T1RvaVUzZHBjM01nWVdseUlqdHpPakV5T2lKR2JHbG5hSFJPZFcxaVpYSWlPM002TXpvaU5qTXlJanR6T2pFd09pSkRZV0pwYmtOc1lYTnpJanR6T2pjNklrVkRUMDVQVFZraU8zTTZNVGM2SWs5d1pYSmhkR1ZrWW5saGFYSnNhVzVsSWp0T08zTTZNakU2SWs5d1pYSmhkR1ZrWW5saGFYSnNhVzVsYm1GdFpTSTdUanR6T2pnNklrUjFjbUYwYVc5dUlqdHBPall5TlR0ek9qUTZJa0YwZEhJaU8yRTZNanA3Y3pvM09pSkNZV2RuWVdkbElqdE9PM002TVRJNklrTmhZbWx1UW1GbloyRm5aU0k3Y3pvM09pSTFTMGNzTTB0SElqdDljem81T2lKemRHOXdYMjkyWlhJaU8zTTZNRG9pSWp0OWZYMTljem8xT2lKUWNtbGpaU0k3WVRvME9udHpPamc2SWtOMWNuSmxibU41SWp0ek9qTTZJbFZUUkNJN2N6b3hOam9pVkc5MFlXeEVhWE53YkdGNVJtRnlaU0k3WkRveE56RXlMak13T0R0ek9qRXlPaUpRY21salpVSnlaV0ZyZFhBaU8yRTZORHA3Y3pvNU9pSkNZWE5wWTBaaGNtVWlPMlE2TlRVM0xqZ3lPRGs1T1RrNU9UazVPVGsxTzNNNk16b2lWR0Y0SWp0a09qRXhOVFF1TkRjNU8zTTZNVFU2SWtGblpXNTBRMjl0YldsemMybHZiaUk3YVRvd08zTTZNVGs2SWtGblpXNTBWR1J6VDI1RGIyMXRhWE5wYjI0aU8yazZNRHQ5Y3pveE5qb2lVR0Z6YzJWdVoyVnlRbkpsWVd0MWNDSTdZVG94T250ek9qTTZJa0ZFVkNJN1lUbzBPbnR6T2prNklrSmhjMlZRY21salpTSTdaRG8xTlRjdU9ESTRPVGs1T1RrNU9UazVPVFU3Y3pvek9pSlVZWGdpTzJRNk1URTFOQzQwTnprN2N6b3hNRG9pVkc5MFlXeFFjbWxqWlNJN1pEb3hOekV5TGpNd09EdHpPakUwT2lKUVlYTnpaVzVuWlhKRGIzVnVkQ0k3Y3pveE9pSXhJanQ5Zlgxek9qUTZJa0YwZEhJaU8yRTZNenA3Y3pveE1qb2lTWE5TWldaMWJtUmhZbXhsSWp0ek9qQTZJaUk3Y3pveE16b2lRV2x5YkdsdVpWSmxiV0Z5YXlJN2N6b3dPaUlpTzNNNk16b2lRVkJKSWp0ek9qYzZJbEJMSUVaaGNtVWlPMzF6T2pFeE9pSlNaWE4xYkhSVWIydGxiaUk3Y3pvMU5qb2lPR1poTm1RMFpXSXdPR0ZtT0RjME9UVm1NalZtTlRWak9XRTJZMkV4WTJNcVh5b3hPU3BmS2xCTlNrVk9aVFoyTjJseE1sQldVVWtpTzNNNk1UQTZJa2h2YkdSVWFXTnJaWFFpTzJJNk1UdDkiO31zOjE3OiJzZWFyY2hfYWNjZXNzX2tleSI7YToxOntpOjA7czo1NToiOGZhNmQ0ZWIwOGFmODc0OTVmMjVmNTVjOWE2Y2ExY2MqXyozKl8qMjl1VWx5V0JPTHBNNDZRbiI7fXM6MjE6InByb21vdGlvbmFsX3BsYW5fdHlwZSI7YToxOntpOjA7czoxNjoiUFRCU0lEMDAwMDAwMDAwMiI7fXM6MTQ6ImJvb2tpbmdfc291cmNlIjtzOjE2OiJQVEJTSUQwMDAwMDAwMDAyIjtzOjExOiJzZWFyY2hfaGFzaCI7czozMjoiY2QyOTk5MTM4MmMyNzdlOGEwNDMyZmVhYjVlYWQxNzEiO3M6MTQ6ImV4dHJhX3NlcnZpY2VzIjthOjI6e3M6Njoic3RhdHVzIjtpOjA7czo0OiJkYXRhIjthOjA6e319fQ==">
                                        <input type="hidden" required="required" name="token_key"
                                               value="62f78619b579ab40b16f28c1810b0b4b"> <input type="hidden"
                                                                                                required="required"
                                                                                                name="op"
                                                                                                value="book_room">
                                        <input type="hidden" required="required" name="booking_source"
                                               value="PTBSID0000000002" readonly=""> <input type="hidden"
                                                                                            required="required"
                                                                                            name="promo_code_discount_val"
                                                                                            id="promo_code_discount_val"
                                                                                            value="0.00"
                                                                                            readonly=""> <input
                                            type="hidden" required="required" name="promo_code"
                                            id="promocode_val" value="" readonly="">
                                        <!--<input type="hidden" required="required" name="provab_auth_key" value="?=$ProvabAuthKey ?>" readonly>                                    -->
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-xs-12 ">
                                        <div class="radio"><label><input class="add_insurance" type="radio"
                                                                         value="" name="insurance">Yes, secure
                                                my trip with insurance. I agree to the <a href="#">Terms &amp;
                                                    Conditions</a></label></div>
                                        <div class="radio"><label><input class="remove_insurance" type="radio"
                                                                         value="0" name="insurance" checked="">No,
                                                I do not want to insure my trip</label></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="flitab1">
                                        <div class="moreflt boksectn">
                                            <div class="ontyp">
                                                <div class="labltowr arimobold">Please enter names as on
                                                    passport..
                                                </div>
                                                <div class="pasngr_input pasngrinput _passenger_hiiden_inputs">
                                                    <div class="hide hidden_pax_details"><input type="hidden"
                                                                                                name="passenger_type[]"
                                                                                                value="Adult">
                                                        <input type="hidden" name="lead_passenger[]" value="1">
                                                        <input type="hidden" name="gender[]" value="1"
                                                               class="pax_gender"> <input type="hidden"
                                                                                          required="required"
                                                                                          name="passenger_nationality[]"
                                                                                          id="passenger-nationality-1"
                                                                                          value="92"></div>
                                                    <div class="col-xs-1 nopadding full_dets_aps">
                                                        <div class="adltnom">Adult1<sup
                                                                class="text-danger">*</sup></div>
                                                    </div>
                                                    <div class="col-xs-11 nopadding full_dets_aps">
                                                        <div class="inptalbox">
                                                            <div class="col-xs-3 spllty">
                                                                <div class="selectedwrap"><select
                                                                        class="mySelectBoxClass flyinputsnor name_title"
                                                                        name="name_title[]" required="">
                                                                        <option value="1">Mr</option>
                                                                        <option value="2">Ms</option>
                                                                        <option value="3">Miss</option>
                                                                        <option value="5">Mrs</option>
                                                                        <option value="6">Mstr</option>
                                                                    </select></div>
                                                            </div>
                                                            <div class="col-xs-5 spllty"><input value=""
                                                                                                required="required"
                                                                                                type="text"
                                                                                                name="first_name[]"
                                                                                                id="passenger-first-name-1"
                                                                                                class=" extract_pax_name_cls  clainput alpha_space "
                                                                                                maxlength="45"
                                                                                                placeholder="First Name"
                                                                                                data-row-id="1"
                                                                                                onkeypress="return blockSpecialChar(event)">
                                                                <span class="hidden hide error text-danger">First Name is required</span>
                                                            </div>
                                                            <div class="col-xs-4 spllty"><input value=""
                                                                                                required="required"
                                                                                                type="text"
                                                                                                name="last_name[]"
                                                                                                id="passenger-last-name-1"
                                                                                                class=" extract_pax_name_cls  clainput alpha_space"
                                                                                                maxlength="45"
                                                                                                placeholder="Last Name"
                                                                                                onkeypress="return blockSpecialChar(event)">
                                                                <span class="hidden hide error text-danger">Last Name is required</span>
                                                            </div>
                                                            <div class="col-xs-6 spllty infant_dob_div">
                                                                <div class="col-xs-4 nopadding"><span
                                                                        class="fmlbl">Date of Birth <sup
                                                                            class="text-danger">*</sup></span>
                                                                </div>
                                                                <div class="col-xs-8 nopadding"><input
                                                                        placeholder="DOB" type="text"
                                                                        class="clainput hasDatepicker"
                                                                        name="date_of_birth[]" readonly=""
                                                                        required="required"
                                                                        id="adult-date-picker-1"> <span
                                                                        class="hidden hide error text-danger">DOB</span>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <!-- Passport Section Starts -->
                                                            <div class="passport_content_div"><input
                                                                    placeholder="DOB" type="hidden"
                                                                    class="clainput" name="date_of_birth[]"
                                                                    value="1992-08-20">
                                                                <div class="international_passport_content_div">
                                                                    <div class="col-xs-4 spllty"><span
                                                                            class="formlabel">Passport Number <sup
                                                                                class="text-danger">*</sup></span>
                                                                        <div class="relativemask">
                                                                            <input type="text"
                                                                                   name="passenger_passport_number[]"
                                                                                   required="required"
                                                                                   id="passenger_passport_number_1"
                                                                                   class="clainput"
                                                                                   maxlength="10"
                                                                                   placeholder="Passport Number"
                                                                                   onkeypress="return blockSpecialChar(event)">
                                                                            <span
                                                                                class="hidden error text-danger">Passport Number is required</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-3 spllty"><span
                                                                            class="formlabel">Issuing Country <sup
                                                                                class="text-danger">*</sup></span>
                                                                        <div class="selectedwrap"><select
                                                                                name="passenger_passport_issuing_country[]"
                                                                                required="required"
                                                                                id="passenger_passport_issuing_country_1"
                                                                                class="mySelectBoxClass flyinputsnor">
                                                                                <option value="INVALIDIP">Please
                                                                                    Select
                                                                                </option>
                                                                                <option value="228">
                                                                                    Afghanistan
                                                                                </option>
                                                                                <option value="2">Albania
                                                                                </option>
                                                                                <option value="3">Algeria
                                                                                </option>
                                                                                <option value="4">American
                                                                                    Samoa
                                                                                </option>
                                                                                <option value="5">Andorra
                                                                                </option>
                                                                                <option value="6">Angola
                                                                                </option>
                                                                                <option value="7">Anguilla
                                                                                </option>
                                                                                <option value="8">Antigua And
                                                                                    Barbuda
                                                                                </option>
                                                                                <option value="9">Argentina
                                                                                </option>
                                                                                <option value="10">Armenia
                                                                                </option>
                                                                                <option value="11">Aruba
                                                                                </option>
                                                                                <option value="12">Australia
                                                                                </option>
                                                                                <option value="13">Austria
                                                                                </option>
                                                                                <option value="14">Azerbaijan
                                                                                </option>
                                                                                <option value="15">Bahamas
                                                                                </option>
                                                                                <option value="16">Bahrain
                                                                                </option>
                                                                                <option value="17">Bangladesh
                                                                                </option>
                                                                                <option value="18">Barbados
                                                                                </option>
                                                                                <option value="19">Belarus
                                                                                </option>
                                                                                <option value="20">Belgium
                                                                                </option>
                                                                                <option value="21">Belize
                                                                                </option>
                                                                                <option value="22">Benin
                                                                                </option>
                                                                                <option value="23">Bermuda
                                                                                </option>
                                                                                <option value="24">Bhutan
                                                                                </option>
                                                                                <option value="25">Bolivia
                                                                                </option>
                                                                                <option value="26">Bosnia And
                                                                                    Herzegovina
                                                                                </option>
                                                                                <option value="27">Botswana
                                                                                </option>
                                                                                <option value="28">Brazil
                                                                                </option>
                                                                                <option value="29">Brunei
                                                                                    Darussalam
                                                                                </option>
                                                                                <option value="30">Bulgaria
                                                                                </option>
                                                                                <option value="31">Burkina
                                                                                    Faso
                                                                                </option>
                                                                                <option value="32">Burundi
                                                                                </option>
                                                                                <option value="33">Cambodia
                                                                                </option>
                                                                                <option value="34">Cameroon
                                                                                </option>
                                                                                <option value="35">Canada
                                                                                </option>
                                                                                <option value="36">Cape Verde
                                                                                </option>
                                                                                <option value="37">Cayman
                                                                                    Islands
                                                                                </option>
                                                                                <option value="38">Central
                                                                                    African Republic
                                                                                </option>
                                                                                <option value="39">Chad</option>
                                                                                <option value="40">Chile
                                                                                </option>
                                                                                <option value="41">China
                                                                                </option>
                                                                                <option value="42">Christmas
                                                                                    Island
                                                                                </option>
                                                                                <option value="43">Cocos
                                                                                    (Keeling) Islands
                                                                                </option>
                                                                                <option value="44">Colombia
                                                                                </option>
                                                                                <option value="45">Comoros
                                                                                </option>
                                                                                <option value="46">Congo
                                                                                </option>
                                                                                <option value="47">Congo, DR Of
                                                                                    The
                                                                                </option>
                                                                                <option value="48">Cook
                                                                                    Islands
                                                                                </option>
                                                                                <option value="49">Costa Rica
                                                                                </option>
                                                                                <option value="51">Croatia
                                                                                </option>
                                                                                <option value="52">Cyprus
                                                                                </option>
                                                                                <option value="53">Czech
                                                                                    Republic
                                                                                </option>
                                                                                <option value="54">Denmark
                                                                                </option>
                                                                                <option value="55">Djibouti
                                                                                </option>
                                                                                <option value="56">Dominica
                                                                                </option>
                                                                                <option value="57">Dominican
                                                                                    Republic
                                                                                </option>
                                                                                <option value="58">Ecuador
                                                                                </option>
                                                                                <option value="59">Egypt
                                                                                </option>
                                                                                <option value="60">El Salvador
                                                                                </option>
                                                                                <option value="61">Equatorial
                                                                                    Guinea
                                                                                </option>
                                                                                <option value="62">Eritrea
                                                                                </option>
                                                                                <option value="63">Estonia
                                                                                </option>
                                                                                <option value="64">Ethiopia
                                                                                </option>
                                                                                <option value="65">Falkland
                                                                                    Islands
                                                                                </option>
                                                                                <option value="66">Faroe
                                                                                    Islands
                                                                                </option>
                                                                                <option value="67">Fiji</option>
                                                                                <option value="68">Finland
                                                                                </option>
                                                                                <option value="69">France
                                                                                </option>
                                                                                <option value="70">French
                                                                                    Guiana
                                                                                </option>
                                                                                <option value="71">French
                                                                                    Polynesia
                                                                                </option>
                                                                                <option value="72">Gabon
                                                                                </option>
                                                                                <option value="73">Gambia
                                                                                </option>
                                                                                <option value="74">Georgia
                                                                                </option>
                                                                                <option value="75">Germany
                                                                                </option>
                                                                                <option value="76">Ghana
                                                                                </option>
                                                                                <option value="77">Gibralter
                                                                                </option>
                                                                                <option value="78">Greece
                                                                                </option>
                                                                                <option value="79">Greenland
                                                                                </option>
                                                                                <option value="80">Grenada
                                                                                </option>
                                                                                <option value="81">Guadeloupe
                                                                                </option>
                                                                                <option value="82">Guam</option>
                                                                                <option value="83">Guatemala
                                                                                </option>
                                                                                <option value="84">Guinea
                                                                                </option>
                                                                                <option value="85">
                                                                                    Guinea-Bissau
                                                                                </option>
                                                                                <option value="86">Guyana
                                                                                </option>
                                                                                <option value="87">Haiti
                                                                                </option>
                                                                                <option value="88">Honduras
                                                                                </option>
                                                                                <option value="89">Hong Kong
                                                                                </option>
                                                                                <option value="90">Hungary
                                                                                </option>
                                                                                <option value="91">Iceland
                                                                                </option>
                                                                                <option value="92">India
                                                                                </option>
                                                                                <option value="93">Indonesia
                                                                                </option>
                                                                                <option value="94">Ireland
                                                                                </option>
                                                                                <option value="95">Israel
                                                                                </option>
                                                                                <option value="96">Italy
                                                                                </option>
                                                                                <option value="230">Ivory
                                                                                    coast
                                                                                </option>
                                                                                <option value="97">Jamaica
                                                                                </option>
                                                                                <option value="98">Japan
                                                                                </option>
                                                                                <option value="99">Jordan
                                                                                </option>
                                                                                <option value="100">Kazakhstan
                                                                                </option>
                                                                                <option value="101">Kenya
                                                                                </option>
                                                                                <option value="102">Kiribati
                                                                                </option>
                                                                                <option value="105">Kuwait
                                                                                </option>
                                                                                <option value="106">Kyrgyzstan
                                                                                </option>
                                                                                <option value="108">Latvia
                                                                                </option>
                                                                                <option value="109">Lebanon
                                                                                </option>
                                                                                <option value="110">Lesotho
                                                                                </option>
                                                                                <option value="111">Libyan Arab
                                                                                    Jamahiriya
                                                                                </option>
                                                                                <option value="112">
                                                                                    Liechtenstein
                                                                                </option>
                                                                                <option value="113">Lithuania
                                                                                </option>
                                                                                <option value="114">Luxembourg
                                                                                </option>
                                                                                <option value="115">Macao
                                                                                </option>
                                                                                <option value="116">Macedonia,
                                                                                    FYR Of
                                                                                </option>
                                                                                <option value="117">Madagascar
                                                                                </option>
                                                                                <option value="118">Malawi
                                                                                </option>
                                                                                <option value="119">Malaysia
                                                                                </option>
                                                                                <option value="120">Maldives
                                                                                </option>
                                                                                <option value="121">Mali
                                                                                </option>
                                                                                <option value="122">Malta
                                                                                </option>
                                                                                <option value="123">Marshall
                                                                                    Islands
                                                                                </option>
                                                                                <option value="124">Martinique
                                                                                </option>
                                                                                <option value="125">Mauritania
                                                                                </option>
                                                                                <option value="126">Mauritius
                                                                                </option>
                                                                                <option value="127">Mayotte
                                                                                </option>
                                                                                <option value="128">Mexico
                                                                                </option>
                                                                                <option value="129">Micronesia,
                                                                                    FS Of
                                                                                </option>
                                                                                <option value="131">Monaco
                                                                                </option>
                                                                                <option value="132">Mongolia
                                                                                </option>
                                                                                <option value="133">Montenegro
                                                                                </option>
                                                                                <option value="134">Montserrat
                                                                                </option>
                                                                                <option value="135">Morocco
                                                                                </option>
                                                                                <option value="136">Mozambique
                                                                                </option>
                                                                                <option value="137">Myanmar
                                                                                </option>
                                                                                <option value="138">Namibia
                                                                                </option>
                                                                                <option value="139">Nauru
                                                                                </option>
                                                                                <option value="140">Nepal
                                                                                </option>
                                                                                <option value="141">
                                                                                    Netherlands
                                                                                </option>
                                                                                <option value="142">New
                                                                                    Caledonia
                                                                                </option>
                                                                                <option value="143">New
                                                                                    Zealand
                                                                                </option>
                                                                                <option value="144">Nicaragua
                                                                                </option>
                                                                                <option value="145">Niger
                                                                                </option>
                                                                                <option value="146">Nigeria
                                                                                </option>
                                                                                <option value="147">Niue
                                                                                </option>
                                                                                <option value="148">Norfolk
                                                                                    Island
                                                                                </option>
                                                                                <option value="149">Northern
                                                                                    Mariana Islands
                                                                                </option>
                                                                                <option value="150">Norway
                                                                                </option>
                                                                                <option value="151">Oman
                                                                                </option>
                                                                                <option value="152">Pakistan
                                                                                </option>
                                                                                <option value="153">Palau
                                                                                </option>
                                                                                <option value="154">Panama
                                                                                </option>
                                                                                <option value="155">Papua New
                                                                                    Guinea
                                                                                </option>
                                                                                <option value="156">Paragua
                                                                                </option>
                                                                                <option value="157">Paraguay
                                                                                </option>
                                                                                <option value="158">Peru
                                                                                </option>
                                                                                <option value="159">
                                                                                    Philippines
                                                                                </option>
                                                                                <option value="160">Pitcairn
                                                                                </option>
                                                                                <option value="161">Polan
                                                                                </option>
                                                                                <option value="162">Poland
                                                                                </option>
                                                                                <option value="163">Portugal
                                                                                </option>
                                                                                <option value="164">Puerto
                                                                                    Rico
                                                                                </option>
                                                                                <option value="165">Qatar
                                                                                </option>
                                                                                <option value="166">Reunion
                                                                                </option>
                                                                                <option value="167">Romania
                                                                                </option>
                                                                                <option value="168">Russian
                                                                                    Federation
                                                                                </option>
                                                                                <option value="169">Rwanda
                                                                                </option>
                                                                                <option value="170">Saint
                                                                                    Barthelemy
                                                                                </option>
                                                                                <option value="171">Saint Kitts
                                                                                    And Nevis
                                                                                </option>
                                                                                <option value="172">Saint
                                                                                    Lucia
                                                                                </option>
                                                                                <option value="174">Samoa
                                                                                </option>
                                                                                <option value="175">San Marino
                                                                                </option>
                                                                                <option value="176">Sao Tome And
                                                                                    Principe
                                                                                </option>
                                                                                <option value="177">Saudi
                                                                                    Arabia
                                                                                </option>
                                                                                <option value="178">Senegal
                                                                                </option>
                                                                                <option value="179">Serbia
                                                                                </option>
                                                                                <option value="180">Seychelles
                                                                                </option>
                                                                                <option value="181">Sierra
                                                                                    Leone
                                                                                </option>
                                                                                <option value="182">Singapore
                                                                                </option>
                                                                                <option value="183">Slovakia
                                                                                    (Slovak Republic)
                                                                                </option>
                                                                                <option value="184">Slovenia
                                                                                </option>
                                                                                <option value="185">Solomon
                                                                                    Islands
                                                                                </option>
                                                                                <option value="186">South
                                                                                    Africa
                                                                                </option>
                                                                                <option value="187">Spain
                                                                                </option>
                                                                                <option value="188">Sri Lanka
                                                                                </option>
                                                                                <option value="191">St. Pierre
                                                                                    And Miquelon
                                                                                </option>
                                                                                <option value="192">Sudan
                                                                                </option>
                                                                                <option value="193">Suriname
                                                                                </option>
                                                                                <option value="194">Svalbard And
                                                                                    Jan Mayen Islands
                                                                                </option>
                                                                                <option value="195">Swaziland
                                                                                </option>
                                                                                <option value="196">Sweden
                                                                                </option>
                                                                                <option value="197">
                                                                                    Switzerland
                                                                                </option>
                                                                                <option value="198">Taiwan
                                                                                </option>
                                                                                <option value="199">Tajikistan
                                                                                </option>
                                                                                <option value="200">Tanzania
                                                                                </option>
                                                                                <option value="201">Thailand
                                                                                </option>
                                                                                <option value="202">Togo
                                                                                </option>
                                                                                <option value="203">Tonga
                                                                                </option>
                                                                                <option value="204">Trinidad And
                                                                                    Tobago
                                                                                </option>
                                                                                <option value="205">Tunisia
                                                                                </option>
                                                                                <option value="206">Turkey
                                                                                </option>
                                                                                <option value="207">
                                                                                    Turkmenistan
                                                                                </option>
                                                                                <option value="208">Turks And
                                                                                    Caicos Islands
                                                                                </option>
                                                                                <option value="209">Tuvalu
                                                                                </option>
                                                                                <option value="210">Uganda
                                                                                </option>
                                                                                <option value="211">Ukraine
                                                                                </option>
                                                                                <option value="212">United Arab
                                                                                    Emirates
                                                                                </option>
                                                                                <option value="213">United
                                                                                    Kingdom
                                                                                </option>
                                                                                <option value="214">United
                                                                                    States
                                                                                </option>
                                                                                <option value="215">Uruguay
                                                                                </option>
                                                                                <option value="217">Uzbekistan
                                                                                </option>
                                                                                <option value="218">Vanuatu
                                                                                </option>
                                                                                <option value="220">Venezuela
                                                                                </option>
                                                                                <option value="221">Viet Nam
                                                                                </option>
                                                                                <option value="223">Virgin
                                                                                    Islands - U.S.
                                                                                </option>
                                                                                <option value="224">Wallis And
                                                                                    Futuna Islands
                                                                                </option>
                                                                                <option value="225">Yemen
                                                                                </option>
                                                                                <option value="229">Yugoslavia
                                                                                </option>
                                                                                <option value="226">Zambia
                                                                                </option>
                                                                                <option value="227">Zimbabwe
                                                                                </option>
                                                                            </select> <span
                                                                                class="hidden error text-danger">Passport Issueing Country is required</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-5 spllty"><span
                                                                            class="formlabel">Date of Expiration <sup
                                                                                class="text-danger">*</sup></span>
                                                                        <div class="relativemask">
                                                                            <div class="col-xs-4 splinmar">
                                                                                <div class="selectedwrap">
                                                                                    <select
                                                                                        name="passenger_passport_expiry_day[]"
                                                                                        required="required"
                                                                                        class="mySelectBoxClass flyinputsnor passport_expiry_day"
                                                                                        data-expiry-type="day"
                                                                                        id="passenger_passport_expiry_day_1"
                                                                                        data-row-id="1">
                                                                                        <option
                                                                                            value="INVALIDIP">DD
                                                                                        </option>
                                                                                        <option value="1">1
                                                                                        </option>
                                                                                        <option value="2">2
                                                                                        </option>
                                                                                        <option value="3">3
                                                                                        </option>
                                                                                        <option value="4">4
                                                                                        </option>
                                                                                        <option value="5">5
                                                                                        </option>
                                                                                        <option value="6">6
                                                                                        </option>
                                                                                        <option value="7">7
                                                                                        </option>
                                                                                        <option value="8">8
                                                                                        </option>
                                                                                        <option value="9">9
                                                                                        </option>
                                                                                        <option value="10">10
                                                                                        </option>
                                                                                        <option value="11">11
                                                                                        </option>
                                                                                        <option value="12">12
                                                                                        </option>
                                                                                        <option value="13">13
                                                                                        </option>
                                                                                        <option value="14">14
                                                                                        </option>
                                                                                        <option value="15">15
                                                                                        </option>
                                                                                        <option value="16">16
                                                                                        </option>
                                                                                        <option value="17">17
                                                                                        </option>
                                                                                        <option value="18">18
                                                                                        </option>
                                                                                        <option value="19">19
                                                                                        </option>
                                                                                        <option value="20">20
                                                                                        </option>
                                                                                        <option value="21">21
                                                                                        </option>
                                                                                        <option value="22">22
                                                                                        </option>
                                                                                        <option value="23">23
                                                                                        </option>
                                                                                        <option value="24">24
                                                                                        </option>
                                                                                        <option value="25">25
                                                                                        </option>
                                                                                        <option value="26">26
                                                                                        </option>
                                                                                        <option value="27">27
                                                                                        </option>
                                                                                        <option value="28">28
                                                                                        </option>
                                                                                        <option value="29">29
                                                                                        </option>
                                                                                        <option value="30">30
                                                                                        </option>
                                                                                        <option value="31">31
                                                                                        </option>
                                                                                    </select> <input
                                                                                        type="hidden"
                                                                                        value="2022"
                                                                                        id="travel_year"></div>
                                                                            </div>
                                                                            <div class="col-xs-4 splinmar">
                                                                                <div class="selectedwrap">
                                                                                    <select
                                                                                        name="passenger_passport_expiry_month[]"
                                                                                        required="required"
                                                                                        class="mySelectBoxClass flyinputsnor passport_expiry_month"
                                                                                        data-expiry-type="month"
                                                                                        id="passenger_passport_expiry_month_1"
                                                                                        data-row-id="1">
                                                                                        <option
                                                                                            value="INVALIDIP">MM
                                                                                        </option>
                                                                                        <option value="0">Jan
                                                                                        </option>
                                                                                        <option value="1">Feb
                                                                                        </option>
                                                                                        <option value="2">Mar
                                                                                        </option>
                                                                                        <option value="3">Apr
                                                                                        </option>
                                                                                        <option value="4">May
                                                                                        </option>
                                                                                        <option value="5">Jun
                                                                                        </option>
                                                                                        <option value="6">Jul
                                                                                        </option>
                                                                                        <option value="7">Aug
                                                                                        </option>
                                                                                        <option value="8">Sep
                                                                                        </option>
                                                                                        <option value="9">Oct
                                                                                        </option>
                                                                                        <option value="10">Nov
                                                                                        </option>
                                                                                        <option value="11">Dec
                                                                                        </option>
                                                                                    </select></div>
                                                                            </div>
                                                                            <div class="col-xs-4 splinmar">
                                                                                <div class="selectedwrap">
                                                                                    <select
                                                                                        name="passenger_passport_expiry_year[]"
                                                                                        required="required"
                                                                                        class="mySelectBoxClass flyinputsnor passport_expiry_year"
                                                                                        data-expiry-type="year"
                                                                                        id="passenger_passport_expiry_year_1"
                                                                                        data-row-id="1">
                                                                                        <option
                                                                                            value="INVALIDIP">
                                                                                            YYYY
                                                                                        </option>
                                                                                        <option value="2022">
                                                                                            2022
                                                                                        </option>
                                                                                        <option value="2023">
                                                                                            2023
                                                                                        </option>
                                                                                        <option value="2024">
                                                                                            2024
                                                                                        </option>
                                                                                        <option value="2025">
                                                                                            2025
                                                                                        </option>
                                                                                        <option value="2026">
                                                                                            2026
                                                                                        </option>
                                                                                        <option value="2027">
                                                                                            2027
                                                                                        </option>
                                                                                        <option value="2028">
                                                                                            2028
                                                                                        </option>
                                                                                        <option value="2029">
                                                                                            2029
                                                                                        </option>
                                                                                        <option value="2030">
                                                                                            2030
                                                                                        </option>
                                                                                        <option value="2031">
                                                                                            2031
                                                                                        </option>
                                                                                        <option value="2032">
                                                                                            2032
                                                                                        </option>
                                                                                        <option value="2033">
                                                                                            2033
                                                                                        </option>
                                                                                        <option value="2034">
                                                                                            2034
                                                                                        </option>
                                                                                        <option value="2035">
                                                                                            2035
                                                                                        </option>
                                                                                        <option value="2036">
                                                                                            2036
                                                                                        </option>
                                                                                        <option value="2037">
                                                                                            2037
                                                                                        </option>
                                                                                        <option value="2038">
                                                                                            2038
                                                                                        </option>
                                                                                        <option value="2039">
                                                                                            2039
                                                                                        </option>
                                                                                        <option value="2040">
                                                                                            2040
                                                                                        </option>
                                                                                        <option value="2041">
                                                                                            2041
                                                                                        </option>
                                                                                        <option value="2042">
                                                                                            2042
                                                                                        </option>
                                                                                    </select></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pull-right text-danger hide"
                                                                         id="passport_error_msg_1"></div>
                                                                </div>
                                                            </div><!-- Passport Section Ends--></div>
                                                        <!-- inptalbox class ends --></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ontyp">
                                            <div class="kindrest">
                                                <div class="cartlistingbuk">
                                                    <div class="cartitembuk">
                                                        <div class="col-md-12">
                                                            <div class="payblnhmxm">Have an e-coupon or a
                                                                deal-code ? (Optional)
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="cartitembuk prompform">
                                                        <div class="col-md-4 col-xs-8 nopadding_right">
                                                            <div class="cartprc">
                                                                <div class="payblnhm singecartpricebuk ritaln">
                                                                    <input type="text" placeholder="Enter Promo"
                                                                           name="code" id="code"
                                                                           class="promocode"
                                                                           aria-required="true"> <input
                                                                        type="hidden" name="module_type"
                                                                        id="module_type" class="promocode"
                                                                        value="e325b16aa10bc2b065742595902073cb">
                                                                    <input type="hidden" name="total_amount_val"
                                                                           id="total_amount_val"
                                                                           class="promocode" value="1609.57">
                                                                    <input type="hidden" name="convenience_fee"
                                                                           id="convenience_fee"
                                                                           class="promocode" value="160.96">
                                                                    <input type="hidden" name="currency_symbol"
                                                                           id="currency_symbol" value="€">
                                                                    <input type="hidden" name="currency"
                                                                           id="currency" value="EUR">
                                                                    <p class="error_promocode text-danger"
                                                                       style="font-weight:bold"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-xs-3 nopadding_left"><input
                                                                type="button" value="Apply" name="apply"
                                                                id="apply" class="promosubmit"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="savemessage"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sepertr"></div>
                                        <div class="clearfix"></div>
                                        <div class="contbk">
                                            <div class="contcthdngs">Contact Details</div>
                                            <div class="col-xs-12 nopad full_smal_forty">
                                                <div class="col-xs-12 mb10 nopad full_smal_forty">
                                                    <div class="col-xs-5 nopadding">
                                                        <div class="hide"><input type="hidden"
                                                                                 name="billing_country"
                                                                                 value="92"> <input
                                                                type="hidden" name="billing_city" value="test">
                                                            <input type="hidden" name="billing_zipcode"
                                                                   value="test"> <input type="hidden"
                                                                                        name="billing_address_1"
                                                                                        value="test"></div>
                                                        <select name="phone_country_code"
                                                                class="newslterinput nputbrd _numeric_only"
                                                                id="after_country_code" required="">
                                                            <option value="+93">Afghanistan +93</option>
                                                            <option value="+355">Albania +355</option>
                                                            <option value="+213">Algeria +213</option>
                                                            <option value="+1684">American Samoa +1684</option>
                                                            <option value="+376">Andorra +376</option>
                                                            <option value="+244">Angola +244</option>
                                                            <option value="+1264">Anguilla +1264</option>
                                                            <option value="+1268">Antigua And Barbuda +1268
                                                            </option>
                                                            <option value="+54">Argentina +54</option>
                                                            <option value="+374">Armenia +374</option>
                                                            <option value="+297">Aruba +297</option>
                                                            <option value="+61">Australia +61</option>
                                                            <option value="+43">Austria +43</option>
                                                            <option value="+994">Azerbaijan +994</option>
                                                            <option value="+1242">Bahamas +1242</option>
                                                            <option value="+973">Bahrain +973</option>
                                                            <option value="+880">Bangladesh +880</option>
                                                            <option value="+1246">Barbados +1246</option>
                                                            <option value="+375">Belarus +375</option>
                                                            <option value="+32">Belgium +32</option>
                                                            <option value="+501">Belize +501</option>
                                                            <option value="+229">Benin +229</option>
                                                            <option value="+1441">Bermuda +1441</option>
                                                            <option value="+975">Bhutan +975</option>
                                                            <option value="+591">Bolivia +591</option>
                                                            <option value="+387">Bosnia And Herzegovina +387
                                                            </option>
                                                            <option value="+267">Botswana +267</option>
                                                            <option value="+55">Brazil +55</option>
                                                            <option value="+673">Brunei Darussalam +673</option>
                                                            <option value="+359">Bulgaria +359</option>
                                                            <option value="+226">Burkina Faso +226</option>
                                                            <option value="+257">Burundi +257</option>
                                                            <option value="+855">Cambodia +855</option>
                                                            <option value="+237">Cameroon +237</option>
                                                            <option value="+1" selected="">Canada +1</option>
                                                            <option value="+238">Cape Verde +238</option>
                                                            <option value="+1345">Cayman Islands +1345</option>
                                                            <option value="+236">Central African Republic +236
                                                            </option>
                                                            <option value="+235">Chad +235</option>
                                                            <option value="+56">Chile +56</option>
                                                            <option value="+86">China +86</option>
                                                            <option value="+61">Christmas Island +61</option>
                                                            <option value="+891">Cocos (Keeling) Islands +891
                                                            </option>
                                                            <option value="+57">Colombia +57</option>
                                                            <option value="+269">Comoros +269</option>
                                                            <option value="+242">Congo +242</option>
                                                            <option value="+243">Congo, DR Of The +243</option>
                                                            <option value="+682">Cook Islands +682</option>
                                                            <option value="+506">Costa Rica +506</option>
                                                            <option value="+385">Croatia +385</option>
                                                            <option value="+357">Cyprus +357</option>
                                                            <option value="+420">Czech Republic +420</option>
                                                            <option value="+45">Denmark +45</option>
                                                            <option value="+253">Djibouti +253</option>
                                                            <option value="+1767">Dominica +1767</option>
                                                            <option value="+1809">Dominican Republic +1809
                                                            </option>
                                                            <option value="+593">Ecuador +593</option>
                                                            <option value="+20">Egypt +20</option>
                                                            <option value="+503">El Salvador +503</option>
                                                            <option value="+240">Equatorial Guinea +240</option>
                                                            <option value="+291">Eritrea +291</option>
                                                            <option value="+372">Estonia +372</option>
                                                            <option value="+251">Ethiopia +251</option>
                                                            <option value="+500">Falkland Islands +500</option>
                                                            <option value="+298">Faroe Islands +298</option>
                                                            <option value="+679">Fiji +679</option>
                                                            <option value="+358">Finland +358</option>
                                                            <option value="+33">France +33</option>
                                                            <option value="+594">French Guiana +594</option>
                                                            <option value="+689">French Polynesia +689</option>
                                                            <option value="+241">Gabon +241</option>
                                                            <option value="+220">Gambia +220</option>
                                                            <option value="+995">Georgia +995</option>
                                                            <option value="+49">Germany +49</option>
                                                            <option value="+233">Ghana +233</option>
                                                            <option value="+350">Gibralter +350</option>
                                                            <option value="+30">Greece +30</option>
                                                            <option value="+299">Greenland +299</option>
                                                            <option value="+1473">Grenada +1473</option>
                                                            <option value="+590">Guadeloupe +590</option>
                                                            <option value="+1671">Guam +1671</option>
                                                            <option value="+502">Guatemala +502</option>
                                                            <option value="+224">Guinea +224</option>
                                                            <option value="+245">Guinea-Bissau +245</option>
                                                            <option value="+592">Guyana +592</option>
                                                            <option value="+509">Haiti +509</option>
                                                            <option value="+504">Honduras +504</option>
                                                            <option value="+852">Hong Kong +852</option>
                                                            <option value="+36">Hungary +36</option>
                                                            <option value="+354">Iceland +354</option>
                                                            <option value="+91">India +91</option>
                                                            <option value="+62">Indonesia +62</option>
                                                            <option value="+353">Ireland +353</option>
                                                            <option value="+972">Israel +972</option>
                                                            <option value="+39">Italy +39</option>
                                                            <option value="+255">Ivory coast +255</option>
                                                            <option value="+1876">Jamaica +1876</option>
                                                            <option value="+81">Japan +81</option>
                                                            <option value="+962">Jordan +962</option>
                                                            <option value="+7">Kazakhstan +7</option>
                                                            <option value="+254">Kenya +254</option>
                                                            <option value="+686">Kiribati +686</option>
                                                            <option value="+850">Korea, DPR Of +850</option>
                                                            <option value="+82">Korea, Republic Of +82</option>
                                                            <option value="+965">Kuwait +965</option>
                                                            <option value="+996">Kyrgyzstan +996</option>
                                                            <option value="+856">Laos +856</option>
                                                            <option value="+371">Latvia +371</option>
                                                            <option value="+961">Lebanon +961</option>
                                                            <option value="+266">Lesotho +266</option>
                                                            <option value="+218">Libyan Arab Jamahiriya +218
                                                            </option>
                                                            <option value="+423">Liechtenstein +423</option>
                                                            <option value="+370">Lithuania +370</option>
                                                            <option value="+352">Luxembourg +352</option>
                                                            <option value="+853">Macao +853</option>
                                                            <option value="+389">Macedonia, FYR Of +389</option>
                                                            <option value="+261">Madagascar +261</option>
                                                            <option value="+265">Malawi +265</option>
                                                            <option value="+60">Malaysia +60</option>
                                                            <option value="+960">Maldives +960</option>
                                                            <option value="+223">Mali +223</option>
                                                            <option value="+356">Malta +356</option>
                                                            <option value="+692">Marshall Islands +692</option>
                                                            <option value="+596">Martinique +596</option>
                                                            <option value="+222">Mauritania +222</option>
                                                            <option value="+230">Mauritius +230</option>
                                                            <option value="+262">Mayotte +262</option>
                                                            <option value="+52">Mexico +52</option>
                                                            <option value="+691">Micronesia, FS Of +691</option>
                                                            <option value="+373">Moldova, Republic Of +373
                                                            </option>
                                                            <option value="+377">Monaco +377</option>
                                                            <option value="+976">Mongolia +976</option>
                                                            <option value="+382">Montenegro +382</option>
                                                            <option value="+1664">Montserrat +1664</option>
                                                            <option value="+212">Morocco +212</option>
                                                            <option value="+258">Mozambique +258</option>
                                                            <option value="+95">Myanmar +95</option>
                                                            <option value="+264">Namibia +264</option>
                                                            <option value="+674">Nauru +674</option>
                                                            <option value="+977">Nepal +977</option>
                                                            <option value="+31">Netherlands +31</option>
                                                            <option value="+687">New Caledonia +687</option>
                                                            <option value="+64">New Zealand +64</option>
                                                            <option value="+505">Nicaragua +505</option>
                                                            <option value="+227">Niger +227</option>
                                                            <option value="+234">Nigeria +234</option>
                                                            <option value="+683">Niue +683</option>
                                                            <option value="+672">Norfolk Island +672</option>
                                                            <option value="+1670">Northern Mariana Islands
                                                                +1670
                                                            </option>
                                                            <option value="+47">Norway +47</option>
                                                            <option value="+968">Oman +968</option>
                                                            <option value="+92">Pakistan +92</option>
                                                            <option value="+680">Palau +680</option>
                                                            <option value="+507">Panama +507</option>
                                                            <option value="+675">Papua New Guinea +675</option>
                                                            <option value="+595">Paragua +595</option>
                                                            <option value="+595">Paraguay +595</option>
                                                            <option value="+51">Peru +51</option>
                                                            <option value="+63">Philippines +63</option>
                                                            <option value="+870">Pitcairn +870</option>
                                                            <option value="+48">Polan +48</option>
                                                            <option value="+48">Poland +48</option>
                                                            <option value="+351">Portugal +351</option>
                                                            <option value="+1787">Puerto Rico +1787</option>
                                                            <option value="+974">Qatar +974</option>
                                                            <option value="+262">Reunion +262</option>
                                                            <option value="+40">Romania +40</option>
                                                            <option value="+7">Russian Federation +7</option>
                                                            <option value="+250">Rwanda +250</option>
                                                            <option value="+590">Saint Barthelemy +590</option>
                                                            <option value="+1869">Saint Kitts And Nevis +1869
                                                            </option>
                                                            <option value="+1758">Saint Lucia +1758</option>
                                                            <option value="+1599">Saint Martin +1599</option>
                                                            <option value="+685">Samoa +685</option>
                                                            <option value="+378">San Marino +378</option>
                                                            <option value="+239">Sao Tome And Principe +239
                                                            </option>
                                                            <option value="+966">Saudi Arabia +966</option>
                                                            <option value="+221">Senegal +221</option>
                                                            <option value="+381">Serbia +381</option>
                                                            <option value="+248">Seychelles +248</option>
                                                            <option value="+232">Sierra Leone +232</option>
                                                            <option value="+65">Singapore +65</option>
                                                            <option value="+421">Slovakia (Slovak Republic)
                                                                +421
                                                            </option>
                                                            <option value="+386">Slovenia +386</option>
                                                            <option value="+677">Solomon Islands +677</option>
                                                            <option value="+27">South Africa +27</option>
                                                            <option value="+34">Spain +34</option>
                                                            <option value="+94">Sri Lanka +94</option>
                                                            <option value="+1784">St Vincent And The Grenadines
                                                                +1784
                                                            </option>
                                                            <option value="+290">St. Helena +290</option>
                                                            <option value="+508">St. Pierre And Miquelon +508
                                                            </option>
                                                            <option value="+249">Sudan +249</option>
                                                            <option value="+597">Suriname +597</option>
                                                            <option value="+47">Svalbard And Jan Mayen Islands
                                                                +47
                                                            </option>
                                                            <option value="+268">Swaziland +268</option>
                                                            <option value="+46">Sweden +46</option>
                                                            <option value="+41">Switzerland +41</option>
                                                            <option value="+886">Taiwan +886</option>
                                                            <option value="+992">Tajikistan +992</option>
                                                            <option value="+255">Tanzania +255</option>
                                                            <option value="+66">Thailand +66</option>
                                                            <option value="+228">Togo +228</option>
                                                            <option value="+676">Tonga +676</option>
                                                            <option value="+1868">Trinidad And Tobago +1868
                                                            </option>
                                                            <option value="+216">Tunisia +216</option>
                                                            <option value="+90">Turkey +90</option>
                                                            <option value="+993">Turkmenistan +993</option>
                                                            <option value="+1649">Turks And Caicos Islands
                                                                +1649
                                                            </option>
                                                            <option value="+688">Tuvalu +688</option>
                                                            <option value="+256">Uganda +256</option>
                                                            <option value="+380">Ukraine +380</option>
                                                            <option value="+971">United Arab Emirates +971
                                                            </option>
                                                            <option value="+44">United Kingdom +44</option>
                                                            <option value="+1" selected="">United States +1
                                                            </option>
                                                            <option value="+598">Uruguay +598</option>
                                                            <option value="+1">US Minor Outlying Islands +1
                                                            </option>
                                                            <option value="+998">Uzbekistan +998</option>
                                                            <option value="+678">Vanuatu +678</option>
                                                            <option value="+379">Vatican City State +379
                                                            </option>
                                                            <option value="+58">Venezuela +58</option>
                                                            <option value="+84">Viet Nam +84</option>
                                                            <option value="+1284">Virgin Islands - British
                                                                +1284
                                                            </option>
                                                            <option value="+1340">Virgin Islands - U.S. +1340
                                                            </option>
                                                            <option value="+681">Wallis And Futuna Islands
                                                                +681
                                                            </option>
                                                            <option value="+967">Yemen +967</option>
                                                            <option value="+381">Yugoslavia +381</option>
                                                            <option value="+260">Zambia +260</option>
                                                            <option value="+263">Zimbabwe +263</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-1 nopadding">
                                                        <div class="sidepo">-</div>
                                                    </div>
                                                    <div class="col-xs-6 nopadding"><input value="" type="text"
                                                                                           name="passenger_contact"
                                                                                           id="passenger-contact"
                                                                                           placeholder="Mobile Number"
                                                                                           class="newslterinput nputbrd _numeric_only"
                                                                                           maxlength="10"
                                                                                           required="required">
                                                    </div>
                                                    <span id="mobile_err" class="hide">                                                Mobile number should be mandatory</span>
                                                </div>
                                                <div class="emailperson col-xs-12	 nopad full_smal_forty">
                                                    <input value="" type="text" maxlength="80"
                                                           required="required" id="billing-email"
                                                           class="newslterinput nputbrd" placeholder="Email"
                                                           name="billing_email"></div>
                                                <span id="email_err" class="hide">                                                Invalid Email ID</span>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="notese">Your mobile number will be used only for sending
                                                flight related communication..
                                            </div>
                                        </div>
                                        <span id="pass_name" class="hide">Passenger Name</span> <span id="dob"
                                                                                                      class="hide">Date of Birth</span>
                                        <span id="pass_number" class="hide">Passport Number</span> <span
                                            id="doe" class="hide">Date of Expiry</span> <span id="issue_country"
                                                                                              class="hide">Issuing Country</span>
                                        <!-- <div class="panel-group mb0" role="tablist" aria-multiselectable="true">                                        <div class="panel panel-default for_gst flight_special_req">                                            <div class="panel-heading" role="tab" id="gst_opt">                                                <h4 class="panel-title">                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#gst_optnl" aria-expanded="true" aria-controls="gst_optnl">                                                        <div class="labltowr arimobold">GST Information(Optional) <i class="more-less glyphicon glyphicon-plus"></i></div>                                                    </a>                                                </h4>                                            </div>                                            <div id="gst_optnl" class="panel-collapse collapse" role="tabpanel" aria-labelledby="gst_opt"> -->
                                        <!-- <div class="contcthdngs">GST Information(Optional)</div> -->                                                <!-- <div class="col-xs-12 gst_det" id="gst_form_div">                                                    <div class="row">                                                        <div class="col-xs-3"> GST Number </div>                                                        <div class="col-xs-7">
                                                            <input type="text" class="newslterinput clainput nputbrd" id="gst_number" name="gst_number" value="">
                                                        </div>                                                    </div>                                                    <div class="row">                                                        <div class="col-xs-3"> GST company Name </div>                                                        <div class="col-xs-7">
                                                            <input type="text" class="newslterinput nputbrd" id="gst_company_name" name="gst_company_name" vaule="">
                                                        </div>                                                    </div>                                                    <div class="row">                                                        <div class="col-xs-3"> Email </div>                                                        <div class="col-xs-7">
                                                            <input type="email" class="newslterinput nputbrd" id="gst_email" name="gst_email" value="">
                                                        </div>                                                    </div>
                                                    <div class="row">                                                        <div class="col-xs-3"> Phone Number </div>                                                        <div class="col-xs-7">
                                                            <input type="text" class="newslterinput nputbrd _numeric_only" id="gst_phone" name="gst_phone" maxlength="10" value="">
                                                        </div>                                                    </div>                                                    <div class="row">                                                        <div class="col-xs-3"> Address </div>                                                        <div class="col-xs-7">
                                                            <input type="text" class="newslterinput nputbrd" name="gst_address" id="gst_address" value="">
                                                        </div>                                                    </div>                                                    <div class="row">                                                        <div class="col-xs-3"> State </div>                                                        <div class="col-xs-7">                                                            <select name="gst_state" class="clainput" id="gststate">                                                                <option value="INVALIDIP">Please Select</option>                                                            <option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Odisha(Orissa)">Odisha(Orissa)</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="West Bengal">West Bengal</option><option value="Telangana">Telangana</option><option value="Andaman & Nicobar">Andaman & Nicobar</option><option value="Chandigarh">Chandigarh</option><option value="Dadra & Nagar Haveli">Dadra & Nagar Haveli</option><option value="Daman & Diu">Daman & Diu</option><option value="Delhi">Delhi</option><option value="Lakshadweep">Lakshadweep</option><option value="Puducherry">Puducherry</option>                                                            </select>                                                        </div>                                                    </div>                                                </div>                                            </div>                                        </div>                                    </div> -->
                                        <div class="clikdiv">
                                            <div class="squaredThree"><input id="terms_cond1" type="checkbox"
                                                                             name="tc" checked="checked"
                                                                             required="required"> <label
                                                    for="terms_cond1"></label></div>
                                            <span class="clikagre" id="clikagre">                                            Terms and Conditions                                        </span>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="sepertr"></div>
                                        <div class="clearfix"></div>
                                        <!-- Dyanamic Baggage&Meals Section Starts -->
                                        <!-- Dyanamic Baggage&Meals Section Ends -->
                                        <!-- Seats&Meals Preference Section Starts -->
                                        <!-- Seats&Meals Preference Section Ends -->
                                        <div class="clearfix"></div>
                                        <div class="loginspld">
                                            <div class="collogg">
                                                <div class="row hide">
                                                    <div class="col-md-3">
                                                        <div class="form-group"><label for="payment-mode-PNHB1">
                                                                <input checked="checked" name="payment_method"
                                                                       type="radio" required="required"
                                                                       value="PNHB1" id="payment-mode-PNHB1"
                                                                       class="form-control b-r-0"
                                                                       placeholder="Payment Mode"> Pay Now
                                                            </label></div>
                                                    </div>
                                                </div>
                                                <div class="continye col-sm-4 col-xs-6 nopad">
                                                    <button type="submit" id="flip" name="flight"
                                                            class="bookcont continue_booking_button">Continue
                                                    </button>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="sepertr"></div>
                                                <div class="temsandcndtn"> Most countries require travelers to
                                                    have a passport valid for more than 3 to 6 months from the
                                                    date of entry into or exit from the country. Please check
                                                    the exact rules for your destination country before
                                                    completing the booking
                                                    <!-- Most countries require travellers to have a passport valid for more than 3 to 6 months from the date of entry into or exit from the country. Please check the exact rules for your destination country before completing the booking. -->                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-4 nopadding rit_summery">
                            <div class="insiefare">
                                <div class="farehd arimobold">Fare Summary</div>
                                <div class="fredivs">
                                    <div class="kindrest">
                                        <div class="freshd">Base Fare</div>
                                        <div class="reptallt">
                                            <div class="col-xs-8 nopadding">
                                                <div class="faresty">1 ADT(s) ‎(1 X 524.36)</div>
                                            </div>
                                            <div class="col-xs-4 nopadding">
                                                <div class="amnter"><span class="base_fare_span">€</span> <span
                                                        class="base_fare_value0">524 </span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kindrest">
                                        <div class="freshd">Taxes</div>
                                        <div class="reptallt">
                                            <div class="col-xs-8 nopadding">
                                                <div class="faresty">Taxes</div>
                                            </div>
                                            <div class="col-xs-4 nopadding">
                                                <div class="amnter arimobold"><span
                                                        class="tax_fees_span">€</span> <span
                                                        class="tax_fees_value">1085 </span></div>
                                            </div>
                                            <div class="col-xs-8 nopadding">
                                                <div class="faresty">Convenience Fees</div>
                                            </div>
                                            <span class="org_convience_fee hide">10.00</span>
                                            <div class="col-xs-4 nopadding">
                                                <div class="amnter arimobold"><span
                                                        class="convenience_fees_span">€</span> <span
                                                        class="convenience_fees_value"> 161 </span></div>
                                            </div>
                                            <div class="col-xs-8 nopadding insurance " style="display: none;">
                                                <div class="faresty">Insurance</div>
                                            </div>
                                            <div class="col-xs-4 nopadding insurance " style="display: none;">
                                                <div class="amnter arimobold">0</div>
                                            </div>
                                            <div class="col-xs-8 nopadding promo_code_discount hide">
                                                <div class="faresty">Promo Code Discount</div>
                                            </div>
                                            <div class="col-xs-4 nopadding promo_code_discount hide">
                                                <div class="amnter arimobold promo_discount_val"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="reptalltftr">
                                        <div class="col-xs-6 nopadding">
                                            <div class="farestybig">Grand Total</div>
                                        </div>
                                        <div class="col-xs-6 nopadding ">
                                            <div id="grandtotal_valid" class="grandtotal_valid hide">1770</div>
                                            <div class="amnterbig arimobold grandtotal"><span
                                                    class="grandtotal_span"> € </span> <span
                                                    class="total_booking_amount grandtotal_value"> 1770</span>
                                            </div>
                                            <div class="hide" id="api_price_details"
                                                 data-api_price="eyJDdXJyZW5jeSI6IlVTRCIsIlRvdGFsRGlzcGxheUZhcmUiOjE3MTIuMzA4LCJQcmljZUJyZWFrdXAiOnsiQmFzaWNGYXJlIjo1NTcuODI5LCJUYXgiOjExNTQuNDc5LCJBZ2VudENvbW1pc3Npb24iOjAsIkFnZW50VGRzT25Db21taXNpb24iOjB9LCJQYXNzZW5nZXJCcmVha3VwIjp7IkFEVCI6eyJCYXNlUHJpY2UiOjU1Ny44MjksIlRheCI6MTE1NC40NzksIlRvdGFsUHJpY2UiOjE3MTIuMzA4LCJQYXNzZW5nZXJDb3VudCI6IjEifX19"></div>
                                            <div class="hide" id="api_markup_details"
                                                 data-markup_price="eyJDdXJyZW5jeSI6IkVVUiIsIkJhc2VGYXJlIjo1MjQuMzYsIlRheCI6MTA4NS4yMSwiUHVibGlzaGVkRmFyZSI6MTYwOS41NywiQWdlbnRDb21taXNzaW9uIjowLCJBZ2VudFRkc09uQ29tbWlzaW9uIjowLCJPZmZlcmVkRmFyZSI6MTYwOS41Nywib3JpZ2luYWxfbWFya3VwIjpudWxsLCJtYXJrdXBfdHlwZSI6bnVsbH0="></div>
                                            <div class="hide" id="convenience_fees_original"
                                                 data-convience_fee="eyJ2YWx1ZSI6IjEwLjAwIiwidHlwZSI6InBlcmNlbnRhZ2UiLCJwZXJfcGF4IjoiMSIsImNvbnZlbmllbmNlX2ZlZV9jdXJyZW5jeSI6IkVVUiJ9"></div>
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
    <span class="hide">    <input type="hidden" id="pri_passport_min_exp" value="2022-08-22"></span>

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
    <script type="text/javascript">    function blockSpecialChar(e) {
            var k;
            document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
        }
    </script>

@endsection


