@extends('layouts.master')
@section('title', 'Project')
@section('content')

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

    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark trans-navigation fixed-top navbar-togglable">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h3>Genetic Wear</h3>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a href="{{ url('/') }}" class="nav-link js-scroll-trigger">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('about') }}" class="nav-link js-scroll-trigger">
                            Tentang
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('service') }}" class="nav-link js-scroll-trigger">
                            Layanan
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('portfolio') }}" class="nav-link js-scroll-trigger">
                            Portofolio
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('contact') }}" class="nav-link">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .container -->
    </nav>


   <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-about">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Contoh proyek kami</h1>
                        <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


 <!-- SECTIONS
    ================================================== -->

    <section class="section" id="single-project">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="project-lg-img">
                                <img src="{{ asset('assets/images/projects/p-2.jpg')}}" alt="" class="img-fluid w-100">
                            </div>

                            <div class="project-details-info">
                                <div class="info-block-2">
                                    <h5>Pembeli</h5>
                                    <p>Maman grup</p>
                                </div>
                                    <div class="info-block-2">
                                    <h5>Date</h5>
                                    <p>17/12/21</p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Category</h5>
                                    <p>Jersey</p>
                                </div>
                                <div class="info-block-2">
                                    <h5>Layanan</h5>
                                    <p>Full order, makloon sublime print, makloon sublime press</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="project-single-info">
                                <p>Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ipsa, vero delectus odit provident consequuntur amet laudantium tempora, distinctio, dolorem ex id nihil voluptatum velit quae explicabo porro. Aperiam, fugiat.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="project-single-info">
                                <p>Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline.</p>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>


    <!--  Page Scroll to Top  -->

    <a class="scroll-to-top js-scroll-trigger" href="#top-header">
        <i class="fa fa-angle-up"></i>
    </a>

    <!--
    Essential Scripts
    =====================================-->

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

    <script src="{{ asset('assets/js/form/contact.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>

@endsection
