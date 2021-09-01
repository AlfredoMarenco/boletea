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
                ->where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('subtitle', 'LIKE', '%' . $this->search . '%')
                ->orWhere('recinto', 'LIKE', '%' . $this->search . '%')
                ->orWhere('ciudad', 'LIKE', '%' . $this->search . '%')
                ->orderBy('fechaBusqueda', 'asc')
                ->paginate(5)
        ]);
    }



    public function morePerPage()
    {
        $this->perPage = $this->perPage + 4;
    }
}
