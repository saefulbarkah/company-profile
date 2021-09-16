<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="it">
  <meta name="keywords" content="Rapoo,creative, agency, startup,onepage, clean, modern,business, company,it">

  <meta name="author" content="themefisher.com">

  <title>@yield('title')</title>

  {{-- timeline css --}}
  @stack('proses-css')

  @stack('styles')
  {{-- font awesome --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
  integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
rel="stylesheet">

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
  <!-- Animate Css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/animate-css/animate.css')}}">
  <!-- Icon Font css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fonts/Pe-icon-7-stroke.css')}}">
  <!-- Themify icon Css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/themify/css/themify-icons.css')}}">
  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/slick-carousel/slick/slick-theme.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

</head>

<body>
<!-- LOADER TEMPLATE -->
<div id="page-loader">
    <div class="loader-icon fa fa-spin colored-border"></div>
</div>
<!-- /LOADER TEMPLATE -->

    {{-- content --}}
    <div class="main-wrapper">
        @yield('content')

        <!-- footer Start -->
        @include('layouts.footer')
        {{-- end footer --}}

    </div>
     <!--  Page Scroll to Top  -->

     <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!--Essential Scripts-->

    <!-- Main jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <!-- Map Js -->
    <script src="{{ asset('assets/plugins/google-map/gmap3.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>

    <script src="{{ asset('assets/js/form/contact.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>

</body>

</html>
