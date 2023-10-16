<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>1 Column Full Width | Porto - Ecomarce Website Template</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Porto - Multipurpose Website Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('asset/img/apple-touch-icon.png')}}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap')}}" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/magnific-popup/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/bootstrap-star-rating/css/star-rating.min.css')}}">
		<link rel="stylesheet" href="{{asset('asset/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('asset/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('asset/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('asset/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('asset/css/theme-shop.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('asset/css/skins/default.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('asset/vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body data-plugin-page-transition>

	<div class="body">
        <x-frontends-notice></x-frontends-notice>
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
				<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
					<x-frontends-header></x-frontends-header>
					<x-frontends-menu></x-frontends-menu>
				</div>
			</header>
			<div role="main" class="main shop pt-4">
				<x-frontends-main>@yield('content')</x-frontends-main>
			</div>
			<x-frontends-footer></x-frontends-footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('asset/vendor/plugins/js/plugins.min.js')}}"></script>
		<script src="{{asset('asset/vendor/bootstrap-star-rating/js/star-rating.min.js')}}"></script>
		<script src="{{asset('asset/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js')}}"></script>
		<script src="{{asset('asset/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('js/views/view.shop.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('js/custom.js')}}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>

	</body>
</html>
