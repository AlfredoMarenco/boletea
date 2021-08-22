@extends('layouts.template')

@section('slider')
    <section>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($events as $event)
                        @if ($event->slider != null)
                            <li class="splide__slide">
                                <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-center"
                                    style="background-image: url('{{ asset('img/' . $event->slider . '') }}');">
                                    <div
                                        class="lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-40 block hover:hidden">
                                        <div class="text-center w-full  text-white py-20">
                                            <h1 class="text-xl md:text-sm md:my-1">{{ $event->ciudad }}</h1>
                                            <h1 class="text-xl md:text-2xl md:my-3">{{ $event->recinto }}</h1>
                                            <h1 class="text-3xl md:text-5xl md:my-3">{{ $event->title }}</h1>
                                            <h1 class="text-2xl md:text-3xl md:mt-3 mb-2 md:mb-6 ">{{ $event->fecha }}
                                            </h1>
                                            <a href="{{ route('showEvent', $event) }}"
                                                class="text-sm md:text-xl border border-solid px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                                                Boletos</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section>
        @livewire('event-list')
    </section>

    <section>
        <div class="md:mx-16 mb-8 md:flex items-center bg-white py-2">
            <img class="object-cover w-full md:w-2/3" src="{{ asset('img/bannerSantosLaguna.jpg') }}" alt="">
            <div class="text-center mx-auto bg-white">
                <h3 class="md:text-3xl font-bold mb-2 mt-1 md:mt-0 md:mb-4">Compra tus boletos aquí!!</h3>
                <a href=""
                    class="md:px-3 md:py-2 px-2 py-1 bg-green-700 font-semibold rounded-sm hover:bg-green-600 text-white">Próximos
                    partidos</a>
            </div>
        </div>
    </section>
@endsection
