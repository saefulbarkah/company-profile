@extends('_layouts.master')

@section('title', 'Portofolio')
@section('content')
{{-- Single page header --}}
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Portofolio</h2>
            </div>
        </div>
    </div>
</section>
{{-- single page header --}}

<!-- Start Portfolio Section -->
<section class="portfolio section-sm" id="portfolio">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">

                <!-- section title -->
                <div class="title text-center">
                    <h2>Pekerjaan kami</h2>
                    <p> </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="portfolio-filter">
                    <button type="button" data-filter="all">All</button>
                    <button type="button" data-filter="portofolio">portofolio</button>
                    <button type="button" data-filter="dokumentasi">dokumentasi</button>
                </div>

                <div class="row filtr-container">
                    <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, portofolio">
                        <div class="portfolio-block">
                            <img class="img-fluid" src=" {{ asset('assets/images/portfolio/portfolio-1.jpg') }}"
                                alt="">
                            <div class="caption">
                                <a class="search-icon"
                                    href=" {{ asset('assets/images/portfolio/portfolio-1.jpg') }}"
                                    data-lightbox="image-1">
                                    <i class="tf-ion-ios-search-strong"></i>
                                </a>
                                <h4><a href="">AirBnB Postcard</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, portofolio">
                        <div class="portfolio-block">
                            <img class="img-fluid" src=" {{ asset('assets/images/portfolio/portfolio-2.jpg') }}"
                                alt="">
                            <div class="caption">
                                <a class="search-icon"
                                    href=" {{ asset('assets/images/portfolio/portfolio-2.jpg') }}"
                                    data-lightbox="image-1">
                                    <i class="tf-ion-ios-search-strong"></i>
                                </a>
                                <h4><a href="">AirBnB Postcard</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, dokumentasi">
                        <div class="portfolio-block">
                            <img class="img-fluid" src=" {{ asset('assets/images/portfolio/portfolio-3.jpg') }}"
                                alt="">
                            <div class="caption">
                                <a class="search-icon"
                                    href=" {{ asset('assets/images/portfolio/portfolio-3.jpg') }}"
                                    data-lightbox="image-1">
                                    <i class="tf-ion-ios-search-strong"></i>
                                </a>
                                <h4><a href="">AirBnB Postcard</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- End section -->

<!-- Start Testimonial -->
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
                            <img src=" {{ asset('assets/images/client-logo/clients-1.jpg') }}" class="img-fluid"
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
                            <img src=" {{ asset('assets/images/client-logo/clients-2.jpg') }}" class="img-fluid"
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
                            <img src=" {{ asset('assets/images/client-logo/clients-3.jpg') }}" class="img-fluid"
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
            </div> <!-- end col lg 12 -->
        </div> <!-- End row -->
    </div> <!-- End container -->
</section>
<!-- End Section -->

@endsection
