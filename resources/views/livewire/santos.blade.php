<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Entrega Kits') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-6 py-6">
                    <x-jet-label value="Codigo:" />
                    <x-jet-input wire:model.defer="barcode" wire:keydown.enter='check' type="text"
                        placeholder="Ingresa el codigo del abono aqui!" class="w-full" />
                </div>
                <div class="text-center">
                    @if ($message == 'VALIDO')
                        <div>
                            <p class="text-5xl text-green-600 font-bold">KIT VALIDO</p>
                        </div>
                    @endif
                    @if ($message == 'ESCANEADO')
                        <div>
                            <p class="text-5xl text-red-600 font-bold">KIT YA CANJEADO</p>
                            <p>{{ $kit->created_at }}</p>
                        </div>
                    @endif
                    @if ($message == 'NO VALIDO')
                    <div>
                        <p class="text-5xl text-red-600 font-bold">CODIGO NO VALIDO</p>
                    </div>
                    @endif
                </div>
            </div>

            <div class="text-center bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-2">
                <p class="font-bold">Kits entregados: {{ $scanning->count() }}</p>
            </div>
        </div>
    </div>
</div>
