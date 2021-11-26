<?php

namespace App\Http\Livewire;

use App\Models\Refund;
use Livewire\Component;
use Livewire\WithFileUploads;

class RefundsGenerate extends Component
{
    use WithFileUploads;
    public $ine,$tcc;
    public $info = true, $step1 = false, $step2 = false, $step3 = false;
    public $order = "1234", $email = "ripmarenko@gmail.com", $name, $lastname, $ticket_count, $event, $amount, $amount_refund;
    public $bank = "", $type_acount = "", $number_acount, $name_acount, $setInfo = false,$phone;
    public $refund;

    protected $rules = [
        'bank' => 'required',
        'type_acount' => 'required',
        'number_acount' => 'required|numeric',
        'name_acount' => 'required|',
        'phone' => 'required|min:10|max:10',
        'ine' => 'required',
        'tcc' => 'required'
    ];

    public function navigation($value)
    {
        switch ($value) {
            case 'step1':
                $this->step1 = true;
                $this->info = false;
                break;
        }
    }

    public function setInfo()
    {
        if ($this->setInfo) {
            $this->name_acount = $this->name . ' ' . $this->lastname;
        } else {
            $this->name_acount = '';
        }
    }


    public function update()
    {
        if ($this->type_acount == 'CLABE') {
            $this->rules['number_acount'] = 'required|min:18|max:18';
        }

        if ($this->type_acount == 'tarjeta') {
            $this->rules['number_acount'] = 'required|min:16|max:16';
        }
        $validateData = $this->validate();
        $this->refund->update($validateData);
    }


    public function orderValidate()
    {
        $refund = Refund::where('order', $this->order)->where('email', $this->email)->first();
        if ($refund) {
            $this->step2 = true;
            $this->refund = $refund;
            $this->name = $refund->name;
            $this->lastname = $refund->lastname;
            $this->ticket_count = $refund->ticket_count;
            $this->name = $refund->name;
            $this->event = $refund->event;
            $this->amount_refund = $refund->amount_refund;
        }
    }

    public function infoValidate()
    {
        $this->step3 = true;
    }

    public function render()
    {
        return view('livewire.refunds-generate');
    }
}
