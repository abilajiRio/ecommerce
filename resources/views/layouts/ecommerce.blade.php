<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
    
    @yield('title')
    
	<link rel="stylesheet" href="{{ asset('ecommerce/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/vendors/jquery-ui/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/appFooter.css')}}">

	
	<link rel="stylesheet" href="{{ asset('ecommerce/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('ecommerce/css/responsive.css') }}">

	<style>
		.menu-sidebar-area {
		  list-style-type:none; padding-left: 0; font-size: 15pt;
		}
		.menu-sidebar-area > li {
		  margin:0 0 10px 0;
		  list-style-position:inside;
		  border-bottom: 1px solid black;
		}
		.menu-sidebar-area > li > a {
		  color: black
		}
	  </style>
	  @yield('css')
</head>

<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-right">
					<ul class="right_side">
						@if (auth()->guard('customer')->check())
							<li><a href="{{ route('customer.logout') }}">Logout</a></li>
						@else
							<li><a href="{{ route('customer.login') }}">Login</a></li>
						@endif
						<li><a href="{{ route('customer.dashboard') }}">My Account</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="{{ url('/') }}">
					<img src="{{asset ('ecommerce/img/logo_white.png')}}" width="100px" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-7 pr-0">
								@include('layouts.module.menu')
							</div>

							<div class="col-lg-5">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<hr>
									{{-- <li class="nav-item">
										<a href="#}" class="icons">
											<i class="fa fa-search" aria-hidden="true"></i>
										</a>
									</li> --}}
									<hr>
									<li class="nav-item">
										<a href="{{ route('customer.setting') }}" class="icons">
											<i class="fa fa-user" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="#" class="icons">
											<i class="fa fa-heart-o" aria-hidden="true"></i>
										</a>
									</li>
									<hr>
									<li class="nav-item">
										<a href="{{ route('front.list_cart') }}" class="icons">
											<i class="lnr lnr lnr-cart"></i>
										</a>
									</li>
									<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

    @yield('content')
    
    <!--================ Subscription Area ================-->
    <!--================ End Subscription Area ================-->

	<!--================ start footer Area  =================-->
	<footer id="contact">
        <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xs-12 location">
                        <h4>location</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="jln"><i class="fa fa-map-marker" aria-hidden="true"> Jl. Cempaka V Blok Hl No.12,  Tangerang, Banten 15560</i></p>
                        <p><i class="fa fa-phone" aria-hidden="true"> (021) 123 456 78</i></p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"> abilaji96@gmail.com</i></p>
                    </div>

                    <div class="col-lg-4 col-xs-12 link">
                        <h4>menu</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <ul>
                            <li>- <a href="http://127.0.0.1:8000/category/001">Smartphone</a></li>
                            <li>- <a href="http://127.0.0.1:8000/category/laptop">Laptop</a></li>
                            <li>- <a href="http://127.0.0.1:8000/category/accessories-laptop">Accesoris Hp/Pc</a></li>
                            <li>- <a href="http://127.0.0.1:8000/category/taplet">Tablet</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-xs-12">
                        <h4>follow us</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laboriosam facilis hic omnis, deleniti cum vero natus minus</p>
                        <ul class="sosmed">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
					</div>
					
					<div class="container">

						<div class="row mt-5">
							<div class="col-sm copyright text-center">
								<p ><small class="text-white-50">
							&copy; 2020 Technical-Test • All rights reserved
						</small></p>
						</div>
					</div>
					</div>

				</div>
            </div>
        </div>
	</footer>
	
	<!--================ End footer Area  =================-->

	<script src="{{ asset('ecommerce/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/popper.js') }}"></script>
	<script src="{{ asset('ecommerce/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/stellar.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('ecommerce/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/flipclock/timer.js') }}"></script>
	<script src="{{ asset('ecommerce/vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('ecommerce/js/mail-script.js') }}"></script>
	<script src="{{ asset('ecommerce/js/theme.js') }}"></script>

	@yield('js')
	
</body>
</html>