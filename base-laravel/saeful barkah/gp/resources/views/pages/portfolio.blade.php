@extends('layouts.master')

@section('title', 'Genetic | Portofolio')
@section('p-title', 'Portofolio')
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
                    <li data-filter=".filter-jacket">Jacket</li>
                    <li data-filter=".filter-kemeja">Kemeja</li>
                    <li data-filter=".filter-tshirt">tshirt</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-hijau-depan.jpg') }}" class="img-fluid float-start"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Jersey Futsal</h4>

                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-hijau-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" ><i
                                    class="fas fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-hijau-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Jersey Futsal</h4>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-hijau-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" ><i
                                    class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-merah-depan.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Jersey Futsal</h4>

                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-merah-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" ><i
                                    class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-merah-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Jersey Futsal</h4>

                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-merah-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" ><i
                                    class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-jersey">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-orange-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Jersey Futsal</h4>

                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-orange-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" ><i
                                    class="fas fa-search"></i></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-jersey float-start">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-orange-depan.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Jersey Futsal</h4>

                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-orange-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" ><i
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
