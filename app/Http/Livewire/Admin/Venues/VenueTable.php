<?php

namespace App\Http\Livewire\Admin\Venues;

use App\Models\Venue;
use Livewire\Component;
use Livewire\WithPagination;

class VenueTable extends Component
{
    use WithPagination;

    public $destroying = false;
    public $venue;

    public function createVenue(){
        return redirect()->route('venues.create');
    }


    public function modalDestroy(Venue $venue){
        $this->destroying = true;
        $this->venue = $venue;
    }

    public function cancelDestroy(){
        $this->destroying = false;
    }

    public function confirmDestroy(){
        $this->venue->delete();
        $this->destroying = false;
        session()->flash('message', 'Venue deleted successfully.');
    }

    public function render()
    {
        $venues = Venue::orderBy('name')->paginate(12);
        return view('livewire.admin.venues.venue-table',[
            'venues' => $venues
        ]);
    }
}
