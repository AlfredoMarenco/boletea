<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;
    public $search, $perPage = 4;

    public function render()
    {
        return view('livewire.event-list', [
            'events' => Event::where('visible', 'LIKE', 'si')
                ->Where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('recinto', 'LIKE', '%' . $this->search . '%')
                ->orWhere('ciudad', 'LIKE', '%' . $this->search . '%')->paginate($this->perPage)
        ]);
    }



    public function morePerPage()
    {
        $this->perPage = $this->perPage + 4;
    }
}
