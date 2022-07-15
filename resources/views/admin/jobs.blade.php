@extends('layouts.dashboard')
@section('page-title')
    <div class="pagetitle">
        <h1>Display Jobs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Display Jobs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @section('content')
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div id="success_message"></div>
                    <div class="table-responsive ">
                        <table class="col table table-striped table-bordered dataTable" id="users_table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th> Name</th>
                                <th>Description</th>
                                <th>Added by</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="usertable">
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->id}}</td>
                                    <td>{{$job->name}}</td>
                                    <td>{{$job->description}}</td>
                                    <td>{{$job->user}}</td>
                                    <td>{{$job->status}}</td>
                                    <td>{{$job->payment}}</td>
                                    <td>
                                        <a href="{{route('admin.editUser',$job->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('admin.deleteUser',$job->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    @endsection
