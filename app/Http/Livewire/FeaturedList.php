<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class FeaturedList extends Component
{
    public $city;

    public function mount($city = null)
    {
        $this->city = $city;
    }

    public function render()
    {
        $fecha = date('Ymd');
        $query = Event::where('visible', 'LIKE', 'si')
            ->where('fechaBusqueda', '>=', $fecha)
            ->where('featured', 'LIKE', 1);

        if ($this->city) {
            if (stripos($this->city, 'torreon') !== false) {
                $query->where(function ($q) {
                    $q->where('ciudad', 'LIKE', '%torreon%')
                        ->orWhere('ciudad', 'LIKE', '%Torreón%');
                });
            } else {
                $query->where('ciudad', 'LIKE', '%' . $this->city . '%');
            }
        }

        return view('livewire.featured-list', [
            'events' => $query->inRandomOrder()->take(4)->get()
        ]);
    }
}
