@extends('_layouts.master')


@section('title', 'Beranda')
@section('content')

{{-- slider --}}
<div class="hero-slider">
    <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Kerajinan Digital <br>
                        Pengalaman</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit. Quod, <br> veritatis tempore nostrum id
                        officia quaerat eum corrupti, <br> ipsa aliquam velit.</p>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                        href="{{ route('services') }}">Jelajahi kami</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Kami menggabungkan
                        desain
                        <br> Dan
                        Kreatifitas
                    </h1>
                    <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Buat apa yang Anda
                        membutuhkan
                        untuk Situs Web Sempurna Anda. Pilih dari berbagai macam
                        <br> Elemen & cukup letakkan di Kanvas kami.
                    </p>
                    <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                        href="{{ route('services') }}">Jelajahi kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end slider --}}


<!--Start About Section-->
<section class="service-2 section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- section title -->
                <div class="title text-center">
                    <h2>Apa yang Kami Tawarkan?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/about/member.jpg') }}" class="inline-block" alt="">
            </div>
            <div class="col-md-8">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="tf-ion-ios-alarm-outline"></i>
                            <h4>Manajemen waktu</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="tf-ion-ios-briefcase-outline"></i>
                            <h4>Ide Pemasaran</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="tf-ion-ios-email-outline"></i>
                            <h4>Dukungan Surat</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="tf-ion-ios-locked-outline"></i>
                            <h4>Sistem Aman</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div>
                    <!-- END COL -->
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->



<!-- Start Call To Action-->
<section class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Mari Menciptakan Sesuatu Bersama</h2>
                <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit
                    consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
                <a href="" class="btn btn-main">Hubungi kami</a>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End section -->


<!--Start Testimonial-->
<section class="testimonial section" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- testimonial wrapper -->
                <div class="testimonial-slider">
                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/client-logo/clients-1.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>William Martin</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/client-logo/clients-2.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Emma Harrison</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class="item text-center">
                        <i class="tf-ion-chatbubbles"></i>
                        <!-- client info -->
                        <div class="client-details">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src="{{ asset('assets/images/client-logo/clients-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Alexander Lucas</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->
                </div>
            </div>
            <!-- end col lg 12 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- End Section -->

@endsection
