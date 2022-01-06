<?php

namespace App\Http\Livewire\Admin\Calendar;

use App\Models\Calendar;
use Livewire\Component;

class ShowEvent extends Component
{
    public $calendar;
    public $title, $start, $time, $status, $color, $recinto;
    protected $rules = [
        'title' => 'required',
        'start' => 'required',
        'time' => 'required',
    ];

    protected $listeners = ['render'=>'render'];

    public function mount(Calendar $calendar){
        $this->calendar = $calendar;
        $this->title = $calendar->title;
        $this->start = $calendar->start;
        $this->time = $calendar->time;
        $this->status = $calendar->status;
        $this->color = $calendar->color;
        $this->recinto = $calendar->recinto;
    }


    public function update(){
        $this->validate();
        $calendar = $this->calendar;
        switch ($this->status) {
            case '1':
                    $this->color = '#FC7214';
                break;
            case '2':
                $this->color = '#8F3AFC';
                break;
            case '3':
                $this->color = '#009C05';
                break;
            }

        $calendar->update([
            'title' => $this->title,
            'start' => $this->start,
            'time' => $this->time,
            'status' => $this->status,
            'recinto' => $this->recinto,
            'backgroundColor' => $this->color
        ]);

        $this->calendar = $calendar;
        $this->emit('render');
        return redirect()->route('calendar.index');
    }

    public function delete(){
        $this->calendar->delete();
        return redirect()->route('calendar.index');

    }


    public function render()
    {
        return view('livewire.admin.calendar.show-event');
    }
}
