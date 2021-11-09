<?php

namespace App\Http\Livewire;

use App\Models\Kit;
use Livewire\Component;

class Santos extends Component
{
    public $barcode = "";

    protected $rules = [
        'barcode' => 'required|unique:kits'
    ];

    protected $messages = [
        'barcode.unique' => "Codigo ya escaneado"
    ];


    public function save()
    {
        if ($this->validate($this->rules)) {
            Kit::create([
                'barcode' => $this->barcode,
                'status' => 'scanning',
                'user_id' => auth()->user()->id
            ]);
            $this->emit('saved');
        } else {
            $this->reset('barcode');
            $this->emit('saved');
        }
    }

    public function render()
    {
        $this->reset('barcode');
        return view('livewire.santos')->layout('layouts.santos');
    }
}
