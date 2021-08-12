<!DOCTYPE html>
<html class="no-js">

    <!-- Basic Page Needs
     ================================================== -->
     <meta charset="utf-8">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <link rel="icon" href="favicon.ico">
     <title>Timer Agency Template</title>
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <!-- Mobile Specific Metas
     ================================================== -->
     <meta name="format-detection" content="telephone=no">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- head --}}
    <head>
        @include('layouts.head')
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
    @include('layouts.js')
    {{-- end javascripts --}}
</body>

</html>
