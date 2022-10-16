<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,700|Raleway:400,400i,500i,600,700" rel="stylesheet"> 


   

   
    

    <link href="{{ URL::asset('css/fanpageCss/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/icon-font.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/icofont.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/meanmenu.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/animate.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/venobox.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/fanpageCss/responsive.css') }}" rel="stylesheet" />
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

   

    @yield('styles')

     <!--Laravel pwa directiva para compilarla-->
     @laravelPWA



</head>

<body >




        @yield("content")


    <script src="{{ URL::asset('js/fanpageJs/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/jquery.meanmenu.min.js') }}"></script>

    <script src="{{ URL::asset('js/fanpageJs/jquery.sticky.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/gijgo.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/jquery.appear.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/jquery.inview.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/jquery.mixitup.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/venobox.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/scrolltopcontrol.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/wow.min.js') }}"></script>
    <script src="{{ URL::asset('js/fanpageJs/scripts.js') }}"></script>

    
    @yield('scripts')
</body>

</html>
