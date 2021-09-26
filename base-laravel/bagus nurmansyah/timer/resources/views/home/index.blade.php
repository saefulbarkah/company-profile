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
                                <b class="is-visible">jersey</b>
                                <b>Baju</b>
                                <b>kemeja</b>
                                <b>jaket</b>
                            </span>
                        </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s">
                       Berpengalaman sejak tahun 2008 hingga sekarang, kami berkomitmen untuk<br> memberikan layanan terbaik dan terpercaya.
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
                        Lebih dari sekedar membuat sebuah produk...
                    </h2>
                    <p>
                        Tidak hanya bergerak di bidang pembuatan jersey dan sebagainya kami juga memiliki layanan berupa jasa untuk mencetak gambar anda dengan menggunakan sublime printing atau kami dapat menempelkan hasil printing yg sudah anda buat dengan menggunakan sublime press/heat transfer kedalam produk berbahan kain yang anda inginkan...
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

@endsection
