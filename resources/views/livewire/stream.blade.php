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
        <div style="padding:56.25% 0 0 0;position:relative;">
            <iframe src="https://vimeo.com/event/2315695/embed" frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                style="position:absolute;top:0;left:0;width:100%;height:100%;">
            </iframe>
        </div>
    @endif
</div>
