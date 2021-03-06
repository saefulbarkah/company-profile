@extends('layouts.master')

@section('title','Genetic | Layanan')
@push('styles')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
@endpush
@section('content')
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Layanan - Makloon Sublime</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index-3.html">beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                        <li class="breadcrumb-item active" aria-current="page">Makloon Sublime</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="sublime-printing">
    <div class="container">
        <div class="row text-justify">
            <div class="col-md-6">
                <h4 class="text-capitalize">Sublime printing</h4>
                <p>Sublime printing merupakan salah satu alternatif teknik mencetak yang menggunakan
                    kertas
                    sebagai media perantara tinta dan media cetak seperti (kaos dan jaket).
                    uniknya, sublime menggunakan proses perubahan wujud zat tinta dari padat ke gas
                    atau sebaliknya tanpa perlu menjadi cairan seperti sablon. Genetic wear dengan
                    pengalaman cetak sublime selama bertahun-tahun, kami menjanjikan warna serta
                    gambar desain yang sesuai oleh
                    keinginan pelanggan.</p>
            </div>
            <div class="col-md-6">
                <a href="{{ asset('assets/images/services/sublim-print.jpg') }}" data-fancybox>
                    <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" class="img-fluid"
                        alt="entry image" />
                </a>
            </div>
        </div>
    </div>
</section>


<section id="sublime-press">
    <div class="container">
        <div class="row text-justify">
            <div class="col-md-6">
                <a href="{{ asset('assets/images/services/sublime-press.jpg') }}" data-fancybox>
                    <img src="{{ asset('assets/images/services/sublime-press.jpg') }}" class="img-fluid"
                        alt="entry image" />
                </a>
            </div>
            <div class="col-md-6">
                <h4 class="text-capitalize">Sublime press - heat transfer</h4>
                <p>Sublime press heat trasnfer merupakan mesin panas untuk memindahkan grafis dari
                    kertas transfer ke bahan tekstil dengan metode pemanasan dan penekanan
                    (pressing)</p>
            </div>
        </div>
    </div>
</section>


{{-- <section id="blog" class="blog blog-standard mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="blog-entry-wrap">

                    <section id="print">
                        <div class="blog-entry">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Sublime Printing</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="{{ asset('assets/images/services/sublim-print.jpg') }}" data-fancybox>
<img src="{{ asset('assets/images/services/sublim-print.jpg') }}" alt="entry image" />
</a>
</div>
<div class="entry--content">
    <div class="entry--bio">
        <p>Sublime Printing merupakan salah satu alternatif teknik mencetak yang menggunakan
            kertas
            sebagai medium perantara tinta dan media cetak (seperti kaos dan jacket).
            Uniknya, sublim menggunakan proses perubahan wujud zat tinta dari padat ke gas
            atau sebaliknya tanpa perlu menjadi cairan seperti sablon. Genetic Wear dengan
            pengalaman cetak sublim selama bertahun-tahun, kami menjanjikan warna serta
            gambar desain yang sesuai oleh
            keinginan pelanggan.</p>
    </div>
</div>
</div>
</section>

<section id="press">
    <div class="blog-entry">
        <div class="entry--meta-container">
            <div class="entry--title">
                <h4><a href="#">Sublime Press - Heat Transfer</a></h4>
            </div>
        </div>
        <div class="entry--img">
            <a href="{{ asset('assets/images/services/sublime-press.jpg') }}" data-fancybox>
                <img src="{{ asset('assets/images/services/sublime-press.jpg') }}" alt="entry image" />
            </a>
        </div>
        <div class="entry--content">
            <div class="entry--bio">
                <p>Sublime Press Heat trasnfer merupakan mesin panas untuk memindahkan grafis dari
                    kertas transfer ke bahan tekstil dengan metode pemanasan dan penekanan
                    (pressing)</p>
            </div>
        </div>
    </div>
</section>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-4 mt-5">
    <section>
        <div class="sidebar sidebar-blog">
            <div class="widget widget-categories">
                <div class="widget--title">
                    <h5>Daftar Layanan Makloon sublime</h5>
                </div>
                <div class="widget--content">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#print">Sublime Print</a>
                        </li>
                        <li>
                            <a href="#press">Sublime Press</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget widget-tags pb-30">
                <div class="widget--title">
                    <h5>Daftar Layanan Lainya</h5>
                </div>
                <div class="widget--content">
                    <a href="{{ url('layanan/full-order') }}">Full Order</a>
                    <a href="{{ url('layanan/makloon-sublime') }}">Makloon Sublime</a>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
</section> --}}
@endsection
