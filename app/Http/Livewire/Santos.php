<?php

namespace App\Http\Livewire;

use App\Models\Kit;
use Carbon\Carbon;
use Livewire\Component;

class Santos extends Component
{
    public $barcode = "";
    public $time = "";

    protected $rules = [
        'barcode' => 'required|unique:kits'
    ];

    protected $messages = [
        'barcode.unique' => "Codigo ya escaneado"
    ];


    public function save()
    {
        $created_at = Carbon::now()->setTimezone('America/Mexico_City');
        if (Kit::where('barcode', $this->barcode)->count()) {
            $this->time = Kit::where('barcode', $this->barcode)->first();
        } else {
            $this->reset('time');
        }

        if ($this->validate($this->rules)) {
            Kit::create([
                'barcode' => $this->barcode,
                'status' => 'scanning',
                'user_id' => auth()->user()->id,
                'created_at' => $created_at
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
        $scanning = Kit::where('user_id', auth()->user()->id)->get();
        return view('livewire.santos', compact('scanning'))->layout('layouts.santos');
    }
}
