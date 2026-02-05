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

    public $city;

    public function mount($city = null)
    {
        $this->city = $city;
    }

    public function render()
    {
        $fecha = date('Ymd');
        $query = Event::where('visible', 'LIKE', 'si')
            ->where('fechaBusqueda', '>=', $fecha);

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

        return view('livewire.event-list', [
            'events' => $query->orderBy('fechaBusqueda', 'asc')->paginate(50)
        ]);
    }
}
