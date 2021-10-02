@extends('layouts.master')

@section('title','Genetic | Beranda')
@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}" />
<style>
    .timeline-items {
        max-width: 1000px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        position: relative;
    }

    .timeline-items::before {
        content: '';
        position: absolute;
        width: 2px;
        height: 100%;
        background-color: #2f363e;
        left: calc(50% - 1px);
    }

    .timeline-item {
        margin-bottom: 40px;
        width: 100%;
        position: relative;
    }

    .timeline-item:last-child {
        margin-bottom: 0;
    }

    .timeline-item:nth-child(odd) {
        padding-right: calc(50% + 30px);
        text-align: right;
    }

    .timeline-item:nth-child(even) {
        padding-left: calc(50% + 30px);
    }

    .timeline-dot {
        height: 16px;
        width: 16px;
        background-color: #5156ea;
        position: absolute;
        left: calc(50% - 8px);
        border-radius: 50%;
        top: 10px;
    }

    .timeline-date {
        font-size: 18px;
        color: #5156ea;
        margin: 6px 0 15px;
    }

    .timeline-content {
        background-color: #2f363e;
        padding: 30px;
        border-radius: 5px;
    }

    .timeline-content h3 {
        font-size: 22px;
        color: #f7f7f7;
        margin: 0 0 10px;
        text-transform: capitalize;
        font-weight: 500;
    }

    .timeline-content p {
        color: #e2e2e2;
        font-size: 16px;
        font-weight: 300;
        line-height: 22px;
    }

    /* responsive */
    @media(max-width: 767px) {
        .timeline-items::before {
            left: 7px;
        }

        .timeline-item:nth-child(odd) {
            padding-right: 0;
            text-align: left;
        }

        .timeline-item:nth-child(odd),
        .timeline-item:nth-child(even) {
            padding-left: 37px;
        }

        .timeline-dot {
            left: 0;
        }
    }
