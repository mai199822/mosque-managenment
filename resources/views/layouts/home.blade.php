<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	<!-- Meta tag -->
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="Radix" content="Responsive Multipurpose Business Template">
	<meta name='copyright' content='Radix'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title Tag -->
	<title>مسجد &#8739; عمر بن الخطاب</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png') }}">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

	<!-- Bootstrap Css -->
	<link rel="stylesheet" href="{{ asset('css//bootstrap.min.css') }} ">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//font-awesome.min.css') }} ">
	<link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
	<!-- Slick Nav CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//slicknav.min.css') }} ">
	<!-- Cube Portfolio CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//cubeportfolio.min.css') }} ">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//magnific-popup.min.css') }} ">
	<!-- Fancy Box CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//jquery.fancybox.min.css') }} ">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//niceselect.css') }} ">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//owl.theme.default.css') }} ">
	<link rel="stylesheet" href=" {{ asset ( 'css//owl.carousel.min.css') }} ">
	<!-- Slick Slider CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//slickslider.min.css') }} ">
	<!-- Animate CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//animate.min.css') }} ">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Radix StyleShet CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//reset.css') }} ">
	<link rel="stylesheet" href="{{ asset('style.css') }} ">
	<link rel="stylesheet" href=" {{ asset ( 'css//responsive.css') }} ">

	<!-- Radix Color CSS -->
	<link rel="stylesheet" href=" {{ asset ( 'css//color/color1.css') }} ">
	<link rel="stylesheet" href="#" id="colors">
</head>

