@extends('layouts.master')
@section('title', 'Genetic Wear')
@section('content')

<section id="top-header">
    <div class="top-bar bg-dark " id="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="top-bar-left text-white">
                        <i class="fa fa-map-marker"></i>
                        <span class="ml-2">Jl.Katapang Andir No.503, kabupaten Bandung, Jawa Barat 40921</span>
                    </div>
                </div>

                <div class="col-lg-4 ml-lg-auto col-md-6">
                    <ul class="d-flex list-unstyled header-socials float-lg-right">
                        <li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"> <i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"> <i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"> <i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-bar d-none d-md-block d-lg-block bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo d-none d-lg-block">
                        <!-- Brand -->
                        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">
                            <h2>Genetic Wear</h2>
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">+62 81221337876</h5>
                            <p>Nomor kami</p>
                        </div>
                    </div>

                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-email"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">genetic.wear@gmail.com</h5>
                            <p>Email kami</p>
                        </div>
                    </div>
                    <div class="top-info-block d-inline-flex">
                        <div class="icon-block">
                            <i class="ti-time"></i>
                        </div>
                        <div class="info-block">
                            <h5 class="font-weight-500">Senin-Sabtu 8:00-17.00 </h5>
                            <p>Minggu Tutup</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- NAVBAR
    ================================================= -->
    <div class="main-navigation" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="">
                    <h4>Rapoo</h4>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
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

                    <ul class="ml-lg-auto list-unstyled m-0">
                        <li><a href="{{ url('contact') }}" target="_blank" class="btn btn-white btn-circled">Hubungi kami</a></li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>

<section id="home" class="home">
    <!-- HERO
    ================================================== -->
    <section class="banner-area py-7">
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-12 col-lg-7 text-center text-lg-left">
                    <div class="main-banner">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 font-weight-normal">
                            Konveksi & sablon
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-4">
                           Genetic merupakan jawaban bagi anda yang ingin membuat <br> Baju sablon, jersey, kemeja, jaket dan celana.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="{{ url('contact') }}" target="_blank" class="btn btn-primary btn-circled">
                                Hubungi kami
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <div class="banner-img-block">
                        <img src="{{ asset('assets/images/banner-img-5.png')}}" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>


 <section class="section bg-grey" id="feature">
        <div class="container">
            <div class="row justy-content-center">
                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-thumb-up"></i>
                        </div>
                        <h4 class="mb-2">kualitas terjamin</h4>
                        <p>Tim kami ahli dalam memenuhi kebutuhan Anda dengan design yang tepat.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-cup"></i>
                        </div>
                        <h4 class="mb-2">Diakui karena keunggulannya</h4>
                        <p>Kami telah diberikan penghargaan untuk tingkat kepuasan pelanggan kami yang tinggi.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-wallet"></i>
                        </div>
                        <h4 class="mb-2">Harga yang murah</h4>
                        <p>Kami hanya memberikan harga yang sesuai dengan harga yang beredar di pasaran.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6">
                    <div class="text-center feature-block">
                        <div class="img-icon-block mb-4">
                            <i class="ti-dashboard"></i>
                        </div>
                        <h4 class="mb-2">pengerjaan yang cepat</h4>
                        <p>dengan menggunakan tekhnologi terbaru kami menjamin kecepatan kerja.</p>
                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </section>

<section class="section" id="process">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Proses Kerja Kami
                        </h2>

                        <!-- Subheading -->
                        <p>
                            proses kerja kami tergantung kesepakatan dengan pelanggan
                        </p>

                    </div>
                </div>
            </div> <!-- / .row -->

            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('assets/images/process/process-1.jpg')}}" alt="" class="img-fluid">

                        <h3>Memilih produk & Negosiasi Harga Produk</h3>
                        <p>Pembeli memilih pruduk dan melakukan negosiasi harga produk terlebih dahulu untuk mengetahui kebutuhan pelanggan dan kesepakatan harga.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('assets/images/process/process-2.jpg')}}" alt="" class="img-fluid">

                        <h3>down payment(DP) minimal 50% & produksi</h3>
                        <p>Setelah mencapai kesepakatan pelanggan memberikan donw payment/DP sejumlah 50% lalu kami akan menghubungi pihak produksi.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="process-block">
                        <img src="{{ asset('assets/images/process/process-3.jpg')}}" alt="" class="img-fluid">

                        <h3>bayaran sisa invoice & pengambilan/pengiriman</h3>
                        <p>Setelah barang selesai di produksi pembeli melakukan pembayaran sisa invoice dan barang akan di ambil atau di kirim oleh genetic.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
