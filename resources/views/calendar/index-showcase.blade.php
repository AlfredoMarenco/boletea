<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendario') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin.add-calendar-showcase')
                {{-- @livewire('admin.calendar.index-calendar') --}}
                @livewire('admin.calendar.index-calendar-showcase', ['events' => $events])
            </div>
        </div>
    </div>


</x-app-layout>
