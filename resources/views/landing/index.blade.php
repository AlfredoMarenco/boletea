@extends('layouts.template')

@section('slider')
    <section>
        <div class="splide mx-auto max-w-full">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($events as $event)
                        @if ($event->slider)
                            <li class="splide__slide">
                                <a href="{{ route('showEvent', $event) }}">
                                    <div class="relative h-96 md:h-[40rem] w-full bg-cover bg-center rounded-lg shadow-lg overflow-hidden"
                                        style="background-image: url('{{ asset('img/' . $event->slider) }}');">
                                        <div class="absolute inset-0 bg-black bg-opacity-40 hover:bg-opacity-60 transition duration-300">
                                            <div class="flex flex-col justify-center items-center h-full text-center text-white p-4 md:p-12">
                                                <h2 class="text-base md:text-xl font-semibold uppercase tracking-wide">{{ $event->ciudad }}</h2>
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
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="py-8">
        @livewire('search')
        @livewire('event-list')
    </section>

    <section>
        <div class="mx-4 md:mx-16 mb-10 flex flex-col md:flex-row items-center bg-white p-4 rounded-lg shadow-lg">
            <img class="w-full md:w-2/3 rounded-lg shadow-sm object-cover" src="{{ asset('img/algodonerosbanner.png') }}" alt="Algodoneros Banner">
            <div class="text-center md:text-left mt-4 md:mt-0 md:ml-6">
                <h3 class="text-xl md:text-3xl font-bold text-gray-800">¡Compra tus boletos aquí!</h3>
                <a href="https://unionlaguna.boletea.com.mx/default.asp"
                    class="inline-block mt-3 bg-red-700 hover:bg-red-800 text-white font-semibold px-5 py-2 rounded-full transition duration-300 shadow-md">
                    Próximos Partidos
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-4 md:mx-44 mb-8">
            <div class="bg-white rounded-lg shadow-md p-4">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
                    crossorigin="anonymous"></script>
                <ins class="adsbygoogle block w-full" data-ad-client="ca-pub-5976709800052610"
                    data-ad-slot="4520637976" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </section>
@endsection
