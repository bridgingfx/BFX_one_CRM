<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'All in One Forfx CRM') }}</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

	<!-- Scripts -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />
	 <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link  rel="stylesheet" href="{{ asset('assets/css/style.css') }}"  />	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js"></script>


	{{-- Page-Specific Styles --}}
    @stack('styles')
	
</head>
<body>
	
	<?php
	// 	$sidebarData = getSidebarData();
    //    $categories = $sidebarData['categories']; 
	// 		echo'<pre>';print_r($sidebarData);exit;
			
			?>
	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
	
	<div id="main-wrapper" class="wallet-open">
		<div class="header-banner" style="background-image:url({{ asset('assets/images/bg-1.png') }});"></div>
		@include('admin.layouts.navbar')
		@include('admin.layouts.chatbar')
		@include('admin.layouts.header')
			
		@include('admin.layouts.sidebar')
		@include('admin.layouts.walletbar')
		@yield('content')
		
	</div>
	
	<script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

	<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('vendor/datatables/responsive/responsive.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{ asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script> 
	<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
	
	<!-- counter -->
	<script src="{{ asset('assets/vendor/counter/counter.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/counter/waypoint.min.js') }}"></script>
	
	<!-- Dashboard 1 -->	
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
	<script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('assets/js/demo.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/crypto-watch.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'light';
				new dlabSettings(dlabSettingsOptions);
				setCookie('version','light');
			},1500)
		});
	</script>
	
	{{-- Page-Specific Scripts --}}
    @stack('scripts')
	
</body>
</html>

