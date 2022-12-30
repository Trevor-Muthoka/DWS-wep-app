@extends('layouts.wdashboard')
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
                @if(isset($addInfo))
                @foreach($addInfo as $info)
                        <img src="{{Storage::url($info->image)}}" alt="Profile" class="rounded-circle">
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
                                <a class="nav-link active" href="{{ route('wprofile') }}">Overview</a>
                            </li>

@if($addInfo->isEmpty())
                            <li class="nav-item" id="adinfo">
                                {{-- <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Additional Information</button>
                                --}}
                                <a class="nav-link" id="adinfo" href="{{ route('additional') }}">Additional Info</a>
                            </li>
                            @else
                            <li class="nav-item  d-none" id="adinfo">
                                {{-- <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Additional Information</button>
                                --}}
                                <a class="nav-link  d-none" id="adinfo" href="{{ route('additional') }}">Additional Info</a>
                            </li>
@endif

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('editProfile') }}">Edit Profile</a>
                            </li>

                            <li class="nav-item">
                                {{-- <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button> --}}
                                <a class="nav-link" href="{{ route('changePassword') }}">Change Password</a>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>
                                @if(session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif
                             @foreach($users as $user)
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
                                @endforeach
                                @if(isset($addInfo))
                                @foreach($addInfo as $info)
                               <div class="row">
                                   <div class="col-lg-3 col-md-4 label">About</div>
                                   <div class="col-lg-9 col-md-8">{{ $info->about }}</div>
                               </div>

                               <div class="row">
                                   <div class="col-lg-3 col-md-4 label">Phone</div>
                                   <div class="col-lg-9 col-md-8">{{ $info->phone }}</div>
                               </div>
                               @endforeach
                               @endif


                            </div>


                        </div><!-- End Bordered Tabs -->

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
    //     $('#adinfo').on('change', function () {
    //         if (isset($addInfo)) {
    //             $('#adinfo').addClass('d-none');
    //         } else {
    //             $('#adinfo').removeClass('d-none');
    //         }
    //     });
    // });
</script>
@endpush
