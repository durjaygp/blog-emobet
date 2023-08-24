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
                                <input type="hidden" name="id" value="{{$blogs->id}}">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="title" value="{{$blogs->title}}" class="form-control" id="inputProductTitle">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Select Category<span class="text-danger">*</span></h6></label>
                                    <div class="card">
                                        <div class="card-body">

                                            <select name="category_id" value="{{old("category_id")}}" class="form-select form-select-sm" id="small-bootstrap-class-single-field" data-placeholder="Choose one thing">
                                                <option>Select Category</option>
                                                @foreach($categories as $key => $category)
                                                    <option value="{{$key}}" {{ $blogs->category_id == $key ? 'selected':'' }}>{{$category}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Short Description<span class="text-danger">*</span></h6></label>
                                    <textarea class="form-control"  name="excerpt" id="inputProductDescription" rows="3">{{$blogs->excerpt}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label"><h6>Blog Image<span class="text-danger">*</span></h6></label>
                                            <input class="dropify" type="file" name="post_image" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Existing Blog Image<span class="text-danger">*</span></h6></label>
                                        <div><img src="{{asset($blogs->post_image)}}" alt="" class="img-fluid w-50"></div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label><h6>Blog Description<span class="text-danger">*</span></h6></label>
                                    <textarea id="div_editor1" name="body">{{$blogs->body}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Meta Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="post_meta_title" value="{{$blogs->post_meta_title}}" class="form-control" id="inputProductTitle" placeholder="Blog Meta Title Example: How to Start a Blog">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Meta Tags<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="post_meta_tags" value="{{$blogs->post_meta_tags}}" class="form-control" id="inputProductTitle" placeholder="Blog Meta Tags example: keywords research, link building, SEO tools, off-page optimization, local SEO">
                                </div>



                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Status<span class="text-danger">*</span></h6></label>

                                        <select name="post_status" id="" class="form-select">
                                            <option value="">Choose Status</option>
                                            <option value="1" {{ $blogs->post_status == 1 ? 'selected':'' }} >Active</option>
                                            <option value="2" {{ $blogs->post_status == 2 ? 'selected':'' }}>Draft</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Type<span class="text-danger">*</span></h6></label>
                                        <select name="post_type" id="" class="form-select">
                                            <option value="">Post Type</option>
                                            <option value="1" {{ $blogs->post_type == 1 ? 'selected':'' }}>Slider Section</option>
                                            <option value="2" {{ $blogs->post_type == 2 ? 'selected':'' }}>Featured Section</option>
                                        </select>
                                    </div>
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
