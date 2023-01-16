<?php

namespace App\Http\Livewire;

use App\Models\Kit;
use Carbon\Carbon;
use Livewire\Component;

class Atlas extends Component
{
    public $barcode = "";
    public $message;
    public $time = "";
    public $kit;

    protected $rules = [
        'barcode' => 'required'
    ];

    protected $messages = [
        'barcode.unique' => "Codigo ya escaneado"
    ];


    public function check()
    {
        $created_at = Carbon::now()->setTimezone('America/Mexico_City');
        $kit = Kit::where('barcode', $this->barcode)->where('club','LIKE','atlas')->first();

        if ($kit) {
            switch ($kit->status) {
                case 'ACTIVO':
                    $this->message = "VALIDO";
                    $kit->update([
                        'status' => 'scanning',
                        'user_id' => auth()->user()->id,
                        'created_at' => $created_at,
                        'updated_at' => $created_at,
                    ]);
                    $this->barcode ='';
                    break;
                case 'scanning':
                    $this->message = "ESCANEADO";
                    $this->kit = $kit;
                    break;
            }
        }else{
            Kit::create([
                'barcode' => $this->barcode,
                'status' => 'scanning',
                'user_id' => auth()->user()->id,
                'created_at' => $created_at,
                'updated_at' => $created_at,
                'club' => 'atlas'
            ]);
            $this->message = "VALIDO";
            $this->barcode = "";
        }
    }

    public function render()
    {
        $this->reset('barcode');
        $scanning = Kit::where('user_id', auth()->user()->id)->get();
        return view('livewire.atlas', compact('scanning'))->layout('layouts.atlas');
    }
}
