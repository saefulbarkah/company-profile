@extends('layouts.master')

@section('title', 'Genetic Home')
@section('content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Portofolio</h2>
            <p>Portofolio kami</p>
        </div>

        <div class="row container portfolio" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-right">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".filter-hijau">Hijau</li>
                    <li data-filter=".filter-merah">Merah</li>
                    <li data-filter=".filter-orange">Oranye</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container justify-content-start" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-hijau">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-hijau-depan.jpg') }}" class="img-fluid float-start"
                        alt="">
                    <div class="portfolio-info">
                        <h4>T-shirt hijau Depan</h4>
                        <p>Tshirt</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-hijau-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-hijau">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-hijau-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>T-shirt hijau belakang</h4>
                        <p>Tshirt</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-hijau-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-merah">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-merah-depan.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>T-shirt merah belakang</h4>
                        <p>Tshirt</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-merah-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-merah">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-merah-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>T-shirt merah belakang</h4>
                        <p>Tshirt</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-merah-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-orange">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-orange-belakang.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>T-shirt oranye belakang</h4>
                        <p>Tshirt</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-orange-belakang.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-orange float-start">
                <div class="portfolio-wrap">
                    <img src="{{ asset('assets/img/portfolio/baju-orange-depan.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>T-shirt oranye depan</h4>
                        <p>Tshirt</p>
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/baju-orange-depan.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                    class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->
@endsection
