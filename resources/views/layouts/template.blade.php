<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title', 'Inicio') | Boletea Tickets</title>

    {{-- META OpenGraph / Twitter --}}
    <meta property="og:title" content="@yield('titleFacebook')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.boletea.com" />
    <meta property="og:image" content="@yield('imageFacebook')" />
    <meta property="og:description" content="@yield('descriptionFacebook')" />
    <meta property="og:site_name" content="Boletea Tickets" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('titleTwitter')" />
    <meta name="twitter:description" content="@yield('descriptionTwitter')" />
    <meta name="twitter:image" content="@yield('imageTwitter')" />
    <meta name="twitter:creator" content="@yield('authTwitter')" />

    <!-- Fonts & Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
    @livewireStyles
    @stack('styles')
</head>

<body class="bg-cover bg-fixed bg-no-repeat text-gray-800 font-inter"
    style="background-image: url('{{ asset('img/bg-boleto.png') }}');">
    @include('landing.include.navbar')

    <main>
        @yield('slider')
        @yield('content')
    </main>

    <!-- WhatsApp Floating Button Mejorado -->
    <div class="fixed bottom-6 right-6 z-50 group">
        <a href="https://wa.me/5215644992294" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white p-4 rounded-full shadow-xl transform hover:scale-110 transition-all duration-300 animate-bounce-slow relative">
            <i class="fab fa-whatsapp text-2xl"></i>
            <!-- Tooltip -->
            <span
                class="absolute right-14 top-1/2 -translate-y-1/2 bg-gray-800 text-white text-sm px-3 py-1 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                ¿Necesitas ayuda?
            </span>
        </a>
    </div>


    <!-- Footer -->
    <footer class="bg-black text-gray-300 py-10 mt-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-4 text-sm">
            <div>
                <img src="{{ asset('img/logoBoleteaNegro.png') }}" alt="Boletea Logo" class="w-48 mb-4">
            </div>
            <div>
                <ul class="space-y-2">
                    <li><a href="{{ route('index') }}" class="hover:text-white font-medium">Inicio</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-white font-medium">Quiénes Somos</a></li>
                    <li><a href="{{ route('conditions') }}" class="hover:text-white font-medium">Términos y
                            Condiciones</a></li>
                    <li><a href="{{ route('privacity') }}" class="hover:text-white font-medium">Aviso de Privacidad</a>
                    </li>
                    <li><a href="https://boletea.com.mx/reporting/login.asp" class="hover:text-white font-medium">Acceso
                            a Promotores</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-semibold mb-2">Contáctanos</h2>
                <p><i class="far fa-envelope mr-2"></i> contacto@boletea.com</p>
                {{-- <p><i class="fab fa-whatsapp mr-2"></i> +52 56-44-99-22-94</p> --}}
            </div>
        </div>
        <div class="text-center text-xs text-gray-400 mt-6 border-t border-gray-700 pt-4">
            Todos los derechos reservados - Boletea Tickets &copy; <span id="year"></span>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>
    <script>
        document.getElementById('year').innerText = new Date().getFullYear();

        new Splide('.splide', {
            type: 'loop',
            autoplay: true,
            interval: 5000,
        }).mount();

        const player = new Plyr('video', {
            captions: {
                active: true
            }
        });
        window.player = player;
    </script>

    @livewireScripts
    @stack('scripts')
</body>

</html>
