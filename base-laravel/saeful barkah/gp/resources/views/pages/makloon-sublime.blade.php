@extends('layouts.master')


@section('page-title', 'Layanan')
@section('page-subtitle', 'Makloon sublime')
@section('title', 'Genetic | layanan makloon sublime')
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
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Jasa & Layanan</h2>
            <p>Makloon</p>
        </div>
        <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('assets/img/services/sublim-print.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Sublime printing</h3>
                <p>
                    Sublime printing merupakan salah satu alternatif teknik mencetak yang menggunakan
                    kertas
                    sebagai media perantara tinta dan media cetak (seperti kaos dan jacket).
                    Uniknya, sublime printing menggunakan proses perubahan wujud zat tinta dari padat ke gas
                    atau sebaliknya tanpa perlu menjadi cairan seperti sablon. Genetic Wear dengan
                    pengalaman cetak sublime selama bertahun-tahun, kami menjanjikan warna serta
                    gambar desain yang sesuai oleh
                    keinginan pelanggan.
                </p>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->

<!-- ======= Features Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="image col-lg-6" data-aos="fade-right">
                <img src="{{ asset('assets/img/services/sublime-press.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                <h3>Sublime press - heat transfer</h3>
                <p>Sublime press heat trasnfer merupakan mesin panas untuk memindahkan grafis dari
                    kertas transfer ke bahan tekstil dengan metode pemanasan dan penekanan
                    (pressing)</p>
            </div>
        </div>

    </div>
</section>
<!-- End Features Section -->

@endsection
