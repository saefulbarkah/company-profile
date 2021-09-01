@extends('layouts.master')
@section('title', 'Genetic Wear')
@section('content')

<!--
==================================================
Slider Section Start
================================================== -->
<section class="home">
<section id="hero-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block wow fadeInUp" data-wow-delay=".3s">

                    <!-- Slider -->
                    <section class="cd-intro">
                        <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                            <span>Genetic wear</span><br>
                            <span class="cd-words-wrapper">
                                <b class="is-visible">full order jersey</b>
                                <b>T-shirt sablon</b>
                                <b>kemeja</b>
                                <b>jaket</b>
                            </span>
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
                        With 10 years experience, I've occupied many roles including digital design director,<br>
                        web designer and developer. This site showcases some of my work.
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                        TENTANG KAMI
                    </h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, similique inventore quia neque quibusdam excepturi eius ab necessitatibus non, eveniet sint dolorem modi, est aliquid ratione dolore nostrum assumenda exercitationem?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum
                        repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat.
                        Temporibus, vero.
                    </p>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="{{ asset('assets/images/about/about.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->

{{-- feature --}}
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">tawaran dari saya</h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,<br> quasi dolores numquam dolor vero
                ex, tempora commodi repellendus quod laborum.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">full order jersey</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <i class="fas fa-tshirt"></i>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">T-shirt sablon</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon"><img src="{{ asset('assets/icon/shirt.png') }}" alt="" class="img-fluid"
                            width="40px"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">kemeja</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <img src="{{ asset('assets/icon/hoodie.png') }}" alt="" class="img-fluid" width="40px">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">jaket</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <img src="{{ asset('assets/icon/printer-filled-tool-for-print-button.png') }}"
                            alt="" class="img-fluid" width="35px"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">makloon Sublime Printing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon"><img src="{{ asset('assets/icon/sublimation.png') }}" alt="" class="img-fluid"
                            width="35px"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">makloon press sublime</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->

@endsection
