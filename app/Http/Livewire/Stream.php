<?php

namespace App\Http\Livewire;

use App\Models\Barcode;
use Livewire\Component;

class Stream extends Component
{
    public $show=false,$barcode,$mensaje='',$code;

    public function mount(){
        if (session()->has('show')) {
            $this->show = true;
        }
    }

    public function scan(){
        $code = Barcode::where('barcode',$this->barcode)->first();
        $this->code = $code;
        if ($code) {
            if ($code->status == 'ACTIVO') {
                $this->show = true;
                $code->status = 'ESCANEADO';
                $code->update();
                session()->put('show', true);
            }else{
                $this->mensaje = 'El código ya ha sido escaneado';
            }

        }else{
            $this->mensaje = 'Código no encontrado';
        }

        $this->reset('barcode');
    }
    public function render()
    {
        return view('livewire.stream');
    }
}
