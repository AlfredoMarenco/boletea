@extends('layouts.template')

@section('content')
    <section class="bg-opacity-10">
        <div class="flex justify-center items-end text-rigth mb-6 px-2 md:mb-8 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-5xl font-bold text-rojo">Feria Torreón</h1>
            </div>
        </div>
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-10 md:gap-5 mx-4 md:mx-16 mb-10 shadow-md bg-white bg-opacity-10">
            @foreach ($events as $event)
                @if ($event->slider)
                    <li class="splide__slide">
                        <a href="{{ route('showEvent', $event) }}">
                            <div class="relative h-96 md:h-[40rem] w-full bg-cover bg-center rounded-lg shadow-lg overflow-hidden"
                                style="background-image: url('{{ asset('img/' . $event->slider) }}');">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-40 hover:bg-opacity-60 transition duration-300">
                                    <div
                                        class="flex flex-col justify-center items-center h-full text-center text-white p-4 md:p-12">
                                        <h2 class="text-base md:text-xl font-semibold uppercase tracking-wide">
                                            {{ $event->ciudad }}</h2>
                                        <h3 class="text-lg md:text-2xl font-bold mt-1">{{ $event->recinto }}</h3>
                                        <h1 class="text-2xl md:text-5xl font-extrabold mt-2">{{ $event->title }}</h1>
                                        <p class="text-lg md:text-2xl font-semibold mt-3">{{ $event->fecha }}</p>
                                        <a href="{{ route('showEvent', $event) }}"
                                            class="mt-4 inline-block bg-red-600 hover:bg-white hover:text-red-600 border-2 border-white transition-colors duration-300 px-6 py-2 text-sm md:text-base font-bold rounded-full">
                                            Comprar Boletos
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach
        </div>
    </section>
@endsection
