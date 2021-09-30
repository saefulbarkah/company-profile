<!DOCTYPE html>
<html class="no-js">

<!-- Basic Page Needs
     ================================================== -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="icon" href="favicon.ico">
<title>@yield('title')</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- Mobile Specific Metas
     ================================================== -->
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- head --}}

<head>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Template CSS Files
        ================================================== -->
    <!-- Twitter Bootstrs CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/bootstrap/bootstrap.min.css')}} ">
    <!-- Ionicons Fonts Css -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/ionicons/ionicons.min.css')}} ">
    <!-- animate css -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/animate-css/animate.css')}} ">
    <!-- Hero area slider css-->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/slider/slider.css')}} ">
    <!-- slick slider -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/slick/slick.css')}} ">
    <!-- Fancybox -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/facncybox/jquery.fancybox.css')}} ">
    <!-- hover -->
    <link rel="stylesheet" href=" {{ asset('assets/plugins/hover/hover-min.css')}} ">
    <!-- template main css file -->
    <link rel="stylesheet" href=" {{ asset('assets/css/style.css')}} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/timeline.css')}} ">
</head>
{{-- end head --}}

<body>

    {{-- Navbar --}}
    @include('layouts.top-bar')
    {{-- end navbar --}}


    {{-- content --}}
    <div class="main-wrapper">
        @yield('content')

        <!-- footer Start -->
        @include('layouts.footer')
        {{-- end footer --}}

    </div>
    {{-- end content --}}

    {{-- javascripts --}}
    <!-- Template Javascript Files
	================================================== -->
    <!-- jquery -->
    <script src="{{ asset('assets/plugins/jQurey/jquery.min.js')}}"></script>
    <!-- Form Validation -->
    <script src="{{ asset('assets/plugins/form-validation/jquery.form.js')}}"></script>
    <script src="{{ asset('assets/plugins/form-validation/jquery.validate.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/plugins/wow-js/wow.min.js')}}"></script>
    <!-- slider js -->
    <script src="{{ asset('assets/plugins/slider/slider.js')}}"></script>
    <!-- Fancybox -->
    <script src="{{ asset('assets/plugins/facncybox/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.js')}}"></script>
    <!-- template main js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
