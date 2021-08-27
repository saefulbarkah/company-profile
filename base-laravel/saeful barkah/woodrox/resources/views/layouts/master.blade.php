<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Woodrox Furniture</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/flaticon/flaticon.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    </head>
    <body>

        {{-- navbar --}}
        @include('layouts.navbar')
        {{-- end navbar --}}

        {{-- content --}}
        @yield('content')
        {{-- end content --}}


        {{-- footer --}}
        @include('layouts.footer')
        {{-- end footer --}}


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/stellar.js') }}"></script>
        <script src="{{ asset('assets/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{  asset('assets/js/theme.js') }}"></script>
    </body>
</html>
