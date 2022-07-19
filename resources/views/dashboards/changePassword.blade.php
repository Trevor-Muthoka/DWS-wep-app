@extends('layouts.wdashboard')
@yield('title', 'Profile')

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
                        @if ($addInfo->count() > 0)
                            @foreach ($addInfo as $user)
                                <img src="{{ Storage::url($user->image) }}" alt="Profile" class="rounded-circle">
                            @endforeach
                        @else
                            <img src="assets2/img/avatar.png" alt="Profile" class="rounded-circle">
                        @endif

                        <h2>{{ session('loginFirstname') }}</h2>

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
                                <a class="nav-link" href="{{ route('wprofile') }}">Additional Info</a>
                            </li>

                            <li class="nav-item">
                                {{-- <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-settings">Edit profile</button> --}}
                                <a class="nav-link" href="{{ route('editProfile') }}">Edit Profile</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('changePassword') }}">Change Password</a>
                            </li>

                        </ul>

                        <div class="tab-pane fade show active profile-overview pt-3" id="profile-overview">
                            <!-- Change Password Form -->
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @elseif (session('error'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <form method="POST" action="{{ url('updatePass') }}">
                                    @csrf

                                    <input type="hidden" name="userid" id="userid" value="{{session('loginId')}}">
                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="oldpassword" type="password"
                                                class="form-control @error('oldpassword') is-invalid @enderror"
                                                id="oldPassword">
                                            @error('oldpassword')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password"
                                                class="form-control @error('newpassword') is-invalid @enderror"
                                                id="newPassword">
                                            @error('newpassword')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                            Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control"
                                                id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                        </div>

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
        $(document).ready(function() {
            $('#editinfo').validate({
                rules: {
                    firstname: {
                        required: true,
                        string: true,
                        max: 25
                    },
                    lastname: {
                        required: true,
                        string: true,
                        max: 25
                    },
                    email {
                        required: true,
                        string: true,
                        email: true,
                        max: 100,
                        unique: users,
                    },
                    image: {
                        required: true,
                        image: true,
                        mimes: jpeg,
                        png,
                        jpg,
                        gif,
                        svg,
                        max: 2048
                    },
                    about: {
                        required: true,
                    },
                    phone: {
                        required: true,
                        numeric: true,
                        min: 10,
                    },

                },
                messages: {
                    firstname: {
                        required: "Please fill in your first name",
                        string: "Ensure you input a string",
                        max: "Maximum characters is 25",
                    },
                    lastname: {
                        required: "Please fill in your first name",
                        string: "Ensure you input a string",
                        max: "Maximum characters is 25",
                    },
                    email {
                        required: "Please fill in your email",
                        string: "Ensure you input a string",
                        email: "Ensure you input a valid email",
                        max: "Maximum characters,numbers and symbols is 100",
                        unique: "Email has already been taken",
                    },
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
