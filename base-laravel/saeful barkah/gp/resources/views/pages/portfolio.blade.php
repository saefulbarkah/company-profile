@extends('layouts.master')

@section('page-title', 'Genetic wear')
@section('page-subtitle', 'portofolio kami')
@section('title', 'Genetic | Portofolio')
@section('content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <p>Portofolio</p>
        </div>

        <div class="row container portfolio">
            <div class="col-lg-12 d-flex justify-content-right">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-jersey">jersey</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <div class="col-lg-3 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/futsal-1-belakang.jpg') }}" class="img-fluid float-start"
                        alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/futsal-1-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/futsal-1-depan.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/futsal-1-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                    class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/futsal-3-depan.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/futsal-3-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/futsal-3-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/futsal-3-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"><i
                                    class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
@endsection
