<div>
    @if ($info)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8" wire:loading.remove wire:target="navigation">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="text-center mb-6">
                    <h4 class="text-4xl font-bold text-gray-700">Tramita tu reembolso</h4>
                    <p>Podras realizar tu reembolso por este medio si tu evento ya fue anunciado como cancelado o
                        reprogramado por los canales oficiales de <span class="text-rojo font-bold">Boletea
                            Tickets</span></p>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="shadow-lg mx-4 border-l-2 border-b-2 border-r-2 rounded-lg border-rojo">
                        <div class="text-right px-8 py-4">
                            <span class="bg-rojo text-white font-bold rounded-full px-2 py-1">1</span>
                        </div>
                        <div class="px-8">
                            <h2 class="text-xl font-semibold text-center">Valida tu información</h2>
                            <p class="text-sm text-gray-500 mb-3 text-center">Ingresa la información de tu orden</p>
                            <div class="rounded shadow-lg mb-2 p-3">
                                <label class="text-left px-2 text-xs text-gray-500">Correo</label>
                                <input type="text" placeholder="email@example.com"
                                    class="w-full rounded-lg border-gray-100 bg-gray-100 shadow-lg" disabled>
                                <label class="text-left px-2 text-xs text-gray-500">Orden</label>
                                <input type="text" placeholder="#123456"
                                    class="w-full rounded-lg border-gray-100 bg-gray-100 shadow-lg" disabled>
                                <div class="text-center py-4">
                                    <i class="fas fa-check-circle text-green-700 text-4xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-lg mx-4 border-l-2 border-b-2 border-r-2 rounded-lg border-rojo">
                        <div class="text-right px-8 py-4">
                            <span class="bg-rojo text-white font-bold rounded-full px-2 py-1">2</span>
                        </div>
                        <div class="px-8">
                            <h2 class="text-xl font-semibold text-center">Completa el formulario</h2>
                            <p class="text-sm text-gray-500 mb-3 text-center">Ingresa la informacion para realizar tu
                                reembolso.</p>
                            <div class="rounded shadow-lg mb-2 p-3 py-8">
                                <label class="text-left px-2 text-xs text-gray-500">Banco</label>
                                <input type="text" placeholder="BBVA"
                                    class="w-full rounded-lg border-gray-100 bg-gray-100 shadow-lg" disabled>
                                <label class="text-left px-2 text-xs text-gray-500">Cuenta</label>
                                <input type="text" placeholder="1234567890"
                                    class="w-full rounded-lg border-gray-100 bg-gray-100 shadow-lg" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-lg mx-4 border-l-2 border-b-2 border-r-2 rounded-lg border-rojo">
                        <div class="text-right px-8 py-4">
                            <span class="bg-rojo text-white font-bold rounded-full px-2 py-1">3</span>
                        </div>
                        <div class="px-8">
                            <h2 class="text-xl font-semibold text-center">Espera el reembolso</h2>
                            <p class="text-sm text-gray-500 mb-3 text-center">Nuestro equipo validará tu información que
                                nos
                                proporcionaste para realizar el reembolso.</p>
                            <div class="rounded shadow-lg mb-2 px-3 py-8 text-center">
                                <i class="fas fa-address-card text-8xl text-gray-800"></i>
                                <div>
                                    <i class="fas fa-check-circle text-green-700 text-4xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white overflow-hidden sm:rounded-lg text-center py-6">
                <a class="cursor-pointer px-10 py-2 bg-rojo text-white font-bold hover:bg-red-700 rounded-lg"
                    wire:click="navigation('step1')">Tramita tu
                    reembolso</a>
            </div>
        </div>
    @endif

    @if ($step1)
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 py-8">
            <div class="bg-white overflow-hidden sm:rounded-lg border-2 border-gray-100 shadow-lg">
                <h4 class="font-bold text-2xl px-6 pt-4 text-rojo">Validacion de la orden</h4>
                <p class="px-6">
                    Validaremos que esta orden te pertenece
                </p>
                <div class="rounded shadow-lg mb-2 p-4">
                    <label class="text-left ml-2 text-sm text-gray-500 font-semibold">Correo:</label>
                    <span class="text-xs text-red-400">Debes ingresar el correo con el que realizaste tu compra</span>
                    <input type="text" placeholder="email@example.com"
                        class="w-full rounded-lg shadow-lg border-2 py-1  {{ $step2 ? 'bg-gray-100 border-green-500 focus:ring-green-500 focus:border-green-500' : 'border-rojo focus:ring-rojo focus:border-rojo' }}"
                        wire:model="email" {{ $step2 ? 'disabled' : '' }}>

                    <label class="text-left ml-2 text-sm text-gray-500 font-semibold">Orden:</label>
                    <input type="text" placeholder="#123456"
                        class="w-full rounded-lg shadow-lg border-2 py-1  {{ $step2 ? 'bg-gray-100 border-green-500 focus:ring-green-500 focus:border-green-500' : 'border-rojo focus:ring-rojo focus:border-rojo' }}"
                        wire:model="order" {{ $step2 ? 'disabled' : '' }}>
                    <div class="flex justify-end mt-4">
                        <a class="px-6 rounded-lg py-1 bg-rojo text-white font-bold cursor-pointer hover:bg-red-800"
                            wire:click="orderValidate" {{ $step2 ? 'hidden' : '' }}>Validar</a>
                    </div>
                    @if ($step2 && $refund)
                    <div class="bg-white overflow-hidden sm:rounded-lg">
                        <div class="flex justify-center">
                            <div class="text-center py-16" wire:loading wire:target="orderValidate">
                                <i class="text-7xl text-rojo text-center animate-spin fas fa-spinner"></i>
                                <p class="text-gray-500">Cargando...</p>
                            </div>
                        </div>
                    </div>
                        <div
                            class="bg-white shadow-lg rounded-lg p-4 mb-4 {{ $step3 ? 'border-green-500 border-2 focus:border-green-500' : 'border-rojo border-2 focus:border-rojo' }}">
                            <div class="mb-4">
                                <h4 class="font-bold text-xl text-rojo">Confirmación de la orden</h4>
                                <p class="font-semibold">
                                    La orden encontrada cuenta con la siguiente información
                                </p>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-full">
                                    <label class="font-bold text-lg">Titula de la orden</label>
                                    <p class="text-gray-700">{{ $name }} {{ $lastname }}</p>
                                </div>
                                <div class="w-full">
                                    <label class="font-bold text-lg">Evento</label>
                                    <p class="text-gray-700">{{ $event }}</p>
                                </div>
                            </div>
                            <div class="flex mb-2">
                                <div class="w-full">
                                    <label class="font-bold text-lg"># boletos</label>
                                    <p class="text-gray-700">{{ $ticket_count }}</p>
                                </div>
                                <div class="w-full">
                                    <label class="font-bold text-lg">Cantidad reembolsable</label>
                                    <p class="text-gray-700">${{ number_format($amount_refund, 2) }} MXN</p>
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <a class="px-6 rounded-lg py-1 bg-rojo text-white font-bold cursor-pointer hover:bg-red-800"
                                    wire:click="infoValidate" {{ $step3 ? 'hidden' : '' }}>Confirmar información</a>
                            </div>
                        </div>
                    @else
                        @if ($refund)
                            <div class="bg-rojo text-white font-bold mt-4 rounded-b-lg">
                                <p class="p-3">
                                    Información no valida, recuerda que debe ser la informacion de tu compra
                                </p>
                            </div>
                        @endif
                    @endif

                    @if ($step3)
                        <div class="bg-white overflow-hidden sm:rounded-lg">
                            <h4 class="font-bold text-2xl px-2 pt-4 text-rojo">Datos para reembolso</h4>
                            <p class="px-2">
                                Ingresa la misma informacion con la que realizaste tu compra.
                            </p>
                            <div class="flex flex-wrap mb-2">
                                <div class="mr-4">
                                    <x-jet-label class="ml-2 mt-2">
                                        Deseo usar la misma informacion de la orden:
                                        <x-jet-input wire:model="setInfo" wire:click='setInfo()' type="checkbox"
                                            class="py-1 ml-2">
                                        </x-jet-input>
                                    </x-jet-label>
                                </div>
                            </div>
                            <div class="flex flex-wrap mb-4">
                                <div class="mr-4 flex-1">
                                    <x-jet-label class="ml-1">
                                        Nombre:
                                    </x-jet-label>
                                    <x-jet-input wire:model="name_acount" type="text" class="py-1 w-full"
                                        placeholder="Ej. Daniel">
                                    </x-jet-input>
                                    @error('name_acount')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mr-4 flex-1">
                                    <x-jet-label class="ml-1">
                                        Telefono:
                                    </x-jet-label>
                                    <x-jet-input wire:model="phone" type="text" class="py-1 w-full" maxlength="10"
                                        placeholder="718 254 658">
                                    </x-jet-input>
                                    @error('phone')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap mb-4">
                                <div class="mr-4 lg:flex-1">
                                    <x-jet-label class="ml-1">
                                        Banco:
                                    </x-jet-label>
                                    <select wire:model="bank" class="py-1 rounded-lg focus:ring-0 border-gray-300 w-full">
                                        <option value="" selected disabled>Selecciona una opcion</option>
                                        <option value="Banco Azteca">Banco Azteca</option>
                                        <option value="Barclays Bank México">Barclays Bank México</option>
                                        <option value="Banco Inbursa">Banco Inbursa</option>
                                        <option value="Banco Regional de Monterrey">Banco Regional de Monterrey</option>
                                        <option value="Banco Santander">Banco Santander</option>
                                        <option value="BanCoppel">BanCoppel</option>
                                        <option value="Banorte">Banorte</option>
                                        <option value="BBVA">BBVA</option>
                                        <option value="Citibanamex">Citibanamex</option>
                                        <option value="CIBanco">CIBanco</option>
                                        <option value="HSBC México">HSBC México</option>
                                        <option value="Scotiabank">Scotiabank</option>
                                        <option value="ABC Capital">ABC Capital</option>
                                        <option value="Accendo Banco">Acce</option>
                                        <option value="American Express Bank (México)">American Express Bank (México)</option>
                                        <option value="Bansí">Bansí</option>
                                        <option value="Banca Afirme">Banca Afirme</option>
                                        <option value="Banca Mifel">Banca Mifel</option>
                                        <option value="Banco Actinver">Banco Actinver</option>
                                        <option value="Banco Autofin México">Banco Autofin México</option>
                                        <option value="Banco Bancrea">Banco Bancrea</option>
                                        <option value="Banco Base">Banco Base</option>
                                        <option value="Banco Compartamos">Banco Compartamos</option>
                                        <option value="Banco Credit Suisse (México)">Banco Credit Suisse (México)</option>
                                        <option value="Banco de Inversión Afirme">Banco de Inversión Afirme</option>
                                        <option value="Banco del Bajío">Banco del Bajío</option>
                                        <option value="Banco Finterra">Banco Finterra</option>
                                        <option value="Banco Forjadores">Banco Forjadores</option>
                                        <option value="Banco Inmobiliario Mexicano">Banco Inmobiliario Mexicano</option>
                                        <option value="Banco Invex">Banco Invex</option>
                                        <option value="Banco JP Morgan">Banco JP Morgan</option>
                                        <option value="Banco KEB Hana México">Banco KEB Hana México</option>
                                        <option value="Banco Monex">Banco Monex</option>
                                        <option value="Banco Multiva">Banco Multiva</option>
                                        <option value="Banco PagaTodo">Banco PagaTodo</option>
                                        <option value="Banco S3 Caceis México">Banco S3 Caceis México</option>
                                        <option value="Banco Sabadell">Banco Sabadell</option>
                                        <option value="Banco Shinhan de México">Banco Shinhan de México</option>
                                        <option value="Banco Ve por Más">Banco Ve por Más</option>
                                        <option value="Bank of America Mexico">Bank of America Mexico</option>
                                        <option value="Bank of China Mexico">Bank of China Mexico</option>
                                        <option value="Bankaool">Bankaool</option>
                                        <option value="BNP Paribas">BNP Paribas</option>
                                        <option value="Consubanco">Consubanco</option>
                                        <option value="Deutsche Bank México">Deutsche Bank México</option>
                                        <option value="Fundación Dondé Banco">Fundación Dondé Banco</option>
                                        <option value="Industrial and Commercial Bank of China">Industrial and Commercial Bank of
                                            China
                                        </option>
                                        <option value="Intercam Banco">Intercam Banco</option>
                                        <option value="Mizuho Bank">Mizuho Bank</option>
                                        <option value="MUFG Bank Mexico">MUFG Bank Mexico</option>
                                    </select>

                                    @error('bank')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mr-4 flex-1">
                                    <x-jet-label class="ml-1">
                                        Tipo:
                                    </x-jet-label>
                                    <select wire:model="type_acount" class="py-1 rounded-lg focus:ring-0 border-gray-300 w-full">
                                        <option value="" selected disabled>Selecciona una opcion</option>
                                        <option value="CLABE">CLABE</option>
                                        <option value="tarjeta">Numero Tarjeta</option>
                                        <option value="cuenta">Numero de cuenta</option>
                                    </select>
                                    @error('type_acount')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <div class="mr-4 flex-1">
                                    <x-jet-label class="ml-1">
                                        Cuenta / Plastico / CLABE:
                                    </x-jet-label>
                                    <x-jet-input wire:model="number_acount" type="number" class="py-1 w-full" placeholder="">
                                    </x-jet-input>
                                    @error('number_acount')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex mb-4">
                                <div class="mr-4 flex-1">
                                    <x-jet-label class="ml-1">
                                        INE/Pasaporte/Licencia de conducir:
                                    </x-jet-label>
                                    <label class="flex justify-center items-center py-4">
                                        <i class="fas fa-upload mb-4 text-4xl hover:text-gray-900 text-gray-700 cursor-pointer"></i>
                                        <input wire:model="ine" type="file" class="py-1 w-full hidden" placeholder="">
                                    </label>

                                    @error('ine')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mr-4 flex-1">
                                    <x-jet-label class="ml-1">
                                        Tarjeta de credito:
                                    </x-jet-label>
                                    <label class="flex justify-center items-center py-4">
                                        <i class="fas fa-upload mb-4 text-4xl hover:text-gray-900 text-gray-700 cursor-pointer"></i>
                                        <input wire:model="tcc" type="file" class="py-1 w-full hidden" placeholder="">
                                    </label>
                                    <p class="text-xs text-gray-700">Recuerda no mostrar CVV, en caso de que tu tarjeta tenga los numeros en la parte trasera, edita la foto o cubre los codigos de seguridad, si es tarjeta digital deberas adjuntar la captura de la tarjeta digital.</p>
                                    @error('tcc')
                                        <small class="text-xs text-red-700">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <button class="px-6 rounded-lg py-1 bg-rojo text-white font-bold cursor-pointer hover:bg-red-800"
                                    wire:click="update">Enviar</button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="flex justify-center">
                <div class="text-center py-16" wire:loading wire:target="navigation">
                    <i class="text-7xl text-rojo text-center animate-spin fas fa-spinner"></i>
                    <p class="text-gray-500">Cargando...</p>
                </div>
            </div>
        </div>
    </div>
</div>
