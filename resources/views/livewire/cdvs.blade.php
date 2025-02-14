<div>
    <div class="grid grid-cols-1 lg:grid-cols-5 lg:gap-6">
        <div class="col-span-1">
            <ul class="bg-white p-6 text-center">

                <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer"
                    wire:click="navigation('2')">Coahuila</li>
                <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer"
                    wire:click="navigation('3')">Mérida</li>
                <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer"
                    wire:click="navigation('1')">Quintana Roo</li>
                {{-- <li class="border-rojo p-2 border-2 uppercase my-1 hover:underline cursor-pointer">Durango</li> --}}
                <li class="mt-10 hidden lg:block">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5976709800052610"
                        crossorigin="anonymous"></script>
                    <!-- Cdvs -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5976709800052610"
                        data-ad-slot="4234518932" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </li>
            </ul>
        </div>
        @if ($cancun)
            <div class="col-span-4 mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 justify-items-center">
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
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/RgKt8aHhMNJ1ZfxG7">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Playa del Carmen<br></span>Avenida Juárez, manzana 212, lote 10, entre Avenida 55 y
                            60, avenida colonia Ejidal, Playa del Carmen, Quintana Roo.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 7:00 pm
                            <br>
                            Domingo: 11:00 am a 2:00 pm
                        </p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/zBNedWWdxQCduUs27">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Cancún<br></span>Avenida Lopez Portillo Lote 44 SMZ 66 Manzana 3 Esquina Torcasitas
                            Cancún, 77500 Cancún, Q.R.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 7:00 pm
                            <br>
                            Domingo: 11:00 am a 2:00 pm
                        </p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/RKfGVVCRfwDXSYSb6">Cómo llegar</a>
                        </p>
                    </div>
                </div>
            </div>
        @endif
        @if ($merida)
            <div class="col-span-4 mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 justify-items-center">
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Plaza Patio<br></span>Calle 10 y 14, Cto. Colonias, Trava Quintero Chuminipolis, 97158
                            Mérida, Yuc.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            10:00 am a 9:00 pm
                        </p>
                        <p>SOLO BOLETO DIGITAL</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/37Gkc1KHwBZ1xvNF6">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Av. 60 Norte<br></span>Calle.60 No.247 X 21 y 23, Col. Chuburna, 97208 Mérida, Yuc.
                        </p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 8:00 pm
                            <br>
                            Domingo: 10:00 am a 3:00 pm
                        </p>
                        <p>SOLO BOLETO DIGITAL</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/ij8BapwGJVSd6EdY7">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Caucel<br></span>Calle 59 por 64 661 Cd Caucel 97314, 97314 Mérida, Yuc</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            10:00 am a 9:00 pm
                        </p>
                        <p>SOLO BOLETO DIGITAL</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/66bxnCFZD9oti3Ht5">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/logo-bomssa.png') }}" class="mx-auto w-36 mb-2" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Bomssa
                                - Plaza las Américas<br></span>C. 21 327-5A-7J, Miguel Hidalgo, 97229 Mérida, Yuc.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            9:00 am a 9:00 pm
                        </p>
                        <p>SOLO BOLETO DIGITAL</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/RKfGVVCRfwDXSYSb6">Cómo llegar</a>
                        </p>
                    </div>
                </div>
            </div>
        @endif
        @if ($torreon)
            <div class="col-span-4 mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 justify-items-center">
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloColiseoCentenario.png') }}" class="mx-auto mb-2"
                            alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Coliseo
                                Centenario<br></span>San Pedro de
                            las Colonias S/N, Arboleda 27018 Torreón, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábado :
                            10:00 am a 6:00 pm</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/uer4iqZH5rRzCy1v8">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloCimaco.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc.
                                Hidalgo<br></span>Av. Hidalgo 399. Primero de Cobian centro 2700 Torreón, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            11:00 am a 7:00 pm</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/iVgcqPmcrhyfmBiN8">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloCimaco.png') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc. 4
                                Caminos<br></span>Plaza Cuatro Caminos, Blvrd Independencia 1300 Torreón, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            11:00 am a 7:00 pm</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/bJsnwsEQVu5umFcu8">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}" class="mx-auto my-4"
                            alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc. Fco. I.
                                Madero<br></span>Nicolás Bravo #20-local 2. Madero. 27900 Fco. I. Madero, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábados :
                            10:00 am a 7:00 pm
                            <br>
                            Domingo: 10:00 am a 2:00 pm
                        </p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/LKPESqSczALWCr648">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgCintilloLos3garcia.png') }}" class="mx-auto my-4"
                            alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Suc. San
                                Pedro<br></span>Zaragoza No. 42-Local 2, Centro, 27800 San Pedro, Coah.</p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Sábados :
                            11:00 am a 7:00 pm</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/2aPKMtPXnrr4uhki6">Cómo llegar</a>
                        </p>
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
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/AszMEWHsmZ44n852A">Cómo llegar</a>
                        </p>
                    </div>
                    <div class="text-center bg-white rounded shadow-lg py-4 px-1.5">
                        <img src="{{ asset('cdvs/imgeSombrererialafe.jpeg') }}" class="mx-auto my-4" alt="">
                        <p class="text-sm font-semibold mb-2"><span class="font-bold text-lg text-rojo">Sombrereria la fe<br>
                            </span>Cepeda 111, Zona Centro, Francisco I. Madero, Coah. CP: 27900
                        </p>
                        <p class="text-xs font-semibold"><span class="font-bold">Horarios: <br></span>Lunes -
                            Domingo :
                            11:00 am a 9:00 pm</p>
                        <p class="flex justify-center items-center font-bold text-md text-rojo">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <a href="https://maps.app.goo.gl/2UGHY7B4i7i3zdBU8">Cómo llegar</a>
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
