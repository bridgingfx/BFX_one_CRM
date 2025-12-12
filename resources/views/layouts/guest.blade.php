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
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="{{ URL::asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link class="main-css" href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
	
	
</head>
<body class="body">
	<div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
		<div class="login-aside text-center  d-flex flex-column flex-row-auto">
			<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
				<div class="text-center mb-lg-4 mb-2 pt-5 logo">
					<img src="images/logo-white.png" alt="">
				</div>
				<h3 class="mb-2 text-white">Welcome back!</h3>
				<p class="mb-4">User Experience & Interface Design <br>Strategy SaaS Solutions</p>
			</div>
			<div class="aside-image position-relative" style="background-image:url(images/background/pic-2.png);">
				<img class="img1 move-1" src="images/background/pic3.png" alt="">
				<img class="img2 move-2" src="images/background/pic4.png" alt="">
				<img class="img3 move-3" src="images/background/pic5.png" alt="">
				
			</div>
		</div>
		
		@include('auth.login')	
		
	</div>




	<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
		<div>
			<a href="/">
				<x-application-logo class="w-20 h-20 fill-current text-gray-500" />
			</a>
		</div>

		<div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
			
		</div>
	</div>
</body>
</html>
