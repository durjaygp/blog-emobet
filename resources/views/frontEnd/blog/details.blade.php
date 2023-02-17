@extends('frontEnd.master')
@section('title')
    Blog Post Details
@endsection
@section('content')
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Detail Page</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6>
                    <h1 class="mb-4 section-title">{{$post->title}}</h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-primary"></i> {{$post->author->name}}</span>
                        <span class="mr-3"><i class="fa fa-folder text-primary"></i> {{$post->category->name}}</span>
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i> {{ count($post->comments) }}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="{{asset($post->image->path)}}" alt="Image">
                    <p>{{$post->excerpt}}</p>

                    <p>{!!$post->body!!}
                    </p>
                </div>

                <!-- Related Post Start -->
                 <!--<div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Related Post</h3>
                    <div class="owl-carousel related-carousel position-relative">
                        <div class="bg-light">
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
                        <div class="bg-light">
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
                        <div class="bg-light">
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
                Related Post End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">{{ count($post->comments) }} Comments</h3>
                    @foreach($post->comments as $comment)
                    <div class="media mb-4">
                        <img src="{{asset('backEnd')}}/assets/person.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>{{$comment->user->name}}<small><i>{{ $comment->created_at->diffForHumans() }}</i></small></h6>
                            <p>{{ $comment->the_comment }}</p>
                            <!-- <button class="btn btn-sm btn-light">Reply</button> -->
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-light p-5">
                    <h3 class="font-weight-bold mb-4">Leave a comment</h3>
                    @auth

                    <form action="{{route('add.comment',$post)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="the_comment" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                        </div>
                    </form>
                    @endauth

                    @guest
                        <p class="lead"><a href="{{ route('login') }}">Login </a> OR <a href="{{ route('register') }}">Register</a> to write comments</p>
                    @endguest


                </div>
                <!-- Comment Form End -->
            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Start -->
                <div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                    <img class="rounded-circle bg-white shadow mx-auto mb-4" src="{{asset($person->image)}}" style="width: 100px; height: 100px; padding: 12px;" alt="">
                    <h3 class="text-primary mb-3">{{$person->name}}</h3>
                    <p class="text-white m-0">{{$person->description}}</p>
                </div>
                <!-- Author End -->

                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
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
                {{-- <x-blog.blog-tags :tags="$tags"/> --}}

                <!-- Tags End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End -->
@endsection
