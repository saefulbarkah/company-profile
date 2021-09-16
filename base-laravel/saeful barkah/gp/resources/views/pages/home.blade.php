@extends('layouts.master')
@push('proses-css')
<link rel="stylesheet" href="{{ asset('assets/custom/time-line.css') }}">
@endpush

@section('title', 'Genetic | Beranda')
@section('content')
<!-- ======= Features Section ======= -->
<section class="Proses">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Proses</h2>
            <p>Prosedur Pemesanan</p>
        </div>
        <div class="row mt-4">
            <ul class="timeline">

                {{-- 1 --}}
                <li class="tml-1">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" width="300px"
                            src="{{  asset('assets/img/time-line/design.png') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading">Desain Produk</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">memilih jenis produk dan menentukan ukuran,warna,jumlah dan lainya, dan
                                    Diskusi tentang
                                    desain serta pembuatan mock-up desain produk yang akan di buat</p>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- 2 --}}
                <li class="timeline-inverted tml-2">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{  asset('assets/img/time-line/negosiasi.png') }}"
                            alt="..." />
                    </div>
                    <div class="timeline-panel" data-aos="fade-left">
                        <div class="timeline-heading">
                            <h4 class="subheading">Negosiasi Produk</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Diskusi kesepakatan harga dan waktu dari desain yang akan dibuat.</p>
                        </div>
                    </div>
                </li>

                {{-- 3 --}}
                <li class="tml-3">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" width="500px"
                            src="{{  asset('assets/img/time-line/50.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading"> Down Payment</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">Pembayaran uang muka (down payment) untuk produksi sebesar minimal 50% dari
                                    total harga.</p>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- 4 --}}
                <li class="timeline-inverted tml-4">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/4.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel" data-aos="fade-left">
                        <div class="timeline-heading">
                            <h4 class="subheading">Produksi</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Pembuatan produk sesuai dengan kesepakatan, dimana setiap prosesnya
                                bisa di lihat secara
                                transparan di Genetic Wear Integrated Sistem.</p>
                        </div>
                    </div>
                </li>

                {{-- 5 --}}
                <li class="tml-3">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/payment.png') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading">Pelunasan invoice</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">Setelah produk 100% selesai dan foto produk telah dikirim, Pelunasan
                                    dilakukan agar barnag
                                    bisa dikirim ke tempat tujuan</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Features Section -->
@endsection
