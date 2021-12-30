<?php

namespace App\Http\Livewire\Admin\Calendar;

use App\Models\Calendar;
use Livewire\Component;

class ShowEvent extends Component
{
    public $calendar;

    public function mount(Calendar $calendar){
        $this->calendar = $calendar;
    }
    public function render()
    {
        return view('livewire.admin.calendar.show-event');
    }
}
