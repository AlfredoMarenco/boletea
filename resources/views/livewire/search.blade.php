<div class="flex-1 relative mx-4 md:mx-16 mt-6 mb-6" x-data>
    <!-- Input de búsqueda -->
    <div class="relative shadow-md">
        <x-jet-input name="name" wire:model="search" type="text"
            class="w-full text-base font-medium border-2 border-rojo bg-gray-100 rounded-xl pl-12 pr-4 py-2 focus:border-rojo focus:ring-rojo text-center"
            placeholder="¿Estás buscando un evento?" autocomplete="off" />

        <!-- Ícono -->
        <div class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-rojo" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
            </svg>
        </div>
    </div>

    <!-- Resultados de búsqueda -->
    <div class="absolute w-full z-50 mt-2" :class="{'hidden': !$wire.open}" @click.away="$wire.open = false">
        <div class="bg-white rounded-xl shadow-xl overflow-hidden border border-gray-200">
            @forelse ($events as $event)
                @if ($event->visible == 'si')
                    <a href="{{ route('showEvent', $event) }}"
                        class="flex items-center gap-4 px-4 py-3 transition duration-200 hover:bg-rojo/90 hover:text-gray-500 text-gray-800">
                        <img src="{{ asset('img/' . $event->image) }}" alt="{{ $event->title }}"
                            class="w-16 h-16 object-cover rounded-lg shadow-sm border" />
                        <div class="flex flex-col leading-tight">
                            <span class="font-semibold text-sm md:text-base">{{ $event->title }}</span>
                            <span class="text-xs md:text-sm opacity-80">{{ $event->recinto }} / {{ $event->ciudad }}</span>
                        </div>
                    </a>
                @endif
            @empty
                <div class="px-4 py-4 text-sm text-gray-600">
                    No existen resultados para la búsqueda: <strong>{{ $search }}</strong>
                </div>
            @endforelse
        </div>
    </div>
</div>
