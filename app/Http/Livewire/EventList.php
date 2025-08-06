<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithPagination;

class EventList extends Component
{
    use WithPagination;

    public function updatingPage()
    {
        $this->dispatchBrowserEvent('scroll-to-top');
    }

    public function render()
    {
        // Obtener eventos visibles y ordenarlos por fecha
        $fecha = date('Ymd');
        return view('livewire.event-list', [
            'events' => Event::where('visible','LIKE','si')->where('fechaBusqueda', '>=', $fecha)->orderBy('fechaBusqueda', 'asc')->paginate(10)
        ]);
    }

}