<?php

namespace App\Http\Livewire\Admin;

use App\Models\Calendar;
use Carbon\Carbon;
use Livewire\Component;

class AddCalendar extends Component
{
    public $open = false;
    public $title, $start, $end, $status="1", $color, $recinto="coliseocentenario";
    protected $rules = [
        'title' => 'required',
    ];

    public function mount(){
        $this->start = Carbon::now()->format('Y-m-d');
        $this->end = Carbon::now()->format('Y-m-d');
    }

    public function addEvent(){
        $this->validate();
        $calendar = Calendar::create([
            'title' => $this->title,
            'start' => $this->start,
            'end' => $this->end,
            'status' => $this->status,
            'color' => $this->color,
            'recinto' => $this->recinto,
        ]);

        $calendar->update([
            'url' => './calendar/event/'.$calendar->id
        ]);
        switch ($this->status) {
            case '1':
                $calendar->update([
                    'backgroundColor' => '#FC7214'
                ]);
                break;
            case '2':
                $calendar->update([
                    'backgroundColor' => '#8F3AFC'
                ]);
                break;
                case '3':
                $calendar->update([
                    'backgroundColor' => '#009C05'
                ]);
                break;
        }
        $this->reset('open','title');
        $this->emit('addEvent');
        return redirect()->route('calendar.index');
    }

    public function render()
    {
        return view('livewire.admin.add-calendar');
    }
}
