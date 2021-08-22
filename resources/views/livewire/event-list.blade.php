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
    <div class="text-rigth md:mb-3 mx-4 mt-4 md:mx-16">
        <h1 class="text-3xl text-rojo">Próximos eventos</h1>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 md:gap-5 mx-4 md:mx-16 mb-10">
        @forelse ($events as $event)
            <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-md">
                <img class="rounded-t-lg h-72 md:h-80 w-full object-cover mx-auto"
                    src="{{ asset('img/' . $event->image . '') }}" alt="">
                <div class="grid grid-cols-1 md:grid-cols-3 md:items-center mt-4">
                    <div class="hidden md:block md:text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-rojo mx-auto" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h5 class="font-semibold text-md text-gray-600">{{ $event->fecha }}</h5>
                    </div>
                    <div class="px-2 md:px-0 col-span-2 text-left">
                        <h5 class="block lg:hidden font-semibold text-md text-gray-600">{{ $event->fecha }}</h5>
                        <h3 class="font-bold text-xl mb-2">{{ $event->title }}</h3>
                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                        <h3 class="font-semibold text-sm px-1"><i class="fas fa-map-marker-alt text-center"></i> {{ $event->ciudad }}</h3>
                    </div>
                    <div class="col-span-3 pt-4 w-full">
                        <a href="{{ route('showEvent', $event) }}"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold">Comprar Boletos</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-4 rounded-lg bg-white border-gray-300 text-center">
                <p>No hay resultados para la busqueda... {{ $search }}</p>
            </div>
        @endforelse
        @if ($events->count() >= $perPage)
            <div class="col-span-4 bg-white text-center shadow-md ">
                <a wire:click="morePerPage" class="font-bold text-gray-900 cursor-pointer hover:text-gray-700">Ver
                    más</a>
            </div>
        @endif
    </div>

</div>
