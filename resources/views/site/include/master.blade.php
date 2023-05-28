<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <title>Booking Pink Home page</title>
        <link rel="icon" href="{{asset('front/assets/images/favicon.ico') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{asset('front/assets/css/icon-style.css') }}" />
        <link rel="stylesheet" href="{{asset('front/assets/css/style_ar.css') }}">
        <link rel="stylesheet" href="{{asset('front/assets/css/colors/main.css') }}" id="colors">
        <link href="{{asset('front/assets/css/plugins/datedropper.css') }}" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header Container
               ================================================== -->
            @include('site.include.header')
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            <!-- Dashboard -->
            <div id="dashboard">

                <!-- Navigation
                ================================================== -->

                <!-- Responsive Navigation Trigger -->
                <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

                @include('site.include.nav')
                <!-- Navigation / End -->


                <!-- Content
                ================================================== -->
                @yield('body')
                <!-- Content / End -->
            </div>
            <!-- Dashboard / End -->
        </div>
        <!-- Wrapper / End -->
        <!-- Scripts
        ================================================== -->
        <script type="text/javascript" src="{{asset('front/assets/scripts/jquery-2.2.0.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/jpanelmenu.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/chosen.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/rangeslider.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/waypoints.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/counterup.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/tooltips.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('front/assets/scripts/custom.js') }}"></script>
    </body>
</html>