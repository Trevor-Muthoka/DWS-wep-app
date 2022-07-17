<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DWS - @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="{{ asset('assets3/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets3/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets3/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets3/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets3/css/style.css')}}" rel="stylesheet">


</head>
<body>
   @include('partials.nav')

   @yield('content')

   @include('partials.footer')


   <div id="preloader"></div>
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="{{ asset('assets3/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{ asset('assets3/vendor/purecounter/purecounter.js')}}"></script>
   <script src="{{ asset('assets3/vendor/glightbox/js/glightbox.min.js')}}"></script>
   <script src="{{ asset('assets3/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
   <script src="{{ asset('assets3/vendor/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{ asset('assets3/vendor/aos/aos.js')}}"></script>
   <script src="{{ asset('assets3/vendor/php-email-form/validate.js')}}"></script>

   <!-- Template Main JS File -->
   <script src="{{ asset('assets3/js/main.js')}}"></script>

</body>
</html>
