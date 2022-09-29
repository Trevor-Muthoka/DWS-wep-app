@extends('layouts.dashboard')
@push('css')

    @section('content')

        <div class="pagetitle">
            <h1>EDIT JOB</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Edit a job</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">EDIT User</h5>
                    @if(session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!-- Multi Columns Form -->
                    <form class="row g-3" name="user" id="user" method="post" action="{{ route('admin.updateUser')}}">

                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        <input type="hidden" name="role" value="{{$role->id}}">
                        <input type="hidden" name="user_id" id="userid" value="{{session('loginId')}}">
                        <div class="col-md-12">
                            <label for="username" class="form-label">First Name</label>
                            {{-- @error('username') is-invalid @enderror  --}}
                            <input type="text" class="form-control" id="firstname" name=firstname" value="{{ $user->firstname }}">
                            {{-- @error('username')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror --}}
                        </div>
                        <div class="col-md-12">
                            <label for="userdescription" class="form-label">Last Name</label>
                            {{-- @error('userdescription') is-invalid @enderror  --}}
                            <input type="text" class="form-control" placeholder="Last Name" id="userdescription" name="lastname" style="height: 100px;" value="{{$user->description}}">
                            {{-- @error('userdescription')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror --}}
                        </div>
                        <div class="col-md-6">
                            <label for="payment" class="form-label">Email</label>
                            {{-- @error('payment') is-invalid @enderror --}}
                            <input type="email" class="form-control" id="payment" name="email" value="{{ $user->email }}">

                            {{-- @error('payment')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror --}}
                        </div>
                       <div class="c"
                        <div class="col-md-6">
                            <label for="status" class="form-label">Status of Job</label>
                            <select id="status" name="status" class="@error('status') is-invalid @enderror form-select">
                                <option selected>Pending</option>
                                <option>Ongoing</option>
                                <option>Complete</option>
                            </select>
                            {{--                                        @error('status')--}}
                            {{--                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>--}}
                            {{--                                        @enderror--}}
                        </div>
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category_id" class="@error('category') is-invalid @enderror form-select">
                                @foreach($categories as $category){
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                }
                                @endforeach
                            </select>

                        </div>

                        <div class="text-center">
                            <button  type="submit" class="btn btn-primary" >Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>

            </div>

        </section>

        @push('scripts')
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
            <script>
                $(document).ready(function (){

                    $('#user').validate({
                        rules: {
                            username: {
                                required: true,
                            },
                            userdescription: {
                                required: true,
                            },
                            payment: {
                                required: true,
                                numeric: true,
                            },
                            // status: {
                            //     required: true,
                            // },
                            location: {
                                required: true,
                            },
                        },
                        messages: {
                            username: {
                                required: "Please enter the user name",
                            },
                            userdescription: {
                                required: "Please enter the user description",
                            },
                            payment: {
                                required: "Please enter a valid number",
                                numeric: "The input must be a number",
                            },
                            // status: {
                            //     required: "Please choose a status",
                            // },
                            location: {
                                required: "Please enter the location",
                            },
                        },
                    });
                });

            </script>

        @endpush
    @endsection
