<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="codepixer">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->

        <!--CSS ============================================= -->
            <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700') }}" rel="stylesheet">
			<link href="{{ asset('assets_landing_page/css/linearicons.css') }}" rel="stylesheet" type="text/css">
			<link href="{{ asset('assets_landing_page/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
			<link href="{{ asset('assets_landing_page/css/nice-select.css') }}" rel="stylesheet" type="text/css">
			<link href="{{ asset('assets_landing_page/css/animate.min.css') }}" rel="stylesheet" type="text/css">
			<link href="{{ asset('assets_landing_page/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
			<link href="{{ asset('assets_landing_page/css/main.css') }}" rel="stylesheet" type="text/css">

        <!--JS ============================================= -->
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/vendor/bootstrap.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') }}"></script>
  			<script  type="text/javascript" src="{{asset('assets_landing_page/js/easing.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/hoverIntent.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/superfish.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/jquery.ajaxchimp.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/jquery.magnific-popup.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/owl.carousel.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/jquery.sticky.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/jquery.nice-select.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/parallax.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/waypoints.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/jquery.counterup.min.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/mail-script.js') }}"></script>
			<script  type="text/javascript" src="{{asset('assets_landing_page/js/main.js') }}"></script>
        <title>Coffee</title>

</head>

<body>
    @include('landing_page.navbar')

    @include('landing_page.javascript')
</body>
@include('landing_page.footer')
</html>
