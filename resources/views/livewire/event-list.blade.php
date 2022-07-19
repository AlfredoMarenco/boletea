<div>
    <div class="flex justify-between items-end text-right mb-6 px-2 md:mb-3 mx-4 mt-4 md:mx-16">
        <h1 class="text-lg md:text-3xl font-bold text-rojo">Próximos eventos</h1>
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-10 md:gap-5 mx-4 md:mx-16 mb-10 shadow-lg bg-white py-4 px-1 rounded-lg">
        @foreach ($events as $event)
            <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
                <a href="{{ route('showEvent', $event) }}">
                    <img class="rounded-t-lg h-auto md:h-auto w-full object-cover object-top mx-auto"
                        src="{{ Storage::url($event->image_url) }}" alt="">
                    <div class="grid grid-cols-1 place-content-end mt-4">
                        <div class="px-2 md:ml-3 col-span-2 text-left">
                            <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->name, 15, '...') }}</h3>
                            <p class="font-semibold text-sm mb-2">
                                <i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                {{ $event->performances->first()->enclosure->city->name }}
                            </p>
                            <p class="font-semibold text-xs">
                                <i class="far fa-calendar mr-1 text-rojo"></i>
                                {{ $carbon->parse($event->performances->first()->date_start)->translatedFormat('l j \\de F Y') }}
                            </p>
                        </div>
                        <div class="col-span-3 pt-4 w-full place-self-end">
                            <a href="{{ route('showEvent', $event) }}"
                                class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">
                                Comprar Boletos
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
