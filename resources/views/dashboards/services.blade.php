@extends('layouts.wdashboard')
@section('page-title')
    <div class="pagetitle">
        <h1>My Services</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('wdashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">My services</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @section('content')
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div id="success_message"></div>
                    <div class="table-responsive ">
                        <a href="{{ route('addServiceForm') }}" class="btn btn-primary">Add Service</a>
                        @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        <table class="col table table-striped table-bordered dataTable" id="users_table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Payment</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="usertable">
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$service->name}}</td>
                                    <td>{{$service->payment}}</td>
                                    <td>
                                        <a href="{{route('editService',$service->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('deleteService',$service->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    @endsection
