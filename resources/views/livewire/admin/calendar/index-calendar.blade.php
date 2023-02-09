<div>
    <div class="px-2">
    </div>
    <div class="py-4 lg:px-24" id='calendar' wire:ignore></div>
    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {

                    /* timeZone: 'UTC', */
                    initialView: 'dayGridMonth',
                    eventTextColor:'black',
                    eventBorderColor:'white',

                    eventDidMount: function(info) {
                        var tooltip = new Tooltip(info.el, {
                            title: info.event.title,
                            placement: 'top',
                            trigger: 'hover',
                            container: 'body'
                        });
                    },
                    events: @json($events),
                });
                /* var event = calendar.getEventById('a') // an event object!
                var start = event.start // a property (a Date object)
                console.log(start.toISOString()) // "2018-09-01T00:00:00.000Z" */
                /* calendar.setOption('locale', 'mx'); */
                calendar.render();
            });
        </script>
    @endpush
</div>
