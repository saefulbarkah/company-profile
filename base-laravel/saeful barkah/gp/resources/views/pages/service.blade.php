@extends('layouts.master')

@section('title', 'Genetic | Layanan')
@section('content')

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
            <p>Layanan</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-shopping-cart"></i></div>
                    <h4><a href="{{ url('service/full-order') }}">Full Order</a></h4>
                    <p>Full order merupakan layanan produk berupa pembelian penuh dengan kelengkapan yang sesuai layanan</p>
                    <div class="mt-4">
                        <a href="{{ url('service/full-order') }}" class="btn btn-dark text-warning">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="fas fa-print"></i></div>
                    <h4><a href="{{ url('service/makloon-sublime') }}">Makloon Sublime</a></h4>
                    <p>Makloon sublime merupakan layanan jasa yang menyediakan layanan berupa printing & press heat transfer</p>
                    <div class="mt-4">
                        <a href="{{ url('service/makloon-sublime') }}" class="btn btn-dark text-warning">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Services Section -->

@endsection
