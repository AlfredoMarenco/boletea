<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artistData['name'] }} - Información</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .bg-dark-gray { background-color: #1c1c1c; } /* Gris oscuro en lugar de negro */
        .bg-red-custom { background-color: #c90000; }
        .text-red-custom { color: #c90000; }
        .bg-gray-transparent { background-color: rgba(28, 28, 28, 0.85); }
        .text-light-gray { color: #f0f0f0; }
    </style>
</head>
<body class="bg-dark-gray text-light-gray">

    <!-- Encabezado con Logo y Banner -->
    <header class="p-4 mb-6 bg-gray-transparent shadow-lg">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <!-- Logo del Artista -->
            <div class="mb-4 md:mb-0">
                <img src="https://via.placeholder.com/150x150" alt="Logo del Artista" class="w-24 h-24 object-cover rounded-full shadow-xl hover:shadow-2xl transition-shadow">
            </div>
            <!-- Banner del Artista -->
            <div class="flex-1 mx-4">
                <img src="https://via.placeholder.com/1200x300" alt="Banner del Artista" class="w-full h-auto rounded-lg shadow-xl hover:shadow-2xl transition-shadow">
            </div>
        </div>
    </header>

    <div class="container mx-auto p-6">
        <!-- Nombre del Artista -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-red-custom hover:text-red-500 transition-colors">{{ $artistData['name'] }}</h1>
        </div>

        <!-- Redes Sociales -->
        <section id="redes-sociales" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-center text-light-gray">Redes Sociales</h2>
            <div class="flex justify-center space-x-6">
                <a href="{{ $artistData['socials']['twitter'] }}" target="_blank" class="hover:text-red-custom transition-colors">
                    <img src="https://via.placeholder.com/40x40" alt="Twitter" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity shadow-md hover:shadow-lg">
                </a>
                <a href="{{ $artistData['socials']['instagram'] }}" target="_blank" class="hover:text-red-custom transition-colors">
                    <img src="https://via.placeholder.com/40x40" alt="Instagram" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity shadow-md hover:shadow-lg">
                </a>
                <a href="{{ $artistData['socials']['youtube'] }}" target="_blank" class="hover:text-red-custom transition-colors">
                    <img src="https://via.placeholder.com/40x40" alt="YouTube" class="w-10 h-10 opacity-80 hover:opacity-100 transition-opacity shadow-md hover:shadow-lg">
                </a>
            </div>
        </section>

        <!-- Merchandising -->
        <section id="merchandising" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-center text-light-gray">Merchandising</h2>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                <img src="https://via.placeholder.com/120x120" alt="Imagen de Merchandising" class="w-32 h-32 md:w-40 md:h-40 object-cover rounded-lg shadow-lg hover:shadow-2xl transition-shadow opacity-80 hover:opacity-100 transition-opacity">
                <a href="{{ $artistData['merchantLink'] }}" target="_blank" class="text-red-custom underline hover:text-red-500 text-xl transition-colors">Visita nuestra tienda</a>
            </div>
        </section>

        <!-- Próximos Eventos -->
        <section id="eventos" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-center text-light-gray">Próximos Eventos</h2>
            <ul>
                @foreach($artistData['upcomingEvents'] as $event)
                    <li class="flex items-center mb-4 bg-gray-transparent p-4 rounded-lg shadow-lg hover:shadow-2xl transition-shadow flex-col md:flex-row">
                        <img src="https://via.placeholder.com/60x60" alt="Imagen de Evento" class="w-16 h-16 object-cover rounded-full mr-0 md:mr-4 mb-2 md:mb-0 opacity-80 hover:opacity-100 transition-opacity">
                        <div class="text-center md:text-left">
                            <span class="font-semibold text-red-custom hover:text-red-500 transition-colors">{{ $event['date'] }}</span> - {{ $event['location'] }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>

        <!-- Zona Fan, Membresías y Club de Fans -->
        <section id="zona-fan" class="mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-center text-light-gray">Únete a la Experiencia</h2>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8">
                <a href="{{ $artistData['fanZoneLink'] ?? '#' }}" target="_blank" class="text-red-custom underline hover:text-red-500 text-lg transition-colors">
                    Zona Fan
                </a>
                <a href="{{ $artistData['membershipLink'] ?? '#' }}" target="_blank" class="text-red-custom underline hover:text-red-500 text-lg transition-colors">
                    Membresías
                </a>
                <a href="{{ $artistData['fanClubLink'] ?? '#' }}" target="_blank" class="text-red-custom underline hover:text-red-500 text-lg transition-colors">
                    Club de Fans
                </a>
            </div>
        </section>
    </div>

</body>
</html>
