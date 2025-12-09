<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cdvs extends Component
{
    public $torreon = true, $cancun = false, $merida = false, $durango = false;

    public function navigation($value)
    {
        switch ($value) {
            case '1':
                $this->torreon = false;
                $this->cancun = true;
                $this->merida = false;
                $this->durango = false;

                break;
            case '2':
                $this->torreon = true;
                $this->cancun = false;
                $this->merida = false;
                $this->durango = false;
                break;
            case '3':
                $this->torreon = false;
                $this->cancun = false;
                $this->merida = true;
                $this->durango = false;
                break;
            case '4':
                $this->torreon = false;
                $this->cancun = false;
                $this->merida = false;
                $this->durango = true;
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
