<div class="mx-8 rounded-lg bg-gray-100 shadow-lg mb-4">
    <form action="">
        @if (!$cso)
            <div class="p-4 px-8 mb-2 shadow-lg rounded-lg">
                <div>
                    <h2 class="text-2xl font-bold text-gray-700 mb-2">Información de la orden</h2>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Orden:
                        </x-jet-label>
                        <x-jet-input wire:model="order" type="text" class="py-1 w-full" placeholder="Numero de orden">
                        </x-jet-input>
                    </div>
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Plataforma:
                        </x-jet-label>
                        <select wire:model="platform" class="py-1 rounded-lg focus:ring-0 border-gray-300 w-full">
                            <option value="BOL">Boletea</option>
                            <option value="CSL">Club Santos</option>
                        </select>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Nombre:
                        </x-jet-label>
                        <x-jet-input wire:model="name" type="text" class="py-1 w-full" placeholder="Ej. Daniel">
                        </x-jet-input>
                    </div>
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Apellidos:
                        </x-jet-label>
                        <x-jet-input wire:model="lastname" type="text" class="py-1 w-full"
                            placeholder="Ej. Gomez Alcala"></x-jet-input>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Email:
                        </x-jet-label>
                        <x-jet-input wire:model="email" type="text" class="py-1 w-full"
                            placeholder="example@dominio.com"></x-jet-input>
                    </div>
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Telefono:
                        </x-jet-label>
                        <x-jet-input wire:model="phone" type="text" class="py-1 w-full" placeholder="555 555 55 55">
                        </x-jet-input>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Monto:
                        </x-jet-label>
                        <div class="flex rounded-md shadow-sm">
                            <span
                                class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                $
                            </span>
                            <input type="text" name="company-website" id="company-website"
                                class="w-full rounded-none rounded-r-md py-1.5 sm:text-sm border-gray-300"
                                placeholder="0.00">
                        </div>
                    </div>
                    <div class="mr-4 flex-1">
                        <x-jet-label class="ml-1">
                            Evento / Tipo:
                        </x-jet-label>
                        <select wire:model="type" class="py-1 rounded-lg focus:ring-0 border-gray-300 w-full">
                            <option value="" selected disabled>Selecciona una opcion</option>
                            <option value="CSO">CSO</option>
                            <option value="TECATE LOCATION">TECATE LOCATION</option>
                            <option value="RAPHAEL">RAPHAEL</option>
                            <option value="CHRISTIAN NODAL DURANGO">CHRISTIAN NODAL DURANGO</option>
                            <option value="GUNS AND ROSES">GUNS AND ROSES</option>
                        </select>
                    </div>
                </div>

            </div>
        @endif
        {{-- Info Bank --}}
        <div class="p-4 px-8 bg-white mb-2 shadow-lg rounded-lg">
            <div>
                <h2 class="text-2xl font-bold text-gray-700 mb-2">Información del Banco</h2>
            </div>
            <div class=" flex mb-2">
                <div class="mr-4">
                    <x-jet-label class="ml-1">
                        Deseo usar la misma informacion de la orden:
                        <x-jet-input wire:model="setInfo" wire:click='setInfo()' type="checkbox" class="py-1 ml-2">
                        </x-jet-input>
                    </x-jet-label>
                </div>
            </div>
            <div class=" flex mb-4">
                <div class="mr-4 flex-1">
                    <x-jet-label class="ml-1">
                        Nombre:
                    </x-jet-label>
                    <x-jet-input wire:model="name_acount" type="text" class="py-1 w-full" placeholder="Ej. Daniel">
                    </x-jet-input>
                </div>
            </div>
            <div class="flex mb-4">
                <div class="mr-4 flex-1">
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
                        <option value="Industrial and Commercial Bank of China">Industrial and Commercial Bank of China
                        </option>
                        <option value="Intercam Banco">Intercam Banco</option>
                        <option value="Mizuho Bank">Mizuho Bank</option>
                        <option value="MUFG Bank Mexico">MUFG Bank Mexico</option>
                    </select>
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
                </div>
            </div>

            <div class="flex mb-4">
                <div class="mr-4 flex-1">
                    <x-jet-label class="ml-1">
                        Cuenta / Plastico / CLABE:
                    </x-jet-label>
                    <x-jet-input type="text" class="py-1 w-full" placeholder=""></x-jet-input>
                </div>
            </div>
        </div>
    </form>
</div>
