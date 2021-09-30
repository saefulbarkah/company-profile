@extends('layouts.master')

@section('title', 'Genetic | Layanan Full Order')
@section('content')
@push('styles')
<style>
    /* Equal-height card images, cf. https://stackoverflow.com/a/47698201/1375163*/
    .card-img-top {
        /*height: 11vw;*/
        object-fit: cover;
    }

    /* Small devices (landscape phones, 576px and up) */
    @media (min-width: 576px) {
        .card-img-top {
            height: 19vw;
        }
    }

    /* Medium devices (tablets, 768px and up) */
    @media (min-width: 768px) {
        .card-img-top {
            height: 50vw;
        }
    }

    /* Large devices (desktops, 992px and up) */
    @media (min-width: 992px) {
        .card-img-top {
            height: 11vw;
        }
    }

    /* Extra large devices (large desktops, 1200px and up) */
    @media (min-width: 992px) {
        .card-img-top {
            height: 20vw;
        }
    }
</style>

@endpush
@include('layouts.navbar')
   <!-- HERO
    ================================================== -->
    <section class="page-banner-area page-service">
        <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-12 text-center">
                    <div class="page-banner-content">
                        <h1 class="display-4 font-weight-bold">Konveksi & Sablon</h1>
                        <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
            <p>Daftar produk</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/futsal.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"> Jersey futsal</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/gaming.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey gaming</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/mancing.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey mancing</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/sepeda.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey sepeda</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/basket.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jersey basket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/jaket.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Jaket</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/kemeja.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kemeja</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
                <div class="card" style="width: auto;">
                    <img src="{{ asset('assets/images/services/kaos.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kaos</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
