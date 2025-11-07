<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;

    protected $queryString = [];
    protected $paginationTheme = 'simple-tailwind';

    public function updatingPage()
    {
        $this->dispatchBrowserEvent('scroll-to-top');
    }

    public function render()
    {
        $fecha = date('Ymd');
        return view('livewire.event-list', [
            'events' => Event::where('visible', 'LIKE', 'si')
                ->where('fechaBusqueda', '>=', $fecha)
                ->orderBy('fechaBusqueda', 'asc')
                ->paginate(50)
        ]);
    }
}