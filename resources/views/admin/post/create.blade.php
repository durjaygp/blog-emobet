@extends('admin.master')
@section('title')
    Create New Blog Post
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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                <h5 class="card-title">Add New Blog</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="title" value="{{old("title")}}" class="form-control" id="inputProductTitle" placeholder="Enter Blog title">
                                </div>

                                <div class="mb-4">
                                    <label for="inputProductDescription" class="form-label"><h6>Select Category<span class="text-danger">*</span></h6></label>
                                    <select name="category_id" value="{{old("category_id")}}" class="form-select form-select-sm" id="small-bootstrap-class-single-field" data-placeholder="Choose one thing">
                                        <option>Select Category</option>
                                        @foreach($categories as $key => $category)
                                            <option value="{{$key}}">{{$category}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Short Description<span class="text-danger">*</span></h6></label>
                                    <textarea class="form-control" value="{{old("excerpt")}}" name="excerpt" id="inputProductDescription" rows="3" placeholder="Writte in 200 Words"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Blog Image<span class="text-danger">*</span></h6></label>
                                    <input class="dropify" type="file" name="thumbnail" accept="image/*">
                                </div>
                                <div class="form-group mb-4">
                                    <label><h6 style="text-decoration: underline wavy orange">Blog Description<span class="text-danger">*</span></h6></label>
                                    <textarea id="div_editor1" name="body">{{old("body")}}</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Status<span class="text-danger">*</span></h6></label>

                                        <select name="post_status" id="" class="form-select">
                                            <option value="">Choose Status</option>
                                            <option value="1">Active</option>
                                            <option value="2">Draft</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Type<span class="text-danger">*</span></h6></label>
                                        <select name="post_type" id="" class="form-select">
                                            <option value="">Post Type</option>
                                            <option value="1">Slider Section</option>
                                            <option value="2">Featured Section</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="m-2">
                                    <input type="submit" value="submit" class="btn btn-success px-5 radius-30">
                                </div>

                            </div>
                            </form>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>


    </div>
@endsection
