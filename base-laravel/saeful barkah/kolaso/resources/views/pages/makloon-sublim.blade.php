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
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2 bg-parallax">
    <div class="bg-section">
        <img src="{{ asset('assets/images/services/sublim-print.jpg') }}" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                <div class="title text-center">
                    <div class="title--heading">
                        <h1>Layanan - Makloon Sublim</h1>
                    </div>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item"><a href="index-3.html">beranda</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan</li>
                        <li class="breadcrumb-item active" aria-current="page">Makloon Sublim</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="blog blog-standard mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <section>
                    <div class="sidebar sidebar-blog">

                        <div class="widget widget-categories">
                            <div class="widget--title">
                                <h5>Daftar Layanan Makloon sublim</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#print">Sublim Print</a>
                                    </li>
                                    <li>
                                        <a href="#press">Sublim Press</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="blog-entry-wrap">

                    <section id="print">
                        <div class="blog-entry">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Makloon sublim Print</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset('assets/images/services/sublim-print.jpg') }}"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning – a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="press">
                        <div class="blog-entry">
                            <div class="entry--meta-container">
                                <div class="entry--title">
                                    <h4><a href="#">Makloon sublim Press</a></h4>
                                </div>
                            </div>
                            <div class="entry--img">
                                <a href="#">
                                    <img src="{{ asset('assets/images/services/sublim-print.jpg') }}"
                                        alt="entry image" />
                                </a>
                            </div>
                            <div class="entry--content">
                                <div class="entry--bio">
                                    <p>The theory was first published in 2005 a press released under the name of Cliff
                                        Arnall, who at
                                        the time was a tutor at the Centre for Lifelong Learning – a Further Education
                                        centre associated
                                        with Cardiff University. Later, however, the Guardian printed a statement from
                                        the
                                        university
                                        distancing itself from the psychology professor: "Cardiff University asked us to
                                        point out that
                                        Cliff Arnall...</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
