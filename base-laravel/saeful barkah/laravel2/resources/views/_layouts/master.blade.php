<!DOCTYPE html>
<html>

{{-- head --}}
@include('_layouts.head')
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
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
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
    @include('_layouts.js')
    {{-- end footer --}}

</body>

</html>
