@extends('layouts.template')

@section('slider')
    <section>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <a class="sm:hidden lg:block" href="https://atlasfc.boletea.com.mx/"
                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">
                            <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-top"
                                style="background-image: url('{{ asset('img/sliderAperturaAtlas2022.png') }}');">
                                <div class="md:hidden lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-60">
                                    <div class="text-center w-full text-white py-20">
                                        <h1 class="text-xl md:text-sm md:my-1 font-bold">Guadalajara, Jalisco.</h1>
                                        <h1 class="text-xl md:text-2xl md:my-3 font-bold">Estadio Guadalajara
                                        </h1>
                                        <h1 class="text-3xl md:text-5xl md:my-3 font-bold">Torneo de Apertura 2022 Varonil
                                        </h1>
                                        <a href="https://atlasfc.boletea.com.mx/"
                                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                                            Boletos</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a class="sm:hidden lg:block" href="https://atlasfc.boletea.com.mx/"
                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">
                            <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-top"
                                style="background-image: url('{{ asset('img/sliderAbonoVaronilAtlas.png') }}');">
                                <div
                                    class="md:hidden lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-60">
                                    <div class="text-center w-full text-white py-20">
                                        <h1 class="text-xl md:text-sm md:my-1 font-bold">Guadalajara, Jalisco.</h1>
                                        <h1 class="text-xl md:text-2xl md:my-3 font-bold">Estadio Guadalajara
                                        </h1>
                                        <h1 class="text-3xl md:text-5xl md:my-3 font-bold">Abono Torneo de Apertura 2022
                                        </h1>
                                        <a href="https://atlasfc.boletea.com.mx/"
                                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                                            Boletos</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a class="sm:hidden lg:block" href="https://atlasfc.boletea.com.mx/"
                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">
                            <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-top"
                                style="background-image: url('{{ asset('img/sliderAperturaFemenilAtlas2022.png') }}');">
                                <div
                                    class="md:hidden lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-60">
                                    <div class="text-center w-full text-white py-20">
                                        <h1 class="text-xl md:text-sm md:my-1 font-bold">Guadalajara, Jalisco.</h1>
                                        <h1 class="text-xl md:text-2xl md:my-3 font-bold">Estadio Guadalajara
                                        </h1>
                                        <h1 class="text-3xl md:text-5xl md:my-3 font-bold">Torneo de Apertura 2022 Femenil
                                        </h1>
                                        <a href="https://atlasfc.boletea.com.mx/"
                                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                                            Boletos</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a class="sm:hidden lg:block" href="https://atlasfc.boletea.com.mx/"
                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">
                            <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-top"
                                style="background-image: url('{{ asset('img/sliderAbonoFemenilAtlas2022.png') }}');">
                                <div
                                    class="md:hidden lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-60">
                                    <div class="text-center w-full text-white py-20">
                                        <h1 class="text-xl md:text-sm md:my-1 font-bold">Guadalajara, Jalisco.</h1>
                                        <h1 class="text-xl md:text-2xl md:my-3 font-bold">Estadio Guadalajara
                                        </h1>
                                        <h1 class="text-3xl md:text-5xl md:my-3 font-bold">Abono Torneo de Apertura 2022
                                            Femenil
                                        </h1>
                                        <a href="https://atlasfc.boletea.com.mx/"
                                            class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                                            Boletos</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @foreach ($events as $event)
                        @if ($event->slider != null)
                            <li class="splide__slide">
                                <a class="sm:hidden lg:block" href="{{ route('showEvent', $event) }}"
                                    class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">
                                    <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-top"
                                        style="background-image: url('{{ asset('img/' . $event->slider) }}');">
                                        <div
                                            class="md:hidden lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-60">
                                            <div class="text-center w-full text-white py-20">
                                                <h1 class="text-xl md:text-sm md:my-1 font-bold">{{ $event->ciudad }}</h1>
                                                <h1 class="text-xl md:text-2xl md:my-3 font-bold">{{ $event->recinto }}
                                                </h1>
                                                <h1 class="text-3xl md:text-5xl md:my-3 font-bold">{{ $event->title }}
                                                </h1>
                                                <h1 class="text-2xl md:text-3xl md:mt-3 mb-2 md:mb-6 font-bold ">
                                                    {{ $event->fecha }}
                                                </h1>
                                                <a href="{{ route('showEvent', $event) }}"
                                                    class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
                                                    Boletos</a>
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
    <section class="">
        @livewire('search')
        <div class="grid md:grid-cols-3 gap-6 items-center h-5 bg-white mb-4 mx-4 md:mx-44 shadow-md lg:hidden">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
                crossorigin="anonymous"></script>
            <!-- search -->
            <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px"
                data-ad-client="ca-pub-5976709800052610" data-ad-slot="9361422184"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        @livewire('event-list')
    </section>

    <section>
        <div class="md:mx-16 mb-8 md:flex items-center bg-white py-2 shadow-md">
            <img class="object-cover w-full md:w-2/3" src="{{ asset('img/bannerSantosLaguna.jpg') }}" alt="">
            <div class="text-center mx-auto bg-white">
                <h3 class="md:text-3xl font-bold mb-2 mt-1 md:mt-0 md:mb-4">Compra tus boletos aquí!!</h3>
                <a href="https://clubsantos.boletea.com.mx"
                    class="md:px-3 md:py-2 px-2 py-1 bg-green-700 font-semibold rounded-sm hover:bg-green-600 text-white">Próximos
                    partidos</a>
            </div>
        </div>
        <div class="md:mx-16 mb-8 md:flex items-center bg-white py-2 shadow-md">
            <div class="text-center mx-auto bg-white">
                <h3 class="md:text-3xl font-bold mb-2 mt-1 md:mt-0 md:mb-4">Compra tus boletos aquí!!</h3>
                <a href="https://atlasfc.boletea.com.mx"
                    class="md:px-3 md:py-2 px-2 py-1 bg-red-700 font-semibold rounded-sm hover:bg-red-700 text-white">Próximos
                    partidos</a>
            </div>
            <img class="object-cover w-full md:w-2/3 mt-4 lg:mt-0" src="{{ asset('img/BANNER_PRN_BOLETEA.png') }}"
                alt="">
        </div>
    </section>
    <section>
        <div class="grid md:grid-cols-3 gap-6 items-center h-5 bg-white mb-4 mx-4 md:mx-44 shadow-md lg:hidden">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
                crossorigin="anonymous"></script>
            <!-- Index -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5976709800052610"
                data-ad-slot="4520637976" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </section>
@endsection
