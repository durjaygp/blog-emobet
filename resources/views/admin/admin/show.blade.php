@extends('admin.master')
@section('title')
    Admin List
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Admin List</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Admin</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div class="card-header ms-auto">
                    <h2>Admin List</h2>
                    <div class="d-flex ms-auto">
                        <a href="{{route('admin.admin.create')}}" class="btn btn-primary"><i class="bx bx-plus-circle"></i>Create New Admin</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Sl.</th>
                            <th>Admin Name</th>
                            <th>Admin Email</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            @if($admin->role_id == 2)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{ $admin->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{route('admin.admin.edit',['id'=>$admin->id])}}" class=""><i class="bx bxs-edit"></i></a>
                                            <a href="{{route('admin.admin.delete',['id'=>$admin->id])}}" class="ms-3"><i class="bx bxs-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
