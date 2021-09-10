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
        font-size: 20px;
        color: #ffffff;
        margin: 0 0 10px;
        text-transform: capitalize;
        font-weight: 500;
    }

    .timeline-content p {
        color: #c8c8c8;
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
<section id="slider1" class="slider slider-1 text-center">
    <div class="container-fluid pr-0 pl-0">
        <div class="bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="{{ asset('assets/images/background/bg-website.jpg') }}" alt="Background" />
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="slider-content">
                        <h1 class="slider--headline">Genetic Wear<br></h1>
                        <p class="slider--desc">konveksi & sablon</p>
                        <a class="btn btn--white" href="{{ url('about') }}">Tentang kami</a>
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
                        <h3>Desain Produk</h3>
                        <p>memilih jenis produk dan menentukan ukuran,warna,jumlah dan lainya, dan Diskusi tentang
                            desain serta pembuatan mock-up desain produk yang akan di buat</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">2</div>
                    <div class="timeline-content" data-aos="fade-left">
                        <h3>Negosiasi Produk</h3>
                        <p>Diskusi kesepakatan harga dan waktu dari desain yang akan dibuat.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">3</div>
                    <div class="timeline-content" data-aos="fade-right">
                        <h3>Down Payment (DP)</h3>
                        <p>Pembayaran uang muka (down payment) untuk produksi sebesar minimal 50% dari total harga. </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">4</div>
                    <div class="timeline-content" data-aos="fade-left">
                        <h3>Produksi</h3>
                        <p>Pembuatan produk sesuai dengan kesepakatan, dimana setiap prosesnya bisa di lihat secara
                            transparan di Genetic Wear Integrated Sistem.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">5</div>
                    <div class="timeline-content" data-aos="fade-right">
                        <h3>Pelunasan Invoice</h3>
                        <p>Setelah produk 100% selesai dan foto produk telah dikirim, Pelunasan dilakukan agar barang
                            bisa dikirim ke tempat tujuan.</p>
                    </div>
                </div>
            </div>
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
