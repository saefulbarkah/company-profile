@extends('layouts.master')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/custom/time-line.css') }}">

<style>
    .main-timeline {
        font-family: 'Poppins', sans-serif;
        position: relative;
    }

    .main-timeline:after {
        content: '';
        display: block;
        clear: both;
    }

    .main-timeline .timeline {
        width: 50%;
        margin: 0 0 20px 20px;
        float: right;
    }

    .main-timeline .timeline-content {
        color: #fff;
        background: linear-gradient(to right, #eb273e, #bf0f23);
        text-align: center;
        padding: 20px 20px 20px 100px;
        border-radius: 0 20px 20px 0;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        display: block;
        position: relative;
    }

    .main-timeline .timeline-content:hover {
        text-decoration: none;
    }

    .main-timeline .timeline-year {
        color: #eb273e;
        background-color: #fff;
        font-size: 35px;
        font-weight: 600;
        text-align: center;
        line-height: 130px;
        width: 130px;
        height: 100%;
        border-radius: 98px 0 0 10px;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.3);
        position: absolute;
        left: -130px;
        top: 0;
    }

    .main-timeline .timeline-icon {
        color: #fff;
        font-size: 50px;
        transform: translateY(-50%);
        position: absolute;
        left: 30px;
        top: 50%;
    }

    .main-timeline .title {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 0 5px;
    }

    .main-timeline .description {
        font-size: 13px;
        letter-spacing: 1px;
        margin: 0;
    }

    .main-timeline .timeline:nth-child(even) {
        float: left;
        margin: 0 20px 20px 0;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content {
        padding: 20px 100px 20px 20px;
        border-radius: 20px 0 0 20px;
    }

    .main-timeline .timeline:nth-child(even) .timeline-content:before {
        right: auto;
        left: 0;
        clip-path: polygon(0 0, 100% 100%, 65% 0);
    }

    .main-timeline .timeline:nth-child(even) .timeline-year {
        left: auto;
        right: -130px;
        border-radius: 0 98px 10px 0;
    }

    .main-timeline .timeline:nth-child(even) .timeline-icon {
        right: 30px;
        left: auto;
    }

    .main-timeline .timeline:nth-child(4n+2) .timeline-content {
        background: linear-gradient(to right, #db3d08, #ee5a24);
    }

    .main-timeline .timeline:nth-child(4n+2) .timeline-year {
        color: #ee5a24;
    }

    .main-timeline .timeline:nth-child(4n+3) .timeline-content {
        background: linear-gradient(to right, #009432, #037529);
    }

    .main-timeline .timeline:nth-child(4n+3) .timeline-year {
        color: #009432;
    }

    .main-timeline .timeline:nth-child(4n+4) .timeline-content {
        background: linear-gradient(to right, #9909f8, #510086);
    }

    .main-timeline .timeline:nth-child(4n+5) .timeline-year {
        color: #2904fc;
    }

    .main-timeline .timeline:nth-child(4n+5) .timeline-content {
        background: linear-gradient(to right, #2904fc, #2f94f8);
    }

    .main-timeline .timeline:nth-child(4n+4) .timeline-year {
        color: #2e86de;
    }

    @media screen and (max-width:767px) {
        .main-timeline .timeline {
            width: 100%;
            padding: 50px 0 0 0;
        }

        .main-timeline .timeline .timeline-content,
        .main-timeline .timeline:nth-child(even) .timeline-content {
            padding: 20px 15px 20px 60px;
            border-radius: 0 20px 20px 20px;
        }

        .main-timeline .timeline .timeline-year,
        .main-timeline .timeline:nth-child(even) .timeline-year {
            font-size: 25px;
            border-radius: 15px 15px 0 0;
            box-shadow: none;
            width: 100px;
            height: 50px;
            line-height: 50px;
            top: -50px;
            left: 0;
        }

        .main-timeline .timeline .timeline-icon,
        .main-timeline .timeline:nth-child(even) .timeline-icon {
            font-size: 28px;
            left: 15px;
            right: auto;
        }
    }

    @media screen and (max-width:576px) {
        .main-timeline .title {
            font-size: 18px;
        }

    }

    .accordion-button:not(.collapsed) {
        background-color: #ffc451 !important;
        color: black !important;
        box-shadow: none !important;
    }

    .accordion-button:focus {
        border-color: transparent !important;
        box-shadow: none !important;
    }

    h2 .accordion-header {
        font-weight: bold;
    }

    .accordion-body {
        text-align: justify;
    }
</style>
@endpush

@section('page-title', 'Genetic wear')
@section('page-subtitle', 'konveksi & sablon')
@section('title', 'Genetic | Beranda')
@section('content')

<!-- ======= About Section ======= -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('assets/img/background/bg-welcome.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Selamat datang di Genetic wear</h3>
                <p>
                    Kami berpengalaman sejak tahun 2008 hingga sekarang, kami berkomitmen untuk
                    memberikan layanan terbaik dan terpercaya. Kami menerima pembuatan produk diantaranya :
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Jersey</li>
                    <li><i class="ri-check-double-line"></i> Kemeja</li>
                    <li><i class="ri-check-double-line"></i> Kaos</li>
                    <li><i class="ri-check-double-line"></i> Jaket</li>
                    <p>
                        Kami juga memiliki jasa berupa makloon sublime printing dan sublime press heat transfer, tenang
                        kualitas akan selalu terjaga oleh kami.
                    </p>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<!-- ======= Features Section ======= -->
<section class="service mt-3" id="service">
    <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
            <p>Prosedur Pemesanan</p>
        </div>
        <div class="row mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a class="timeline-content">
                                    <span class="timeline-year">1</span>
                                    <h3 class="title">Desain Produk</h3>
                                    <p class="description">
                                        memilih jenis produk dan menentukan ukuran, warna, jumlah dan lainya lalu
                                        diskusi
                                        tentang desain pembuatan mock-up produk yang akan di buat
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a class="timeline-content">
                                    <span class="timeline-year">2</span>
                                    <h3 class="title">Negosiasi Produk</h3>
                                    <p class="description">
                                        Diskusi kesepakatan harga dan waktu dari desain yang akan dibuat.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a class="timeline-content">
                                    <span class="timeline-year">3</span>
                                    <h3 class="title">Uang muka</h3>
                                    <p class="description">
                                        Pembayaran uang muka untuk produksi sebesar minimal 50% dari
                                        total harga.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a class="timeline-content">
                                    <span class="timeline-year">4</span>
                                    <h3 class="title">Produksi</h3>
                                    <p class="description">
                                        Pembuatan produk sesuai dengan kesepakatan, dimana setiap prosesnya bisa di
                                        lihat secara transparan di genetic wear terintegrasi dengan sistem.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a class="timeline-content">
                                    <span class="timeline-year">5</span>
                                    <h3 class="title">Pelunasan pembayaran</h3>
                                    <p class="description">
                                        Setelah produk 100% selesai dan foto produk telah dikirim, pelunasan dilakukan
                                        agar barang bisa dikirim ke tempat tujuan
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Features Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>HUBUNGI KAMI BILA ANDA TERTARIK</h3>
            <p style="text-align: center">Jika anda tertarik atau berminat memesan produk dan layanan kami anda dapat
                menghubungi kami dengan menekan tombol di bawah. <br>Terima Kasih...</p>
            <a class="cta-btn" href="{{ url('kontak') }}">Hubungi</a>
        </div>

    </div>
</section><!-- End Cta Section -->

<!-- ======= About Section ======= -->
<section id="faq" class="about mt-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Pertanyaan</h2>
            <p>Yang Sering Di Tanyakan</p>
        </div>
        <div class="row">
            <div class="accordion" id="accordionExample">
                <div class="col-lg-12-mt-4">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Apakah bisa dibuatkan desain produk ?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Anda dapat meminta bantuan untuk pembuatan desain produk dengan memberikan referensi
                                produk atau contoh produk dan detail produk yang dibutuhkan termasuk logo , tulisan ,
                                dan huruf tulisan.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Produk apa saja yang tersedia di genetic wear ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Kami menyediakan pembuatan baju diantaranya jersey, kemeja, kaos dan jaket
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Genetic wear lokasinya dimana ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Genetic wear berlokasi di Bandung, untuk alamat lengkapnya di Jl. Katapang Andir
                                    No.503, Sangkanhurip, Kec. Katapang, Bandung, Jawa Barat 40921
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Berapa lama waktu pengerjaanya ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Waktu pengerjaan produksi sekitar 1 sampai 2 minggu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- End About Section -->


@endsection
