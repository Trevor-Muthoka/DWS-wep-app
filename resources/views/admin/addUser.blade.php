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
                <li class="breadcrumb-item active">Add User</li>
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
                                <ul id="form_errors">

                                </ul>
                                <div id="success"></div>
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" placeholder="First Name" id="firstname" required class="form-control">
                                    <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" placeholder="Last Name" id="lastname" required class="form-control">
                                    <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Input Email" required class="form-control">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" placeholder="First Name" required class="form-control">
                                    <span class ="text-danger">@error('password'){{$message}}@enderror</span>
                                </div>
                                <div class="py-2">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="3">Admin</option>
                                        <option value="1">Worker</option>
                                        <option value="2">Employer</option>
                                    </select>
                                    <span class="text-danger">@error('role'){{$message}}@enderror</span>
                                </div>
                                <div class="py-2">
                                <button type="submit" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm" id="addUser"> Confirm  </button>
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



    <script>
        $(document).ready(function (){
            $(document).on('click', '#addUser', function(e){
                e.preventDefault();
                var data= {
                    'firstname': $('#firstname').val(),
                    'lastname': $('#lastname').val(),
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                    'role': $('#role').val(),
                }
                // console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{route('admin.addUser')}}",
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
                            $('#success').text(response.message);

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
