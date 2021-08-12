@extends('layouts.master')
@section('title', 'service')
@section('content')

<section class="service">
<section class="top-bar animated-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="../images/logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="service.html">Service</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="gallery.html">Gallery</a>
                                    <a class="dropdown-item" href="single-post.html">Single Post</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog-fullwidth.html">Blog Full</a>
                                    <a class="dropdown-item" href="blog-left-sidebar.html">Blog Left sidebar</a>
                                    <a class="dropdown-item" href="blog-right-sidebar.html">Blog Right sidebar</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

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
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">Service</li>
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
                <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">What We Love
                    To Do</h2>
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
                                <h4>BRANDING</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                <i class="ion-ios-pint-outline"></i>
                                <h4>DESIGN</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>DEVELOPMENT</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>THEMEING</h4>
                                <p>Veritatis eligendi, dignissimos. Porta fermentum mus aute pulvinar earum minus
                                    platea massa feugiat rutrum urna facilisi ipsameum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="block">
                    <img class="img-fluid" src="images/team.jpg" alt="">
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
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Some Of Our Features
            Works</h2>
        <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
            Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est.
            Aenean posuere <br> tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis
            lacus.
        </p>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-1.jpg" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-1.jpg">Demo</a>
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Dew Drop
                            </a>
                        </h4>
                        <p>
                            Redesigne UI Concept
                        </p>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                        <img src="images/portfolio/item-2.jpg" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-2.jpg">Demo</a>
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Bottle Mockup
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
                        <img src="images/portfolio/item-3.jpg" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-3.jpg">Demo</a>
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Table Design
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
                        <img src="images/portfolio/item-4.jpg" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="images/portfolio/item-4.jpg">Demo</a>
                                <a target="_blank" href="">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Make Up elements
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
                <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our
                    Happy Clinets</h2>
                <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                <div id="clients-logo" class="clients-logo-slider">
                    <img class="img-fluid mx-2" src="images/clients/logo-1.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-2.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-3.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-4.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-5.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-1.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-2.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-3.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-4.jpg" alt="">
                    <img class="img-fluid mx-2" src="images/clients/logo-5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </section>

@endsection
