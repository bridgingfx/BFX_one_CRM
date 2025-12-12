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
    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- Scripts -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet"
        href="{{ URL::asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" />
    <!--<link rel="stylesheet" href="{{ URL::asset('assets/vendor/swiper/css/swiper-bundle.min.css') }}">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link class="main-css" href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/custom.css') }}" rel="stylesheet" />

    {{-- Page-Specific Styles --}}
    @stack('styles')

    {{-- Preloader --}}
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js" type="module"></script>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        {{-- <div class="lds-ripple">
			<div></div>
			<div></div>
		</div> --}}
        <div>
            {{-- <iframe src="https://lottie.host/embed/6aceff9d-8696-4bde-ac68-4188ac690768/RuB2bOfzm0.lottie"></iframe> --}}
            <dotlottie-wc src="https://lottie.host/6aceff9d-8696-4bde-ac68-4188ac690768/RuB2bOfzm0.lottie"
                style="width: 300px;height: 300px" autoplay loop></dotlottie-wc>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div id="main-wrapper" class="wallet-open">
        <div class="header-banner" style="background-image:url({{ URL::asset('assets/images/bg-1.png') }});"></div>
        @include('client.layouts.navbar')
        @include('client.layouts.chatbar')
        @include('client.layouts.header')
        @include('client.layouts.sidebar')
        @include('client.layouts.walletbar')
        @yield('content')

    </div>

    <script src="{{ URL::asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ URL::asset('assets/vendor/peity/jquery.peity.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/vendor/swiper/js/swiper-bundle.min.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <!-- counter -->
    <script src="{{ URL::asset('assets/vendor/counter/counter.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/counter/waypoint.min.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ URL::asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dlabnav-init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/demo.js') }}"></script>
    <script src="{{ URL::asset('assets/js/styleSwitcher.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dashboard/crypto-watch.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        jQuery(document).ready(function() {
            setTimeout(function() {
                dlabSettingsOptions.version = 'light';
                new dlabSettings(dlabSettingsOptions);
                setCookie('version', 'light');
            }, 1500)
        });
    </script>
    <script>
        lucide.createIcons();
    </script>

    <!--<script>
        -- >
        <
        !--document.addEventListener("DOMContentLoaded", function() {
            -- >
            <
            !--
            if (typeof chartRound === "function") {
                -- >
                <
                !--chartRound();
                -- >
                <
                !--
            }-- >
            <
            !--
        });
        -- >
        <
        !--
    </script>-->

    {{-- Page-Specific Scripts --}}
    @stack('scripts')

</body>

</html>
