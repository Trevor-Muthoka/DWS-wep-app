
@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="{{route('registerUser')}}">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if(Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <p class="px-5 text-center fw-bold mx-3 mb-0" style="font-size: x-large; font-weight: bold;"><span style="color: #007aff ">Sign</span> Up</p>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">First Name</label>
                            <input type="str" id="form3Example" class="form-control form-control-lg"
                                   placeholder="Enter your first name" name="firstname"/>
                            <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" id="form3Example1" class="form-control form-control-lg"
                                   placeholder="Enter your last name" name="lastname"/>
                            <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
                        </div>

                        <!-- Email input -->
                        <label class="form-label" >Email address</label>
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                   placeholder="Enter a valid email address" />
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                                   placeholder="Enter password" />
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                        </div>

                        <div class="form-outline mb-4 py-2">
                            <select class="form-control form-control-lg" id="role" name="role">
                                <option>Select Role</option>
                                <option value="2">Worker</option>
                                <option value="1">Employer</option>
                            </select>
                            <span class="text-danger">@error('role'){{$message}}@enderror</span>
                        </div>
                            {{-- <div class="form-outline mb-3 d-none" id="residency">
                                <label class="form-label">Residency</label>
                                <input type="text" id="form3Example4" name="residency" class="form-control form-control-lg"
                                       placeholder="Enter residency" />
                                <span class="text-danger">@error('residency'){{$message}}@enderror</span>
                            </div> --}}

                            <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                                                                                                class="link-danger">Login</a></p>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </section>
    {{-- @push('scripts')
        <script>
            $(document).ready(function () {
                $('#role').on('change', function () {
                    if (this.value == '2') {
                        $('#residency').removeClass('d-none');
                    } else {
                        $('#residency').addClass('d-none');
                    }
                });
            });
        </script>
        @endpush --}}
@endsection

