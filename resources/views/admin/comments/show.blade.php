@extends('admin.master')
@section('title')
    Comments
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
                        <li class="breadcrumb-item active" aria-current="page">Comments</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Blog List</a>
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
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Comments</th>
                            <th>Post Url</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $com)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$com->user->name}}</td>
                                <td>{{$com->user->email}}</td>
                                <td>{{ \Str::limit($com->the_comment, 60) }}</td>
                                <td><a href="{{route('post.single',$com->post->slug)}}" target="_blank" class="btn btn-sm btn-primary">Visit</a></td>
                                <td>{{ $com->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="d-flex order-actions">
                                        <a href="{{route('admin.comments.delete',['id'=>$com->id])}}" class="ms-3"><i class="bx bxs-trash"></i></a>
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
