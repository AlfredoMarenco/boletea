<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cdvs extends Component
{
    public $torreon, $durango;

    public function navigation()
    {
    }
    public function render()
    {
        return view('livewire.cdvs');
    }
}
