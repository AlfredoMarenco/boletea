<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;

    protected $queryString = [];

    public function updatingPage()
    {
        $this->dispatchBrowserEvent('scroll-to-top');
    }

    public function updating()
    {
        $this->resetPage();
    }

    public function render()
    {
        $fecha = date('Ymd');
        return view('livewire.event-list', [
            'events' => Event::where('visible', 'LIKE', 'si')
                ->where('fechaBusqueda', '>=', $fecha)
                ->orderBy('fechaBusqueda', 'asc')
                ->paginate(10)
        ]);
    }
}
