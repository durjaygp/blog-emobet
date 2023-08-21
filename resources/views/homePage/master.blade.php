<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('static')}}/assets/imgs/theme/logo.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/widgets.css">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/responsive.css">
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    @include('homePage.inc.header')

    <!-- Start Main content -->
   @yield('content')
    <!-- End Main content -->

    <!-- Footer Start-->
    @include('homePage.inc.footer')
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="{{asset('static')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/popper.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.slicknav.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/slick.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/wow.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.ticker.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.vticker-min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.sticky.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/waypoints.min.js"></script>
    <script src="{{asset('static')}}/assets/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="{{asset('static')}}/assets/js/main.js"></script>
</body>
</html>
