<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Stories - Personal Blog HTML Template</title>
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
    <main  class="bg-grey pb-30">
        <div class="container pt-30">
            <div class="featured-slider-3 position-relative">
                <div class="slider-3-arrow-cover"></div>
                <div class="featured-slider-3-items">
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-16.jpg)">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Travel</span></a>
                                            <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Animal</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="single.html" tabindex="0">How to Visit Bali's Monkey Forest</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">26 August 2020</span>
                                            <span class="hit-count has-dot">18k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-17.jpg)">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Lifestyle</span></a>
                                            <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Destinations</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="single.html" tabindex="0">Abstract Australia from Above</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">15 September 2020</span>
                                            <span class="hit-count has-dot">23k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-18.jpg)">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Travel Tips</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="single.html" tabindex="0">Tips for Scuba Diving the Great Barrier Reef</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">15 September 2020</span>
                                            <span class="hit-count has-dot">17k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-single overflow-hidden border-radius-10">
                        <div class="post-thumb position-relative">
                            <div class="thumb-overlay position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-19.jpg)">
                                <div class="post-content-overlay">
                                    <div class="container">
                                        <div class="entry-meta meta-0 font-small mb-20">
                                            <a href="category.html" tabindex="0"><span class="post-cat text-info text-uppercase">Hotel</span></a>
                                            <a href="category.html" tabindex="0"><span class="post-cat text-warning text-uppercase">Healthy</span></a>
                                        </div>
                                        <h1 class="post-title mb-20 font-weight-900 text-white">
                                            <a class="text-white" href="single.html" tabindex="0">Staying at the Hilton Seychelles Northolme Resort & Spa</a>
                                        </h1>
                                        <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                            <span class="post-on">22 September 2020</span>
                                            <span class="hit-count has-dot">16k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div class="col-md-8 text-md-right font-small align-self-center">
                            <p class="d-inline-block mr-5 mb-0"><i class="elegant-icon  icon_tag_alt mr-5 text-muted"></i>Hot tags:</p>
                            <ul class="list-inline d-inline-block tags">
                                <li class="list-inline-item"><a href="#"># Covid-19</a></li>
                                <li class="list-inline-item"><a href="#"># Inspiration</a></li>
                                <li class="list-inline-item"><a href="#"># Work online</a></li>
                                <li class="list-inline-item"><a href="#"># Stay home</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="loop-grid mb-30">
                <div class="row">
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-1.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-info">Travel</span></a>
                                    <a href="category.html"><span class="post-cat text-success">Food</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Want fluffy Japanese pancakes but can’t fly to Tokyo?</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="time-reading has-dot">12 mins read</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-1.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-info">Travel</span></a>
                                    <a href="category.html"><span class="post-cat text-success">Food</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Want fluffy Japanese pancakes but can’t fly to Tokyo?</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="time-reading has-dot">12 mins read</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-1.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-success"><i class="elegant-icon icon_camera_alt"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-info">Travel</span></a>
                                    <a href="category.html"><span class="post-cat text-success">Food</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Want fluffy Japanese pancakes but can’t fly to Tokyo?</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">27 August</span>
                                        <span class="time-reading has-dot">12 mins read</span>
                                        <span class="post-by has-dot">23k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-7.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-warning">Fashion</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Put Yourself in Your Customers Shoes</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">17 July</span>
                                        <span class="time-reading has-dot">8 mins read</span>
                                        <span class="post-by has-dot">12k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.2s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-9.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">Life and Death in the Empire of the Tiger</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">7 August</span>
                                        <span class="time-reading has-dot">15 mins read</span>
                                        <span class="post-by has-dot">500 views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay="0.4s">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-11.jpg)">
                                <a class="img-link" href="single.html"></a>
                                <span class="top-right-icon bg-info"><i class="elegant-icon icon_headphones"></i></span>
                                <ul class="social-share">
                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="post-content p-30">
                                <div class="entry-meta meta-0 font-small mb-10">
                                    <a href="category.html"><span class="post-cat text-success">Lifestyle</span></a>
                                </div>
                                <div class="d-flex post-card-content">
                                    <h5 class="post-title mb-20 font-weight-900">
                                        <a href="single.html">When Two Wheels Are Better Than Four</a>
                                    </h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on">15 Jun</span>
                                        <span class="time-reading has-dot">9 mins read</span>
                                        <span class="post-by has-dot">1.2k views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">Travel tips</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-6.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span class="post-cat text-info">Artists</span></a>
                                                    <a href="category.html"><span class="post-cat text-success">Film</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Easy Ways to Use Alternatives to Plastic</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as career-defining for a&nbsp;startup founder&nbsp;as an elite university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">27 August</span>
                                                        <span class="time-reading has-dot">12 mins read</span>
                                                        <span class="post-by has-dot">23k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-8.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span class="post-cat">Fashion</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Tips for Growing Healthy, Longer Hair</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Proin vitae placerat quam. Ut sodales eleifend urna, in condimentum tortor ultricies eu. Nunc auctor iaculis dolorProin vitae placerat quam. Proin vitae placerat quam.</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="time-reading has-dot">6 mins read</span>
                                                        <span class="post-by has-dot">3k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-10.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <span class="top-right-icon bg-secondary"><i class="elegant-icon icon_heart_alt"></i></span>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span class="post-cat text-success">Lifestyle</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">Project Ideas Around the House</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor condimentum metus non tempor. Maecenas non augue aliquam, facilisis lectus quis, lacinia risus.</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">27 August</span>
                                                        <span class="time-reading has-dot">12 mins read</span>
                                                        <span class="post-by has-dot">23k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-12.jpg)">
                                                <a class="img-link" href="single.html"></a>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb" href="#" title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="post-content p-30">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="category.html"><span class="post-cat text-danger">Hotels</span></a>
                                                </div>
                                                <div class="d-flex post-card-content">
                                                    <h5 class="post-title mb-20 font-weight-900">
                                                        <a href="single.html">How to Give Yourself a Spa Day from Home</a>
                                                    </h5>
                                                    <div class="post-excerpt mb-25 font-small text-muted">
                                                        <p>Graduating from a top accelerator or incubator can be as career-defining for a&nbsp;startup founder&nbsp;as an elite university diploma. The intensive programmes, which…</p>
                                                    </div>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">18 August</span>
                                                        <span class="time-reading has-dot">14 mins read</span>
                                                        <span class="post-by has-dot">25k views</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-13.jpg)">
                                                    <a class="img-link" href="single.html"></a>
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
                                                    <a href="category.html"><span class="post-cat text-primary">Food</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">Helpful Tips for Working from Home as a Freelancer</a>
                                                    <span class="post-format-icon"><i class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">7 August</span>
                                                    <span class="time-reading has-dot">11 mins read</span>
                                                    <span class="post-by has-dot">3k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-4.jpg)">
                                                    <a class="img-link" href="single.html"></a>
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
                                                    <a href="category.html"><span class="post-cat text-success">Cooking</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">10 Easy Ways to Be Environmentally Conscious At Home</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">27 Sep</span>
                                                    <span class="time-reading has-dot">10 mins read</span>
                                                    <span class="post-by has-dot">22k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-2.jpg)">
                                                    <a class="img-link" href="single.html"></a>
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
                                                    <a href="category.html"><span class="post-cat text-warning">Cooking</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">My Favorite Comfies to Lounge in At Home</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">7 August</span>
                                                    <span class="time-reading has-dot">9 mins read</span>
                                                    <span class="post-by has-dot">12k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative" style="background-image: url({{asset('static')}}/assets/imgs/news/news-3.jpg)">
                                                    <a class="img-link" href="single.html"></a>
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
                                                    <a href="category.html"><span class="post-cat text-danger">Travel</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="single.html">How to Give Your Space a Parisian-Inspired Makeover</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">27 August</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">23k views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="pagination-area mb-30 wow fadeInUp animated">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="elegant-icon arrow_right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                                <img class="about-author-img mb-25" src="{{asset('static')}}/assets/imgs/authors/author.jpg" alt="">
                                <h5 class="mb-20">Hello, I'm Steven</h5>
                                <p class="font-medium text-muted">Hi, I’m Stenven, a Florida native, who left my career in corporate wealth management six years ago to embark on a summer of soul searching that would change the course of my life forever.</p>
                                <strong>Follow me: </strong>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Most popular</h5>
                                </div>
                                <div class="post-block-list post-module-1">
                                    <ul class="list-post">
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Spending Some Quality Time with Kids? It’s Possible</a></h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">05 August</span>
                                                        <span class="post-by has-dot">150 views</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/news/thumb-6.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Relationship Podcasts are Having “That” Talk</a></h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="post-by has-dot">6k views</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/news/thumb-7.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">Here’s How to Get the Best Sleep at Night</a></h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">15 August</span>
                                                        <span class="post-by has-dot">16k views</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/news/thumb-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=" wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a href="single.html">America’s Governors Get Tested for a Virus That Is Testing Them</a></h6>
                                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">12 August</span>
                                                        <span class="post-by has-dot">3k views</span>
                                                    </div>
                                                </div>
                                                <div class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/news/thumb-3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Last comments</h5>
                                </div>
                                <div class="post-block-list post-module-2">
                                    <ul class="list-post">
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/authors/author-2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <p class="mb-10"><a href="author.html"><strong>David</strong></a>
                                                        <span class="ml-15 font-small text-muted has-dot">16 Jan 2020</span>
                                                    </p>
                                                    <p class="text-muted font-small">A writer is someone for whom writing is more difficult than...</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/authors/author-3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <p class="mb-10"><a href="author.html"><strong>Kokawa</strong></a>
                                                        <span class="ml-15 font-small text-muted has-dot">12 Feb 2020</span>
                                                    </p>
                                                    <p class="text-muted font-small">Striking pewter studded epaulettes silver zips</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="wow fadeInUp animated">
                                            <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white" href="single.html">
                                                        <img src="{{asset('static')}}/assets/imgs/news/thumb-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content media-body">
                                                    <p class="mb-10"><a href="author.html"><strong>Tsukasi</strong></a>
                                                        <span class="ml-15 font-small text-muted has-dot">18 May 2020</span>
                                                    </p>
                                                    <p class="text-muted font-small">Workwear bow detailing a slingback buckle strap</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Instagram</h5>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li>
                                            <a href="{{asset('static')}}/assets/imgs/thumbnail-3.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{asset('static')}}/assets/imgs/news/thumb-1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{asset('static')}}/assets/imgs/thumbnail-4.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{asset('static')}}/assets/imgs/news/thumb-2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{asset('static')}}/assets/imgs/thumbnail-5.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{asset('static')}}/assets/imgs/news/thumb-3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{asset('static')}}/assets/imgs/thumbnail-3.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{asset('static')}}/assets/imgs/news/thumb-4.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{asset('static')}}/assets/imgs/thumbnail-4.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{asset('static')}}/assets/imgs/news/thumb-5.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="{{asset('static')}}/assets/imgs/thumbnail-5.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5" src="{{asset('static')}}/assets/imgs/news/thumb-6.jpg" alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
