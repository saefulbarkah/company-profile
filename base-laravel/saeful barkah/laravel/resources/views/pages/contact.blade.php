@extends('layouts.master')

@section('title', 'Hubungi kami')
@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Hubungi kami</span>
                        <h1 class="text-capitalize mb-4 text-lg">Segera hubungi kami</h1>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">Hubungi kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact form start -->
    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6 col-md-12 col-sm-12">
                    <form class="" method="POST" action="{{ url('send-email') }}">
                        @csrf
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>
                        <!-- end message -->
                        <span class="text-color">Kirim pesan</span>
                        <h3 class="text-md mb-4">Formulir Kontak</h3>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Alamat email">
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="content" class="form-control" rows="4" placeholder="pesan anda..."></textarea>
                        </div>
                        <button class="btn btn-main" name="submit" type="submit">Kirim pesan</button>
                    </form>
                </div> --}}

                <div class="col-lg-12 col-sm-12">
                    <div class="contact-content pl-lg-12 mt-5 mt-lg-0">
                        <span class="text-muted">Kami Profesional</span>
                        <h2 class="mb-5 mt-2">Jangan Ragu untuk menghubungi kami untuk segala jenis informasi</h2>

                        <ul class="address-block list-unstyled">
                            <li>
                                <i class="ti-direction mr-3"></i>Alamat : Kp Bojong, Kec katapang, kab bandung
                            </li>
                            <li>
                                <i class="ti-email mr-3"></i>Email  : contoh@mail.com
                            </li>
                            <li>
                                <i class="ti-mobile mr-3"></i>Telepon : +88 01672 506 744
                            </li>
                        </ul>

                        <ul class="social-icons list-inline mt-5">
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
