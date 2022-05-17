<div>
    @if ($show == false)
        <div class="text-center">
            <img src="{{ asset('img/PORTADA STREAM PADRE ANGEL.jpg') }}" class="w-1/2 mx-auto mb-10" alt="">
            @if ($mensaje != '')
                <span>{{ $mensaje }}</span>
            @endif
            <x-jet-input class="w-full" type="text" wire:keydown.enter='scan()' placeholder="Ingresar tu codigo"
                wire:model="barcode" />
            <x-jet-button class="mt-2 border-red-700" wire:click="scan()">Ingresar</x-jet-button>
        </div>
    @endif
    @if ($show == true)
        <video class="mx-auto" id="player" autoplay muted playsinline controls data-poster="/path/to/poster.jpg">
            <source src="{{ asset('videos/ConferenciaPAdre.mp4') }}" type="video/mp4" />
        </video>
    @endif
</div>
