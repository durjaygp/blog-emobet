@extends('admin.master')
@section('title')
    All Blog Post
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Blog</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Blog List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Add Blog</a>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                                <td><img src="@if(!empty($blog->image)){{asset($blog->image->path)}}@endif" class="img-fluid w-50" alt=""></td>
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
