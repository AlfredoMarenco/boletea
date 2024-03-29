<?php

namespace App\Http\Livewire\Admin\Calendar;

use App\Models\Calendar;
use Livewire\Component;

class ShowEvent extends Component
{
    public $calendar;
    public $title, $start, $time, $status, $color, $recinto,$promotor,$city,$venue;
    protected $rules = [
        'title' => 'required',
        'start' => 'required',
        'time' => 'required',
        'promotor' => 'required',
        'venue' => 'required',
        'city' => 'required',
    ];

    protected $listeners = ['render'=>'render'];

    public function mount(Calendar $calendar){

        $this->calendar = $calendar;
        $this->title = strstr($calendar->title,'/',true);
        $this->start = $calendar->start;
        $this->time = $calendar->time;
        $this->status = $calendar->status;
        $this->color = $calendar->color;
        $this->recinto = $calendar->recinto;
        $this->promotor = $calendar->promotor;
        $this->city = $calendar->city;
        $this->venue = $calendar->venue;
    }


    public function update(){
        $this->validate();
        $calendar = $this->calendar;
        switch ($this->status) {
            case '1':
                $this->color = '#F5D348';
                break;
            case '2':
                $this->color = '#FA443A';
                break;
            case '3':
                $this->color = '#F50C05';
                break;
            }

        $calendar->update([
            'title' => $this->title,
            'start' => $this->start,
            'time' => $this->time,
            'status' => $this->status,
            'recinto' => $this->recinto,
            'promotor' => $this->promotor,
            'city' => $this->city,
            'venue' => $this->venue,
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
