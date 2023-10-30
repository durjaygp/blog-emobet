@extends('admin.master')
@section('title')
    Page List
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Page</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Pages</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.page.create')}}" class="btn btn-primary">Page List</a>
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
                            <th>Page Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Links</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pages as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->page_title}}</td>
                                <td><img src="{{asset($row->page_image)}}" alt="" class="img-fluid w-25"></td>
                                <td>{!! Str::limit($row->page_description, 15) !!}</td>
                                <td>{{$row->page_link}}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.page.edit',['id'=>$row->id])}}" class=""><i class="bx bxs-edit"></i></a>
                                        <a href="{{route('admin.page.delete',['id'=>$row->id])}}" class="ms-3"><i class="bx bxs-trash"></i></a>
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
