@extends('layouts.master')

@section('page-title', 'Genetic wear')
@section('page-subtitle', 'portofolio kami')
@section('title', 'Genetic | Portofolio')
@section('content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title text-center">
            <p>Portofolio</p>
        </div>

        <div class="row container portfolio">
            <div class="col-lg-12 col-sm-6 d-flex justify-content-right">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-jersey">jersey</li>
                    <li data-filter=".filter-jaket">jaket</li>
                    <li data-filter=".filter-kemeja">kemeja</li>
                    <li data-filter=".filter-kaos">kaos</li>
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

            {{-- jaket --}}
            <div class="col-lg-3 col-md-6 portfolio-item filter-jaket">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/jaket.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/jaket.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-jaket">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/jaket2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/jaket2.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-jaket">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/jaket3.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/jaket3.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-jaket">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/jaket4.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/jaket4.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            {{-- kemeja --}}
            <div class="col-lg-3 col-md-6 portfolio-item filter-kemeja">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/kemeja.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/kemeja.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-kemeja">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/kemeja2.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/kemeja2.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 portfolio-item filter-kemeja">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/kemeja3.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/kemeja3.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-kaos">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/kaos.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/kaos.jpg') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 portfolio-item filter-kaos">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/kaos2.png') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/kaos2.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox"><i class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
@endsection
