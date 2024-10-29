@extends('layouts.custom')

@section('content')
    <section>
        <div class="flex justify-center items-end text-rigth px-2 mx-4 md:mx-16">
            <div>
                {{-- <h1 class="text-5xl font-bold text-blue-500 bg-white bg-opacity-80 p-4 rounded-2xl shadow-2xl"> JUNTOS TOUR
                </h1> --}}
                <img class="mx-auto w-2/3 lg:w-1/2 lg:-mb-10 lg:-mt-32 -mb-5 -mt-12" src="{{ asset('/img/logo_juntos.png') }}"
                    alt="">
            </div>
        </div>
        <div class="bg-gray-200 bg-opacity-30 rounded-lg p-2 lg:mx-56">
            <div class="text-white font-bold text-xs lg:text-lg text-center">
                <ul class="list-inside">
                    <li>&#8226; Boleto en las primeras 3 filas &#8226; Articulo de Merch.</li>
                    <li>Acceso preferencial al evento &#8226; Convivencia con los artostas</li>
                    <li>Backstage Tour &#8226; Zona VIP de espera previo al concierto</li>
                </ul>
            </div>
        </div>
        <img class="mx-auto lg:w-1/3 mt-4" src="{{ asset('img/jyj_picture.png') }}" alt="">
    </section>
@endsection
