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
        <div
            class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 text-center mb-2 lg:mb-6 px-2 py-1.5 bg-blue-600 font-bold text-md lg:text-2xl shadow-sm rounded-md hover:bg-blue-100 text-white hover:text-blue-500 mx-20 lg:mx-48">
            <a class="flex justify-center items-center" href="{{ route('juntossolofans') }}">Solo Para FANS <svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 font-bold ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                </svg>
            </a>
        </div>
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-10 md:gap-5 mx-4 md:mx-16 mb-10 bg-opacity-30 p-1 rounded-lg">
            @forelse ($events as $event)
                <div
                    class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
                    <a href="{{ route('showEvent', $event) }}">
                        <img class="rounded-t-lg h-auto md:h-auto w-full object-cover object-top mx-auto"
                            src="{{ asset('img/' . $event->image . '') }}" alt="">
                        <div class="grid grid-cols-1 place-content-end mt-4">

                            <div class="px-2 md:ml-3 col-span-2 text-left">
                                {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 100, '...') }}</h3>
                                {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                <p class="font-semibold text-sm mb-2"><i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                    {{ $event->ciudad }}</p>
                                <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                                    {{ $event->fecha }}</p>
                            </div>
                            <div class="col-span-3 pt-4 w-full place-self-end">
                                <a href="{{ route('showEvent', $event) }}"
                                    class="text-center block px-3 py-2 bg-blue-500 text-white font-bold hover:bg-blue-600 shadow-lg rounded-md mx-2 my-2">Comprar
                                    Boletos</a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="flex justify-around lg:p-10 text-white items-center text-md lg:text-2xl mb-6">
            <a href="https://www.instagram.com/j_medina37/">
                <p
                    class="hover:text-blue-400 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-pointer">

                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 font-semibold text-center mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </span>Jorge Medina
                </p>
            </a>
            <a href="https://www.instagram.com/josicuenoficial/?hl=es">
                <p
                    class="hover:text-blue-400 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-pointer">

                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 font-semibold text-center mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </span>Josi Cuen
                </p>
            </a>
            <a href="https://www.instagram.com/starmediaconsulting">
                <p
                    class="hover:text-blue-400 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 cursor-pointer">
                    <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 font-semibold text-center mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                        </svg>
                    </span>Star Media
                </p>
            </a>
        </div>
    </section>
@endsection
