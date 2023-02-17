@extends('admin.master')
@section('title')
    Edit Category | {{$category->name}}
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
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.category.show')}}" class="btn btn-primary">Category List</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Category</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.category.update')}}" method="post" >
                                @csrf
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <input type="hidden" name="id" value="{{$category->id}}">
                                        <label for="inputProductTitle" class="form-label"><h6>Category Name<span class="text-danger">*</span></h6></label>
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="Enter Category Name">
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
