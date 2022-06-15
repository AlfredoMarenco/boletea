<div>
    <div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-6">
        <div class="col-span-1">
            <ul class="bg-white p-6 text-center">
                <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer"
                    wire:click="navigation('1')">Quintana Roo</li>
                <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer"
                    wire:click="navigation('2')">Coahuila</li>
                {{-- <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer">Durango</li> --}}
            </ul>
        </div>
        @if ($cancun)
            <div class="col-span-4 mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 justify-items-center">
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Tulum<br></span>Avenida Cobá Norte, manzana 27, lote 002, entre Oriente y Sagitario
                            Oriente, Tulum, Quintana Roo.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 7:00 pm
                            <br>
                            Domingo: 11:00 am a 2:00 pm
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Playa del Carmen<br></span>Avenida Juárez, manzana 212, lote 10, entre Avenida 55 y 60, avenida colonia Ejidal, Playa del Carmen, Quintana Roo.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 7:00 pm
                            <br>
                            Domingo: 11:00 am a 2:00 pm
                        </p>
                    </div>
                </div>
            </div>
        @endif
        @if ($torreon)
            <div class="col-span-4 mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 justify-items-center">
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloColiseoCentenario.png') }}" class="mx-auto mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Coliseo
                                Centenario<br></span>San Pedro de
                            las Colonias S/N, Arboleda 27018 Torreón, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 6:00 pm</p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloCimaco.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc.
                                Hidalgo<br></span>Av. Hidalgo 399. Primero de Cobian centro 2700 Torreón, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            11:00 am a 7:00 pm</p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloCimaco.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc. 4
                                Caminos<br></span>Plaza Cuatro Caminos, Blvrd Independencia 1300 Torreón, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            11:00 am a 7:00 pm</p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc. Fco. I.
                                Madero<br></span>Nicolás Bravo #20-local 2. Madero. 27900 Fco. I. Madero, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábados :
                            10:00 am a 7:00 pm
                            <br>
                            Domingo: 10:00 am a 2:00 pm
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc. San
                                Pedro<br></span>Zaragoza No. 42-Local 2, Centro, 27800 San Pedro, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábados :
                            11:00 am a 7:00 pm</p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/cdvVaqueroNorteño.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Paseo
                                Durango<br>
                            </span>Blvd. Felipe Pescador 1401 centro comercial paseo, La Esperanza, 34080 Durango, Dgo.
                        </p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            11:00 am a 9:00 pm</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
