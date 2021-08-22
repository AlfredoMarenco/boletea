@extends('layouts.template')

@section('content')
    <div class="grid md:grid-cols-3 bg-white my-12 md:mx-44 py-3 shadow-md">
        <div class="col-span-3 md:col-span-1">
            <img class="w-4/5 mx-auto md:ml-4 rounded-md" src="{{ asset('img/' . $event->image . '') }}" alt="">
        </div>
        <div class="col-span-2 p-4 mt-1 text-center md:text-left">
            <h3 class="text-2xl font-semibold">Detalles del evento</h3>
            <h1 class="text-5xl font-bold text-rojo mt-4 mb-5">
                {{ $event->title }}
            </h1>
            <h3 class="text-2xl font-bold text-gray-900 mt-4 mb-5">
                {{ $event->subtitle }}
            </h3>
            <p class="font-semibold text-gray-800 my-4"><i class="far fa-calendar text-2xl text-center mr-3"></i>
                <span>{{ $event->fecha }} | {{ $event->hora }}</span>
            </p>
            <p class="font-semibold text-gray-800 mb-4"><i class="fab fa-fort-awesome text-2xl text-center mr-3"></i>
                <span>{{ $event->recinto }}</span>
            </p>
            <p class="font-semibold text-gray-800 mb-4"><i class="fas fa-map-marker-alt text-2xl text-center mr-3"></i>
                <span>{{ $event->ciudad }}</span>
            </p>
            <div class="flex items-center justify-around py-2">
                <div class="mt-4">
                    <a href="{{ $event->link }}" class="block text-white text-lg font-bold bg-rojo px-20 py-2 w-full">Comprar boleto</a>
                </div>
                <div class="">
                    <h4 class="text-2xl text-gray-800">Centros de venta</h4>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>

            </div>
        </div>
    </div>
@endsection
