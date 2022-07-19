@extends('layouts.default')
@push('styles')
    <link rel="stylesheet" href="{{asset("assets4/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href={{asset("assets4/css/owl.carousel.min.css")}}>
    <link rel="stylesheet" href="{{asset("assets4/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/slicknav.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/price_rangs.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/price_rangs.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/slick.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("assets4/css/style.css")}}">
@endpush
@section('content')
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">

                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{$job->name}}</h4>
                                </a>
                                <ul>
                                    <li>Posted by: {{$job->user_name}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i></li>
                                    <li>KSH {{$job->payment}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{$job->description}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Skills Required</h4>
                            </div>
                            <ul>
                                <li>System Software Development</li>
                                <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                                <li>Research and code , libraries, APIs and frameworks</li>
                                <li>Strong knowledge on software development life cycle</li>
                                <li>Strong problem solving and debugging skills</li>
                            </ul>
                        </div>
{{--                        <div class="post-details2  mb-50">--}}
{{--                            <!-- Small Section Tittle -->--}}
{{--                            <div class="small-section-tittle">--}}
{{--                                <h4>Education + Experience</h4>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>3 or more years of professional design experience</li>--}}
{{--                                <li>Direct response email experience</li>--}}
{{--                                <li>Ecommerce website design experience</li>--}}
{{--                                <li>Familiarity with mobile and web apps preferred</li>--}}
{{--                                <li>Experience using Invision a plus</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span>{{$jobdate}}</span></li>
                            <li>Location : <span>New York</span></li>
                            <li>Vacancy : <span>02</span></li>
                            <li>Job nature : <span>Full time</span></li>
                            <li>Salary :  <span>KSH {{$job->payment}}</span></li>
                            <li>Application date : <span>12 Sep 2020</span></li>
                        </ul>
                        <div class="apply-btn2">
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Employer Information</h4>
                        </div>
                        <span>Colorlib</span>
                        <ul>
                            <li>Name: <span>Colorlib </span></li>
                            <li>Web : <span> colorlib.com</span></li>
                            <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->
@endsection
