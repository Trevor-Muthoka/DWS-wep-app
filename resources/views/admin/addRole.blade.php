@extends('layouts.dashboard')
@section('css_libraries')
    <link rel="stylesheet" href="{{ asset('css/addUser.css') }}"
@endsection
@section('page-title')
    <div class="pagetitle">
        <h1>Add Role</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Add Role</li>
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

                                <div id="success"></div>
                                <ul id="form_errors">
                                </ul>
                                <div class="form-group">
                                    <label for="rolename">Role Name:</label>
                                    <input type="text" name="rolename" placeholder="Name of Role" id="rolename" required class="form-control">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                                <div class="py-2">
                                    <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm" id="addRole"> Confirm  </button>
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
            $(document).on('click', '#addRole', function(e){
                e.preventDefault();
                var data= {
                    'name': $('#rolename').val(),

                }
                // console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('admin.addRoles')}}",
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
