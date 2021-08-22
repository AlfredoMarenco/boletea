<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/superslides.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/themes/splide-default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide-core.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<style>

</style>

<body style="background-image: url('{{ asset('img/bg-boleto.png') }}');">
    @include('landing.include.navbar')
    <div>
        @yield('slider')
        @yield('content')
    </div>
    <footer class="grid grid-cols-1 md:grid-cols-3 items-center bg-black h-56">
        <div class="px-10 mx-auto mt-3">
            <img class="w-48" src="{{ asset('img/logoBoleteaNegro.png') }}" alt="">
        </div>
        <div class="hidden lg:block text-gray-300">
            <ul>
                <li><a class="cursor-pointer font-bold text-sm">Inicio</a></li>
                <li><a class="cursor-pointer font-bold text-sm" hfer="{{ route('about') }}">Quiénes Somos</a></li>
                <li><a class="cursor-pointer font-bold text-sm" href="{{ route('conditions') }}">Terminos y
                        condiciones</a></li>
                <li><a class="cursor-pointer font-bold text-sm" href="{{ route('privacity') }}">Aviso de privacidad</a></li>
                <li><a class="cursor-pointer font-bold text-sm">Acceso a promotores</a></li>
            </ul>
        </div>
        <div class="text-gray-300 text-md hidden lg:block">
            <h2 class="text-2xl mb-2 font-semibold">Contáctanos</h2>
            <div>
                <i class="far fa-envelope"></i> info@boletea.com
            </div>
            <div>
                <i class="fab fa-whatsapp"></i> 871-277-0030
            </div>
        </div>
        <div class="bg-black text-center col-span-3 text-gray-100 text-xs">
            Todos los derechos reservados - Boletea Tickets &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>
        </div>
    </footer>

    @yield('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Splide('.splide', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                interval: 5500,
            }).mount();
        });
    </script>
</body>

</html>
