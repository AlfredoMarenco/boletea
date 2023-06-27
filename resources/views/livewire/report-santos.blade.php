<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reportes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex p-4 items-center space-x-2">
                    <x-jet-label value="Fecha inicial:" />
                    <x-jet-input type="datetime-local" wire:model="date_start"/>
                    <x-jet-label value="Fecha final:" />
                    <x-jet-input type="datetime-local" wire:model="date_end"/>
                    <x-jet-button>Filtrar</x-jet-button>
                </div>
                <div class="p-4">
                    @foreach ($users as $user)
                        <div class="grid grid-cols-1 gap-4 mb-2">
                            <div
                                class="w-full relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
                                <div class="min-w-0 flex-1">
                                    <a href="#" class="focus:outline-none">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <p class="text-sm font-medium text-gray-900">{{ $user->name }} - {{ $user->email }}</p>
                                        <p class="truncate text-sm text-gray-500">Codigos escaneados: {{ $user->countBetweenDates($date_start,$date_end) }}</p>
                                        <div class="flex space-x-2">
                                            <p class="truncate text-sm text-gray-500">Abonos Temporada: {{ $user->countKitsTemp($date_start,$date_end) }}</p>
                                            <p class="truncate text-sm text-gray-500">Abonos Apertura: {{ $user->countKitsApert($date_start,$date_end) }}</p>
                                            <p class="truncate text-sm text-gray-500">Abonos Guerrero Total: {{ $user->countKitsGt($date_start,$date_end) }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
