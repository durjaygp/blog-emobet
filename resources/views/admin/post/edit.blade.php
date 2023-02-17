@extends('admin.master')
@section('title')
    Edit Blog Post
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
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Blog List</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Blog</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.posts.update',['post'=>$blogs->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="title" value="{{$blogs->title}}" class="form-control" id="inputProductTitle">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Select Category<span class="text-danger">*</span></h6></label>
                                    <div class="card">
                                        <div class="card-body">
                                            <select name="category_id" value="{{old("category_id")}}" class="single-select">
                                                @foreach($categories as $key => $category)
                                                <option value="{{$key}}">{{$category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Short Description<span class="text-danger">*</span></h6></label>
                                    <textarea class="form-control"  name="excerpt" id="inputProductDescription" rows="3">{{$blogs->excerpt}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Blog Image<span class="text-danger">*</span></h6></label>
                                    <input class="dropify" type="file" name="thumbnail" accept="image/*">
                                </div>
                                <div><img src="{{asset($blogs->image->path)}}" alt="" class="img-fluid w-25"></div>
                                <div class="form-group">
                                    <label><h6>Blog Description<span class="text-danger">*</span></h6></label>
                                    <textarea id="post_content" name="body">{{$blogs->body}}</textarea>
                                </div>
                                <input type="submit" value="submit" class="btn btn-success px-5 radius-30">
                            </div>
                            </form>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>


    </div>
@endsection
