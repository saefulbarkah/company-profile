<!DOCTYPE html>
<html>

{{-- head --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>@yield('title')</title>

    <!-- Mobile Specific Meta
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- CSS
  ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('_template/plugins/themefisher-font/style.css') }}">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('_template/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('_template/plugins/lightbox2/dist/css/lightbox.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('_template/plugins/animate/animate.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('_template/plugins/slick/slick.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('_template/css/style.css') }}">

</head>
{{-- head --}}

<body id="body">

    <!--
  Start Preloader
  ==================================== -->
    <div id="preloader">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
  End Preloader
  ==================================== -->



    {{-- footer --}}
    @include('_layouts.navbar')
    {{-- end footer --}}

    {{-- content --}}
    @yield('content')
    {{-- end content --}}


    {{-- footer --}}
    @include('_layouts.footer')
    {{-- end footer --}}



    {{-- footer --}}
    <!--
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="{{ asset('_template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="{{ asset('_template/plugins/google-map/gmap.js') }}"></script>

    <!-- Form Validation -->
    <script src="{{ asset('_template/plugins/form-validation/jquery.form.js') }}"></script>
    <script src="{{ asset('_template/plugins/form-validation/jquery.validate.min.js') }}"></script>

    <!-- Bootstrap4 -->
    <script src="{{ asset('_template/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Parallax -->
    <script src="{{ asset('_template/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox -->
    <script src="{{ asset('_template/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('_template/plugins/slick/slick.min.js') }}"></script>
    <!-- filter -->
    <script src="{{ asset('_template/plugins/filterizr/jquery.filterizr.min.js') }}"></script>
    <!-- Smooth Scroll js -->
    <script src="{{ asset('_template/plugins/smooth-scroll/smooth-scroll.min.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('_template/js/script.js') }}"></script>
    {{-- end footer --}}

</body>

</html>
