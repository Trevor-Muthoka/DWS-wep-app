@extends('layouts.wdashboard')
@section('page-title')
    <div class="pagetitle">
        <h1>My Payments</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('wdashboard')}}">Home</a></li>
                
                <li class="breadcrumb-item active">My payments</li>
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
                                <th>JobName</th>
                                <th>Amount</th>
                                <th>PaymentType</th>
                                <th>Paid by</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="usertable">
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->payment}}</td>
                                    <td>{{ $user->paymentType }}</td>
                                    <td>{{ $user->firstname }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    @endsection
