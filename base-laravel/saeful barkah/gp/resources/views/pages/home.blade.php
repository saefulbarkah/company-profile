@extends('layouts.master')
@push('proses-css')
<link rel="stylesheet" href="{{ asset('assets/custom/time-line.css') }}">
@endpush

@section('title', 'Genetic Home')
@section('p-title', 'Genetic Wear')
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
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/1.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">Bisa desain kostum dan mock up kostum</p>
                            </div>
                        </div>
                    </div>
                </li>

                {{-- 2 --}}
                <li class="timeline-inverted tml-2">
                    <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="{{  asset('assets/img/time-line/2.jpg') }}"
                            alt="..." />
                    </div>
                    <div class="timeline-panel" data-aos="fade-left">
                        <div class="timeline-heading">
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>

                {{-- 3 --}}
                <li class="tml-3">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{  asset('assets/img/time-line/3.jpg') }}" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="fade-right" data-aos="fade-right">
                            <div class="timeline-heading">
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="">Bisa desain kostum dan mock up kostum</p>
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
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted tml-5">
                    <div class="timeline-image" data-aos="fade-top">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Features Section -->
@endsection
