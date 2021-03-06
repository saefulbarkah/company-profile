@extends('layouts.master')

@section('title','Genetic | Layanan')
@push('styles')
<style>
    .card-img-top {
        /*height: 11vw;*/
        object-fit: cover;
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 320px) (max-width: 350px) {
        .card-img-top {
            height: 50vw;
        }
    }
    @media (min-width: 576px) {
        .card-img-top {
            height: 11vw;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .card-img-top {
            height: 50vw;
        }
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .card-img-top {
            height: 30w;
        }
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 992px) {
        .card-img-top {
            height: 20vw;
        }
    }
</style>
@endpush
@section('content')
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="https://2.bp.blogspot.com/-Sl_tyI2fNzQ/WYlWfGwn_AI/AAAAAAAABKQ/PTmLmEpBYVA12Dh4tZOX5i1i9X2RIvImQCLcBGAs/s1600/bisnis%2Bkonveksi.jpg"
            alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Layanan - Full order</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                        <li class="breadcrumb-item active" aria-current="page">Full Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="shop" class="shop pb-90">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 text--center">
                    <p class="heading--subtitle">Produk Layanan</p>
                    <h2 class="heading--title">Daftar Produk</h2>
                    <p class="heading--desc"></p>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/futsal.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> Jersey futsal</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/gaming.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey gaming</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/mancing.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey mancing</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/sepeda.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey sepeda</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/basket.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey basket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/jaket.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jaket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/kemeja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kemeja</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/kaos.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kaos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

{{-- <section id="blog" class="blog blog-standard">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="blog-entry-wrap">

                    <section id="jersey">
                        <div class="blog-entry">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Jersey Futsal</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="#" data-fancybox>
                                    <img src="https://image.freepik.com/free-vector/t-shirt-sport-design-soccer-jersey-mockup-football-club-uniform-front-back-view-template-design-template-jersey-realistic_294186-23.jpg"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning ??? a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="jersey">
                        <div class="blog-entry">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Jersey Gaming</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="#" data-fancybox>
                                    <img src="https://s4.bukalapak.com/images/4340539073/large/Jersey_gaming_versi_6.jpg"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning ??? a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="kemeja">
                        <div class="blog-entry" id="kemeja">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Kemeja</a></h4>
                                </div>
                            </div>
                            <div class="entry--img" data-fancybox>
                                <a href="#">
                                    <img src="https://i.pinimg.com/originals/53/f0/f9/53f0f9952eceb802c86efed43b1b1e4d.jpg"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning ??? a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="jacket">
                        <div class="blog-entry" id="jacket">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Jacket</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="#" data-fancybox>
                                    <img src="https://media.wired.com/photos/606ce52941bf976945513469/191:100/w_2086,h_1092,c_limit/Gear-Cloudburst-Jacket---Mandarin-Front-square-grey-back.jpg"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning ??? a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="t-shirt">
                        <div class="blog-entry" id="t-shirt">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">T-shirt</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="https://images.prismic.io/rushordertees-web/c46d32cd-469a-49a9-b175-7362171d29a7_Custom+Short+Sleeve+T-Shirt.jpg?auto=format%2Ccompressu0026rect=0%2C0%2C800%2C900u0026w=800u0026h=900u0026fit=maxu0026q=50"
                                    data-fancybox>
                                    <img src="https://images.prismic.io/rushordertees-web/c46d32cd-469a-49a9-b175-7362171d29a7_Custom+Short+Sleeve+T-Shirt.jpg?auto=format%2Ccompressu0026rect=0%2C0%2C800%2C900u0026w=800u0026h=900u0026fit=maxu0026q=50"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning ??? a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mt-5">
                <section>
                    <div class="sidebar sidebar-blog">

                        <div class="widget widget-categories">
                            <div class="widget--title">
                                <h5>Daftar Layanan Full Order</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#jersey">Jersey</a>
                                    </li>
                                    <li>
                                        <a href="#kemeja">Kemeja</a>
                                    </li>
                                    <li>
                                        <a href="#jacket">Jacket</a>
                                    </li>
                                    <li>
                                        <a href="#t-shirt">T-shirt</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-tags pb-30">
                            <div class="widget--title">
                                <h5>Daftar Layanan Lainya</h5>
                            </div>
                            <div class="widget--content">
                                <a href="{{ url('layanan/full-order') }}">Full Order</a>
<a href="{{ url('layanan/makloon-sublime') }}">Makloon Sublime</a>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</section> --}}
@endsection
