@extends('admin.master')
@section('title')
   Update Link
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Social</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.social.show')}}" class="btn btn-primary">Social Links List</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Links</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.social.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$social->id}}">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"><h6>Title<span class="text-danger">*</span></h6></label>
                                        <input type="text" name="social_title" class="form-control" id="inputProductTitle" placeholder="Facebook" value="{{$social->social_title}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"><h6>Links<span class="text-danger">*</span></h6></label>
                                        <input type="text" name="social_link" class="form-control" id="inputProductTitle" placeholder="http://yoursite.com/durjay" value="{{$social->social_link}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label"><h6>Social Media Icon<span class="text-danger">*</span></h6></label>
                                        <input type="text" name="social_icon" class="form-control" id="inputProductTitle" placeholder="fa fa-facebook" value="{{$social->social_icon}}">
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
