@extends('layouts.master')
@section('title', 'Genetic Wear')
@section('content')

<!--
==================================================
Slider Section Start
================================================== -->
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
                        Berpengalaman sejak tahun 2008 hingga sekarang, kami berkomitmen untuk<br> memberikan
                        layanan terbaik dan terpercaya.
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
                        Tidak hanya bergerak di bidang pembuatan jersey dan sebagainya kami juga memiliki layanan
                        berupa jasa untuk mencetak gambar anda dengan menggunakan sublime printing atau kami dapat
                        menempelkan hasil printing yg sudah anda buat dengan menggunakan sublime press/heat transfer
                        kedalam produk berbahan kain yang anda inginkan...
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

<section id="proses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <h2 class="title-timeline text-center">Proses kerja kami</h2>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h3 class="title">Memilih produk</h3>
                            <p class="description">
                                Pembeli memilih pruduk dan menentukan jenis produk yang ingin di pesan beserta
                                keterangan jumlah, ukuran, warna dan sebagainya.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h3 class="title">Negosiasi harga produk</h3>
                            <p class="description">
                                Melakukan negosiasi harga produk terlebih dahulu untuk mengetahui kebutuhan pembeli dan
                                kesepakatan harga.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h3 class="title">Down payment(DP) minimal 50%</h3>
                            <p class="description">
                                Setelah pembeli telah menentukan jenis barang dan negosiasi harga produk kemudian
                                memberikan down payment atau DP sebesar 50%.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h3 class="title">Produksi</h3>
                            <p class="description">
                                Pihak penjual akan mulai memproduksi produk sesuai kesepakatan.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h3 class="title">Pembayaran sisa invoice</h3>
                            <p class="description">
                                Setelah barang selesai di produksi pembeli melakukan pembayaran sisa invoice
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-icon">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                            <h3 class="title">Pengambilan</h3>
                            <p class="description">
                                Setelah selesai melakukan pembayaran sisa invoice, barang dapat di ambil oleh pembeli
                                atau dapat di kirim oleh pihak penjual.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
