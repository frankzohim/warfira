<!DOCTYPE html>
<html lang="en">

<!-- meta contains meta taga, css and fontawesome icons etc -->
@include('common.meta')
<!-- ./end of meta -->

<body class="hold-transition skin-blue sidebar-mini">

	<!-- wrapper -->
    <div class="wrapper">

        <div id="show_log" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        @include('common.login')
                    </div>
                </div>
            </div>
        </div>


        <div class="allpagewrp">
            <!-- header contains top navbar -->
            @include('common.header')
            <!-- ./end of header -->

            <div class="clearfix"></div>
        </div>

{{--        <!-- left sidebar -->--}}
{{--        @include('common.sidebar')--}}
{{--        <!-- ./end of left sidebar -->--}}

        <!-- dynamic content -->
        @yield('content')
        <!-- ./end of dynamic content -->

{{--        <!-- right sidebar -->--}}
{{--        @include('common.controlsidebar')--}}
{{--        <!-- ./right sidebar -->--}}

    	@include('common.footer')

        <!-- all js scripts including custom js -->
        @include('common.scripts')
        <!-- ./end of js scripts -->

    </div>
	<!-- ./wrapper -->


	</body>
</html>
