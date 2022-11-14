<div>
    {{-- Start Search --}}
    {{-- <div class="grid grid-cols-1 md:grid-cols-1 justify-items-end mt-6 mx-4 md:mx-16">
        <div class="mt-1 w-full flex rounded-md shadow-sm">
            <input wire:model="search" type="text"
                class="focus:border-rojo focus:ring-rojo w-full text-center border-gray-300 font-semibold bg-gray-200 py-1 border rounded-md"
                placeholder="Busca tu evento, nombre, artista, recinto, ciudad">
        </div>
    </div> --}}
    {{-- End Search --}}
    <div class="flex justify-between items-end text-rigth mb-6 px-2 md:mb-3 mx-4 mt-4 md:mx-16">
        <h1 class="text-lg md:text-3xl font-bold text-rojo">Próximos eventos</h1>
        {{-- <a href="{{ route('allEvents') }}"
            class="font-semibold bg-white text-rojo border text-sm md:text-lg border-rojo md:py-1 py-1 px-2 md:px-3 rounded-lg hover:bg-rojo hover:text-gray-100 cursor-pointer">Ver
            todos</a> --}}
    </div>

    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-10 md:gap-5 mx-4 md:mx-16 mb-10 shadow-lg bg-white py-4 px-1 rounded-lg">
        <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
            <a href="https://boletea.com/evento/tenisfestgnpplazamexico"">
                <img class="rounded-t-lg h-auto md:h-auto w-full object-cover object-top mx-auto"
                    src="https://boletea.com/img/imgeRafaelNadalCasperRuud.jpeg" alt="">
                <div class="grid grid-cols-1 place-content-end mt-4">

                    <div class="px-2 md:ml-3 col-span-2 text-left">
                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                        <h3 class="font-bold text-lg mb-2">{{ Str::limit('TENNIS FEST GNP', 15, '...') }}</h3>
                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                        <p class="font-semibold text-sm mb-2"><i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                            Ciudad de México.</p>
                        <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                            Jueves 1 de diciembre 2022</p>
                    </div>
                    <div class="col-span-3 pt-4 w-full place-self-end">
                        {{-- <a href="{{ $event->link }}"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                            Boletos</a> --}}
                        <a href="https://boletea.com/evento/tenisfestgnpplazamexico"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                            Boletos</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
            <a href="https://boletea.com/evento/christiannodalpuebla">
                <img class="rounded-t-lg h-auto md:h-auto w-full object-cover object-top mx-auto"
                    src="https://boletea.com/img/imgeChristianNodalPuebla.jpeg" alt="">
                <div class="grid grid-cols-1 place-content-end mt-4">

                    <div class="px-2 md:ml-3 col-span-2 text-left">
                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                        <h3 class="font-bold text-lg mb-2">{{ Str::limit('CHRISTIAN NODAL', 15, '...') }}</h3>
                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                        <p class="font-semibold text-sm mb-2"><i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                            Puebla, Puebla.</p>
                        <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                            Viernes 18 de noviembre 2022</p>
                    </div>
                    <div class="col-span-3 pt-4 w-full place-self-end">
                        {{-- <a href="{{ $event->link }}"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                            Boletos</a> --}}
                        <a href="https://boletea.com/evento/christiannodalpuebla"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                            Boletos</a>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
            <a href="https://boletea.com/evento/christiannodaloaxaca">
                <img class="rounded-t-lg h-auto md:h-auto w-full object-cover object-top mx-auto"
                    src="https://boletea.com/img/imgeNodalOaxaca.jpg" alt="">
                <div class="grid grid-cols-1 place-content-end mt-4">

                    <div class="px-2 md:ml-3 col-span-2 text-left">
                        {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                        <h3 class="font-bold text-lg mb-2">{{ Str::limit('CHRISTIAN NODAL', 15, '...') }}</h3>
                        {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                        <p class="font-semibold text-sm mb-2"><i class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                            Oaxaca, Oaxaca.</p>
                        <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                            Domingo 20 de noviembre 2022</p>
                    </div>
                    <div class="col-span-3 pt-4 w-full place-self-end">
                        {{-- <a href="{{ $event->link }}"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                            Boletos</a> --}}
                        <a href="https://boletea.com/evento/christiannodaloaxaca"
                            class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                            Boletos</a>
                    </div>
                </div>
            </a>
        </div>
        @foreach ($events as $event)
            @php
                $fecha = date('Ymd');
            @endphp
            @if ($event->fechaBusqueda >= $fecha)
                @if ($event->id != 212 || $event->id != 183 || $event->id != 214)
                    <div class="col-span-4 md:col-span-1 rounded-lg border bg-white border-gray-300 shadow-lg">
                        <a href="{{ route('showEvent', $event) }}">
                            <img class="rounded-t-lg h-auto md:h-auto w-full object-cover object-top mx-auto"
                                src="{{ asset('img/' . $event->image . '') }}" alt="">
                            <div class="grid grid-cols-1 place-content-end mt-4">

                                <div class="px-2 md:ml-3 col-span-2 text-left">
                                    {{-- <h5 class="hidden lg: font-semibold text-md">{{ $event->fecha }}</h5> --}}
                                    <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}</h3>
                                    {{-- <h3 class="font-semibold text-sm"><i class="fab fa-fort-awesome text-center"></i> {{ $event->recinto }}</h3> --}}
                                    <p class="font-semibold text-sm mb-2"><i
                                            class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                        {{ $event->ciudad }}</p>
                                    <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                                        {{ $event->fecha }}</p>
                                </div>
                                <div class="col-span-3 pt-4 w-full place-self-end">
                                    {{-- <a href="{{ $event->link }}"
                                    class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                                    Boletos</a> --}}
                                    <a href="{{ route('showEvent', $event) }}"
                                        class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                                        Boletos</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            @endif
        @endforeach
    </div>
    {{-- <div class="mx-6 md:mx-16 mb-6">
        <div class="glider-contain">
            <ul class="glider">
                @foreach ($events as $event)
                    <li class="mx-2 rounded-lg border bg-white border-gray-300 shadow-lg">
                        <a href="{{ route('showEvent', $event) }}">
                            <img class="rounded-t-lg h-96 md:h-72 w-full object-cover object-top mx-auto"
                                src="{{ asset('img/' . $event->image . '') }}" alt="">
                            <div class="grid grid-cols-1 place-content-end mt-4">
                                <div class="px-2 md:ml-3 col-span-2 text-left">
                                    <h3 class="font-bold text-lg mb-2">{{ Str::limit($event->title, 15, '...') }}</h3>
                                    <p class="font-semibold text-sm mb-2"><i
                                            class="fas fa-map-marker-alt mr-1 text-rojo"></i>
                                        {{ Str::limit($event->ciudad, 20, '...') }}</p>
                                    <p class="font-semibold text-xs"><i class="far fa-calendar mr-1 text-rojo"></i>
                                        {{ $event->fecha }}</p>
                                </div>
                                <div class="col-span-3 pt-4 w-full place-self-end">
                                    <a href="{{ route('showEvent', $event) }}"
                                        class=" text-center block px-3 py-2 bg-rojo text-white font-bold hover:bg-red-600 shadow-lg">Comprar
                                        Boletos</a>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>
    </div> --}}


</div>
