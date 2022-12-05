<?php

namespace App\Http\Livewire;

use App\Models\Coupon;
use Carbon\Carbon;
use Livewire\Component;

class Coupons extends Component
{

    public $barcode = "";
    public $message;
    public $time = "";
    public $coupon;

    protected $rules = [
        'barcode' => 'required'
    ];

    protected $messages = [
        'barcode.unique' => "Codigo ya escaneado"
    ];


    public function check()
    {
        $created_at = Carbon::now()->setTimezone('America/Mexico_City');
        $coupon = Coupon::where('barcode', $this->barcode)->first();

        if ($coupon) {
            switch ($coupon->status) {
                case 'ACTIVO':
                    $this->message = "VALIDO";
                    $coupon->update([
                        'status' => 'scanning',
                        'user_id' => auth()->user()->id,
                        'created_at' => $created_at,
                        'updated_at' => $created_at,
                    ]);
                    break;
                case 'scanning':
                    $this->message = "ESCANEADO";
                    $this->coupon = $coupon;
                    break;
            }
        }else{
            $this->message = "NO VALIDO";
        }
    }

    public function render()
    {
        $this->reset('barcode');
        $scanning = Coupon::where('user_id', auth()->user()->id)->get();
        return view('livewire.coupons', compact('scanning'))->layout('layouts.santos');
    }
}
