<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class Search extends Component
{

    public $search;
    public $open = false;

    public function updatedSearch($value)
    {
        if ($value) {
            $this->open = true;
        } else {
            $this->open = false;
        }
    }

    public function render()
    {
        $events = Event::whereHas('performances', function ($query) {
            $query->where('status', '=', 1);
        })->where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.search',[
            'events' => $events
        ]);
    }
}
