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
	<link href="{{ URL::asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<link class="main-css" href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
	
</head>
<body class="body">
	@yield('content')
	
	<script src="{{ URL::asset('assets/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/custom.min.js') }}"></script>
</body>
</html>
