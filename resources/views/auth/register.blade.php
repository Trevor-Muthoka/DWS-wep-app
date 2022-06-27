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
                    <form>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Sign Up</p>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">First Name</label>
                            <input type="text" id="form3Example" class="form-control form-control-lg"
                                   placeholder="Enter your first name" name="firstname"/>

                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" id="form3Example1" class="form-control form-control-lg"
                                   placeholder="Enter your last name" name="lastname"/>

                        </div>

                        <!-- Email input -->
                        <label class="form-label" >Email address</label>
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                                   placeholder="Enter a valid email address" />

                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" id="form3Example4" name="password" class="form-control form-control-lg"
                                   placeholder="Enter password" />

                        </div>

                        <div class="form-outline mb-4 py-2">
                            <select class="form-control form-control-lg" id="role" name="role">
                                <option>Select Role</option>
                                <option value="1">Worker</option>
                                <option value="2">Employer</option>
                            </select>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="{{ route('login') }}"
                                                                                              class="link-danger">Login</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
@endsection
