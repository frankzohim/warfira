@extends('layout')
@section('content')
    <div id="general_change_password" class="bodyContent col-md-12">
        <div></div>
        <div class="panel panel-default clearfix"><!-- PANEL WRAP START -->
            <div class="panel-heading"><!-- PANEL HEAD START -->Change Password</div><!-- PANEL HEAD START -->
            <div class="panel-body"><!-- PANEL BODY START -->
                <form name="change_password" autocomplete="off" action=""
                      method="POST" enctype="multipart/form-data" id="change_password" role="form"
                      class="form-horizontal">
                    @csrf
                    <fieldset form="change_password">
                        <legend class="form_legend"></legend>
                        <div class="form-group"><label class="col-sm-3 control-label" for="current_password"
                                                       form="change_password">Current Password<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-6"><input maxlength="50" minlength="5" value="" min="0"
                                                         name="current_password" required=""
                                                         type="password" placeholder=""
                                                         class=" current_password form-control"
                                                         id="current_password" data-original-title="" title="">
                            </div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label" for="new_password"
                                                       form="change_password">New Password<span class="text-danger">*</span></label>
                            <div class="col-sm-6"><input maxlength="50" minlength="5" value="" min="0"
                                                         name="new_password" required=""
                                                         type="password" placeholder=""
                                                         class=" new_password form-control" id="new_password"
                                                         data-original-title="" title=""></div>
                        </div>
                        <div class="form-group"><label class="col-sm-3 control-label" for="confirm_password"
                                                       form="change_password">Confirm Password<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-6"><input maxlength="50" minlength="5" value="" min="0"
                                                         name="confirm_password" required=""
                                                         type="password" placeholder=""
                                                         class=" confirm_password form-control"
                                                         id="confirm_password" data-original-title="" title="">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <button type="submit" id="change_password_submit" class=" btn btn-success ">Submit
                            </button>
                            <button type="reset" id="change_password_reset" class=" btn btn-warning ">Reset</button>
                        </div>
                    </div>
                </form>
            </div><!-- PANEL BODY END --></div><!-- PANEL WRAP END --></div>
    <script>$("#change_password_submit").click(function (t) {
            t.preventDefault();
            var oldP = document.getElementById("current_password").value;
            var newP = document.getElementById("new_password").value;
            var confirmP = document.getElementById("confirm_password").value;

            if (oldP != "" && newP != "" && confirmP != "") {

                if (newP == confirmP) {

                    $.post(app_base_url + "/auth/change_password", $("form#change_password").serialize(), function(e) {
                        var t = e.status, s = e.data;
                        alert(s);

                        if(1 == t){
                            $.get(app_base_url + "/auth/logout", function(e) {
                                location.href = app_base_url;
                            })
                        }
                    });
                    return false;
                } else {
                    alert("Confirm password is not same as you new password.");
                    return false;
                }

            } else {
                alert("All Fields Are Required");
                return false;
            }
        });</script>
@endsection
