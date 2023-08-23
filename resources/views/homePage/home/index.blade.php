@extends('homePage.master')
@section('title')
{{$website->name}}
@endsection
@section('content')
    <main  class="bg-grey pb-30">
        <div class="container pt-30">
            <div class="featured-slider-3 position-relative">
                <div class="slider-3-arrow-cover"></div>
                <div class="featured-slider-3-items">
                    @foreach($slider as $row)
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url({{asset($row->post_image)}})">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">{{$row->category->name}}</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="{{route('post.single', $row)}}" tabindex="0">{{$row->title}}</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">{{ $row->created_at->format('d M Y') }}</span>
                                            <span class="post-on">{{$row->comments_count}} Comments</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End feature -->
        <div class="container">
            <div class="hot-tags pt-30 pb-30 font-small align-self-center">
                <div class="widget-header-3">
                    <div class="row align-self-center">
                        <div class="col-md-4 align-self-center">
                            <h5 class="widget-title">Featured posts</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    @foreach($featured as $row)
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset($row->post_image)}})">
                                <a class="img-link" href="{{route('post.single', $row)}}"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <span class="post-cat text-info">{{$row->category->name}}</span>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="{{route('post.single', $row)}}">{{$row->title}}</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">{{ $row->created_at->diffForHumans() }}</span>
                                        <span class="post-by has-dot">{{$row->comments_count}} Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                @foreach($latest as $row)
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{asset($row->post_image)}})">
                                                    <a class="img-link" href="{{route('post.single', $row)}}"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <span class="post-cat text-primary">{{$row->category->name}}</span>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="{{route('post.single', $row)}}">{{$row->title}}</a>
                                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">{{ $row->created_at->diffForHumans() }}</span>
                                                    <span class="post-by has-dot">{{$row->comments_count}} Comments</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                                <img class="about-author-img mb-25" src="{{asset($admin->image)}}" alt="">
                                <h5 class="mb-20">{{$admin->name}}</h5>
                                <p class="font-medium text-muted">{{$admin->description}}</p>
                                <strong>Follow me: </strong>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    @foreach($socials as $row)
                                        <li class="list-inline-item"><a class="pt" href="{{$row->social_link}}" target="_blank" title="Facebook"><i class="{{$row->social_icon}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Most popular</h5>
                                </div>
                                <div class="post-block-list post-module-1">
                                    <ul class="list-post">
                                        @foreach($last as $row)
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="{{route('post.single', $row)}}">{{$row->title}}</a></h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">{{ $row->created_at->diffForHumans() }}</span>
                                                        <span class="post-by has-dot">{{$row->comments_count}} Comments</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="{{route('post.single', $row)}}">
                                                        <img src="{{asset($row->post_image)}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
