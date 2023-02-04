<?php

namespace App\Http\Livewire\Admin\Calendar;

use Livewire\Component;

class IndexCalendarShowcase extends Component
{
    public $listeners = ['addEvent'=>'render'];
    public $events;
    public $recinto = 'coliseocentenario';

    public function selectRecinto(){
        switch ($this->recinto) {
            case 'coliseocentenario':
                return redirect()->route('calendar.index',$this->recinto);
                break;
            case 'auditoriognp':
                $this->recinto = 'auditoriognp';
                return redirect()->route('calendar.index',$this->recinto);
                break;
            case 'forognp':
                return redirect()->route('calendar.index',$this->recinto);
                break;
        }
    }

    public function render()
    {
        return view('livewire.admin.calendar.index-calendar-showcase');
    }
}
