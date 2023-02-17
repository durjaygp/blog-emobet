<!-- Topbar Start -->
<div class="container-fluid bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="{{route('home.faq')}}">FAQs</a>
                    <span class="text-white">|</span>

                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">

                    <a class="text-white px-3" href="">
                        <i class="fab fa-whatsapp"></i>
                    </a>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{route('blog')}}" class="navbar-brand">
                <h1 class="m-0 text-secondary"><span class="text-primary">EMO</span>BETTING</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                    <a href="{{route('home.arc')}}" class="nav-item nav-link">Arbitrage calculator</a>

                    <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{route('home.arcguide')}}" class="dropdown-item">Arbitrage Guide</a>
                            <a href="{{route('home.oop')}}" class="dropdown-item">Arbitrage opportunities</a>
                        </div>
                    </div>
                    <a href="{{route('home.contact')}}" class="nav-item nav-link">Contact</a>
                    @guest
                        <div class="nav-item dropdown">
                            <a href="{{route('login')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{route('login')}}" class="dropdown-item">Login</a>
                                <a href="{{route('register')}}" class="dropdown-item">Register</a>
                            </div>
                        </div>
                    @endguest
                    @auth
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{auth()->user()->name}}</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a  onclick="event.preventDefault(); document.getElementById('nav-logout').submit()"
                                    href="#" class="dropdown-item">Logout</a>
                                <form action="{{route('logout')}}" id="nav-logout" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->













