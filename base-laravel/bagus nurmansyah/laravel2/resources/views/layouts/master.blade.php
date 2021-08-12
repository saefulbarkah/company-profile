<!DOCTYPE html>
<html class="no-js">

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
