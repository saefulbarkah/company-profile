@extends('layouts.master')
@section('title', 'portofolio')
@section('content')

<section class="portfolio">
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Judul Besar untuk Proyek Portofolio</h2>
                    <div class="portfolio-meta">
                        <span>Dec 11, 2020</span>|
                        <span> Kategori: konveksi</span>|
                        <span> website:
                            <a href="#">Genetic wear</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#Page header-->

<!-- work details part start -->
<section class="work-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="work-single-image">
                    <!-- Work Single Image -->
                    <img class="img-fluid w-100" src="{{ asset('assets/images/portfolio/post-1.jpg')}}" alt="work-single-image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!-- work single Content -->
                <div class="work-single-content">
                    <h3>Consectur in Bibendum</h3>
                    <p>Totam rem aperiam eaque ipsa quae illo inventore veritatis et quasi architebetea.vitae dicta sunt explicabo.
                        nemo enim ipsam volup as tatem quia voluptassit aspernatur.aut odit aut fugit sed quia consequuntur
                        magni dolores eo ratione voluptatem.sequi nesciunt neque porro quisquam est dolorem ipsum quia dolor
                        amet consectetur adipisci velit. lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim est
                        laborum. Sed ut perspiciatis unde omnis iste natus. error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                        dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                        incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <!-- Blockquote -->
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore et
                        dolore magna aliqua. ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo.</blockquote>
                    <p>Consequuntur magni dolores ratione voluptatem.sequi nesciunt neque porro quisquam est dolorem ipsum quia
                        dolor sit amet consectetur adipisci velit.lorem ipsum dolor sit amet consectetur adipisicing elit
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ut enim ad minim veniam quis nostrud
                        exercitation ullamco laboris nisi ut aliquip commodo consequat. </p>
                    <p>Reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident. sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- sidebar -->
                <div class="work-single-sidebar">
                    <h5>Clients</h5>
                    <h6>Julia Robertson</h6>
                    <h5>date</h5>
                    <h6>November 20, 2017</h6>
                    <h5>category</h5>
                    <h6>Investment, Business</h6>
                    <h5>locations</h5>
                    <h6>1201 park street, Avenue, Dhaka</h6>
                </div>
            </div>
            <div class="col-lg-12">
                <a class="btn btn-dafault btn-work hvr-bounce-to-right" href="#">get this work</a>
            </div>
        </div>
    </div>
</section>
<!-- work details part end -->

<section class="works works-fit">
    <div class="container">
        <h2 class="subtitle">Beberapa hasil kerja kami</h2>
        <p class="subtitle-des">
            Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere
            <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
        </p>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="300ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-1.jpg')}}" class="img-fluid" alt="portfolio items">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="{{ asset('assets/images/portfolio/item-1.jpg')}}">Demo</a>
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
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
                <figure class="wow fadeInLeft animated animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-2.jpg')}}" class="img-fluid" alt="portfolio items">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="{{ asset('assets/images/portfolio/item-2.jpg')}}">Demo</a>
                                <a target="_blank"  href="{{ url('portfolio') }}">rincian</a>
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
                <figure class="wow fadeInLeft animated animated" data-wow-duration="300ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 300ms; -webkit-animation-delay: 300ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-3.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="{{ asset('assets/images/portfolio/item-3.jpg')}}">Demo</a>
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
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
                <figure class="wow fadeInLeft animated animated" data-wow-duration="300ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 600ms; -webkit-animation-delay: 600ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-4.jpg')}}" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" title="Proin imperdiet augue et magna interdum hendrerit" class="fancybox" href="{{ asset('assets/images/portfolio/item-4.jpg')}}">Demo</a>
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
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

@endsection
