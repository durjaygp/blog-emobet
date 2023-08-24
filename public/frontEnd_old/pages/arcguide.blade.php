@extends('frontEnd.master')
@section('title','Arbitrage guide')
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Arbitrage guide</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Services</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Arbitage guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <div class="container">
        <div class="mb-8">
            <img class="img-fluid w-100 mb-4" src="{{asset('frontEnd')}}/img/guide.jpg" alt="Image">
            <p>"Arbitrage Betting Guide" is free online educational course for betting on sports arbitrages, also known as "sure bets". It contains more than 80 units that will give you all the required information to make you a successful sports arbitrage bettor and turn gambling into clever investment!</p>
            <p> Fill in your Email address to receive the free pdf on your inbox</p>
        </div>


        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Guide</h4>
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control border-0" placeholder="Your Name" required="required" name="fullname" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0" placeholder="Your Email" required="required" name="email" />
                </div>
                <div>
                    <button onclick="newsletter();" class="btn btn-lg btn-secondary btn-block border-0" type="submit" name="submit_guide">Submit Now</button>
                </div>
            </form>
        </div>
    </div>



    <!-- Services Start -->
@endsection
