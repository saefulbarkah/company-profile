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
            height: 16vw;
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
            height: 18vw;
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
                        <h1 class="display-4 font-weight-bold">Layanan full order</h1>
                        <p>Kami ingin berbicara tentang bagaimana kami dapat membantu Anda.</p>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Jasa & Layanan</h2>
            <p>Makloon</p>
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Sublime Printing</h3>
                <p>
                    Sublime Printing merupakan salah satu alternatif teknik mencetak yang menggunakan
                    kertas
                    sebagai medium perantara tinta dan media cetak (seperti kaos dan jacket).
                    Uniknya, sublim menggunakan proses perubahan wujud zat tinta dari padat ke gas
                    atau sebaliknya tanpa perlu menjadi cairan seperti sablon. Genetic Wear dengan
                    pengalaman cetak sublim selama bertahun-tahun, kami menjanjikan warna serta
                    gambar desain yang sesuai oleh
                    keinginan pelanggan.
                </p>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="about" class="section-makloon">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="image col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/images/services/sublime-press.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Sublime Press - Heat Transfer</h3>
                <p>Sublime Press Heat trasnfer merupakan mesin panas untuk memindahkan grafis dari
                    kertas transfer ke bahan tekstil dengan metode pemanasan dan penekanan
                    (pressing)</p>
            </div>
        </div>

    </div>
</section>
<!-- End Features Section -->

@endsection
