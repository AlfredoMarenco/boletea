@extends('layouts.template2')

@section('content')
<div class="bg-white text-gray-900">

    <!-- HERO SECTION -->
    <section class="bg-[#ed2d7c] text-white py-20 px-6 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">¡Tus boletos a un clic!</h1>
        <p class="text-lg md:text-xl mb-6">Descubre los mejores eventos en tu ciudad</p>
        <a href="#eventos" class="bg-white text-[#ed2d7c] px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
            Ver eventos
        </a>
    </section>

    <!-- EVENTOS DESTACADOS -->
    <section id="eventos" class="py-16 px-6 bg-gray-100">
        <h2 class="text-3xl font-bold text-center mb-10 text-[#ed2d7c]">Eventos Destacados</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($events as $event)
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                    <img src="{{ $event->image }}" alt="{{ $event->name }}" class="w-full h-52 object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-semibold">{{ $event->name }}</h3>
                        <p class="text-sm text-gray-600">{{ $event->location }} - {{ $event->date }}</p>
                        <a href="{{ route('events.show', $event->id) }}" class="block mt-4 text-[#ed2d7c] font-bold">
                            Ver detalles →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- CATEGORÍAS -->
    <section class="py-16 px-6 bg-white">
        <h2 class="text-3xl font-bold text-center mb-10 text-[#ed2d7c]">Categorías</h2>
        <div class="flex flex-wrap justify-center gap-4">
            @foreach(['Música', 'Teatro', 'Conferencias', 'Festivales', 'Deportes'] as $cat)
                <button class="px-6 py-2 border-2 border-[#ed2d7c] text-[#ed2d7c] rounded-full hover:bg-[#ed2d7c] hover:text-white transition">
                    {{ $cat }}
                </button>
            @endforeach
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#121212] text-white py-10 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <p>&copy; {{ date('Y') }} Boletea. Todos los derechos reservados.</p>
            <div class="flex space-x-4">
                <a href="https://www.facebook.com/boletea" target="_blank" class="hover:text-[#ed2d7c]">Facebook</a>
                <a href="https://www.instagram.com/boletea" target="_blank" class="hover:text-[#ed2d7c]">Instagram</a>
                <a href="https://x.com/boletea" target="_blank" class="hover:text-[#ed2d7c]">X</a>
            </div>
        </div>
    </footer>

</div>
@endsection
