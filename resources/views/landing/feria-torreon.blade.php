@extends('layouts.template')

@section('content')
    <section>
        <div class="flex justify-center items-end text-rigth mb-6 px-2 md:mb-8 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-5xl font-bold text-rojo">Feria Torreón</h1>
            </div>
        </div>
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-10 md:gap-5 mx-4 md:mx-16 mb-10 shadow-md bg-white">
            @forelse ($events as $event)
                <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
                    <a href="{{ route('showEvent', $event) }}">
                        <img class="rounded-t-lg h-96 md:h-72 w-full object-cover object-top mx-auto"
                            src="{{ asset('img/' . $event->image . '') }}" alt="">
                        <div class="grid grid-cols-1 place-content-end mt-4">

                            <div class="px-2 md:ml-3 col-span-2 text-left">
                                {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}</h3>
                                {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                <p class="font-semibold text-sm mb-2"><i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                    {{ $event->ciudad }}</p>
                                <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                                    {{ $event->fecha }}</p>
                            </div>
                            <div class="col-span-3 pt-4 w-full place-self-end">
                                <a href="{{ route('showEvent', $event) }}"
                                    class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                                    Boletos</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

@endsection
