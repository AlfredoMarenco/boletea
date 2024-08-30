<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Livewire\Component;

class Countdown extends Component
{
    public $updated_at;
    public $eventName;
    public $countdown;

    public function mount($updated_at)
    {
        $this->updated_at = new Carbon($updated_at);
    }

    public function counter()
    {
        if (now()->diffInSeconds($this->updated_at) >= 0) {
            $this->countdown = $this->updated_at->diffForHumans(now(), [
                'options' => Carbon::JUST_NOW,
                'syntax' => CarbonInterface::DIFF_ABSOLUTE,
                'parts' => 3,
                'short' => true,
            ]);
        } else {
            $this->countdown = "Venta inciada";
        }
    }

    public function render()
    {
        return view('livewire.countdown');
    }
}
