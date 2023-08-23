@extends('admin.master')
@section('title')
    Social Media Links
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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.social.create')}}" class="btn btn-primary">Add Social Links</a>
            </div>
        </div>
        <!--end breadcrumb-->
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Title</th>
                            <th>Links</th>
                            <th>Icon Code</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->social_title}}</td>
                                <td>{{$category->social_icon}}</td>
                                <td>{{$category->social_link}}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.social.edit',['id'=>$category->id])}}" class=""><i class="bx bxs-edit"></i></a>
                                        <a href="{{route('admin.social.delete',['id'=>$category->id])}}" class="ms-3"><i class="bx bxs-trash"></i></a>
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
