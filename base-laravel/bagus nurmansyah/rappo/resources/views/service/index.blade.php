@extends('layouts.master')
@section('title', 'layanan')
@section('content')

<section id="service" class="service">
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
    <section class="page-banner-area page-service">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Konveksi & Sablon</h1>
                        <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>



<section class="section" id="service">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 pl-4 text-center">
                    <div class="service-heading">
                        <h1>Produk dan Layanan</h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <div class="icon"><img src="{{ asset('assets/icon/baju.png') }}" alt="" class="img-fluid"
                                width="35px"></div>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Baju Sablon</h4>
                            <p>Baju sablon merupakan produk baju yang di sablon.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <div class="icon"><img src="{{ asset('assets/icon/hoodie.png') }}" alt="" class="img-fluid"
                                width="35px"></div>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Jersey</h4>
                            <p>Jersey merupakan produk berupa jersey polos atau sablon.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <div class="icon"><img src="{{ asset('assets/icon/kemeja.png') }}" alt="" class="img-fluid"
                                width="35px"></div>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Kemeja</h4>
                            <p>Kemeja merupakan produk berupa kemeja polos atau sablon.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-3 col-md-6">
                    <div class="service-block media ">
                        <div class="service-icon">
                            <div class="icon"><img src="{{ asset('assets/icon/jaket.png') }}" alt="" class="img-fluid"
                                width="35px"></div>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Jaket</h4>
                            <p>Jaket merupakan produk berupa jaket polos atau sablon.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <div class="icon"><img src="{{ asset('assets/icon/print.png') }}" alt="" class="img-fluid"
                                width="35px"></div>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Sublime Print</h4>
                            <p>Sublime print merupakan layanan berupa printing gambar.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-block media">
                        <div class="service-icon">
                            <div class="icon"><img src="{{ asset('assets/icon/press.png') }}" alt="" class="img-fluid"
                                width="35px"></div>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4>Sublime Press</h4>
                            <p>Sublime press merupakan layanan berupa heat transfer.</p>
                        </div>
                    </div>
                </div>
            </div>

        <section id="service" class="service">
                <div class="container" data-aos="fade-up">

                    <div class="section-title text-center">
                        <p>Layanan</p>
                    </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                        <h4><a href="{{ url('service/full-order') }}" >Full Order</a></h4>
                        <p>Full order merupakan layanan produk berupa pembelian penuh dengan kelengkapan yang sesuai layanan</p>
                        <div class="mt-4">
                            <a href="{{ url('service/full-order') }}" class="btn btn-dark text-success" target="_blank">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                        <h4><a href="{{ url('service/makloon-sublime') }}">Makloon Sublime</a></h4>
                        <p>Makloon sublime merupakan layanan jasa yang menyediakan layanan berupa printing & press heat transfer</p>
                        <div class="mt-4">
                            <a href="{{ url('service/makloon-sublime') }}" class="btn btn-dark text-success" target="_blank">Selengkapnya</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="pl-3"><br>Ingin tau lebih tentang kami? <a href="#">Hubungi kami</a></p>
                </div>
            </div>
        </div>
    </section>



@endsection
