@extends('layouts.template')

@section('content')
    <div class="grid grid-cols-3 bg-white my-12 mx-44 pt-3 shadow-lg">
        <div class="">
            <img class="w-4/5 ml-4" src="{{ asset('img/' . $event->image . '') }}" alt="">
        </div>
        <div class="col-span-2 p-4 mt-1">
            <h3 class="text-2xl font-semibold">Detalles del evento</h3>
            <h1 class="text-5xl font-bold text-rojo mt-4 mb-5">
                {{ $event->title }}
            </h1>
            <p class="font-semibold text-gray-800 my-4"><i class="far fa-calendar text-2xl text-center mr-3"></i>
                <span>{{ $event->fecha }}</span>
            </p>
            <p class="font-semibold text-gray-800 mb-4"><i class="fab fa-fort-awesome text-2xl text-center mr-3"></i>
                <span>{{ $event->recinto }}</span>
            </p>
            <p class="font-semibold text-gray-800 mb-4"><i class="fas fa-map-marker-alt text-2xl text-center mr-3"></i>
                <span>{{ $event->ciudad }}</span>
            </p>
            <div class="flex items-center justify-around py-2">
                <div>
                    <h4 class="text-2xl">Centros de venta</h4>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="block">
                    <a href="" class="block text-white font-bold bg-rojo px-16 py-2 w-full">Comprar boleto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
