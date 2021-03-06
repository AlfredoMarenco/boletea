<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendario') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('calendar.filter') }}" method="POST">
                @csrf
                <div class="mb-2 text-sm flex items-center space-x-2">
                    <input type="radio" name="recinto" value="coliseocentenario" @if ($recinto == 'coliseocentenario') checked @endif >
                    <label for="">Coliseo centenario</label>
                    <input type="radio" name="recinto" value="auditoriognp" @if ($recinto == 'auditoriognp') checked @endif>
                    <label for="">Auditorio GNP</label>
                    <input type="radio" name="recinto" value="poliforum" @if ($recinto == 'poliforum') checked @endif>
                    <label for="">Poliforum</label>
                    <input type="radio" name="recinto" value="explanadaferia" @if ($recinto == 'explanadaferia') checked @endif>
                    <label for="">Explanada feria</label>
                    <x-jet-button type="submit" class="py-0.5">Filtar</x-jet-button>
                </div>
            </form>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin.add-calendar')
                {{-- @livewire('admin.calendar.index-calendar') --}}
                @livewire('admin.calendar.index-calendar', ['events' => $events])
            </div>
        </div>
    </div>


</x-app-layout>
