<!doctype html>
<html lang="en">

    {{-- head --}}
    <head>
        @include('layouts.head')
    </head>
    {{-- end head --}}

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- end navbar --}}


    {{-- content --}}
    <div class="main-wrapper ">
        @yield('content')

        <!-- footer Start -->
        @include('layouts.footer')
        {{-- end footer --}}
        sadasd

    </div>
    {{-- end content --}}

    {{-- javascripts --}}
    @include('layouts.js')
    {{-- end javascripts --}}
</body>

</html>
