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

@if ($event->name == 'ricardomontanertorreon')
    @push('publish')
        <!-- Meta Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '985725082295453');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=985725082295453&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->
    @endpush
@endif

@section('content')
    @php
        // Variable para la región del usuario (debes pasar esta info desde backend)
        $userRegion = request()->header('X-User-Region') ?? 'unknown';
    @endphp

    <div class="max-w-6xl mx-auto px-4 md:px-8 py-12 bg-white rounded-2xl shadow-xl grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Imagen y CTA -->
        <div>
            <div class="rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                <img src="{{ asset('img/' . $event->image) }}" alt="{{ $event->title }}"
                    class="w-full aspect-video object-cover">
            </div>
            @if ($event->visible == 'si' || $event->visible == 'ch' || $event->visible == 'FT')
                <a href="{{ $event->link }}"
                    class="mt-6 block w-full text-center bg-rojo hover:bg-red-600 text-white font-semibold py-3 rounded-lg transition">
                    {{ $event->text_button }}
                </a>
            @endif
            @if ($event->countdown == 'si')
                <div class="mt-4 text-center">
                    @livewire('countdown', ['updated_at' => $event->updated_at, 'eventName' => $event->name])
                </div>
            @endif
        </div>

        <!-- Detalles del evento -->
        <div class="md:col-span-2 space-y-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-rojo tracking-tight">{{ $event->title }}</h1>
            <h2 class="text-lg font-medium text-gray-700">{!! $event->subtitle !!}</h2>

            @if ($event->description)
                <button x-data="{ open: true }" @click="open = !open"
                    class="flex items-center gap-2 text-rojo font-semibold">
                    <span>Descripción del evento</span>
                    <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'" class="text-sm"></i>
                </button>
                <div x-show="open" x-cloak class="mt-2 text-gray-800 text-justify leading-relaxed">
                    {!! $event->description !!}
                </div>
            @endif

            <!-- Información básica en iconos -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-4 border-t border-gray-200">
                <div class="flex items-center gap-3">
                    <i class="far fa-calendar-alt text-rojo text-2xl"></i>
                    <span class="text-gray-800 font-semibold">{{ $event->fecha }} | {{ $event->hora }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-map-marker-alt text-rojo text-2xl"></i>
                    <span class="text-gray-800 font-semibold">{{ $event->recinto }}</span>
                </div>
                <div class="flex items-center gap-3">
                    <i class="fas fa-map-marked-alt text-rojo text-2xl"></i>
                    <span class="text-gray-800 font-semibold">{{ $event->ciudad }}</span>
                </div>
            </div>
            @if ($event->name == 'grupofronteratorreon')
                <div>
                    <img class="w-36 mx-auto" src="{{ asset('img/LOGOBOLEPAY.png') }}" alt="">
                    <div class="mt-2 text-gray-800 text-justify leading-relaxed">
                        <p>No olvides ingresar tu código BOLEPAY para acceder a los pagos diferidos al momento de comprar
                            tus boletos</p>
                    </div>
                </div>
            @endif

            {{-- Centros de Venta Slider --}}
            @php
                $centrosDeVenta = [];
                switch ($event->lugar) {
                    case 'coahuila':
                        $centrosDeVenta = [
                            ['img' => asset('cdvs/imgCintilloColiseoCentenario.png'), 'alt' => 'Coliseo Centenario'],
                            ['img' => asset('cdvs/imgCintilloCimaco.png'), 'alt' => 'Cimaco'],
                            ['img' => asset('cdvs/imgeSombrererialafe.jpeg'), 'alt' => 'Sombrereria La Fe'],
                            [
                                'img' => asset('cdvs/imgCintilloLos3garcia.png'),
                                'alt' => 'Los 3 Garcia',
                                'title' => 'Suc. Fco. I. Madero, Suc. San Pedro',
                            ],
                            [
                                'img' => asset('cdvs/logo 2 potrillos.png'),
                                'alt' => '2 Potrillos',
                                'title' => 'Los 2 Potrillos',
                            ],
                            /*  [
                                'img' => asset('cdvs/cdvVaqueroNorteño.png'),
                                'alt' => 'Vaquero Norteño',
                                'title' => 'Paseo Durango',
                            ], */
                        ];
                        break;
                    case 'coahuila2':
                        $centrosDeVenta = [
                            ['img' => asset('cdvs/imgCintilloColiseoCentenario.png'), 'alt' => 'Coliseo Centenario'],
                            ['img' => asset('cdvs/imgCintilloCimaco.png'), 'alt' => 'Cimaco'],
                            ['img' => asset('cdvs/imgeSombrererialafe.jpeg'), 'alt' => 'Sombrereria La Fe'],
                            [
                                'img' => asset('cdvs/imgCintilloLos3garcia.png'),
                                'alt' => 'Los 3 Garcia',
                                'title' => 'Suc. Fco. I. Madero, Suc. San Pedro',
                            ],
                            /* [
                                'img' => asset('cdvs/cdvVaqueroNorteño.png'),
                                'alt' => 'Vaquero Norteño',
                                'title' => 'Paseo Durango',
                            ], */
                            ['img' => asset('cdvs/maderablefactory.jpg'), 'alt' => 'Maderable Factory'],
                        ];
                        break;
                    case 'coahuila3':
                        $centrosDeVenta = [
                            ['img' => asset('cdvs/imgCintilloColiseoCentenario.png'), 'alt' => 'Coliseo Centenario'],
                            ['img' => asset('cdvs/imgCintilloCimaco.png'), 'alt' => 'Cimaco'],
                            [
                                'img' => asset('cdvs/imgCintilloLos3garcia.png'),
                                'alt' => 'Los 3 Garcia',
                                'title' => 'Suc. Fco. I. Madero, Suc. San Pedro',
                            ],
                            ['img' => asset('cdvs/maderablefactory.jpg'), 'alt' => 'Maderable Factory'],
                        ];
                        break;
                    case 'durango':
                        $centrosDeVenta = [
                            ['img' => asset('cdvs/cdvVaqueroNorteño.png'), 'alt' => 'Vaquero Norteño'],
                            ['img' => asset('cdvs/cdvSign.png'), 'alt' => 'Signature'],
                            /* ['img' => asset('cdvs/imgCintilloCimaco.png'), 'alt' => 'Cimaco'], */
                            /* ['img' => asset('cdvs/imgeSombrererialafe.jpeg'), 'alt' => 'Sombrereria La Fe'], */
                            /* [
                                'img' => asset('cdvs/imgCintilloLos3garcia.png'),
                                'alt' => 'Los 3 Garcia',
                                'title' => 'Suc. Fco. I. Madero, Suc. San Pedro',
                            ], */
                        ];
                        break;
                    case 'campeche':
                        $centrosDeVenta = [['img' => asset('cdvs/logoHolidayInn.png'), 'alt' => 'Holiday Inn']];
                        break;
                    case 'quintanaroo':
                        $centrosDeVenta = [['img' => asset('cdvs/logo-bomssa.png'), 'alt' => 'Bomssa']];
                        break;
                    case 'yucatan':
                        $centrosDeVenta = [['img' => asset('cdvs/logo-bomssa.png'), 'alt' => 'Bomssa']];
                        break;
                    case 'saltillo':
                        $centrosDeVenta = [
                            ['img' => asset('cdvs/imgCintilloCimaco.png'), 'alt' => 'Cimaco'],
                            ['img' => asset('cdvs/cdv_jr_logo.png'), 'alt' => 'CDV JR'],
                        ];
                        break;
                    case 'saltillo2':
                        $centrosDeVenta = [['img' => asset('cdvs/imgCintilloCimaco.png'), 'alt' => 'Cimaco']];
                        break;
                }
            @endphp

            @if (count($centrosDeVenta) > 0)
                <h4 class="text-3xl font-bold text-gray-800 text-center mb-3 mt-6">🎫 Centros de venta</h4>
                <div class="flex overflow-x-auto space-x-4 pb-4 hide-scrollbar">
                    @foreach ($centrosDeVenta as $centro)
                        <div class="flex-shrink-0 w-28 h-20 rounded-lg border border-gray-300 hover:border-rojo transition cursor-pointer flex items-center justify-center bg-white shadow-sm"
                            title="{{ $centro['title'] ?? $centro['alt'] }}">
                            <img src="{{ $centro['img'] }}" alt="{{ $centro['alt'] }}"
                                class="object-contain max-h-16 p-2">
                        </div>
                    @endforeach
                </div>
            @endif

            @if ($event->name == 'elcaminoparasalvarunmatrimonio')
                <a href="{{ route('streamLive') }}"
                    class="inline-block mt-4 text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition">
                    Ingresar al stream
                </a>
            @endif


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

        </div>
    </div>
@endsection
