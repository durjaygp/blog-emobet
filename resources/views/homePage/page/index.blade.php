@extends('homePage.master')
@section('title')
    {{ $page->page_title }}
@endsection
@section('content')
    <main class="bg-grey pb-30">

        <div class="container single-content">
            <div class="entry-header pt-80 pb-30 mb-20">
                <div class="row">
                    <div class="col-md-6 mb-md-0 mb-sm-3">
                        <figure class="mb-0 mt-lg-0 mt-3 border-radius-5">
                            <img class=" border-radius-5" src="{{asset( $page->page_image )}}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="post-content">
                            <h1 class="entry-title mb-30 font-weight-900">
                                {{  $page->page_title }}
                            </h1>
                            <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                <p class="mb-5">
                                    <a class="author-avatar" href="#"><img class="img-circle" src="{{asset($admin->image)}}" alt=""></a>
                                    By <a href="#"><span class="author-name font-weight-bold">{{$admin->name}}</span></a>
                                </p>
                                <span class="mr-10"> {{ $page->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end single header-->
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="entry-main-content dropcap wow fadeIn animated">
                    <p>{!!  $page->page_description!!}</p>
                    <!--Begin Subcrible-->
                    <div class="border-radius-10 border bg-white mb-30 p-30 wow fadeIn animated">
                        <div class="row justify-content-between">
                            <div class="col-md-5 mb-2 mb-md-0">
                                <h5 class="font-weight-bold secondfont mb-30 mt-0">Become a member</h5>
                                <p class="font-small">Get the latest news right in your inbox. We never spam!</p>
                            </div>
                            <div class="col-md-7">
                                <form action="{{route('add.subscribe')}}" method="post" class="form-group">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="name" placeholder="Full Name">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <input type="email" class="form-control" name="email" placeholder="Enter your E-mail address">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-social-share clearfix wow fadeIn animated">

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

                    <style>
                        div#social-links {
                            margin: 0 auto;
                            max-width: 500px;
                        }

                        div#social-links ul li {
                            display: inline-block;
                        }
                        div#social-links ul li a {
                            /*padding: 20px;*/
                            /*margin: 1px;*/
                            /*font-size: 40px;*/
                            /*color: #222;*/
                        }
                    </style>

                </div>

                <!--author box-->
                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="#"><img src="{{asset($admin->image)}}" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author">
                                <span class="fn"><a href="#" title="Posted by Barbara Cartland" rel="author">{{$admin->name}}</a></span></span>
                        </h4>
                        <div class="author-description text-muted">{{$admin->description}}</div>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--related posts-->
                <!--More posts-->
                <!--Comments-->
                <!--comment form-->
            </article>
        </div>
        <!--container-->
    </main>
@endsection
