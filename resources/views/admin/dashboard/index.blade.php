@extends('admin.master')
@section('title')
    Admin Dashboard
@endsection
@section('content')
<div class="page-content">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Blog Post</p>
                            <h4 class="my-1 text-info">{{$post}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxl-blogger' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Category</p>
                            <h4 class="my-1 text-danger">{{$category}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-category-alt' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total User</p>
                            <h4 class="my-1 text-success">{{$user}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bx-user-circle' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Comments</p>
                            <h4 class="my-1 text-warning">{{$comment}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bx-comment-detail'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Subscriber</p>
                            <h4 class="my-1 text-warning">{{$subscriber}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bxs-user-badge'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Social Links</p>
                            <h4 class="my-1 text-success">{{$social}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bx-comment-detail'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Page</p>
                            <h4 class="my-1 text-info">{{$page}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-file' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-start border-0 border-3 border-info">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Admin</p>
                            <h4 class="my-1 text-info">{{$admin}}</h4>
                        </div>
                        <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bxs-user-account' ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <h3>Latest Blog</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-responsive table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Sl.</th>
                        <th>Blog Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$blog->title}}</td>
                            <td><img src="@if(!empty($blog->post_image)){{asset($blog->post_image)}}@endif" class="img-fluid" width="200px" height="200px"></td>
                            <td>{{$blog->category->name}}</td>
                            <td>{!!Str::limit($blog->body, 15 )!!}</td>
                            <td>
                                <div class="d-flex order-actions">
                                    <a href="{{route('admin.posts.edit',['post'=>$blog->id])}}" class=""><i class='bx bxs-edit'></i></a>
                                    <a href="" onclick="event.preventDefault();document.getElementById({{$blog->id}}).submit();"  class="ms-3"><i class='bx bxs-trash'></i></a>
                                </div>
                                <form action="{{route('admin.posts.destroy',['post'=>$blog->id])}}" id="{{$blog->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>



</div>
@endsection
