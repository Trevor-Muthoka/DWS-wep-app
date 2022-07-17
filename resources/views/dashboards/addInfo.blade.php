@extends('layouts.cdashboard')
@yield('title','Profile')

@section('content')
        <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="assets2/img/avatar.png" alt="Profile" class="rounded-circle">
                        <h2>{{ session('loginFirstname') }}</h2>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                {{-- <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button> --}}
                                <a class="nav-link" href="{{ route('wprofile') }}">Overview</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('wprofile') }}">Additional Info</a>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Edit profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                      
                                <div class="tab-pane fade show active profile-overview pt-3" id="profile-overview">
                                @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                                <!-- Profile Edit Form -->
                                <form method="post" action="{{ url('addInfo') }}" enctype="multipart/form-data" id="addinfo">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="image" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="file" name="image" class=" @error('image') is-invalid @enderror form-control" placeholder="Upload Image">
                                            @error('image')
                                             <div class="invalid-feedback">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="about" class="  @error('about') is-invalid @enderror form-control" id="about" style="height: 100px" placeholder="I am a cheerful person"></textarea>
                                            @error('about')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class=" @error('phone') is-invalid @enderror form-control" id="phone" placeholder="e.g 0753996033">
                                            @error('phone')
                                    <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" name="add">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>
                            {{-- @else
                            <div class="tab-pane fade show active profile-overview pt-3" id="profile-edit">

                            
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">First Name</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->firstname}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Last Name</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->lastname}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->email}}</div>
                                </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">About</div>
                                    <div class="col-lg-9 col-md-8">{{ $info->email}}</div>
                                </div>

                                 <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Phone</div>
                                    <div class="col-lg-9 col-md-8">{{ $info->email}}</div>
                                </div>

                            </div> --}}
           

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('scriptsdash')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function (){
        $('#addinfo').validate({
            rules: {
                image: {
                    required: true,
                    image: true,
                    mimes: jpeg,png,jpg,gif,svg,
                    max: 2048
                },
                about: {
                    required: true,
                },
                phone: {
                    required: true,
                    numeric: true,
                    min:10,
                },
            
            },
            messages: {
                image: {
                    required: "Please insert an image",
                    image: "Please insert an image",
                    mimes: "Please insert the correct file type",
                    max: "The maximum size of the image is 2048KB"
                },
                about: {
                    required: "Please fill in the about field",
                },
                phone: {
                    required: "Please fill in the phone field",
                    numeric: "Make sure you insert a number",
                    min: "Ensure the phone number has 10 digits"
                },
            },
        });
    });

    // $(document).ready(function () {
    //     $('#addinfo').on('change', function () {
    //         if (isset(about)) {
    //             $('#residency').removeClass('d-none');
    //         } else {
    //             $('#residency').addClass('d-none');
    //         }
    //     });
    // });
</script>
@endpush