<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;

    public $events,$carbon;

    public function mount()
    {
        $this->carbon = new \Carbon\Carbon();
        $this->carbon->locale('es');

    }

    public function render()
    {
        return view('livewire.event-list', [
            'events' => $this->events
        ]);
    }

}
