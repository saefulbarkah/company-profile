@extends('layouts.master')
@section('title', 'layanan')
@section('content')

<section class="service">

        <!--
        ==================================================
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Service</h2>
                            <ol class="breadcrumb list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="{{ url('/') }}">
                                        <i class="ion-ios-home"></i>
                                        beranda  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">layanan</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--
==================================================
    Service Page Section  Start
================================================== -->
<section id="service-page" class="pages service-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Apa yang Kami Suka Lakukan</h2>
                <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam
                    iure adipisci.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="block">
                    <div class="row service-parts">
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>DESIGN</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                <i class="ion-ios-pint-outline"></i>
                                <h4>makloon Sublime Printing</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>Makloon press sublime</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>penjahitan</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="block">
                    <img class="img-fluid" src="{{ asset('assets/images/team.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
    Works Section Start
================================================== -->
<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Beberapa hasil kerja kami</h2>
        <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
            Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est.
            Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
            lacus.
        </p>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-1.jpg')}}" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-1.jpg')}}">Demo</a>
                                <a target="_blank" href="">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                T-shirt sablon
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-2.jpg')}}" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-2.jpg')}}">Demo</a>
                                <a target="_blank" href="">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                T-shirt sablon
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-3.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-3.jpg')}}">Demo</a>
                                <a target="_blank" href="">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                T-shirt sablon
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet.
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-4.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-4.jpg')}}">Demo</a>
                                <a target="_blank" href="">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                T-shirt sablon
                            </a>
                        </h4>
                        <p>
                            Lorem ipsum dolor.
                        </p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<!--
        ==================================================
            Clients Section Start
        ================================================== -->
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Klien Kami yang Bahagia</h2>
                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                <div id="clients-logo" class="clients-logo-slider">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-1.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-2.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-3.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-4.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-5.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-1.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-2.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-3.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-4.jpg')}}" alt="">
                    <img class="img-fluid mx-2" src="{{ asset('assets/images/clients/logo-5.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
