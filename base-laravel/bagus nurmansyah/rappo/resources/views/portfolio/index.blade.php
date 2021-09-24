@extends('layouts.master')
@section('title', 'portofolio')
@section('content')

<section id="portfolio" class="portfolio">
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
<section class="page-banner-area page-project">
    <div class="overlay"></div>
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-12 col-12 text-center">
                <div class="page-banner-content">
                    <h1 class="display-4 font-weight-bold">Kami Membuat Brand Anda</h1>
                    <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

 <section id="work-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h1><br>Kami mencoba memberikan produk berkualitas 100% untuk kepuasan pelanggan.</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="lead"><br>Kami memberikan layanan terbaik sejak tahun 2008 hingga sekarang, berkomitmen untuk memberikan layanan terbaik dan terpercaya. Dengan memenuhi keinginan pelanggan serta memenuhi harapan para pelanggan agar merasa puas. </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="work" class="section-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="work-block">
                            <img src="{{ asset('assets/images/work/10.jpg')}}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>Baju Sablon</h4>
                                <p>Baju Futsal</p>
                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="work-block">
                            <img src="{{ asset('assets/images/work/11.jpg')}}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>Kemeja</h4>
                                <p>Kemeja Bola</p>
                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="work-block">
                            <img src="{{ asset('assets/images/work/12.jpg')}}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>Kemeja</h4>
                                <p>Kemeja Casual</p>
                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="work-block">
                            <img src="{{ asset('assets/images/work/13.jpg')}}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>Baju Sablon</h4>
                                <p>Baju Bola</p>
                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="work-block">
                            <img src="{{ asset('assets/images/work/14.jpg')}}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>Baju Sablon</h4>
                                <p>Baju sablon biasa</p>
                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="work-block">
                            <img src="{{ asset('assets/images/work/15.jpg')}}" alt="work-img" class="img-fluid">
                            <div class="overlay-content-block">
                                <h4>Baju Sablon</h4>
                                <p>Baju Bola lengan panjang</p>
                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection
