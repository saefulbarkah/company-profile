@extends('layouts.master')
@push('proses-css')
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
</style>
@endpush

@section('title', 'Genetic | Beranda')
@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('assets/img/background/bg-welcome.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Selamat Datang di Genetic Wear</h3>
                <p class="fst-italic">
                    Kami menyediakan sebuah jasa atau layanan Konveksi dan Sablon. Kami menerima pembuatan :
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> jersey</li>
                    <li><i class="ri-check-double-line"></i> Baju</li>
                    <li><i class="ri-check-double-line"></i> Kemeja</li>
                    <li><i class="ri-check-double-line"></i> Jacket</li>
                    <p>
                        Genetic Wear juga menyediakan sebuah jasa Makloon Sublime Berupa Printing dan Press heat -
                        transfer
                    </p>
                </ul>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->


<!-- ======= Features Section ======= -->
<section class="Proses">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Proses</h2>
            <p>Prosedur Pemesanan</p>
        </div>
        <div class="row mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="timeline-year">1</span>
                                    <h3 class="title">Desain Produk</h3>
                                    <p class="description">
                                        memilih jenis produk dan menentukan ukuran,warna,jumlah dan lainya, dan Diskusi
                                        tentang desain serta pembuatan mock-up desain produk yang akan di buat
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="timeline-year">2</span>
                                    <h3 class="title">Negosiasi Produk</h3>
                                    <p class="description">
                                        Diskusi kesepakatan harga dan waktu dari desain yang akan dibuat.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="timeline-year">3</span>
                                    <h3 class="title">Down Payment</h3>
                                    <p class="description">
                                        Pembayaran uang muka (down payment) untuk produksi sebesar minimal 50% dari
                                        total harga.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="timeline-year">4</span>
                                    <h3 class="title">Produksi</h3>
                                    <p class="description">
                                        Pembuatan produk sesuai dengan kesepakatan, dimana setiap prosesnya bisa di
                                        lihat secara transparan di Genetic Wear Integrated Sistem.
                                    </p>
                                </a>
                            </div>
                            <div class="timeline">
                                <a href="#" class="timeline-content">
                                    <span class="timeline-year">5</span>
                                    <h3 class="title">Pelunasan pembayaran</h3>
                                    <p class="description">
                                        Setelah produk 100% selesai dan foto produk telah dikirim, Pelunasan dilakukan
                                        agar barnag bisa dikirim ke tempat tujuan
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

<!-- ======= About Section ======= -->
<section id="faq" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Pertanyaan</h2>
            <p>Yang Sering Di Tanyakan</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Apakah bisa di buatkan desain produk ?
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Anda dapat meminta bantuan untuk pembuatan desain produk
                                        dengan
                                        memberikan referensi produk atau contoh produk, dan detail produk yang
                                        dibutuhkan
                                        termasuk logo, tulisan, dan font tulisan
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        Genetic Wear Lokasi nya dimana ?
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Genetic Wear Berlokasi di Bandung, untuk alamat lengkapnya di Jl. Katapang Andir
                                        No.503, Sangkanhurip, Kec. Katapang, Bandung, Jawa Barat 40921
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        Produk apa saja yang tersedia ?
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree">
                                    <div class="accordion-body">
                                        Genetic Wear menyediakan Produk untuk pembuatan baju, Jersey, Jacket dan kemeja
                                    </div>
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
