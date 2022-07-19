@extends('layouts.dashboard')
@section('css_libraries')
    <link rel="stylesheet" href="{{ asset('css/addUser.css') }}"
@endsection
@section('page-title')
    <div class="pagetitle">
        <h1>Add User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Add Job</li>
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

                            <form >
                                @csrf
                                <input type="hidden" name="userid" id="userid" value="{{session('loginId')}}">
                                <div id="success"></div>
                                <ul id="form_errors">
                                </ul>
                                <div class="form-group">
                                    <label for="jobname">Name:</label>
                                    <input type="text" name="jobname" placeholder="Name of Job" id="jobname" required class="form-control">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <input type="text" name="description" placeholder="Description of Job" id="description" required class="form-control">
                                    <span class="text-danger">@error('description'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="payment">Payment Amount:</label>
                                    <input type="number" name="payment" id="payment" placeholder="Amount expected" required class="form-control">
                                    <span class="text-danger">@error('payment'){{$message}}@enderror</span>
                                </div>
                                <input type="hidden" value="pending" name="status" id="status">
                                <div class="py-2">
                                    <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm" id="addJob"> Confirm  </button>
                                </div>

                            </form>
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function (){
            $(document).on('click', '#addJob', function(e){
                e.preventDefault();
                var data= {
                    'name': $('#jobname').val(),
                    'description': $('#description').val(),
                    'user_id': $('#userid').val(),
                    'status': $('#status').val(),
                    'payment': $('#payment').val(),
                }
                // console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('admin.addJobs')}}",
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
    </script>
@endpush
