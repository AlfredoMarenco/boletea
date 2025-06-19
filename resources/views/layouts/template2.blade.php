<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletea - @yield('title', 'Eventos en vivo')</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
</head>

<body class="bg-white text-gray-800">

    <!-- NAVBAR -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- LOGO -->
                <a href="{{ url('/') }}" class="flex items-center space-x-2 text-[#ed2d7c] font-bold text-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path d="M4 4h16v16H4z" />
                    </svg>
                    <span>Boletea</span>
                </a>

                <!-- NAV MENU -->
                <nav class="hidden md:flex space-x-6 text-sm font-medium">
                    <a href="{{-- {{ url('/') }} --}}" class="hover:text-[#ed2d7c] transition">Inicio</a>
                    <a href="{{-- {{ route('events.index') }} --}}" class="hover:text-[#ed2d7c] transition">Eventos</a>
                    <a href="{{-- {{ route('about') }} --}}" class="hover:text-[#ed2d7c] transition">Nosotros</a>
                    <a href="{{-- {{ route('contact') }} --}}" class="hover:text-[#ed2d7c] transition">Contacto</a>
                </nav>

                <!-- LOGIN / MOBILE -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}"
                        class="text-sm px-4 py-2 border border-[#ed2d7c] text-[#ed2d7c] rounded-full hover:bg-[#ed2d7c] hover:text-white transition">
                        Iniciar sesión
                    </a>

                    <!-- Mobile button -->
                    <button id="mobile-menu-btn" class="md:hidden text-[#ed2d7c] focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
            <a href="{{ url('/') }}" class="block text-sm hover:text-[#ed2d7c]">Inicio</a>
            <a href="{{-- {{ route('events.index') }} --}}" class="block text-sm hover:text-[#ed2d7c]">Eventos</a>
            <a href="{{-- {{ route('about') }} --}}" class="block text-sm hover:text-[#ed2d7c]">Nosotros</a>
            <a href="{{-- {{ route('contact') }} --}}" class="block text-sm hover:text-[#ed2d7c]">Contacto</a>
            <a href="{{-- {{ route('login') }} --}}" class="block text-sm text-[#ed2d7c] font-semibold">Iniciar sesión</a>
        </div>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#121212] text-white py-8">
        <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Boletea. Todos los derechos reservados.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="https://www.facebook.com/boletea" target="_blank" class="hover:text-[#ed2d7c]">Facebook</a>
                <a href="https://www.instagram.com/boletea" target="_blank" class="hover:text-[#ed2d7c]">Instagram</a>
                <a href="https://x.com/boletea" target="_blank" class="hover:text-[#ed2d7c]">X</a>
            </div>
        </div>
    </footer>

    @livewireScripts
    <script>
        // Toggle mobile menu
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
