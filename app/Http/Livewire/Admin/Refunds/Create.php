<?php

namespace App\Http\Livewire\Admin\Refunds;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Create extends Component
{
    public $order, $platform, $name, $lastname, $email, $phone, $type = "";
    public $bank = "", $type_acount = "", $number_acount, $name_acount;
    public $setInfo = false;
    public $cso = false;


    public function setInfo()
    {
        if ($this->setInfo) {
            $this->name_acount = $this->name . ' ' . $this->lastname;
        } else {
            $this->name_acount = '';
        }
    }

    public function render()
    {
        return view('livewire.admin.refunds.create');
    }
}
