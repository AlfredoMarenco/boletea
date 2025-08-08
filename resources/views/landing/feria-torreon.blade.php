@extends('layouts.template')

@section('content')
    <section class="bg-opacity-10">
        <div class="flex justify-center items-end text-rigth mb-6 px-2 md:mb-8 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-5xl font-bold text-rojo">Feria Torreón</h1>
            </div>
        </div>
        <div
            class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 md:gap-2 lg:gap-8 xl:gap-8 px-4 md:px-16 mb-12 items-stretch">
            @foreach ($events as $event)
                <div wire:key="event-{{ $event->id }}"
                    class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 hover:shadow-xl transition duration-300 flex flex-col h-full">

                    <!-- Imagen con enlace -->
                    <a href="{{ $event->link }}" class="block">
                        <div class="aspect-[16/10] overflow-hidden relative group w-full">
                            <img src="{{ asset('img/' . $event->image) }}"
                                class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-105"
                                alt="{{ $event->title }}">
                        </div>
                    </a>

                    <!-- Contenido -->
                    <div class="p-4 space-y-2 flex flex-col flex-1 content-end">
                        <h3 class="text-sm lg:text-md font-bold text-gray-800">
                            {{ $event->title }}
                        </h3>
                        <p class="text-xs lg:text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-rojo mr-1"></i> {{ $event->ciudad }}
                        </p>
                        <p class="text-xs lg:text-sm text-gray-500">
                            <i class="far fa-calendar text-rojo mr-1"></i> {{ $event->fecha }}
                        </p>

                        <div>
                            <!-- Botón siempre al fondo -->
                            <a href="{{ $event->link }}"
                                class="mt-auto block w-full text-xs lg:text-md text-center bg-rojo text-white font-semibold py-1 lg:py-2 rounded-md hover:bg-red-600 transition">
                                {{ $event->text_button }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="block md:hidden mt-8 p-4 border border-gray-200 rounded-lg shadow-sm bg-gray-50">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
            crossorigin="anonymous"></script>
        <!-- search -->
        <ins class="adsbygoogle" style="display:inline-block;width:250px;height:50px"
            data-ad-client="ca-pub-5976709800052610" data-ad-slot="9361422184"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
@endsection
