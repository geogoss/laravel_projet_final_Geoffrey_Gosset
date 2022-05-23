<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hurst || projet final</title>
    <meta name="description"
        content="Hurst – Furniture Store eCommerce HTML Template is a clean and elegant design – suitable for selling flower, cookery, accessories, fashion, high fashion, accessories, digital, kids, watches, jewelries, shoes, kids, furniture, sports….. It has a fully responsive width adjusts automatically to any screen size or resolution.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v5 css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }} ">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }} ">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }} ">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }} ">
    <link rel="stylesheet" href="{{ asset('lib/css/preview.css') }} ">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <!-- lightbox css -->
    <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">
    <!-- material-design-iconic-font css -->
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.css') }}">
    <!-- All common css of theme -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }} ">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- shortcode css -->
    <link rel="stylesheet" href="{{ asset('css/shortcode.css') }} ">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">
    <!-- modernizr css -->
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
</head>

<body>
    <!-- WRAPPER START -->
    <div class="wrapper bg-dark-white">
        {{-- @include('partials.shop.headerShop')
        @include('partials.shop.mobilemenuShop') --}}
        @include('partials.home.headerHome')
        @include('partials.home.mobileMenuHome')
    

        @yield('contentBack')

        @include('partials.shop.footerShop')
        @if (!Request::is('/myaccount'))
            @include('partials.shop.quickviewProductShop')
        @endif

    </div>
    <!-- WRAPPER END -->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }} "></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery.meanmenu js -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- slick.min js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- jquery.treeview js -->
    <script src="{{ asset('js/jquery.treeview.js') }}"></script>
    <!-- lightbox.min js -->
    <script src="{{ asset('js/lightbox.min.js') }}"></script>
    <!-- jquery-ui js -->
    <script src="{{ asset('js/jquery-ui.min.js') }} "></script>
    <!-- jquery.nivo.slider js -->
    <script src="{{ asset('lib/js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('lib/home.js') }}"></script>
    <!-- jquery.nicescroll.min js -->
    <script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <!-- countdon.min js -->
    <script src="{{ asset('js/countdon.min.js') }} "></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- plugins js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
