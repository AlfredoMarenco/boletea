<?php

namespace App\Http\Livewire\Admin;

use App\Models\Calendar;
use Livewire\Component;

class AddCalendar extends Component
{
    public $open = false;
    public $title, $start, $end, $status, $color, $recinto;

    public function render()
    {
        return view('livewire.admin.add-calendar');
    }
}
