@extends('layouts.master')

@section('title', 'Hubungi kami')
@section('content')
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>CONTACT US</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="contact.html">CONTACT US</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>California, United States</h6>
                                <p>Santa monica bullevard</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">00 (440) 9865 562</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">support@colorlib.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d588.6679504933044!2d107.57418209530506!3d-7.001020950017788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68eead56b8f89f%3A0x3fc9157f74855daf!2sGenetic%20Wear%20Workshop!5e0!3m2!1sid!2sid!4v1630035982778!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
@endsection
