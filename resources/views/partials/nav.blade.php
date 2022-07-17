{{--<header id="header" class="fixed-top">--}}
{{--    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">--}}

{{--        <a href="{{ route('home')}}" class="logo d-flex align-items-center">--}}
{{--            <!-- Uncomment the line below if you also wish to use an image logo -->--}}
{{--            <!-- <img src="assets/img/logo.png" alt=""> -->--}}
{{--            <h1>DWS</h1>--}}
{{--        </a>--}}

{{--        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>--}}
{{--        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>--}}
{{--        <nav id="navbar" class="navbar navbar-dark">--}}
{{--            <ul>--}}
{{--                <li><a href="{{ route('home')}}" class="active">Home</a></li>--}}
{{--                <li><a href="#">Jobs</a></li>--}}
{{--                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="#">Drop Down 1</a></li>--}}
{{--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
{{--                            <ul>--}}
{{--                                <li><a href="#">Deep Drop Down 1</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 2</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 3</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 4</a></li>--}}
{{--                                <li><a href="#">Deep Drop Down 5</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="#">Drop Down 2</a></li>--}}
{{--                        <li><a href="#">Drop Down 3</a></li>--}}
{{--                        <li><a href="#">Drop Down 4</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                @if(session('loggedin'))--}}
{{--                    <li><a href="{{'dashboard'}}">{{session('loginFirstname')}}</a></li>--}}

{{--                                    <li class="dropdown"><a href="#"><span>{{session('loginFirstname')}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>--}}
{{--                                        <ul>--}}
{{--                                            @if(session('userRole') == 3)--}}
{{--                                            <li><a href="{{'admin.dashboard'}}">Dashboard</a></li>--}}
{{--                                            <li><a href="{{'profile'}}">Profile</a></li>--}}
{{--                                            <li><a href="{{'logout'}}">Logout</a></li>--}}
{{--                                            @endif--}}
{{--                                                @if(session('userRole') == 2)--}}
{{--                                                    <li><a href="">Dashboard</a></li>--}}
{{--                                                    <li><a href="{{'wprofile'}}">Profile</a></li>--}}
{{--                                                    <li><a href="{{'logout'}}">Logout</a></li>--}}
{{--                                                @endif--}}
{{--                                                @if(session('userRole') == 1)--}}
{{--                                                    <li><a href="{{'cdashboard'}}">Dashboard</a></li>--}}
{{--                                                    <li><a href="{{'profile'}}">Profile</a></li>--}}
{{--                                                    <li><a href="{{'logout'}}">Logout</a></li>--}}
{{--                                                @endif--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                @endif--}}
{{--                @if(session('loggedin')== false)--}}
{{--                <li><a href="{{route('login')}}">Login</a></li>--}}
{{--                <li><a href="{{route('register')}}">Registration</a></li>--}}
{{--                @endif--}}
{{--            </ul>--}}
{{--        </nav><!-- .navbar -->--}}

{{--    </div>--}}
{{--</header><!-- End Header -->--}}

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="{{ route('home')}}">DWS<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{route('login')}}">Jobs</a></li>
{{--                <li><a class="nav-link scrollto" href="#services">Services</a></li>--}}
{{--                <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>--}}
{{--                <li><a class="nav-link scrollto" href="#team">Team</a></li>--}}
                @if(session('loggedin')== false)
                    <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
                    <li><a class="nav-link scrollto" href="{{route('register')}}">Registration</a></li>
                @endif

                @if(session('loggedin'))
                <li class="dropdown"><a href="#"><span>{{session('loginFirstname')}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @if(session('loggedin') and session('loginRoleId')==3)
                            <li><a href="{{'admin.dashboard'}}">Dashboard</a></li>
                            <li><a href="{{'profile'}}">Profile</a></li>
                            <li><a href="{{'logout'}}">Logout</a></li>
                        @endif
                        @if(session('loggedin') and session('loginRoleId')==2)
                            <li><a href="">Dashboard</a></li>
                            <li><a href="{{'wprofile'}}">Profile</a></li>
                            <li><a href="{{'logout'}}">Logout</a></li>
                        @endif
                        @if(session('loggedin') and session('loginRoleId')==1)
                            <li><a href="{{'cdashboard'}}">Dashboard</a></li>
                            <li><a href="{{'profile'}}">Profile</a></li>
                            <li><a href="{{'logout'}}">Logout</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
            @endif
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->


    </div>
</header><!-- End Header -->
