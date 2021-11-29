<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cdvs extends Component
{
    public $torreon = false, $cancun = true;

    public function navigation($value)
    {
        switch ($value) {
            case '1':
                $this->torreon = false;
                $this->cancun = true;
                break;
            case '2':
                $this->torreon = true;
                $this->cancun = false;
                break;

            default:
                # code...
                break;
        }
    }
    public function render()
    {
        return view('livewire.cdvs');
    }
}