<body>

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="single-loader one"></div>
			<div class="single-loader two"></div>
			<div class="single-loader three"></div>
			<div class="single-loader four"></div>
			<div class="single-loader five"></div>
			<div class="single-loader six"></div>
			<div class="single-loader seven"></div>
			<div class="single-loader eight"></div>
			<div class="single-loader nine"></div>
		</div>
	</div>
	<!-- End Preloader -->

	<!-- Get Pro Button -->
	<ul class="pro-features">
		<a class="get-pro" href="{{ route('profile.index') }}">الصفحة الشخصية</a>
	</ul>

	<!-- Start Header -->
	<header id="header" class="header">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Contact -->
						<ul class="contact">
							<li><i class="fa fa-headphones"></i> +(972)111111111</li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:phoenix22016@gmail.com">phoenix22016@gmail.com</a></li>
							<li><i class="fa fa-clock-o"></i>Opening: 09am-10pm</li>
						</ul>
						<!--/ End Contact -->
					</div>
					<div class="col-lg-6 col-12">
						<div class="topbar-right">
							<!-- Search Form -->
							<div class="search-form active">
								<a class="icon" href="#"><i class="fa fa-search"></i></a>
								<form class="form" action="#">
									<input placeholder="Search & Enter" type="search">
								</form>
							</div>
							<!--/ End Search Form -->
							<!-- Social -->
							<ul class="social">
								<li><a href="#"><i class="fas fa-twitter"></i></a></li>
								<span class="fas fa-twitter"></span>
								<li><a href="#"><i class="fas fa-facebook"></i></a></li>
								<li><a href="#"><i class="fas fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fas fa-behance"></i></a></li>
								<li><a href="#"><i class="fas fa-youtube"></i></a></li>
							</ul>
							<!--/ End Social -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Topbar -->
		<!-- Middle Bar -->
		<div class="middle-bar">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src=" {{ asset( 'images/logo.jpg' ) }}" alt="logo"></a>
						</div>
						<div class="link"><a href="index.html">بن الخطاب<span> عمر </span></a></div>
						<!--/ End Logo -->
						<button class="mobile-arrow"><i class="fa fa-bars"></i></button>
						<div class="mobile-menu"></div>
					</div>
					<div class="col-lg-10 col-12">
						<!-- Main Menu -->
						<div class="mainmenu">
							<nav class="navigation">
								<ul class="nav menu">
									<li class="active"><a href="index.html">الرئيسية</a></li>
									<li><a href="#">صفحات<i class="fa fa-caret-down"></i></a>
										<ul class="dropdown">
											<li><a href="about-us.html">عنا</a></li>
											<li><a href="team.html">المدربين</a></li>
											<li><a href="pricing.html">الأقسام</a></li>
										</ul>
									</li>
									<li><a href="#">فعاليات<i class="fa fa-caret-down"></i></a></li>
									<li><a href="contact.html"> معنا تواصل</a></li>
									<li><a href="services.html">admin mode</a></li>
								</ul>
								<ul class="navbar-nav mr-auto">
									<!-- Authentication Links -->
									@guest
									<li class="nav-item">
										<div class="button">
											<a href="{{route('login')}}" class="btn">login</a>
										</div>
									</li>
									@if (Route::has('register'))
									<li class="nav-item">
										<div class="button">
											<a href="{{ route('register') }}" class="btn">{{ __('Register') }}</a>
										</div>
									</li>
									@endif
									@else
									<li class="nav-item dropdown">
										<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>

										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
										</div>
									</li>
									@endguest
								</ul>
							</nav>
						</div>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Middle Bar -->
	</header>
	<!--/ End Header -->
	@yield('main')


	<!-- Footer -->
	<footer id="footer" class="footer wow fadeIn">
		<!-- Top Arrow -->
		<div class="top-arrow">
			<a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
		</div>
		<!--/ End Top Arrow -->
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- About Widget -->
						<div class="single-widget about">
							<h2>موقع المسجد</h2>
							<p>غزة - تل الهوا - مقابل أبراج السعادة</p>
							<ul class="list">
								<li><i class="fa fa-map-marker"></i>دولة : فلسطين</li>
								<li><i class="fa fa-headphones"></i>Phone: +(972) 111 111 111</li>
								<li><i class="fa fa-headphones"></i>Email:<a href="mailto:phoenix22016@gmail.com">phoenix22016@gmail.com</a></li>
							</ul>
						</div>
						<!--/ End About Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Links Widget -->
						<div class="single-widget links">
							<h2>Quick Links</h2>
							<ul class="list">
								<li><a href="about-us.html"><i class="fa fa-caret-right"></i>عنّا</a></li>
								<li><a href="services.html"><i class="fa fa-caret-right"></i>احدث الفعاليات</a></li>
								<li><a href="contact.html"><i class="fa fa-caret-right"></i>Help Desk</a></li>
								<li><a href="contact.html"><i class="fa fa-caret-right"></i>Contact With Us</a></li>
							</ul>
						</div>
						<!--/ End Links Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Newsletter Widget -->
						<div class="single-widget newsletter">
							<h2>اقتراحات</h2>
							<p>تواصل مع مشرفي ومعلمي المسجد وأرسل اقتراحاتك</p>
							<form>
								<input placeholder="Your Name" type="text">
								<input placeholder="your email" type="email">
								<button type="submit" class="button primary">أرسل</button>
							</form>
						</div>
						<!--/ End Newsletter Widget -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Top -->
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bottom-top">
							<!-- Social -->
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
							<!--/ End Social -->
							<!-- Copyright -->
							<div class="copyright">
								<p>&copy; 2020 All Right Reserved. Design & Development By <a target="_blank" href="http://themelamp.com">ThemeLamp.com</a>, Theme Provided By <a target="_blank" href="https://codeglim.com">CodeGlim.com</a></p>
							</div>
							<!--/ End Copyright -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Footer Bottom -->
	</footer>
	<!--/ End footer -->

	<!-- Jquery -->
	<script src=" {{ asset('js/jquery.min.js') }}"></script>
	<script src=" {{ asset('js/jquery-migrate.min.js') }}"></script>
	<!-- Popper JS -->
	<script src=" {{ asset('js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src=" {{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Colors JS -->
	<script src=" {{ asset('js/colors.js') }}"></script>
	<!-- Modernizer JS -->
	<script src=" {{ asset('js/modernizr.min.js') }}"></script>
	<!-- Nice select JS -->
	<script src=" {{ asset('js/niceselect.js') }}"></script>
	<!-- Tilt Jquery JS -->
	<script src=" {{ asset('js/tilt.jquery.min.js') }}"></script>
	<!-- Fancybox  -->
	<script src=" {{ asset('js/jquery.fancybox.min.js') }}"></script>
	<!-- Jquery Nav -->
	<script src=" {{ asset('js/jquery.nav.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src=" {{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Slick Slider JS -->
	<script src=" {{ asset('js/slickslider.min.js') }}"></script>
	<!-- Cube Portfolio JS -->
	<script src=" {{ asset('js/cubeportfolio.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src=" {{ asset('js/jquery.slicknav.min.js') }}"></script>
	<!-- Jquery Steller JS -->
	<script src=" {{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src=" {{ asset('js/magnific-popup.min.js') }}"></script>
	<!-- Wow JS -->
	<script src=" {{ asset('js/wow.min.js') }}"></script>
	<!-- CounterUp JS -->
	<script src=" {{ asset('js/jquery.counterup.min.js') }}"></script>
	<!-- Waypoint JS -->
	<script src=" {{ asset('js/waypoints.min.js') }}"></script>
	<!-- Jquery Easing JS -->
	<script src=" {{ asset('js/easing.min.js') }}"></script>
	<!-- Google Map JS -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
	<script src=" {{ asset('js/gmap.min.js') }}"></script>
	<!-- Main JS -->
	<script src=" {{ asset('js/main.js') }}"></script>
</body>

</html>