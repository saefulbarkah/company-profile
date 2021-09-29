@extends('layouts.master')
@section('title', 'tentang')
@section('content')

<section id="about" class="about">
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
                        <h1 class="display-4 font-weight-bold">Tentang kami</h1>
                        <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>



<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <p>Genetic Wear</p>
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('assets/images/about.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <p class="fst-italic text-justify">
                    Genetic Wear merupakan sebuah perusahaan konveksi yang memiliki layanan Design, pembuatan
                    (T-shirt, Jersey, kemeja, jaket) dan Makloon Sublime printing beserta Makloon Press Sublime. Genetic
                    Wear mulai di dirikan pada tahun 2008 dengan penyedia layanan konveksi seiring perkembangan waktu
                    pada tahun 2010 perusahaan Genetic Wear mulai bergerak ke sebuah layanan baru yaitu sablon. Terus
                    berlanjut Genetic Wear mulai mengadakan sebuah layanan baru dengan alat teknologi terbaru yaitu
                    Sublime. Genetic Wear juga bergerak di bidang :

                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i></i>
                        Sablon
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Makloon Sublime Printing
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        Makloon Sublime Press
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<section class="section" id="projects-wrap">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h1 class="text-white">Kami mencoba memberikan produk berkualitas 100% untuk kepuasan pelanggan.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">Kami memberikan layanan terbaik sejak tahun 2008 hingga sekarang, berkomitmen untuk memberikan layanan terbaik dan terpercaya. Dengan memenuhi keinginan pelanggan serta memenuhi harapan para pelanggan agar merasa puas. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="{{ asset('assets/images/projects/p-1.jpg')}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Layanan: Pembuatan Produk</h4>
                            <p>Layanan berupa pembuatan produk seperti baju sablon, jersey komunitas, kemeja, Jaket</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="{{ asset('assets/images/projects/p-4.jpg')}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Layanan: Sublime Print</h4>
                            <p>Layanan berupa jasa sublime print untuk memindahkan gambar anda yg telah di design ke sebuah kertas untuk di transfer/ dimasukan ke dalam produk yang berbahan kain</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="{{ asset('assets/images/projects/p-3.jpg')}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Layanan: Sublime Press</h4>
                            <p>Layanan berupa jasa sumbile print untuk memindahkan kertas yang berisi gambar kedalam bahan berbahan kain dengan menggunakan tekhnologi heat transfer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="{{ asset('assets/images/bg/banner_bg.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h4>Apakah Anda tahu siapa kita?</h4>
                        <h2>Lebih dari sekedar membuat sebuah produk...</h2>
                        <p>Tidak hanya bergerak di bidang pembuatan jersey dan sebagainya kami juga memiliki layanan berupa jasa untuk mencetak gambar anda dengan menggunakan sublime printing atau kami dapat menempelkan gambar yg sudah anda buat dengan menggunakan sublime press/heat transfer kedalam produk berbahan kain yang anda inginkan...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
