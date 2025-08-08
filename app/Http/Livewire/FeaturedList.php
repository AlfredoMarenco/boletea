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
                ->where('featured', 'LIKE', 1)
                ->orderBy('fechaBusqueda', 'asc')
                ->inRandomOrder()
                ->take(4)
                ->get()
        ]);
    }
}