@extends('layouts.master')
@section('title', 'portofolio')
@section('content')

<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Portofolio</h2>
                    <ol class="breadcrumb list-inline text-center">
                        <li class="list-inline-item">
                            <a href="{{ url('/')}}">
                                <i class="ion-ios-home"></i>
                                Beranda  &nbsp; &nbsp;/
                            </a>
                        </li>
                        <li class="active list-inline-item">Portofolio</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=============================
=            Gallery            =
==============================-->
<section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

        <header class="section-header text-center" id="title-portfolio">
          <h1 class="uppercase">Beberapa hasil kerja kami</h1>
        </header>

        <div class="portfolio">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Baju</li>
              <li data-filter=".filter-card">Kemeja</li>
              <li data-filter=".filter-web">Jaket</li>
            </ul>
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-1.jpg')}}" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons justify-content-center">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-1.jpg')}}">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-2.jpg')}}" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons justify-content-center">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-2.jpg')}}">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated animated" data-wow-duration="500ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-3.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons justify-content-center">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-3.jpg')}}">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="700ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 600ms; -webkit-animation-delay: 600ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-4.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons justify-content-center">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-4.jpg')}}">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 900ms; -webkit-animation-delay: 900ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-5.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons justify-content-center">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-5.jpg')}}">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1100ms" style="visibility: hidden; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 1200ms; -webkit-animation-delay: 1200ms; animation-name: none; -webkit-animation-name: none;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-6.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons justify-content-center">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-6.jpg')}}">Demo</a>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>

{{-- <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

    <div class="container" data-aos="fade-up">

      <header class="section-header text-center" id="title-portfolio">
        <h2>Portfolio</h2>
        <p>Check our latest work</p>
      </header>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Baju</li>
            <li data-filter=".filter-card">Kemeja</li>
            <li data-filter=".filter-web">Jaket</li>
          </ul>
        </div>
      </div>

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <div class="portfolio-links">
                <a href="{{ asset('assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Portfolio Section --> --}}

@endsection
