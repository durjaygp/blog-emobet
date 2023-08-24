<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="{{$website->author}}"/>
    <meta name="description" content="{{$website->description}}" />
    <meta name="keywords" content="{{$website->keywords}}" />
    <meta name="tags" content="{{$website->tags}}" />
    <meta name="url" content="{{$website->url}}" />
    <meta name="google-site-verification" content="{{$website->google}}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset($website->fav_icon)}}">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/widgets.css">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/responsive.css">
    <link href="{{asset('frontEnd')}}/iziToast/dist/css/iziToast.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <script src="{{asset('frontEnd')}}/iziToast/dist/js/iziToast.min.js"></script>


    @if($errors->any())
        @foreach($errors->all() as $error)
            <script>
                iziToast.error({
                    title: '',
                    position:'topRight',
                    message: '{{$error}}',
                });
            </script>
        @endforeach
    @endif

    @if(session()->get('success'))
        <script>
            iziToast.success({
                title: '',
                position:'topRight',
                message: '{{session()->get('success')}}',
            });
        </script>
    @endif

</body>
</html>
