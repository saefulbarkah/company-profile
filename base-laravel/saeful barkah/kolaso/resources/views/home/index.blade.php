@extends('layouts.master')

@section('title','Genetic | Beranda')
@section('content')
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
                    <h2 class="heading--title">PROSES</h2>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/meeting.png') }}" class="img-fluid" width="50px" alt="">
                    </div>
                    <div class="feature--content">
                        <h4>1. Negosiasi Produk</h4>
                        <p>Diskusi desain serta pembuatan mock-up design produk yang akan dibuat. Diskusi kesepakatan
                            harga dan waktu dari desain yang akan dibuat.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/dp.png') }}" class="img-fluid" width="50px" alt="">
                    </div>
                    <div class="feature--content">
                        <h4>2. Down Payment (DP)</h4>
                        <p>Pembayaran uang muka (down payment) untuk produksi sebesar minimal 50% dari total harga.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/production.png') }}" class="img-fluid" width="50px"
                            alt="">
                    </div>
                    <div class="feature--content">
                        <h4>3. Produksi</h4>
                        <p>Pembuatan produk sesuai dengan kesepakatan, dimana setiap prosesnya bisa di lihat secara
                            transparan di Genetic Wear Integrated Sistem.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="feature-panel">
                    <div class="feature--icon">
                        <img src="{{ asset('assets/images/icon/payment.png') }}" class="img-fluid" width="50px" alt="">
                    </div>
                    <div class="feature--content">
                        <h4>4. Repayment (RP)</h4>
                        <p>Setelah produk 100% selesai dan foto produk telah dikirim, Pelunasan dilakukan agar barnag
                            bisa dikirim ke tempat tujuan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
