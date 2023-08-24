<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontEnd')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontEnd')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontEnd')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('frontEnd')}}/iziToast/dist/css/iziToast.min.css" rel="stylesheet">
</head>

<body>
@include('frontEnd.include.header')


@yield('content')
<!-- Blog Start -->
<!--     <div class="container-fluid mt-5 pb-2">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Blog</h6>
            <h1 class="display-4 text-center mb-5">Latest From Blog</h1>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/blog-1.jpg" alt="">
                            <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/blog-2.jpg" alt="">
                            <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('frontEnd')}}/img/blog-3.jpg" alt="">
                            <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Blog End -->


<!-- Footer Start -->
@include('frontEnd.include.footer')
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontEnd')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('frontEnd')}}/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('frontEnd')}}/lib/counterup/counterup.min.js"></script>
<script src="{{asset('frontEnd')}}/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="{{asset('frontEnd')}}/iziToast/dist/js/iziToast.min.js"></script>
<!-- Template Javascript -->
<script src="{{asset('frontEnd')}}/js/main.js"></script>


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
