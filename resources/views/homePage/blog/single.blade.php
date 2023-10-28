@extends('homePage.master')
@section('title')
{{$post->title}}
@endsection
@section('meta')
    <meta name="tags" content="{{$post->post_meta_tags}}" />
    <meta name="description" content="{{$post->post_meta_title}}" />
@endsection
@section('content')
    <main class="bg-grey pb-30">

        <div class="container single-content">
            <div class="entry-header pt-80 pb-30 mb-20">
                <div class="row">
                    <div class="col-md-6 mb-md-0 mb-sm-3">
                        <figure class="mb-0 mt-lg-0 mt-3 border-radius-5">
                            <img class=" border-radius-5" src="{{asset($post->post_image)}}" alt="">
                        </figure>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="post-content">
                            <div class="entry-meta meta-0 mb-15 font-small">
                                <a href="{{route('home.category', $post->category->slug)}}"><span class="post-cat position-relative text-info">{{$post->category->name}}</span></a>
                            </div>
                            <h1 class="entry-title mb-30 font-weight-900">
                                {{$post->title}}
                            </h1>
                            <p class="excerpt mb-30">
                                {{$post->excerpt}}
                            </p>
                            <div class="entry-meta align-items-center meta-2 font-small color-muted">
                                <p class="mb-5">
                                    <a class="author-avatar" href="#"><img class="img-circle" src="{{asset($admin->image)}}" alt=""></a>
                                    By <a href="#"><span class="author-name font-weight-bold">{{$admin->name}}</span></a>
                                </p>
                                <span class="mr-10"> {{ $post->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--end single header-->
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="entry-main-content dropcap wow fadeIn animated">
                    <p>{!!  $post->body!!}</p>
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

                    <p>Share this:</p>
                    <div class="d-flex">
                        <h2 class="text-xl">
                        {!! $shareComponent !!}
                        </h2>
                    </div>
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
                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Recent posts</h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            @foreach($recent_posts as $blog)
                            <article class="hover-up-2 transition-normal wow fadeInUp  animated">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{asset($blog->post_image)}})">
                                                <a class="img-link" href="{{route('post.single', $blog)}}"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="#"><span class="post-cat text-primary">{{$blog->category->name}}</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a href="{{route('post.single', $blog)}}">{{$blog->title}}</a>
                                                <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">{{ $blog->created_at->format('d M Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--More posts-->
                <!--Comments-->
                <div class="comments-area">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Comments</h5>
                    </div>
                    @foreach($post->comments as $comment)
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="{{ $comment->user ? asset($comment->user->user_image ?? 'backEnd.users.jpg') : asset('backEnd.users.jpg') }}" alt="User Image">


                                 


                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        {{ $comment->the_comment }}
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <span>{{$comment->user->name}}</span>
                                            </h5>
                                            <p class="date">{{ $comment->created_at->diffForHumans() }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--comment form-->
                <div class="comment-form wow fadeIn animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Leave a Comment</h5>
                    </div>
                    @auth
                    <form class="form-contact comment_form" action="{{route('add.comment',$post)}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="the_comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn button button-contactForm">Post Comment</button>
                        </div>
                    </form>
                    @endauth
                    @guest
                        <p class="lead"><a href="{{ route('login') }}">Login </a> OR <a href="{{ route('register') }}">Register</a> to write comments</p>
                    @endguest
                </div>
            </article>
        </div>
        <!--container-->
    </main>
@endsection
