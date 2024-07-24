<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Inicio') | Boletea Tickets</title>
    <!-- Open Graph para Facebook -->
    <meta property="og:title" content=@yield('titleFacebook')>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.boletea.com">
    <meta property="og:image" content=@yield('imageFacebook')>
    <meta property="og:description" content=@yield('descriptionFacebook')>
    <meta property="og:site_name" content="Boletea Tickets">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content=@yield('titleTwitter')>
    <meta name="twitter:description" content=@yield('descriptionTwitter')>
    <meta name="twitter:creator" content=@yield('authTwitter')>
    <meta name="twitter:image" content=@yield('imageTwitter')>

    <!-- Schema.org para Google+ -->
    <meta itemprop="name" content=@yield('titleMeta')>
    <meta itemprop="description" content=@yield('descriptionMeta')>
    <meta itemprop="image" content=@yield('imageMeta')>


    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/bicon.png') }}"> --}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/superslides.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    {{-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/themes/splide-default.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide-core.min.css"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.2/plyr.css" />

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114937810-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-114937810-1');
    </script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
        crossorigin="anonymous"></script>
    <script src="https://cdn.plyr.io/3.7.2/plyr.js"></script>

    @stack('json-ld')
</head>


<body style="background-image: url('{{ asset('img/bg-boleto.png') }}');">
    @include('landing.include.navbar')
    <div>
        @yield('slider')
        @yield('content')
        <!-- Bottom-Left Corner -->
        <!-- Bottom-Right Corner -->
        <div class="fixed bottom-4 right-4">
            <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-5 rounded-full shadow-lg">
                <i class="fab fa-whatsapp text-5xl"> </i>
            </button>
        </div>
    </div>
    <footer class="grid grid-cols-1 md:grid-cols-3 items-center bg-black h-56">
        <div class="px-10 mx-auto mt-3">
            <img class="w-48" src="{{ asset('img/logoBoleteaNegro.png') }}" alt="">
        </div>
        <div class="hidden lg:block text-gray-300">
            <ul>
                <li><a class="cursor-pointer font-bold text-sm hover:text-gray-500"
                        href="{{ route('index') }}">Inicio</a></li>
                <li><a class="cursor-pointer font-bold text-sm hover:text-gray-500" href="{{ route('about') }}">Quiénes
                        Somos</a></li>
                <li><a class="cursor-pointer font-bold text-sm hover:text-gray-500"
                        href="{{ route('conditions') }}">Terminos y
                        condiciones</a></li>
                <li><a class="cursor-pointer font-bold text-sm hover:text-gray-500"
                        href="{{ route('privacity') }}">Aviso de privacidad</a></li>
                <li><a class="cursor-pointer font-bold text-sm hover:text-gray-500"
                        href="https://boletea.com.mx/reporting/login.asp">Acceso a promotores</a></li>
            </ul>
        </div>
        <div class="text-gray-300 text-md hidden lg:block">
            <h2 class="text-2xl mb-2 font-semibold">Contáctanos</h2>
            <div>
                <i class="far fa-envelope"></i> contacto@boletea.com
            </div>
            <div>
                <a href="https://wa.me/5215644992294"><i class="fab fa-whatsapp"> </i> +52 56-44-99-22-94</a>
            </div>
        </div>
        <div class="bg-black text-center col-span-3 text-gray-100 text-xs">
            Todos los derechos reservados - Boletea Tickets &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>
        </div>
    </footer>

    @yield('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.1.3/dist/js/splide.min.js"></script>
    <script>
        new Splide('.splide', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            interval: 5500,
        }).mount();
    </script>
    <script>
        // Change the second argument to your options:
        // https://github.com/sampotts/plyr/#options
        const player = new Plyr('video', {
            captions: {
                active: true
            }
        });

        // Expose player so it can be used from the console
        window.player = player;
    </script>
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.5,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 4,
                    }
                },
            ]
        });
        new Glider(document.querySelector('.glider-2'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.glider-2 ~ .dots',
            arrows: {
                prev: '.glider-2 ~ .glider-prev',
                next: '.glider-2 ~ .glider-next'
            },
            responsive: [{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.5,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 4,
                    }
                },
            ]
        });
        new Glider(document.querySelector('.glider-3'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.glider-3 ~.dots',
            arrows: {
                prev: '.glider-3 ~.glider-prev',
                next: '.glider-3 ~.glider-next'
            },
            responsive: [{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.5,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 4,
                    }
                },
            ]
        });
        new Glider(document.querySelector('.glider-4'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.glider-4 ~.dots',
            arrows: {
                prev: '.glider-4 ~.glider-prev',
                next: '.glider-4 ~.glider-next'
            },
            responsive: [{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.5,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 4,
                    }
                },
            ]
        });
        new Glider(document.querySelector('.glider-5'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            draggable: true,
            dots: '.glider-5 ~.dots',
            arrows: {
                prev: '.glider-5 ~.glider-prev',
                next: '.glider-5 ~.glider-next'
            },
            responsive: [{
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 1.5,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3.5,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 4.5,
                        slidesToScroll: 4,
                    }
                },
            ]
        });
    </script>
</body>

</html>
