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
            <h2>Tentang</h2>
            <p>Tentang kami</p>
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/images/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Genetic Wear</h3>
                <p class="fst-italic">
                    Genetic Wear merupakan sebuah perusahaan konveksi yang memiliki layanan Design, pembuatan
                    (T-shirt,Jersey,kemeja,jaket) dan Makloon Sublime printing beserta Makloon Press Sublime. Genetic
                    Waer mulai di dirikan pada tahun 2008 dengan penyedia layanan konveksi seiring perkembangan waktu
                    pada tahun 2010 perusahaan Genetic Wear mulai bergerak ke sebuah layanan baru yaitu sablon. Terus
                    berlanjut Genetic Wear mulai mengadakan sebuah layanan baru dengan alat teknologi terbaru yaitu
                    Sublime. Genetic Wear juga bergerak di bidang :

                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i>
                        vandor jersey
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        T-shirt sablon
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        kemeja</li>
                    </li>
                    <li><i class="ri-check-double-line"></i>
                        makloon sublime printing
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
                        <h1 class="text-white">We are trying to deliver 100% quality product and success their business to achieve ultimate goal.</h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="lead text-white">We are providing best service since 1990 to present , committed to best service delivery.Nullam metus enim, placerat in lacus vel, porttitor egestas libero. Etiam ex risus, feugiat eget accumsan eu, sagittis eu urna. In eget ultrices metus. Nunc accumsan </p>
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
                            <h4>Project: onepage</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-5">
                    <div class="single-project">
                        <img src="{{ asset('assets/images/projects/p-4.jpg')}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project: business</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 ">
                    <div class="single-project">
                        <img src="{{ asset('assets/images/projects/p-3.jpg')}}" alt="" class="img-fluid">
                        <div class="project-content">
                            <h4>Project : Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eligendi consequuntur veniam quod</p>
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
                        <h4>Do you know who we are?</h4>
                        <h2>More than just service your products...</h2>
                        <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="section" id="section-testimonial">
        <div class="container">
           <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>What they say <br>about us</h1>
                        <p>Numquam doloribus impedit at consectetur molestiae tempora ratione possimus in veniam aperiam, eum consequuntur, unde. Earum ullam molestiae suscipit saepe sunt recusandae.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="{{ asset('assets/images/client/test-1.jpg')}}" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Will Barrow</h4>
                                       <h6>Sunrise Paradise Hotel</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="{{ asset('assets/images/client/test-2.jpg')}}" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Will Barrow</h4>
                                       <h6>Sunrise Paradise Hotel</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="{{ asset('assets/images/client/test-3.jpg')}}" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Will Barrow</h4>
                                       <h6>Sunrise Paradise Hotel</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <img src="{{ asset('assets/images/client/test-4.jpg')}}" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Will Barrow</h4>
                                       <h6>Sunrise Paradise Hotel</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-lg-6">
                            <div class="test-inner">
                               <div class="test-author-thumb d-flex">
                                   <img src="{{ asset('assets/images/client/test-5.jpg')}}" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Will Barrow</h4>
                                       <h6>Sunrise Paradise Hotel</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="test-inner">
                               <div class="test-author-thumb d-flex">
                                   <img src="{{ asset('assets/images/client/test-6.jpg')}}" alt="Testimonial author" class="img-fluid">
                                   <div class="test-author-info">
                                       <h4>Will Barrow</h4>
                                       <h6>Sunrise Paradise Hotel</h6>
                                   </div>
                               </div>

                                Quas ut distinctio tenetur animi nihil rem, amet dolorum totam. Ab repudiandae tempore qui fugiat amet ipsa id omnis ipsam, laudantium! Dolorem.

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
