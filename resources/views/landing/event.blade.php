@extends('layouts.template')

@section('title', $event->title)

@section('titleFacebook', '' . $event->title)
@section('imageFacebook', 'https://www.boletea.com/img/' . $event->image . '')
@section('descriptionFacebook', '' . $event->subtitle)

@section('titleTwitter', '' . $event->title)
@section('imageTwitter', 'https://www.boletea.com/img/' . $event->image . '')
@section('descriptionTwitter', '' . $event->subtitle)

@section('titleMeta', '' . $event->title)
@section('imageMeta', 'https://www.boletea.com/img/' . $event->image . '')
@section('descriptionMeta', '' . $event->subtitle)


@push('json-ld')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "{{ $event->title }}",
            "startDate": "{{ $event->created_at }}",
            "endDate": "{{ $event->updated_at }}",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "eventStatus": "https://schema.org/EventScheduled",
            "location": {
                "@type": "Place",
                "name": "{{ $event->recinto }} {{ $event->ciudad }}",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "100 West Snickerpark Dr",
                    "addressLocality": "Snickertown",
                    "postalCode": "19019",
                    "addressRegion": "PA",
                    "addressCountry": "US"
                }
            },
            "image": "https://boletea.com/img/sliderFlansQueretaro.jpg",
            "description": "{{ $event->description }}",
            "offers": {
                "@type": "Offer",
                "url": "https://www.boletea.com/evento/{{ $event->name }}",
                "price": null,
                "priceCurrency": "MXN",
                "availability": "https://schema.org/InStock",
                "validFrom": "2024-05-21T12:00"
            },
            "performer": {
                "@type": "PerformingGroup",
                "name": "{{ $event->subtitle }}"
            },
            "organizer": {
                "@type": "Organization",
                "name": "Boletea Tickets",
                "url": "https://boletea.com"
            }
        }
    </script>
@endpush

@section('content')
    <div class="grid md:grid-cols-3 gap-6 items-center bg-white my-12 mx-4 md:mx-44 py-3 shadow-md" x-data="{ open: true }">
        <div class="col-span-3 md:col-span-1">
            <img class="w-full mx-auto md:ml-4 rounded-md" src="{{ asset('img/' . $event->image . '') }}" alt="">
            <div class="hidden md:block col-span-3 justify-self-auto ml-4 md:text-center my-6">
                @if ($event->visible == 'si')
                    <a href="{{ $event->link }}"
                        class="text-white text-lg font-bold bg-rojo md:px-14 px-20 mx-auto py-2 w-full hover:bg-red-700">Comprar
                        boletos</a>
                @endif
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
            @if ($event->description)
                <h3 class="cursor-pointer" x-on:click="open=!open">Descripción del evento <i
                        class="fas fa-chevron-down"></i>
                </h3>
                <p x-show="open" class="text-md font-bold text-justify">
                    {!! $event->description !!}

                </p>
            @endif
            @if ($event->name == 'elcaminoparasalvarunmatrimonio')
                <a class="px-2 py-1 text-2xl text-white bg-green-600 hover:bg-green-800"
                    href="{{ route('streamLive') }}">Ingresar al stream</a>
            @endif
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
                    @if ($event->visible == 'si')
                        <a href="{{ $event->link }}"
                            class="text-white text-lg font-bold bg-rojo px-6 md:px-24 py-2 w-full hover:bg-red-700">Comprar
                            boleto</a>
                    @endif
                </div>
                <div class="mx-4 px-1">
                    @switch($event->lugar)
                        @case('coahuila')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex flex-wrap justify-start">
                                <img class="flex-auto w-20 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgCintilloColiseoCentenario.png') }}" alt="">
                                <img class="flex-auto w-24 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgCintilloCimaco.png') }}" alt="">
                                <img class="md:flex-auto w-13 md:w-16 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgeSombrererialafe.jpeg') }}" alt="">
                                <img class="w-13 md:w-13 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}"
                                    title="Suc. Fco. I. Madero, Suc. San Pedro">
                                <img class="w-13 md:w-13 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/cdvVaqueroNorteño.png') }}" title="Paseo Durango">
                            </div>
                        @break

                        @case('durango')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex justify-center items-center flex-wrap">
                                <img class="flex-auto w-36 h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/cdvVaqueroNorteño.png') }}" alt="">
                                <img class="flex-auto w-20 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgCintilloColiseoCentenario.png') }}" alt="">
                                <img class="flex-auto w-24 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgCintilloCimaco.png') }}" alt="">
                                <img class="md:flex-auto w-13 md:w-16 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgeSombrererialafe.jpeg') }}" alt="">
                                <img class="w-13 md:w-13 object-contain object-center mx-2"
                                    src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}"
                                    title="Suc. Fco. I. Madero, Suc. San Pedro">
                            </div>
                        @break

                        @case('campeche')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex flex-wrap">
                                <img class="w-full h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/logoHolidayInn.png') }}" alt="">
                            </div>
                        @break

                        @case('quintanaroo')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex">
                                <img class="w-full h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/logo-bomssa.png') }}" alt="">
                                {{-- <img class="w-full h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/logo-cancun-plaza.png') }}" alt=""> --}}
                            </div>
                        @break

                        @case('yucatan')
                            <h4 class="text-3xl font-bold text-gray-800 text-center mb-3">Centros de venta:</h4>
                            <div class="flex flex-wrap">
                                <img class="w-full h-12 object-contain object-center mx-1"
                                    src="{{ asset('cdvs/logo-bomssa.png') }}" alt="">
                            </div>
                        @break

                        @default
                    @endswitch
                </div>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-3 gap-6 items-center h-5 bg-white mb-4 mx-4 md:mx-44 shadow-md lg:hidden">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
            crossorigin="anonymous"></script>
        <!-- Anuncio 1 -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5976709800052610" data-ad-slot="1210961234"
            data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
@endsection
