<div>
    {{-- Start Search --}}
    <div class="grid grid-cols-1 md:grid-cols-2 justify-items-end mt-6 mx-4 md:mx-16">
        <div class="mt-1 w-full md:col-start-2 flex rounded-md shadow-sm">
            <input wire:model="search" type="text"
                class="focus:border-rojo focus:ring-rojo w-full border-gray-300 font-semibold bg-gray-200 py-1 border-r-0 rounded-l-md"
                placeholder="Busca tu evento, nombre, artista, recinto, ciudad">
        </div>
    </div>
    {{-- End Search --}}
    <div class="text-rigth mb-6 md:mb-3 mx-4 mt-4 md:mx-16">
        <h1 class="text-3xl text-rojo">Próximos eventos</h1>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 md:gap-5 mx-4 md:mx-16 mb-10 shadow-md">
        @forelse ($events as $event)
            <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-md">
                <a href="{{ route('showEvent', $event) }}">
                    <img class="rounded-t-lg h-96 md:h-80 w-full object-cover object-top mx-auto"
                        src="{{ asset('img/' . $event->image . '') }}" alt="">
                    <div class="grid grid-cols-1 md:items-center mt-4">

                        <div class="px-2 md:ml-3 col-span-2 text-left">
                            {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                            <h3 class="font-bold text-xl mb-2">{{ $event->title }}</h3>
                            {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                            <p class="font-semibold text-sm"><i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                {{ $event->ciudad }}</p>
                            <p class="font-semibold text-sm"><i class="far fa-calendar mr-1 text-rojo"></i>
                                {{ $event->fecha }}</p>
                        </div>
                        <div class="md:flex hidden md:text-center">

                        </div>
                        <div class="col-span-3 pt-4 w-full">
                            <a href="{{ route('showEvent', $event) }}"
                                class=" text-center block px-3 py-2 bg-rojo text-white font-bold">Comprar Boletos</a>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <div class="col-span-4 rounded-lg bg-white border-gray-300 text-center">
                <p>No hay resultados para la busqueda... {{ $search }}</p>
            </div>
        @endforelse
        @if ($events->count() >= $perPage)
            <div class="col-span-4 bg-white text-center py-2 shadow-md hover:bg-gray-100 hover:text-gray-700 ">
                <a wire:click="morePerPage" class="font-bold text-gray-900 cursor-pointer ">Ver
                    más</a>
            </div>
        @endif
    </div>

</div>
