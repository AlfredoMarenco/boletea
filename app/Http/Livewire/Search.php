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
        $date = date('Ymd');

        $events = [];

        if (strlen($this->search) >= 3) {
            $events = Event::where(function ($query) {
                    $query->where('title', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('name', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('subtitle', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('ciudad', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('recinto', 'LIKE', '%' . $this->search . '%')
                        ->orWhere('fecha', 'LIKE', '%' . $this->search . '%');
                })
                ->where('fechaBusqueda', '>=', $date)
                ->orderBy('fechaBusqueda', 'asc')
                ->get();
        }

        return view('livewire.search', [
            'events' => $events
        ]);
    }

}
