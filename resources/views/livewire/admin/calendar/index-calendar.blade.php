<div>
    <div class="px-2">
        {{-- <x-jet-label value="Recinto" />
        <select wire:model="recinto" class="form-control py-1" wire:click="selectRecinto">
            <option value="" selected disabled></option>
            <option value="coliseocentenario">Coliseo Centenario</option>
            <option value="auditoriognp">Auditorio GNP</option>
            <option value="forognp">Foro GNP</option>
        </select>
        <x-jet-input-error for="recinto" /> --}}
    </div>
    <div class="py-4 px-24" id='calendar' wire:ignore></div>
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
</div>
