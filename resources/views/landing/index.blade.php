@extends('layouts.template')

@section('slider')
    <section>
        <div class="lg:relative flex flex-cols-2 h-96 w-full justify-center items-center lg:bg-cover bg-no-repeat bg-center"
            style="background-image: url('{{ asset('img/sliders/dosnombresnormales_desktop.jpeg') }}');">
            <div class="lg:absolute w-full h-96 bg-black bg-opacity-40 hover:bg-opacity-60 block hover:hidden">
                <div class="text-center w-full  text-white py-20">
                    <h1 class="text-2xl my-3">Coliseo Centenario</h1>
                    <h1 class="text-5xl my-3">DUELO Y LA FIRMA EN CONCIERTO</h1>
                    <h1 class="text-3xl mt-3 mb-6 ">20 DE MARZO 2021 - 9:00 PM</h1>
                    <a href=""
                        class="text-xl border border-solid px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                        Boletos</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section>
        <div class="text-center p-5">
            <h1 class="text-2xl font-semibold">Próximos eventos</h1>
        </div>
        <div class="grid grid-cols-3 gap-14 mx-16">
            <div class="rounded-lg border border-gray-300">
                <img class="rounded-lg" src="{{ asset('img/unnamed-48.jpg') }}" alt="">
                <div class="grid grid-cols-3 items-center my-4">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rojo mx-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h5 class="font-bold text-xl text-rojo">06</h5>
                        <h5 class="font-semibold text-md text-gray-600">MAY</h5>
                    </div>
                    <div class="col-span-2 text-left">
                        <h3 class="font-bold text-xl">Duelo y la Firma en concierto</h3>
                        <h3 class="font-semibold text-sm">Coliseo Centenario</h3>
                    </div>
                </div>
            </div>
            <div class="rounded-lg border border-gray-300">
                <img class="rounded-lg" src="{{ asset('img/Volverte_a_ver_-_Streaming_Portada_Boletia_STREAM.jpg') }}"
                    alt="">
                <div class="grid grid-cols-3 items-center my-4">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rojo mx-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h5 class="font-bold text-xl text-black">06</h5>
                        <h5 class="font-semibold text-md text-gray-600">MAY</h5>
                    </div>
                    <div class="col-span-2 text-left">
                        <h3 class="font-bold text-xl">Alex Saldaña - Noche de Comedia</h3>
                        <h3 class="font-semibold text-sm">Coliseo Centenario</h3>
                    </div>
                </div>
            </div><div class="rounded-lg border border-gray-300">
                <img class="rounded-lg" src="{{ asset('img/unnamed-48.jpg') }}" alt="">
                <div class="grid grid-cols-3 items-center my-4">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rojo mx-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h5 class="font-bold text-xl text-black">06</h5>
                        <h5 class="font-semibold text-md text-gray-600">MAY</h5>
                    </div>
                    <div class="col-span-2 text-left">
                        <h3 class="font-bold text-xl">Duelo y la Firma en concierto</h3>
                        <h3 class="font-semibold text-sm">Coliseo Centenario</h3>
                    </div>
                </div>
            </div>
            <div class="rounded-lg border border-gray-300">
                <img class="rounded-lg" src="{{ asset('img/Volverte_a_ver_-_Streaming_Portada_Boletia_STREAM.jpg') }}"
                    alt="">
                <div class="grid grid-cols-3 items-center my-4">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rojo mx-auto" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h5 class="font-bold text-xl text-black">06</h5>
                        <h5 class="font-semibold text-md text-gray-600">MAY</h5>
                    </div>
                    <div class="col-span-2 text-left">
                        <h3 class="font-bold text-xl">Duelo y la Firma en concierto</h3>
                        <h3 class="font-semibold text-sm">Coliseo Centenario</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
