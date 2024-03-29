<?php

namespace App\Http\Livewire\Admin;

use App\Models\Calendar;
use Carbon\Carbon;
use Livewire\Component;

class AddCalendarShowcase extends Component
{
    public $open = false;
    public $title, $start, $time, $status="1", $color, $recinto="showcase",$promotor="Showcase",$city,$venue;
    protected $rules = [
        'title' => 'required',
        'promotor' => 'required',
        'city' => 'required',
        'venue' => 'required',
    ];

    public function mount(){
        $this->start = Carbon::now()->format('Y-m-d');
        $this->time = '21:00';
    }

    public function addEvent(){
        $events = Calendar::where('start','LIKE' ,$this->start)->get();

        $this->validate();
        $calendar = Calendar::create([
            'title' => $this->title,
            'start' => $this->start,
            'time' => $this->time,
            'status' => $this->status,
            'color' => $this->color,
            'recinto' => $this->recinto,
            'promotor' => $this->promotor,
            'city' => $this->city,
            'venue' => $this->venue,
            'user_id' => auth()->user()->id
        ]);

        $calendar->update([
            'url' => './calendar/event/'.$calendar->id
        ]);
        switch ($this->status) {
            case '1':
                $calendar->update([
                    'backgroundColor' => '#F5D348'
                ]);
                break;
            case '2':
                $calendar->update([
                    'backgroundColor' => '#FA443A'
                ]);
                break;
                case '3':
                $calendar->update([
                    'backgroundColor' => '#F50C05'
                ]);
                break;
        }
        $this->reset('open','title');
        $this->emit('addEvent');
        return redirect()->route('calendar.index.showcase');
    }

    public function render()
    {
        return view('livewire.admin.add-calendar-showcase');
    }
}
