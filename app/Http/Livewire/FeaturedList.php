<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class FeaturedList extends Component
{
    public function render()
    {
        $fecha = date('Ymd');
        return view('livewire.featured-list', [
            'events' => Event::where('visible', 'LIKE', 'si')
                ->where('fechaBusqueda', '>=', $fecha)
                ->orderBy('fechaBusqueda', 'asc')
                ->paginate(10)
        ]);
    }
}