</style>
@endpush
<section id="slider1" class="slider slider-1 d-flex align-items-center justify-content-center">
    <div class="container-fluid pr-0 pl-0">
        <div class="bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="{{ asset('assets/images/background/bg-home.jpg') }}" alt="Background" />
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="slider-content">
                        <h1 class="slider--headline">Genetic <span class="text-lowercase">wear</span><br></h1>
                        <p class="slider--desc">konveksi & sablon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="features4" class="features features-4 pt-130 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="mockup--img" data-aos="fade-right">
                    <img src="{{ asset('assets/images/background/bg-welcome.png') }}" alt="mockup" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row" data-aos="fade-left">
                    <div class="col-col-sm-12 col-md-12 col-lg-12">
                        <div class="heading mb-60 mt-15">
                            <!-- <p class="heading--subtitle">Selamat Datang di</p> -->
                            <h2 class="heading--title">Selamat datang di<br>Genetic wear, kami menyediakan
                                layanan berupa konveksi & sablon
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <i class="kolaso-Cart"></i>
                            </div>
                            <div class="feature--content">
                                <h4>Full order</h4>
                                <p>anda juga bisa melakukan pemesanan secara penuh dengan kelengkapan yang sesuai
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="feature-panel">
                            <div class="feature--icon">
                                <i class="kolaso-Printer"></i>
                            </div>
                            <div class="feature--content">
                                <h4>Makloon sublime</h4>
                                <p>kami menyediakan jasa berupa makloon sublime print & sublime press heat - transfer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features1" class="features features-1 pt-130 pb-110">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 text--center mb-60">
                    <h2 class="heading--title">Prosedur Pemesanan</h2>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="timeline-items">
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">1</div>
                    <div class="timeline-content" data-aos="fade-right">
                        <h3 class="text-uppercase">Desain Produk</h3>
                        <p>Memilih jenis produk dan menentukan ukuran, warna, jumlah dan lainya lalu Diskusi tentang
                            desain serta pembuatan mock-up desain produk yang akan di buat</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2</div>
                    <div class="timeline-content" data-aos="fade-left">
                        <h3 class="text-uppercase">Negosiasi Produk</h3>
                        <p>Diskusi kesepakatan harga dan waktu dari desain yang akan dibuat.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">3</div>
                    <div class="timeline-content" data-aos="fade-right">
                        <h3 class="text-uppercase">uang muka</h3>
                        <p>Pembayaran uang muka untuk produksi sebesar minimal 50% dari total harga. </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">4</div>
                    <div class="timeline-content" data-aos="fade-left">
                        <h3 class="text-uppercase">Produksi</h3>
                        <p>Pembuatan produk sesuai dengan kesepakatan yang dimana setiap prosesnya bisa di lihat secara
                            transparan di Genetic wear terintegrasi dengan sistem.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">5</div>
                    <div class="timeline-content" data-aos="fade-right">
                        <h3 class="text-uppercase">Pelunasan pembayaran</h3>
                        <p>Setelah produk 100% selesai dan foto produk telah dikirim, pelunasan dilakukan agar barang
                            bisa dikirim ke tempat tujuan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="faq pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 bg-gray col-content">
                <div class="heading heading-2 mb-50">
                    <p class="heading--subtitle">Pertanyaan</p>
                    <h2 class="heading--title">yang sering di tanyakan</h2>
                </div>
                <div class="accordion accordion-1" id="accordion01">

                    <div class="card">
                        <div class="card-heading">
                            <a class="card-link collapsed text-lowercase" data-toggle="collapse"
                                data-parent="#accordion01" href="#collapse01-1">Apakah bisa dibuatkan desain produk
                                ?</a>
                        </div>
                        <div id="collapse01-1" class="collapse" data-parent="#accordion01">
                            <div class="card-body">Anda dapat meminta bantuan untuk pembuatan desain produk dengan
                                memberikan referensi produk atau contoh produk, dan detail produk yang dibutuhkan
                                termasuk <b>logo</b> , <b>tulisan</b> , dan <b>font tulisan</b>.</div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-heading">
                            <a class="card-link collapsed text-lowercase" data-toggle="collapse"
                                data-parent="#accordion01" href="#collapse01-2">Produk apa saja yang tersedia di genetic
                                wear ?</a>
                        </div>
                        <div id="collapse01-2" class="collapse" data-parent="#accordion01">
                            <div class="card-body">Kami menyediakan pembuatan <b>baju , jersey, kemeja dan jacket </b>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-heading">
                            <a class="card-link collapsed text-lowercase" data-toggle="collapse"
                                data-parent="#accordion01" href="#collapse01-3">Genetic Wear lokasinya dimana ?</a>
                        </div>
                        <div id="collapse01-3" class="collapse" data-parent="#accordion01">
                            <div class="card-body">Genetic Wear berlokasi di <b>Bandung</b> , untuk alamat Lengkapnya di
                                <b>
                                    Jl.
                                    Katapang Andir No.503, Sangkanhurip, Kec. Katapang, Bandung, Jawa Barat 40921
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-heading">
                            <a class="card-link collapsed text-lowercase" data-toggle="collapse"
                                data-parent="#accordion01" href="#collapse01-4">Berapa Lama waktu pengerjaan ?</a>
                        </div>
                        <div id="collapse01-4" class="collapse" data-parent="#accordion01">
                            <div class="card-body">Waktu pengerjaan produksi sekitar <b>1</b> sampai <b>2 minggu</b>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <div class="col-sm-12 col-md-6 col-lg-5 pr-0 pl-0">
                <div class="banner--img">
                    <img src="{{ asset('assets/images/background/banners.png') }}" class="img-fluid" width="500px"
            alt="banner">
        </div>
    </div> --}}
    </div>
    </div>
</section>


@push('scripts')
<script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>
<script>
    AOS.init({
        duration: 1000, // values from 0 to 3000, with step 50ms
        delay: 200,
        disable: window.innerWidth < 720,
        disable: 'mobile',
        disable: function () {
        var maxWidth = 1024;
        return window.innerWidth < maxWidth;
  }
    });

</script>

@endpush
@endsection
