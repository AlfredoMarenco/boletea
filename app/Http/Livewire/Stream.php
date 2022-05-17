<?php

namespace App\Http\Livewire;

use App\Models\Barcode;
use Livewire\Component;

class Stream extends Component
{
    public $show=false,$barcode;

    public function mount(){
        if (session()->has('show')) {
            $this->show = true;
        }
    }

    public function scan(){
        $code = Barcode::where('barcode',$this->barcode);
        if ($code->count()>0) {
            $this->show = true;
            session()->put('show', true);
        }
    }
    public function render()
    {
        return view('livewire.stream');
    }
}
