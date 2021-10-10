@extends('layouts.template')

@section('slider')
    <section>
        {{-- <div class="glider-contain">
            <ul class="glider-6">
                @foreach ($events as $event)
                    @if ($event->slider != null)
                        <li class="bg-white border-gray-300 shadow-lg">
                            <a href="{{ route('showEvent', $event) }}">
                                <img class="w-full h-full object-cover mx-auto"
                                    src="{{ asset('img/' . $event->slider . '') }}" alt="">
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div> --}}
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($events as $event)
                        @if ($event->slider != null)
                            <li class="splide__slide">
                                <div class="relative flex flex-cols-2 h-56 md:h-96 md:w-full justify-center items-center bg-cover bg-no-repeat bg-top"
                                    style="background-image: url('{{ asset('img/' . $event->slider) }}');">
                                    <div class="lg:absolute w-full md:h-96 bg-black bg-opacity-30 hover:bg-opacity-60">
                                        <div class="text-center w-full text-white py-20">
                                            <h1 class="text-xl md:text-sm md:my-1 font-bold">{{ $event->ciudad }}</h1>
                                            <h1 class="text-xl md:text-2xl md:my-3 font-bold">{{ $event->recinto }}</h1>
                                            <h1 class="text-3xl md:text-5xl md:my-3 font-bold">{{ $event->title }}</h1>
                                            <h1 class="text-2xl md:text-3xl md:mt-3 mb-2 md:mb-6 font-bold ">
                                                {{ $event->fecha }}
                                            </h1>
                                            <a href="{{ route('showEvent', $event) }}"
                                                class="text-sm md:text-xl border-solid border-2 font-bold px-4 rounded-lg py-2 hover:bg-white hover:text-black">Comprar
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


    <section class="">
        @livewire('search')
        @livewire('event-list')
    </section>

    <section class="
        hidden">
        <div class="flex justify-between items-end text-rigth mb-6 px-2 md:mb-3 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-3xl font-bold text-rojo">Feria Torreón</h1>
            </div>
            <a href="{{ route('eventsFeria') }}"
                class="font-semibold bg-white text-rojo border text-sm md:text-lg border-rojo md:py-1 py-1 px-2 md:px-3 rounded-lg hover:bg-rojo hover:text-gray-100 cursor-pointer">Ver
                todos</a>
        </div>
        <div class="mx-6 md:mx-16">
            <div class="glider-contain">
                <ul class="glider-2">
                    @foreach ($explanadaferia as $event)
                        <li class="mx-2 rounded-lg border bg-white border-gray-300 shadow-lg">
                            <a href="{{ route('showEvent', $event) }}">
                                <img class="rounded-t-lg h-96 md:h-72 w-full object-cover object-top mx-auto"
                                    src="{{ asset('img/' . $event->image . '') }}" alt="">
                                <div class="grid grid-cols-1 place-content-end mt-4">

                                    <div class="px-2 md:ml-3 col-span-2 text-left">
                                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                        <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}
                                        </h3>
                                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                        <p class="font-semibold text-sm mb-2"><i
                                                class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                            {{ Str::limit($event->ciudad, 20, '...') }}</p>
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
                        </li>
                    @endforeach
                </ul>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
    </section>

    <section class="hidden">
        <div class="flex justify-between items-end text-rigth mb-6 px-2 md:mb-3 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-3xl font-bold text-rojo">Poliforum</h1>
            </div>
            <a href="{{ route('eventsPoliforum') }}"
                class="font-semibold bg-white text-rojo border text-sm md:text-lg border-rojo md:py-1 py-1 px-2 md:px-3 rounded-lg hover:bg-rojo hover:text-gray-100 cursor-pointer">Ver
                todos</a>
        </div>
        <div class="mx-6 md:mx-16">
            <div class="glider-contain">
                <ul class="glider-3">
                    @foreach ($poliforum as $event)
                        <li class="mx-2 rounded-lg border bg-white border-gray-300 shadow-lg">
                            <a href="{{ route('showEvent', $event) }}">
                                <img class="rounded-t-lg h-96 md:h-72 w-full object-cover object-top mx-auto"
                                    src="{{ asset('img/' . $event->image . '') }}" alt="">
                                <div class="grid grid-cols-1 place-content-end mt-4">

                                    <div class="px-2 md:ml-3 col-span-2 text-left">
                                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                        <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}
                                        </h3>
                                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                        <p class="font-semibold text-sm mb-2"><i
                                                class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                            {{ Str::limit($event->ciudad, 20, '...') }}</p>
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
                        </li>
                    @endforeach
                </ul>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="flex justify-between items-end text-rigth mb-6 px-2 md:mb-3 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-xl lg:text-3xl font-bold text-rojo">Velaria - Feria Gómez Palacio</h1>
            </div>
            <a href="{{ route('eventsVelaria') }}"
                class="font-semibold bg-white text-rojo border text-sm md:text-lg border-rojo md:py-1 py-1 px-2 md:px-3 rounded-lg hover:bg-rojo hover:text-gray-100 cursor-pointer">Ver
                todos</a>
        </div>
        <div class="mx-6 md:mx-16">
            <div class="glider-contain">
                <ul class="glider-4">
                    @foreach ($velaria as $event)
                        <li class="mx-2 rounded-lg border bg-white border-gray-300 shadow-lg">
                            <a href="{{ route('showEvent', $event) }}">
                                <img class="rounded-t-lg h-96 md:h-72 w-full object-cover object-top mx-auto"
                                    src="{{ asset('img/' . $event->image . '') }}" alt="">
                                <div class="grid grid-cols-1 place-content-end mt-4">

                                    <div class="px-2 md:ml-3 col-span-2 text-left">
                                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                        <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}
                                        </h3>
                                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                        <p class="font-semibold text-sm mb-2"><i
                                                class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                            {{ Str::limit($event->ciudad, 20, '...') }}</p>
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
                        </li>
                    @endforeach
                </ul>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
    </section>
    <section class="mb-6">
        <div class="flex justify-between items-end text-rigth mb-6 px-2 md:mb-3 mx-4 mt-4 md:mx-16">
            <div>
                <h1 class="text-xl lg:text-3xl font-bold text-rojo">Palenque - Feria Gómez Palacio</h1>
            </div>
            <a href="{{ route('eventsPalenque') }}"
                class="font-semibold bg-white text-rojo border text-sm md:text-lg border-rojo md:py-1 py-1 px-2 md:px-3 rounded-lg hover:bg-rojo hover:text-gray-100 cursor-pointer">Ver
                todos</a>
        </div>
        <div class="mx-6 md:mx-16">
            <div class="glider-contain">
                <ul class="glider-5">
                    @foreach ($palenque as $event)
                        <li class="mx-2 rounded-lg border bg-white border-gray-300 shadow-lg">
                            <a href="{{ route('showEvent', $event) }}">
                                <img class="rounded-t-lg h-96 md:h-72 w-full object-cover object-top mx-auto"
                                    src="{{ asset('img/' . $event->image . '') }}" alt="">
                                <div class="grid grid-cols-1 place-content-end mt-4">

                                    <div class="px-2 md:ml-3 col-span-2 text-left">
                                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                        <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}
                                        </h3>
                                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                        <p class="font-semibold text-sm mb-2"><i
                                                class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                            {{ Str::limit($event->ciudad, 20, '...') }}</p>
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
                        </li>
                    @endforeach
                </ul>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>
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
    </section>
@endsection
