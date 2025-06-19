<div x-data="{ open: false }" class="bg-white shadow-md border-b border-rojo sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('index') }}">
                    <img class="h-10 w-auto" src="{{ asset('img/logoBoletea.png') }}" alt="Boletea">
                </a>
            </div>

            <!-- Menú Desktop -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('index') }}" class="text-sm font-semibold text-gray-700 hover:text-rojo transition">
                    Inicio
                </a>
                <a href="{{ route('about') }}" class="text-sm font-semibold text-gray-700 hover:text-rojo transition">
                    Quiénes Somos
                </a>
                <a href="{{ route('conditions') }}"
                    class="text-sm font-semibold text-gray-700 hover:text-rojo transition">
                    Términos y Condiciones
                </a>
                <a href="{{ route('privacity') }}"
                    class="text-sm font-semibold text-gray-700 hover:text-rojo transition">
                    Aviso de Privacidad
                </a>
                <a href="{{ route('cdvs') }}" class="text-sm font-semibold text-gray-700 hover:text-rojo transition">
                    Centros de Ventas
                </a>
            </div>

            <!-- Botón Iniciar sesión -->
            <div class="hidden md:block">
                <a href="https://boletea.com.mx/myaccount.asp?gifrompage=1&gitopage=1"
                    class="inline-block px-4 py-2 text-sm font-bold text-white bg-rojo rounded-lg shadow-md hover:bg-red-600 transition">
                    Iniciar sesión
                </a>
            </div>

            <!-- Botón Mobile -->
            <div class="md:hidden">
                <button @click="open = true"
                    class="p-2 rounded-md bg-rojo text-white hover:bg-red-600 transition focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú Mobile -->
    <div x-show="open" @click.away="open = false" x-transition
        class="md:hidden bg-white shadow-md rounded-b-xl px-6 pt-4 pb-6 space-y-4">
        <a href="{{ route('index') }}"
            class="block text-sm font-semibold text-gray-700 hover:text-rojo transition">Inicio</a>
        <a href="{{ route('about') }}"
            class="block text-sm font-semibold text-gray-700 hover:text-rojo transition">Quiénes Somos</a>
        <a href="{{ route('conditions') }}"
            class="block text-sm font-semibold text-gray-700 hover:text-rojo transition">Términos y Condiciones</a>
        <a href="{{ route('privacity') }}"
            class="block text-sm font-semibold text-gray-700 hover:text-rojo transition">Aviso de Privacidad</a>
        <a href="{{ route('cdvs') }}"
            class="block text-sm font-semibold text-gray-700 hover:text-rojo transition">Centros de Ventas</a>
        <a href="https://boletea.com.mx/myaccount.asp?gifrompage=1&gitopage=1"
            class="block w-full text-center mt-4 px-4 py-2 text-white font-bold bg-rojo rounded-md hover:bg-red-600 transition">
            Iniciar sesión
        </a>
    </div>
</div>
