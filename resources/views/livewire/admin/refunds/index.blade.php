<div>
    <div class="flex justify-center">
        <div class="text-center py-16" wire:loading>
            <i class="text-7xl text-gray-500 text-center animate-spin fas fa-spinner"></i>
            <p class="text-gray-500">Cargando...</p>
        </div>
    </div>
    <div wire:loading.remove>
        @if ($index)
            <div class="flex justify-end py-3 mx-4">
                <x-jet-button wire:click="navigation('create')" class="py-1.5">{{ __('New Refund') }}
                </x-jet-button>
            </div>
            @livewire('admin.refunds.table-index')
        @endif

        @if ($create)
            <div class="flex justify-start py-3 mx-4">
                <x-jet-secondary-button wire:click="navigation('return')" class="py-1.5">{{ __('Return') }}
                </x-jet-secondary-button>
            </div>
            @livewire('admin.refunds.create')
        @endif
    </div>
</div>
