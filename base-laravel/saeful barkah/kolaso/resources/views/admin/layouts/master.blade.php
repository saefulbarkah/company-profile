<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets2/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets2/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets2/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets2/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets2/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets2/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets2/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets2/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets2/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets2/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets2/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets2/css/header-colors.css') }}" />
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>

    {{-- styles --}}
    @stack('styles')
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					{{-- <img src="{{ asset('assets2/images/logo-icon.png') }}" class="logo-icon" alt="logo icon"> --}}
				</div>
				<div>
					<h4 class="logo-text">Genetic Wear</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class="menu-label">Menu</li>
				<li class="{{ Request::is('admin/dashboard') ? 'mm-active' : ' ' }}">
					<a href="{{ url('admin/dashboard') }}">
						<div class="parent-icon"><i class="bx bx-tachometer"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				<li class="{{ Request::is('admin/list-portfolio') ? 'mm-active' : ' ' }}">
					<a href="{{ url('admin/list-portfolio') }}">
						<div class="parent-icon"><i class="bx bx-images"></i>
						</div>
						<div class="menu-title">Portfolio</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>
					<div class="top-menu ms-auto">
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{ auth()->user()->name }}</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class='bx bx-log-out-circle'></i><span>Logout</span>
                                    </a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                </form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @yield('content')
            </div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets2/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets2/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets2/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets2/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets2/js/app.js') }}"></script>

    {{-- styles --}}
    @stack('scripts')
</body>

</html>
