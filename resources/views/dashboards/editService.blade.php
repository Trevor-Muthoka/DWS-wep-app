@extends('layouts.wdashboard')
@push('links')
    <link rel="stylesheet" href="{{ asset('css/addUser.css') }}"
@endpush
@section('page-title')
    <div class="pagetitle">
        <h1>Add Service</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('wdashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Add Service</li>
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

                            <form action="{{ route('updateService',$services->id) }}" method="POST">
                                @csrf
                                
                                <input type="hidden" name="userid" id="userid" value="{{session('loginId')}}">
                                <div id="success"></div>
                                <ul id="form_errors">
                                </ul>
                                
                                <div class="form-group">
                                    <label for="servicename">Service Name:</label>
                                    <input type="text" name="servicename" value="{{ $services->name }}" id="servicename" required class="form-control">
                                    <span class="text-danger">@error('servicename'){{$message}}@enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="payment">Payment Amount in Kshs:</label>
                                    <input type="number" name="payment" id="payment" value="{{ $services->payment }}" required class="form-control">
                                    <span class="text-danger">@error('payment'){{$message}}@enderror</span>
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
{{-- @push('scriptsdash')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- <script>
        $(document).ready(function (){
            $(document).on('click', '#addService', function(e){
                e.preventDefault();
                var data= {
                    'servicename': $('#servicename').val(),
                    'user_id': $('#userid').val(),
                    'payment': $('#payment').val(),
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('addService')}}",
                    type: "POST",
                    data: data,
                    success: function (response){
                        console.log(response);
                        if(response.status==400){
                            $('#form_errors').html("");
                            $('#form_errors').addClass("alert alert-danger");
                            $.each(response.errors, function(key, value){
                                $('#form_errors').append('<li class="text-danger">'+value+'</li>');
                            });
                        }
                        else{
                            $('#form_errors').html("");
                            $('#success').addClass('alert alert-success');
                            $('#success').text(response.success.value);
                        }
                    },
                    error: function (error){
                        console.log(Object.values(error.responseJSON.error));
                        let errors = eval("(" + error.responseText + ")");
                        console.log(errors);
                        if(error.status==400){
                            $('#form_errors').html("");
                            $('#form_errors').addClass("alert alert-danger");
                            $.each(Object.values(error.responseJSON.error), function(key, value){
                                $('#form_errors').append('<li class="text-danger">'+value[0]+'</li>');
                            });
                        }
                    }
                });
            });
        });
    </script> --}}
{{-- @endpush --}}
