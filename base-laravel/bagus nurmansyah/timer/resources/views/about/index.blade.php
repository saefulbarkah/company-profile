@extends('layouts.master')
@section('title', 'tentang')
@section('content')

<section class="about">

    <section class="global-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>Tentang perusahaan</h2>
                        <ol class="breadcrumb list-inline text-center">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}">
                                    <i class="ion-ios-home"></i>
                                    Beranda  &nbsp; &nbsp;/
                                </a>
                            </li>
                            <li class="active list-inline-item">Tentang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ asset('assets/images/about/about-company.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">TENTANG KAMI</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Genetic Wear merupakan sebuah perusahaan konveksi yang memiliki layanan design, makloon sublime printing beserta makloon Sublime Press dan pembuatan (Baju, Jersey, Kemeja, Jaket). Genetic Wear mulai di dirikan pada tahun 2008 dengan menyediakan layanan konveksi, seiring perkembangan waktu pada tahun 2010 perusahaan Genetic Wear mulai bergerak ke sebuah layanan baru yaitu sablon. Terus berlanjut Genetic Wear mulai mengadakan sebuah layanan baru dengan alat teknologi terbaru yaitu Sublime.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 px-0">
                <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                    <h2>
                        Mengapa harus Memilih Kami
                    </h2>
                    <p>
                        Seperti yang anda tau kami memiliki pengalaman sejak 2008 di bidang sablon yang membuat kami memiliki banyak jam terbang atau pengalaman yang membuat kami dapat memenuhi harapan anda.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 px-0">
                <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                    <h2 class="item_title">
                        Apa yang anda dapatkan
                    </h2>
                    <p>
                        Anda dapat mempercayai kami untuk membuat produk yang anda ingin kan berupa jersey baju dan lain lain, atau anda dapat menggunakan layanan yang kami berikan berupa sublime print atau sublime press.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 px-0">
                <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                    <h2 class="item_title">
                    pilihan yang tepat
                    </h2>
                    <p>
                        Anda memilih pilihan yang tepat karena telah memilih kami untuk mengurus kebutuhan anda sehingga anda tak perlu cemas tentang proses nya, kami akan memberikan yang terbaik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
==================================================
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="subtitle text-center">Tim kami</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('assets/images/team/team-1.jpg')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Hanif Kurniawan</h3>
                    <p class="team_designation">CEO, Pemilik Genetic</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-instagram-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="{{ asset('assets/images/team/team-2.jpg')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Angga Pratama</h3>
                    <p class="team_designation">COO, Project Manager</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-instagram-outline"></i></a>
                    </p>
                </div>
            </div>
            {{-- <div class="col-md-3 col-sm-6">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="{{ asset('assets/images/team/team-3.jpg')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Fian</h3>
                    <p class="team_designation">Ketua tim print</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="{{ asset('assets/images/team/team-4.jpg')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Alby yahya</h3>
                    <p class="team_designation">Ketua tim press</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
</section>

</section>

@endsection
