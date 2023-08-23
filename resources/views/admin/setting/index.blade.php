@extends('admin.master')
@section('title')
    Update Website Setting and Information
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Website Information</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Website Setting</li>
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
                <h5 class="card-title">Update Website Information</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">

                            <form action="{{route('admin.update.setting')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">Website Name/Title</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Website Name" value="{{$setting->name}}">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="mb-4">
                                        <label for="exampleInputEmail1">Website Footer Text</label>
                                        <input type="text" name="footer" class="form-control" placeholder="All Rights Reserved Powered by websiteowner" value="{{$setting->footer}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-4">
                                        <label for="exampleInputEmail1">Website Author Name<small class="text-sm text-gray-400">(Optional)</small></label>
                                        <input type="text" name="author" class="form-control" placeholder="Website Author Name" value="{{$setting->author}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-4">
                                        <label for="exampleInputEmail1">Website URL</label>
                                        <input type="text" name="url" class="form-control" placeholder="Website URL" value="{{$setting->url}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-4">
                                        <label for="exampleInputEmail1">Website Keywords</label>
                                        <input type="text" name="keywords" class="form-control" placeholder="Website Keywords" value="{{$setting->keywords}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-4">
                                        <label for="exampleInputEmail1">Website Tags</label>
                                        <input type="text" name="tags" class="form-control" placeholder="Website Tags" value="{{$setting->tags}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Website Description <small>(It also appear in Footer About Us)</small></label>
                                        <textarea name="description" id="" cols="10" rows="5" class="form-control" placeholder="Write a short Description">{{$setting->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-4">
                                        <label for="exampleInputEmail1">Google Verification Code <small class="text-sm text-gray-400">(Optional)</small></label>
                                        <input type="text" name="google" class="form-control" placeholder="Enter Category Title" value="{{$setting->google}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website Image, LOGO <small>(Width 150px X Height 50px)</small></label>
                                                <input class="dropify" type="file" name="website_logo" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Existing Image</label> <br>
                                                <img src="{{asset($setting->website_logo)}}" alt="">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website FavIcon <small> (Width 80px X Height 80px)</small></label>
                                                <input class="dropify" type="file" name="fav_icon" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Existing Image</label> <br>
                                                <img src="{{asset($setting->fav_icon)}}" alt="" width="80px" height="80px">
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>


    </div>
@endsection
