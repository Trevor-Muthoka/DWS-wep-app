@extends('layouts.dashboard')
@section('page-title')
    <div class="pagetitle">
        <h1>Display Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Display Users</li>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Added By</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="usertable">
                            @foreach($applications as $application)
                                <tr>
                                    <td>{{$application->id}}</td>
                                    <td>{{$application->status}}</td>
                                    <td>{{$application->user}}</td>
                                    <td>{{$application->Job}}</td>
                                    <td>
                                        <a href="{{route('admin.editUser',$application->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('admin.deleteUser',$application->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    @endsection

