<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Genetic wear</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

        <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    </head>

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- end navbar --}}


    {{-- content --}}
    <div class="main-wrapper">
        @yield('content')

        <!-- footer Start -->
        @include('layouts.footer')
        {{-- end footer --}}

    </div>
    {{-- end content --}}

</body>

</html>
