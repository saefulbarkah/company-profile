@extends('layouts.master')

@section('title','Genetic | Beranda')
@section('content')
<section id="slider1" class="slider slider-1 d-flex align-items-center justify-content-center">
    <div class="container-fluid pr-0 pl-0">
        <div class="bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="{{ asset('assets/images/background/bg-home.jpg') }}" alt="Background" />
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                    <div class="slider-content">
                        <h1 class="slider--headline" style="font-size: 80px;">404 <span
                                class="text-lowercase"></span><br></h1>
                        <p class="slider--desc" style="font-size: 24px;">Maaf, halaman tidak di temukan</p>
                        <a class="btn btn--white" href="{{ url('/') }}">Kembali ke beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
