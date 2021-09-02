@extends('_layouts.master')
@section('title', 'Portofolio')
@push('item-css')
<style>
    .item:hover {
        filter: brightness(50%);
    }

    .item {
        transition: .5s ease-in-out;
    }
</style>
@endpush

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
                    <h2>Our Works</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, veritatis. Lorem ipsum dolor sit
                        amet,
                        consectetur adipisicing elit. Minima, vitae? </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="row">
                    <div class="item col-md-3 mb-4" data-category="mix, hijau">
                        <a href="{{ asset('assets/images/portfolio/baju-hijau-depan.jpg') }}" class="search-item"
                            data-fancybox="galery1">
                            <img src="{{ asset('assets/images/portfolio/baju-hijau-depan.jpg') }}" class="img-fluid"
                                alt="" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="item col-md-3 mb-4" data-category="mix, hijau">
                        <a href="{{ asset('assets/images/portfolio/baju-hijau-depan.jpg') }}" class="search-item"
                            data-fancybox="galery1">
                            <img src="{{ asset('assets/images/portfolio/baju-hijau-depan.jpg') }}" class="img-fluid"
                                alt="" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="item col-md-3 mb-4" data-category="mix, hijau">
                        <a href="{{ asset('assets/images/portfolio/baju-merah-depan.jpg') }}" class="search-item"
                            data-fancybox="galery1">
                            <img src="{{ asset('assets/images/portfolio/baju-merah-depan.jpg') }}" class="img-fluid"
                                alt="" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="item col-md-3 mb-4" data-category="mix, hijau">
                        <a href="{{ asset('assets/images/portfolio/baju-merah-belakang.jpg') }}" class="search-item"
                            data-fancybox="galery1">
                            <img src="{{ asset('assets/images/portfolio/baju-merah-belakang.jpg') }}" class="img-fluid"
                                alt="" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="item col-md-3 mb-4" data-category="mix, hijau">
                        <a href="{{ asset('assets/images/portfolio/baju-orange-depan.jpg') }}" class="search-item"
                            data-fancybox="galery1">
                            <img src="{{ asset('assets/images/portfolio/baju-orange-depan.jpg') }}" class="img-fluid"
                                alt="" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="item col-md-3 mb-4" data-category="mix, hijau">
                        <a href="{{ asset('assets/images/portfolio/baju-orange-belakang.jpg') }}" class="search-item"
                            data-fancybox="galery1">
                            <img src="{{ asset('assets/images/portfolio/baju-orange-belakang.jpg') }}" class="img-fluid"
                                alt="" width="100%" height="100%">
                        </a>
                    </div>
                </div>
                <!-- /end col-lg-12 -->
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
                            <img src=" {{ asset('assets/images/client-logo/clients-1.jpg') }}') }}" class="img-fluid"
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum.
                                Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia,
                                officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src=" {{ asset('assets/images/client-logo/clients-2.jpg') }}') }}" class="img-fluid"
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum.
                                Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia,
                                officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class="client-thumb">
                            <img src=" {{ asset('assets/images/client-logo/clients-3.jpg') }}') }}" class="img-fluid"
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
