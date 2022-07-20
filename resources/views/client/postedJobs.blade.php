@extends('layouts.cdashboard')
@section('page-title')
    <div class="pagetitle">
        <h1>My Jobs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('wdashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">My Jobs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @section('content')
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div id="success_message"></div>
                    <div class="table-responsive ">
                        <a href="{{ route('postJob') }}" class="btn btn-primary">Add Job</a>
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <table class="col table table-striped table-bordered dataTable" id="users_table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Payment</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="usertable">
                            @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->name}}</td>
                                    <td>{{$job->description}}</td>
                                    <td>{{$job->payment}}</td>
                                    <td>{{$job->location}}</td>
                                    <td>{{$job->status}}</td>
                                    <td>
                                        <a href="{{route('editJob',$job->id)}}" class="btn btn-primary">Edit</a>
                                      
                                    </td>
                                    <td>
                                        <a href="{{route('deletejob',$job->id)}}" class="btn btn-danger">Delete</a>
                                    </td>

                                    @if($job->status == "Pending")
                                    <td>
                                        
                                        <a href="{{route('payment',$job->id)}}" class="btn btn-dark">Pay</a>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    @endsection
