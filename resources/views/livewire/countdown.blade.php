<div wire:poll.1000ms='counter'>
    <div class="text-2xl text-rojo font-bold shadow-md">
        Inicio de venta en:
        @if ($eventName == 'jorgemedinayjosicuenjuntostorreon')
            {{ $countdown }}
        @endif
    </div>
</div>
