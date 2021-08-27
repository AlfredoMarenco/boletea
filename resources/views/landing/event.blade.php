@extends('layouts.template')

@section('content')
    <div class="grid md:grid-cols-3 gap-6 items-center bg-white my-12 mx-4 md:mx-44 py-3 shadow-md" x-data="{open:false}">
        <div class="col-span-3 md:col-span-1">
            <img class="w-full mx-auto md:ml-4 rounded-md" src="{{ asset('img/' . $event->image . '') }}" alt="">
            <div class="hidden md:block col-span-3 justify-self-auto ml-4 md:text-center my-6">
                <a href="{{ $event->link }}"
                    class="text-white text-lg font-bold bg-rojo px-24 py-2 w-full hover:bg-red-700">Comprar
                    boleto</a>
            </div>
        </div>
        <div class="col-span-2 p-4 mt-1 text-center md:text-left">
            <h3 class="text-xl font-semibold">Detalles del evento</h3>
            <h1 class="text-4xl font-bold text-rojo mt-4 mb-2">
                {{ $event->title }}
            </h1>
            <h3 class="text-md font-semibold text-gray-900 mt-2 mb-3">
                {!! $event->subtitle !!}
            </h3>
            <h3 class="cursor-pointer" x-on:click="open=!open">Descripción del evento <i class="fas fa-chevron-down"></i>
            </h3>
            <p x-show="open" class="text-xs text-justify">
                {!! $event->description !!}
            </p>
            <p class="font-semibold text-gray-800 my-2 md:my-4"><i class="far fa-calendar text-2xl text-center mr-3"></i>
                <span>{{ $event->fecha }} | {{ $event->hora }}</span>
            </p>
            <p class="font-semibold text-gray-800 mb-2 md:mb-4"><i
                    class="fab fa-fort-awesome text-2xl text-center mr-3"></i>
                <span>{{ $event->recinto }}</span>
            </p>
            <p class="font-semibold text-gray-800 mb-2 md:mb-4"><i
                    class="fas fa-map-marker-alt text-2xl text-center mr-3"></i>
                <span>{{ $event->ciudad }}</span>
            </p>
            <div class="md:flex items-center justify-around">
                <div class="block md:hidden my-6">
                    <a href="{{ $event->link }}"
                        class="text-white text-lg font-bold bg-rojo px-24 py-2 w-full hover:bg-red-700">Comprar
                        boleto</a>
                </div>
                <div class="mx-4 px-1">
                    @switch($event->lugar)
                        @case('coahuila')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex flex-wrap justify-center">
                                <img class="flex-auto w-20 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/imgCintilloColiseoCentenario.png') }}" alt="">
                                <img class="flex-auto w-20 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/imgCintilloBIPS.png') }}" alt="">
                                <img class="flex-auto w-24 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/imgCintilloCimaco.png') }}" alt="">
                                <img class="md:flex-auto w-13 md:w-20 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}" alt="">
                            </div>
                        @break
                        @case('durango')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex flex-wrap">
                                <img class="w-full h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/cdvVaqueroNorteño.png') }}" alt="">
                            </div>
                        @break
                        @case('campeche')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex flex-wrap">
                                <img class="w-full h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/logoHolidayInn.png') }}" alt="">
                            </div>
                        @break
                        @default

                    @endswitch
                </div>

            </div>
        </div>
    </div>
@endsection
