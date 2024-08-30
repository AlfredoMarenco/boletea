<div wire:poll.1000ms='counter'>
    <div class="text-center text-lg text-rojo">
        @if ($eventName == 'jorgemedinayjosicuenjuntostorreon')
            {{ $countdown }}
        @endif
    </div>
</div>
