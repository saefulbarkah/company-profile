<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Panel Genetic Wear</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets2/images/favicon.ico')}}" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="{{ asset('assets2/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('assets2/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('assets2/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets2/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('assets2/css/app-style.css') }}" rel="stylesheet" />
    @stack('styles')

</head>

<body>

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        @include('admin.layouts.sidebar')
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        @include('admin.layouts.navbar')
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <h4 class="page-title">@yield('title-page')</h4>
                    </div>
                </div>
                <!-- End Breadcrumb-->

                {{-- content --}}
                @yield('content')

            </div>
            <!-- End container-fluid-->

        </div>
        <!--End content-wrapper-->
        <!--Start Back To Top Button-->

        <!--Start footer-->
        {{-- <footer class="footer fixed-bottom">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Rocker Admin
                </div>
            </div>
        </footer> --}}
        <!--End footer-->

    </div>
    <!--End wrapper-->

    @include('sweetalert::alert')

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets2/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>

    <!-- simplebar js -->
    <script src="{{ asset('assets2/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- waves effect js -->
    <script src="{{ asset('assets2/js/waves.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('assets2/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('assets2/js/app-script.js') }}"></script>

    @stack('scripts')
</body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->

</html>
