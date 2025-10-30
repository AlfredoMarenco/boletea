<?php

namespace App\Http\Livewire\Admin\Events;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventTable extends Component
{
    use WithPagination;



    public function render()
    {
        $events = Event::paginate(15);
        return view('livewire.admin.events.event-table',[
            'events' => $events
        ]);
    }
}
