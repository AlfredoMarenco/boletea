<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Calendario') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin.add-calendar')
                <div class="p-8" id='calendar'></div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    timeZone: 'UTC',
                    initialView: 'dayGridMonth',
                    events: @json($events),
                });
                /* var event = calendar.getEventById('a') // an event object!
                var start = event.start // a property (a Date object)
                console.log(start.toISOString()) // "2018-09-01T00:00:00.000Z" */
                calendar.setOption('locale', 'mx');
                calendar.render();
            });
        </script>
    @endpush
</x-app-layout>
