@extends('admin.master')
@section('title')
    Category List
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
                        <li class="breadcrumb-item active" aria-current="page">Category List</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary">Add Category</a>
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
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                <div class="d-flex order-actions">
                                    <a href="{{route('admin.category.edit',['id'=>$category->id])}}" class=""><i class="bx bxs-edit"></i></a>
                                    <a href="{{route('admin.category.delete',['id'=>$category->id])}}" class="ms-3"><i class="bx bxs-trash"></i></a>
                                </div>
                            </td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>



    </div>
@endsection
