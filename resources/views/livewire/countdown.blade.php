<div wire:poll.1000ms='counter'>
    <div class="text-2xl text-rojo font-bold shadow-md">
        @if ($eventName == 'jorgemedinayjosicuenjuntostorreon')
            Inicio de venta en:
            {{ $countdown }}
        @endif
    </div>
</div>
