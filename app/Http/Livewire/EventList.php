<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.event-list', [
            'events' => Event::where('visible','=','si')->get()
        ]);
    }

}
