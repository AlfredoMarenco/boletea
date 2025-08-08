<div id="eventos">
    <!-- Título -->
    <div class="flex justify-between items-center mb-8 px-4 md:px-16">
        <h1 class="text-2xl md:text-3xl font-extrabold text-rojo tracking-tight">⭐ Eventos destacados</h1>
        {{--
        <a href="{{ route('allEvents') }}"
            class="hidden md:inline-block bg-white text-rojo border border-rojo font-semibold text-base px-4 py-2 rounded-lg hover:bg-rojo hover:text-white transition duration-200">
            Ver todos
        </a>
        --}}
    </div>

    <!-- Grid de eventos -->
    <div
        class="bg-gray-100 py-4 grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-2 md:gap-2 lg:gap-8 xl:gap-8 px-4 md:px-16 mb-12 items-stretch">
        @foreach ($events as $event)
            <div wire:key="event-{{ $event->id }}"
                class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 hover:shadow-xl transition duration-300 flex flex-col h-full">

                <!-- Imagen con enlace -->
                <a href="{{ $event->link }}" class="block">
                    <div class="aspect-[16/10] overflow-hidden relative group w-full">
                        <img src="{{ asset('img/' . $event->slider) }}"
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
</div>

