<aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
    <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
    <div class="sidebar-inner">
        <!--Categories-->
        <div class="sidebar-widget widget_categories mb-50 mt-30">
            <div class="widget-header-2 position-relative">
                <h5 class="mt-5 mb-15">Hot topics</h5>
            </div>
            <div class="widget_nav_menu">
                <ul>
                    @foreach($allcategory as $cat)
                        <li class="cat-item cat-item-2"><a href="{{route('home.category', $cat)}}">{{$cat->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
{{--        <!--Latest-->--}}
{{--        <div class="sidebar-widget widget-latest-posts mb-50">--}}
{{--            <div class="widget-header-2 position-relative mb-30">--}}
{{--                <h5 class="mt-5 mb-30">Don't miss</h5>--}}
{{--            </div>--}}
{{--            <div class="post-block-list post-module-1 post-module-5">--}}
{{--                <ul class="list-post">--}}
{{--                    <li class="mb-30">--}}
{{--                        <div class="d-flex hover-up-2 transition-normal">--}}
{{--                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                <a class="color-white" href="single.html">--}}
{{--                                    <img src="{{asset('static')}}/assets/imgs/news/thumb-1.jpg" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The Life of a Travel Writer with David Farley</a></h6>--}}
{{--                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                    <span class="post-on">05 August</span>--}}
{{--                                    <span class="post-by has-dot">300 views</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="mb-30">--}}
{{--                        <div class="d-flex hover-up-2 transition-normal">--}}
{{--                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                <a class="color-white" href="single.html">--}}
{{--                                    <img src="{{asset('static')}}/assets/imgs/news/thumb-2.jpg" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Why Don’t More Black American Women Travel Solo?</a></h6>--}}
{{--                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                    <span class="post-on">12 August</span>--}}
{{--                                    <span class="post-by has-dot">23k views</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="mb-30">--}}
{{--                        <div class="d-flex hover-up-2 transition-normal">--}}
{{--                            <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">--}}
{{--                                <a class="color-white" href="single.html">--}}
{{--                                    <img src="{{asset('static')}}/assets/imgs/news/thumb-3.jpg" alt="">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="post-content media-body">--}}
{{--                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">The 22 Best Things to See and Do in Bangkok</a></h6>--}}
{{--                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">--}}
{{--                                    <span class="post-on">27 August</span>--}}
{{--                                    <span class="post-by has-dot">23k views</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!--Ads-->--}}
{{--        <div class="sidebar-widget widget-ads">--}}
{{--            <div class="widget-header-2 position-relative mb-30">--}}
{{--                <h5 class="mt-5 mb-30">Advertise banner</h5>--}}
{{--            </div>--}}
{{--            <a href="https://themeforest.net/user/alithemes/portfolio" target="_blank">--}}
{{--                <img class="advertise-img border-radius-5" src="{{asset('static')}}/assets/imgs/ads/ads-1.jpg" alt="">--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
</aside>
<!-- Start Header -->
<header class="main-header header-style-1 font-heading">
    <div class="header-top">
        <div class="container">
            <div class="row pt-20 pb-20">
                <div class="col-md-3 col-xs-6">
                    <a href="{{route('home')}}"><img class="logo" src="{{asset($website->website_logo)}}" alt=""></a>
                </div>
                <div class="col-md-9 col-xs-6 text-right header-top-right ">
                    <ul class="list-inline nav-topbar d-none d-md-inline">
                        <li class="list-inline-item menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu font-small">
                                @foreach($pages as $row)
                                <li class=""><a href="{{route('home.page',['page'=> $row->slug])}}">{{$row->page_title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @guest
                        <li class="list-inline-item menu-item-has-children"><a href="#">Login or Register</a>
                            <ul class="sub-menu font-small">
                                <li class=""><a href="{{route('login')}}">Login</a></li>
                                <li class=""><a href="{{route('register')}}">Register</a></li>
                            </ul>
                        </li>
                        @endguest
                        @auth
                            <li class="list-inline-item menu-item-has-children"><a href="#">{{auth()->user()->name}}</a>
                                <ul class="sub-menu font-small">

                                    @if(auth()->user()->role_id == 2)
                                        <li class=""><a href="{{route('admin.index')}}">Admin Panel</a></li>
                                    @endif

                                    <li class=""><a onclick="event.preventDefault(); document.getElementById('nav-logout').submit()" href="#">Logout</a>
                                        <form action="{{route('logout')}}" id="nav-logout" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth

                    </ul>
                    <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                    <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button>

                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container align-self-center">
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="main-nav d-none d-lg-block float-left">
                <nav>
                    <!--Desktop menu-->
                    <ul class="main-menu d-none d-lg-inline font-small">
                        <li class="">
                            <a href="{{route('home')}}"> <i class="elegant-icon icon_house_alt mr-5"></i>Home Page</a>
                        </li>
                        @foreach($categories as $cat)
                        <li class=""> <a href="{{route('home.category', $cat)}}">
                                {{$cat->name}}</a> </li>
                        @endforeach
                    </ul>
                    <!--Mobile menu-->
                    <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                        <li class="menu-item-has-children">
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu font-small">
                                @foreach($pages as $row)
                                    <li class=""><a href="#">{{$row->page_title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Category</a>
                            <ul class="sub-menu font-small">
                                @foreach($allcategory as $cat)
                                    <li class=""><a href="{{route('home.category', $cat)}}">{{$cat->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @guest
                            <li class=" menu-item-has-children"><a href="#">Login or Register</a>
                                <ul class="sub-menu font-small">
                                    <li class=""><a href="{{route('login')}}">Login</a></li>
                                    <li class=""><a href="{{route('register')}}">Register</a></li>
                                </ul>
                            </li>
                        @endguest
                        @auth
                            <li class=" menu-item-has-children"><a href="#">{{auth()->user()->name}}</a>
                                <ul class="sub-menu font-small">

                                    <li class=""><a onclick="event.preventDefault(); document.getElementById('nav-logout').submit()" href="#">Logout</a>
                                        <form action="{{route('logout')}}" id="nav-logout" method="post">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </nav>
            </div>
            <div class="float-right header-tools text-muted font-small">
                <ul class="header-social-network d-inline-block list-inline mr-15">
                    @foreach($socials as $row)
                        <li class="list-inline-item"><a class="pt" href="{{$row->social_link}}" target="_blank" title="Facebook"><i class="{{$row->social_icon}}"></i></a></li>
                    @endforeach
                </ul>
                <div class="off-canvas-toggle-cover d-inline-block">
                    <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
<!--Start search form-->

<div class="main-search-form">
    <div class="container">
        <div class=" pt-50 pb-50 ">
            <div class="row mb-20">
                <div class="col-12 align-self-center main-search-form-cover m-auto">
                    <p class="text-center"><span class="search-text-bg">Search</span></p>
                    <form action="{{route('search.post')}}" class="search-header" method="get">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" name="search" placeholder="Search stories, places and people">
                            <div class="input-group-append">
                                <button class="btn btn-search bg-white" type="submit">
                                    <i class="elegant-icon icon_search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
