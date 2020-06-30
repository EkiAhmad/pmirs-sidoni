<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{ $title }}</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/bootstrap.min.css') }}" media="all" />
	<!-- Slick nav CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/slicknav.min.css') }}" media="all" />
	<!-- Iconfont CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/icofont.css') }}" media="all" />
	<!-- Slick CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/slick.css') }}">

	<link rel="stylesheet" href="{{ asset('assets_landing/css/font-awesome.min.css') }}">
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/owl.carousel.css' ) }}">
	<!-- Popup CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/magnific-popup.css' ) }}">
	<!-- Switcher CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/switcher-style.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/animate.min.css') }}">
	<!-- Main style CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/style.css') }}" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/custom.css') }}" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets_landing/css/responsive.css') }}" media="all" />
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="{{ asset('assets_landing/img/icon/icon_sidoni_title.png' ) }}" />
	<link href='{{ asset('assets_landing/css/font-roboto.css') }}' rel='stylesheet'>
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body data-spy="scroll" data-target=".header" data-offset="50">
	<!-- Page loader -->
	<div id="preloader"></div>
	<!-- header section start -->
	@include('landing/header')
	<!-- header section end -->

	<!-- content -->
	@yield('content')
	<!-- end content -->

	<!-- footer -->
	@include('landing/footer')
	<!-- end footer-->

	<!-- jquery main JS -->
	<script src="{{ asset('assets_landing/js/jquery.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_landing/js/bootstrap.min.js') }}"></script>
	<!-- Slick nav JS -->
	<script src="{{ asset('assets_landing/js/jquery.slicknav.min.js') }}"></script>
	<!-- Slick JS -->
	<script src="{{ asset('assets_landing/js/slick.min.js') }}"></script>
	<!-- owl carousel JS -->
	<script src="{{ asset('assets_landing/js/owl.carousel.min.js') }}"></script>
	<!-- Popup JS -->
	<script src="{{ asset('assets_landing/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- Counter JS -->
	<script src="{{ asset('assets_landing/js/jquery.counterup.min.js') }}"></script>
	<!-- Counterup waypoints JS -->
	<script src="{{ asset('assets_landing/js/waypoints.min.js') }}"></script>
	<!-- YTPlayer JS -->
	<script src="{{ asset('assets_landing/js/jquery.mb.YTPlayer.min.js') }}"></script>
	<!-- jQuery Easing JS -->
	<script src="{{ asset('assets_landing/js/jquery.easing.1.3.js') }}"></script>
	<!-- Gmap JS -->
	<script src="{{ asset('assets_landing/js/gmap3.min.js') }}"></script>

	<!-- Custom map JS -->
	<script src="{{ asset('assets_landing/js/custom-map.js') }}"></script>
	<!-- WOW JS -->
	<script src="{{ asset('assets_landing/js/wow-1.3.0.min.js') }}"></script>
	<!-- Switcher JS -->
	<script src="{{ asset('assets_landing/js/switcher.js') }}"></script>
	<!-- main JS -->
	<script src="{{ asset('assets_landing/js/main.js') }}"></script>
</body>

</html>