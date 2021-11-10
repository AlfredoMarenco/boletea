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
                    <x-jet-input wire:model.defer="barcode" wire:keydown.enter='save' type="text"
                        placeholder="Ingresa el codigo del abono aqui!" class="w-full" />
                </div>
                <div class="text-center">
                    <x-jet-action-message class="mr-3 text-6xl text-green-700 font-bold py-4" on="saved">
                        ACEPTADO
                    </x-jet-action-message>
                    <x-jet-input-error class="mr-3 text-6xl py-4 font-bold" for="barcode">
                    </x-jet-input-error>
                    @if ($time)
                        {{ \Carbon\Carbon::parse($time['created_at'])->format('l jS \\of F Y h:i:s A') }}
                    @endif
                </div>
            </div>

            <div class="text-center bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 p-2">
                <p class="font-bold">Kits entregados: {{ $scanning->count() }}</p>
            </div>
        </div>
    </div>
</div>
