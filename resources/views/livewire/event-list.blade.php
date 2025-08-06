<div>
    <!-- Título -->
    <div class="flex justify-between items-center mb-8 px-4 md:px-16">
        <h1 class="text-2xl md:text-4xl font-extrabold text-rojo tracking-tight">🎟 Próximos Eventos</h1>
        {{-- <a href="{{ route('allEvents') }}"
            class="hidden md:inline-block bg-white text-rojo border border-rojo font-semibold text-base px-4 py-2 rounded-lg hover:bg-rojo hover:text-white transition duration-200">
            Ver todos
        </a> --}}
    </div>

    <!-- Grid de eventos -->
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-2 sm:gap-2 lg:gap-8 xl:gap-8 px-4 md:px-16 mb-12">
        @foreach ($events as $event)
            <div
                class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-200 hover:shadow-xl transition duration-300">
                <a href="{{ route('showEvent', $event) }}">
                    <!-- Imagen con efecto de presentación -->
                    <div class="aspect-[16/10] overflow-hidden relative group">
                        <img src="{{ asset('img/' . $event->image . '') }}"
                            class="w-full h-full lg:object-cover lg:object-center transition-transform duration-500 group-hover:scale-105 rounded-t-2xl"
                            alt="{{ $event->title }}">
                    </div>

                    <!-- Contenido -->
                    <div class="p-4 space-y-2">
                        <h3 class="text-sm lg:text-lg font-bold text-gray-800 truncate">
                            {{ Str::limit($event->title, 40, '...') }}
                        </h3>
                        <p class="text-xs lg:text-sm text-gray-600">
                            <i class="fas fa-map-marker-alt text-rojo mr-1"></i> {{ $event->ciudad }}
                        </p>
                        <p class="text-xs lg:text-sm text-gray-500">
                            <i class="far fa-calendar text-rojo mr-1"></i> {{ $event->fecha }}
                        </p>
                        <a href="{{ route('showEvent', $event) }}"
                            class="mt-4 block w-full text-sm sm:text-xs lg:text-md text-center bg-rojo text-white font-semibold  py-1 lg:py-2 rounded-md hover:bg-red-600 transition">
                            {{ $event->text_button }}
                        </a>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <!-- Paginación -->
    <div class="flex justify-center mt-8">
        {{ $events->links() }}
    </div>
    <!-- Fin de la paginación -->
</div>
<script>
    window.addEventListener('scroll-to-top', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
