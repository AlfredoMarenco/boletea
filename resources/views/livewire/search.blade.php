<div class="flex-1 relative mx-4 md:mx-16 mt-6" x-data>

    <x-jet-input name="name" wire:model="search" type="text"
        class="flex w-full shadow-lg border-rojo  focus:border-rojo focus:ring-rojo text-center font-semibold bg-gray-100 py-1 border-2 rounded-md"
        placeholder="¿Estas buscando un evento?" autocomplete="off" />

    <div class="absolute w-full hidden z-50" :class="{'hidden': !$wire.open}" @click.away="$wire.open = false">
        <div class="bg-white rounded-lg shadow mt-1">
            <div class="px-4 py-3 space-y-1 rounded-lg">
                @forelse ($events as $event)
                    @if ($event->visible == 'si')
                        <a href="{{ route('showEvent', $event) }}"
                            class="flex text-md hover:bg-rojo font-semibold bg-gray-100 hover:text-white items-center py-2 px-4 rounded-lg">
                            <img src="./img/{{ $event->image }}" class="w-24 mr-4" alt="">
                            <span class="mx-1 text-xs md:text-md"> {{ $event->title }}</span>
                            <span class="mx-1 text-xs md:text-md"> / </span>
                            <span class="mx-1 text-xs md:text-md"> {{ $event->recinto }}</span>
                            <span class="mx-1 text-xs md:text-md"> / </span>
                            <span class="mx-1 text-xs md:text-md"> {{ $event->ciudad }}</span>
                        </a>
                    @endif
                @empty
                    <div class="flex">
                        <div class="ml-4 text-trueGray-700 ">
                            <p class="text-md leading-5">No existen resultados para la busqueda : {{ $search }}
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
