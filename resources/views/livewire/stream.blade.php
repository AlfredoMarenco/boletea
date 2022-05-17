<div>
    <div class="text-center flex justify-center">
        <x-jet-input class="block w-full" type="text" placeholder="Buscar evento" wire:model="barcode" />
        <x-jet-button class="mt-2" wire:click="searchBarcode()">Ingresar</x-jet-button>
    </div>
    @if ($show == true)
        hola
    @endif
</div>
