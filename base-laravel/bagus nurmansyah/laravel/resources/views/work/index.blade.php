@extends('layouts.master')
@section('title', 'work')
@section('content')


<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url({{ asset('assets/images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end">
				<div class="col-md-9 ftco-animate pb-5 mb-5">
					<p class="breadcrumbs"><span class="mr-2"><a href="{{ asset('assets/index.html')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Work <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-3 bread">Work</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-portfolio">
		<div class="row justify-content-center no-gutters">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<h2 class="mb-2">Our Works</h2>
			</div>
		</div>

		<div class="container">
			<div class="row no-gutters pb-5">
				<div class="col-md-12 portfolio-wrap mt-0">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 img" style="background-image: url({{ asset('assets/images/work-1.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<span class="subheading">Web Design</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Cassette tape</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="icon d-flex align-items-center mb-4">
												<div class="img" style="background-image: url({{ asset('assets/images/person_1.jpg')}});"></div>
												<div class="position pl-3">
													<h4 class="mb-0">Jamie Jonson</h4>
													<span>avo.com</span>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 order-md-last img" style="background-image: url({{ asset('assets/images/work-2.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pr-md-5 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc text-md-right">
										<div class="top">
											<span class="subheading">Application</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Miniwall Clock</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="d-flex w-100">
												<div class="icon d-flex align-items-center ml-md-auto mb-4">
													<div class="img" style="background-image: url({{ asset('assets/images/person_2.jpg')}});"></div>
													<div class="position pl-3 text-left">
														<h4 class="mb-0">Jamie Jonson</h4>
														<span>avo.com</span>
													</div>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 img" style="background-image: url({{ asset('assets/images/work-3.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<span class="subheading">UI/UX Design</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Avo Portfolio Agency</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="icon d-flex align-items-center mb-4">
												<div class="img" style="background-image: url({{ asset('assets/images/person_3.jpg')}});"></div>
												<div class="position pl-3">
													<h4 class="mb-0">Jamie Jonson</h4>
													<span>avo.com</span>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 order-md-last img" style="background-image: url({{ asset('assets/images/work-4.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pr-md-5 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc text-md-right">
										<div class="top">
											<span class="subheading">Web Development</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Hand Writing</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="d-flex w-100">
												<div class="icon d-flex align-items-center ml-md-auto mb-4">
													<div class="img" style="background-image: url({{ asset('assets/images/person_2.jpg')}});"></div>
													<div class="position pl-3 text-left">
														<h4 class="mb-0">Jamie Jonson</h4>
														<span>avo.com</span>
													</div>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 img" style="background-image: url({{ asset('assets/images/work-5.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<span class="subheading">Illustration</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Keyboard</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="icon d-flex align-items-center mb-4">
												<div class="img" style="background-image: url({{ asset('assets/images/person_2.jpg')}});"></div>
												<div class="position pl-3">
													<h4 class="mb-0">Jamie Jonson</h4>
													<span>avo.com</span>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 order-md-last img" style="background-image: url({{ asset('assets/images/work-6.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pr-md-5 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc text-md-right">
										<div class="top">
											<span class="subheading">Web Development</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Spiral</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="d-flex w-100">
												<div class="icon d-flex align-items-center ml-md-auto mb-4">
													<div class="img" style="background-image: url({{ asset('assets/images/person_2.jpg')}});"></div>
													<div class="position pl-3 text-left">
														<h4 class="mb-0">Jamie Jonson</h4>
														<span>avo.com</span>
													</div>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 img" style="background-image: url({{ asset('assets/')}}images/work-7.jpg);">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<span class="subheading">Illustration</span>
											<h2 class="mb-2"><a href="{{ asset('assets/')}}work.html">Keyboard</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="icon d-flex align-items-center mb-4">
												<div class="img" style="background-image: url({{ asset('assets/')}}images/person_2.jpg);"></div>
												<div class="position pl-3">
													<h4 class="mb-0">Jamie Jonson</h4>
													<span>avo.com</span>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 order-md-last img" style="background-image: url({{ asset('assets/')}}images/work-8.jpg);">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pr-md-5 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc text-md-right">
										<div class="top">
											<span class="subheading">Web Development</span>
											<h2 class="mb-2"><a href="{{ asset('assets/')}}work.html">Spiral</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="d-flex w-100">
												<div class="icon d-flex align-items-center ml-md-auto mb-4">
													<div class="img" style="background-image: url({{ asset('assets/')}};"></div>
													<div class="position pl-3 text-left">
														<h4 class="mb-0">Jamie Jonson</h4>
														<span>avo.com</span>
													</div>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12 portfolio-wrap">
					<div class="row no-gutters align-items-center">
						<div class="col-md-5 img" style="background-image: url({{ asset('assets/images/work-9.jpg')}});">

						</div>
						<div class="col-md-7">
							<div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
								<div class="px-4 px-lg-4">
									<div class="desc">
										<div class="top">
											<span class="subheading">Illustration</span>
											<h2 class="mb-2"><a href="{{ asset('assets/work.html')}}">Keyboard</a></h2>
										</div>
										<div class="absolute">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
											<div class="icon d-flex align-items-center mb-4">
												<div class="img" style="background-image: url({{ asset('assets/images/person_2.jpg')}});"></div>
												<div class="position pl-3">
													<h4 class="mb-0">Jamie Jonson</h4>
													<span>avo.com</span>
												</div>
											</div>
											<p><a href="#" class="custom-btn">View Portfolio</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 py-md-5">
				<div class="col text-center">
					<div class="block-27">
						<ul>
							<li><a href="#">&lt;</a></li>
							<li class="active"><span>1</span></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{ asset('assets/js/popper.min.js')}}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('assets/js/google-map.js')}}"></script>
		<script src="{{ asset('assets/js/main.js')}}"></script>

@endsection
