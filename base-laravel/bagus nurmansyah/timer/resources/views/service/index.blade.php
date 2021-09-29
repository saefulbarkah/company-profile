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
                            <h2>Layanan</h2>
                            <ol class="breadcrumb list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="{{ url('/') }}">
                                        <i class="ion-ios-home"></i>
                                        Beranda  &nbsp; &nbsp;/
                                    </a>
                                </li>
                                <li class="active list-inline-item">Layanan</li>
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
                <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Apa yang Dapat Kami Lakukan</h2>
                <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">Kami dapat memberikan anda penawaran berupa beberapa produk dan layanan</p>
        </div>
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="block">
                    <div class="row service-parts">
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>Design</h4>
                                <p>Kami dapat mendesignkan gambar sesuai keinginan anda atau anda dapat memberikan hasil design anda kepada kami.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="800ms">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>Makloon Sublime Printing</h4>
                                <p>Layanan sublime print berupa printing atau mentrasfer dari sebuah gambar di foto menjadi gambar di sebuah bahan kertas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>Makloon sublime press</h4>
                                <p>Layanan sublime press berupa heat transfer atau mentransfer gambar yang berada di kertas ke sebuah produk berbahan kain dengan menggunakan uap panas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="1.1s">
                                <i class="ion-ios-paper-outline"></i>
                                <h4>penjahitan</h4>
                                <p>Layanan berupa menjahit merupakan sebuah layanan untuk menjahit produk yang telah di pesan seperti bahan yang telah di sablon atau belum.</p>
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

{{-- feature --}}
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Produk dan Layanan kami</h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="media-left">
                        <div class="icon">
                            <div class="icon"><img src="{{ asset('assets/icon/hoodie.png') }}" alt="" class="img-fluid"
                                width="40px"></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Jersey</h4>
                        <p>Jersey merupakan produk kami berupa jersey yang di sablon.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="media-left">
                        <div class="icon">
                            <div class="icon"><img src="{{ asset('assets/icon/baju.png') }}" alt="" class="img-fluid"
                                width="40px"></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Baju sablon</h4>
                        <p>Baju Sablon merupakan produk kami berupa baju yang di sablon</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="media-left">
                        <div class="icon"><img src="{{ asset('assets/icon/kemeja.png') }}" alt="" class="img-fluid"
                            width="40px"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Kemeja</h4>
                        <p>Kemeja meupakan produk kami berupa kemeja polos atau bermotif.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="media-left">
                        <div class="icon">
                            <img src="{{ asset('assets/icon/jaket.png') }}" alt="" class="img-fluid" width="40px">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Jaket</h4>
                        <p>Jaket meupakan produk kami berupa kemeja polos atau bermotif.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1500ms">
                    <div class="media-left">
                        <div class="icon">
                            <img src="{{ asset('assets/icon/print.png') }}"
                            alt="" class="img-fluid" width="35px"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Makloon Sublime Print</h4>
                        <p>Makloon sublime printing merupakan layanan kami berupa printing dari hasil design.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1800ms">
                    <div class="media-left">
                        <div class="icon"><img src="{{ asset('assets/icon/press.png') }}" alt="" class="img-fluid"
                            width="35px"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Makloon sublime press</h4>
                        <p>Makloon sublime press merupakan layanan kami berupa heat transfer/press dari hasil printing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#feature -->

<!--
==================================================
    Works Section Start
================================================== -->
<section class="works service-page">
    <div class="container">
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms">Beberapa hasil kerja kami</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <img src="{{ asset('assets/images/portfolio/item-1.jpg')}}" class="img-fluid" alt="this is a title">
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="{{ asset('assets/images/portfolio/item-1.jpg')}}">Demo</a>
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Baju sablon
                            </a>
                        </h4>
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
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Kemeja casual
                            </a>
                        </h4>
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
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Jersey Futsal
                            </a>
                        </h4>
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
                                <a target="_blank" href="{{ url('portfolio') }}">rincian</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="#">
                                Kemeja Bola
                            </a>
                        </h4>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

</section>
@endsection
