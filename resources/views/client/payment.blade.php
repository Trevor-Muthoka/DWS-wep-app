@extends('layouts.cdashboard')
@section('css_libraries')
    <link rel="stylesheet" href="{{ asset('css/addUser.css') }}"
@endsection
@section('page-title')
    <div class="pagetitle">
        <h1>Payment</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('wdashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Payment</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
@endsection
@section('content')
    <div class="container py-5">


        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="bg-white rounded-lg shadow-sm p-5">


                    <!-- Add User form content -->
                    <div class="tab-content">

                        <!-- Add User-->
                        <div id="nav-tab-card" class="tab-pane fade show active">

                            <form action="{{ route('updatepayment') }}" method="POST">
                                @csrf
                                <input type="hidden" name="userid" id="userid" value="{{session('loginId')}}">
                                @foreach($jobs as $job)
                                <input type="hidden" name="id" id="id" value="{{  $job->id}}">
                                <div id="success"></div>
                                <ul id="form_errors">
                                </ul>
                                
                                <div class="form-group">
                                    <label for="amount">Amount:</label>
                                    <input type="text" class="form-control" id="amount" name="amount" value="{{ $job->payment}}">
                                </div>
                                @endforeach

                                <br>
                                <div class="form-group">
                                    <label for="amount">Payment Type</label>
                                    <select class="form-control form-control-lg" id="choice" name="choice">
                                        <option>Select Choice</option>
                                        <option value="cash">Cash</option>
                                        <option value="mpesa">Mpesa</option>
                                    </select>
                                    <span class="text-danger">@error('choice'){{$message}}@enderror</span>
                                </div>
                                <br>
                                    <div class="form-group" id="mpesa">
                                        <label for="amount">For MPESA:</label>
                                        <br>
                                        <label class="form-label">Transaction code (Confirmation purposes)</label>
                                        <input type="text" id="form3Example4" name="mpesa" class="form-control form-control-lg"
                                               placeholder="Enter transaction code" />
                                        <span class="text-danger">@error('mpesa'){{$message}}@enderror</span>
                                    </div>
                                <div class="py-2">
                                    <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm" id="addService"> Add </button>
                                </div>

                            </form>
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

