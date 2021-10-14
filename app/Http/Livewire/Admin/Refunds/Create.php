<?php

namespace App\Http\Livewire\Admin\Refunds;

use App\Models\Refund;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Create extends Component
{
    public $order, $platform, $name, $lastname, $email, $phone, $amount, $type = "", $user_id;
    public $bank = "", $type_acount = "", $number_acount, $name_acount;
    public $setInfo = false;
    public $success = false;
    protected $rules = [
        'order' => 'required',
        'platform' => 'required',
        'name' => 'required',
        'lastname' => 'required',
        'phone' => 'min:0|max:10',
        'email' => 'required|email',
        'amount' => 'required|numeric',
        'type' => 'required',
        'name_acount' => 'required',
        'bank' => 'required',
        'type_acount' => 'required',
        'number_acount' => 'required|numeric',
        'user_id' => 'required',
    ];

    public function mount()
    {
        $this->user_id = auth()->user()->id;
        session()->forget('duplicate');
    }

    public function setInfo()
    {
        if ($this->setInfo) {
            $this->name_acount = $this->name . ' ' . $this->lastname;
        } else {
            $this->name_acount = '';
        }
    }

    public function store()
    {
        if ($this->type_acount == 'CLABE') {
            $this->rules['number_acount'] = 'required|min:18|max:18';
        }

        if ($this->type_acount == 'tarjeta') {
            $this->rules['number_acount'] = 'required|min:16|max:16';
        }

        $validateData = $this->validate();
        try {
            Refund::create($validateData);
            $this->success = true;
        } catch (\Throwable $th) {
            session()->flash('duplicate', 'Este reembolso ya está tramitado');
        }


    }

    public function render()
    {
        return view('livewire.admin.refunds.create');
    }
}
