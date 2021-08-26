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
                <img src="{{ asset('_template/images/about/member.jpg') }}" class="inline-block" alt="">
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



<!--Start About Section-->
<section class="about-2 section" id="about">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center">
                    <h2>Kami Adalah Agen Bingo</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus
                        labore iusto,
                        aut, eum itaque illo totam tempora eius.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <div class="col-md-6">
                <img src="{{ asset('_template/images/about/about-2.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <ul class="checklist">
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                    </li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                    </li>
                    <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                </ul>
                <a href="#" class="btn btn-main mt-20">Pelajari lebih lanjut</a>
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




<!-- Start Counter Section -->
<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>Agensi Pemenang Penghargaan</h2>
                    <p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                        iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                        risus luctus dignissim.</p>
                </div>
            </div>
            <!-- first count item -->
            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-alarm-outline"></i>
                    <div>
                        <span class="counter" data-count="150">0</span>
                    </div>
                    <h3>Klien senang</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-analytics-outline"></i>
                    <div>
                        <span class="counter" data-count="130">0</span>
                    </div>
                    <h3>Proyek selesai</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-4 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-ios-compose-outline"></i>
                    <div>
                        <span class="counter" data-count="99">0</span>
                    </div>
                    <h3>Kritik yang baik</h3>

                </div>
            </div>
            <!-- end third count item -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end section -->




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
                            <img src="{{ asset('_template/images/client-logo/clients-1.jpg') }}" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('_template/images/client-logo/clients-2.jpg') }}" class="img-fluid"
                                alt="">
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
                            <img src="{{ asset('_template/images/client-logo/clients-3.jpg') }}" class="img-fluid"
                                alt="">
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