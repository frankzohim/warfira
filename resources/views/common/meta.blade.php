<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
    <meta id="id" name="viewport" content="width=device-width, initial-scale=1">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="keywords" content=" - Welcome,Warfira, Flights, Hotels, Busses, Packages, Low Cost Flights">
    <meta name="description" content="Flight Bookings, Hotel Bookings, Bus Bookings, Package bookings system.">
    <meta name="author" content="Ben Manfouo">
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/x-icon">
    <title>Warfira</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Source+Sans+Pro" rel="stylesheet">
    <script src="https://connect.facebook.net/en_US/sdk.js?hash=1ebbbd4d1917c2cbe76e9d1561775399" async=""
            crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"  />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/agent.css')}}" rel="stylesheet">
    <link href="{{asset('css/media.css')}}" rel="stylesheet">
    <link href="{{asset('css/theme_style.css')}}" rel="stylesheet">


    <script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script src="{{asset('system/library/javascript/jquery-2.1.1.min.js')}}"></script>
    <!--
    <script src="https://maps.googleapis.com/maps-api-v3/api/js/49/11/intl/fr_ALL/controls.js"></script>
-->

    <link href="{{asset('system/library/bootstrap/css/font-awesome.min.css')}}" media="screen" rel="stylesheet"
          type="text/css" hreflang="en">
    <link href="{{asset('system/library/bootstrap/css/bootstrap.min.css')}}" media="screen" rel="stylesheet" type="text/css"
          hreflang="en">
    <link href="{{asset('system/template_list/template_v3/css/theme_style.css')}}" media="screen" rel="stylesheet"
          type="text/css" hreflang="en">
    <link href="{{asset('system/template_list/template_v1/css/shared.css')}}" media="screen" rel="stylesheet" type="text/css"
          hreflang="en">
    <link href="{{asset('system/library/javascript/jquery-ui-1.11.2.custom/jquery-ui.theme.min.css')}}" rel="stylesheet"
          type="text/css" hreflang="en">
    <link href="{{asset('system/library/datetimepicker/jquery.datetimepicker.css')}}" rel="stylesheet" type="text/css"
          hreflang="en">
    <link href="{{asset('system/library/javascript/jquery-ui-1.11.2.custom/jquery-ui.structure.min.css')}}" rel="stylesheet"
          type="text/css" hreflang="en">
    <link href="{{asset('system/template_list/template_v1/css/backslider.css')}}" media="screen" rel="stylesheet"
          type="text/css" hreflang="en">
    <link href="{{asset('system/template_list/template_v1/css/owl.carousel.min.css')}}" media="screen" rel="stylesheet"
          type="text/css" hreflang="en">
    <link href="{{asset('system/template_list/template_v3/css/front_end.css')}}" media="screen" rel="stylesheet"
          type="text/css" hreflang="en">        <!-- Custom CSS -->
    <link href="{{asset('system/template_list/template_v3/css/media.css')}}" rel="stylesheet">
    <script>
        $.ajaxSetup({
            beforeSend: function(xhr, type) {
                if (!type.crossDomain) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                }
            },
        });

        var app_base_url = "https://e-warf.com";
        var tmpl_img_url = 'system/template_list/template_v3/images/';
        var asset_path = '<?php echo asset(''); ?>';
        var slideImageJson = [
            {
                "image": asset_path + "system\/template_list\/template_v1\/images\/Vc8Z7XLsyys9TEQdFPkVadult-adventure-backpack-287240.jpg",
                "title":"Bienvenue sur Warfir@","description":"L'exp\u00e9rience unique de voyage et d\u2019h\u00e9bergement "
            },
            {
                "image":asset_path + "system\/template_list\/template_v1\/images\/TMX3372451534825527flights_4.jpg",
                "title":"Bienvenue sur Warfir@","description":"Allons \u00e0 la d\u00e9couverte des merveilles de l'Afrique"
            },
            {
                "image":asset_path + "system\/template_list\/template_v1\/images\/TMX3372451534825527banner2.jpg",
                "title":"Bienvenue sur Warfir@","description":"D\u00e9couvrez avec nous, une autre fa\u00e7on de voyager"
            }
        ];
        var tmpl_imgs = slideImageJson;
        // alert(JSON.stringify(tmpl_imgs));
        var _lazy_content;
    </script>
    <!--
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/11/intl/fr_ALL/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/11/intl/fr_ALL/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/11/intl/fr_ALL/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/49/11/intl/fr_ALL/places_impl.js"></script>
      -->
</head>
