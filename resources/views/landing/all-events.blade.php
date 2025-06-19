@extends('layouts.template')

@section('content')
<section class="py-10 px-4 md:px-16 bg-zinc-900 text-white">
    <div class="mb-10 text-center">
        <h1 class="text-4xl font-extrabold text-yellow-400 tracking-tight">Todos los eventos</h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse ($events as $event)
            <div class="bg-zinc-800 rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition duration-300">
                <a href="{{ route('showEvent', $event) }}">
                    <img src="{{ asset('img/' . $event->image) }}"
                        alt="{{ $event->title }}"
                        class="w-full h-64 object-cover object-top">

                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2 text-white truncate">
                            {{ Str::limit($event->title, 30, '...') }}
                        </h3>

                        <p class="text-sm text-zinc-400 mb-1">
                            <i class="fas fa-map-marker-alt text-red-500 mr-1"></i> {{ $event->ciudad }}
                        </p>

                        <p class="text-sm text-zinc-400 mb-4">
                            <i class="far fa-calendar text-yellow-400 mr-1"></i> {{ $event->fecha }}
                        </p>

                        <a href="{{ route('showEvent', $event) }}"
                            class="block w-full text-center bg-yellow-800 hover:bg-yellow-600 text-black font-semibold py-2 rounded transition">
                            Comprar Boletos
                        </a>
                    </div>
                </a>
            </div>
        @empty
            <p class="col-span-4 text-center text-zinc-300">No hay eventos disponibles en este momento.</p>
        @endforelse
    </div>
</section>
@endsection
