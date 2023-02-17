@extends('frontEnd.master')
@section('title')
   Blog | {{$category->name}}
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Blog Articles</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="{{route('home')}}">Blog</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Category</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">{{$category->name}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Grid Start -->
            <div class="col-lg-8">
                <div class="row">
                    @forelse($blogs as $blog)
                        <div class="col-md-6 mb-2">
                            <div class="bg-light mb-4">
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="{{asset($blog->image->path)}}" alt="">
                                    <a href="{{route('blog.show', $blog)}}" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                        <h4 class="text-center text-white font-weight-medium mb-3">{{$blog->title}}</h4>
                                        <div class="d-flex text-light">
                                            <small class="mr-2"><i class="fa fa-user text-secondary"></i> {{$blog->author->name}}</small>
                                            <small class="mr-2"><i class="fa fa-folder text-secondary"></i> {{$blog->category->name}}</small>
                                            <small class="mr-2"><i class="fa fa-comments text-secondary"></i> {{$blog->comments_count}}</small>
                                        </div>
                                    </a>
                                </div>
                                <p class="m-0 p-4">{{Str::limit($blog->excerpt, 200)}}</p>
                            </div>
                        </div>
                    @empty
                        <h2 class=" text-danger">We Have No Blog Articles Right Now</h2>
                    @endforelse


                </div>

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item">
                                    {{$blogs->links()}}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog Grid End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <x-blog.side-categories :cates="$cates"/>

                <!-- Category End -->

                <!-- Recent Post Start -->
                <x-blog.recent-blogs :recent_posts="$recent_posts"/>


                <!-- Recent Post End -->

                <!-- Tags Start -->
                <x-blog.blog-tags :tags="$tags"/>

                <!-- Tags End -->

                <!-- Image Start -->
            {{--                <div class="mb-5">--}}
            {{--                    <img src="{{asset('frontEnd')}}/img/blog-3.jpg" alt="" class="img-fluid">--}}
            {{--                </div>--}}
            <!-- Image End -->

                <!-- Plain Text Start -->
            {{--                <div>--}}
            {{--                    <h3 class="font-weight-bold mb-4">Plain Text</h3>--}}
            {{--                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.--}}
            {{--                </div>--}}
            <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->
@endsection
