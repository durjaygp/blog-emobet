{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stories - Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('static')}}/assets/imgs/theme/favicon.html">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/widgets.css">
    <link rel="stylesheet" href="{{asset('static')}}/assets/css/responsive.css">
</head>

<body>
<div class="scroll-progress primary-bg"></div>
@include('homePage.inc.header')
<!-- Start Main content -->
<main class="bg-grey pt-80 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap widget-taber-content p-30 bg-white border-radius-10">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1 text-center">
                            <h3 class="mb-30 font-weight-900">Create an account</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                                    @csrf
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" required="" type="password" name="password_confirmation" placeholder="Confirm password">
                            </div>
                            <div class="login_footer form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                        <label class="form-check-label" for="exampleCheckbox1"><span>I agree to terms &amp; Policy.</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn-block">Register</button>
                            </div>
                        </form>
                        <div class="divider-text-center mt-15 mb-15">
                            <span> or</span>
                        </div>
                        <div class="text-muted text-center">Already have an account? <a href="{{route('login')}}">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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
