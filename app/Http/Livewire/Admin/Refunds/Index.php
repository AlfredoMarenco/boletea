<?php

namespace App\Http\Livewire\Admin\Refunds;

use Livewire\Component;

class Index extends Component
{
    public $index = true, $create = false;

    public function navigation($option)
    {
        switch ($option) {
            case 'create':
                $this->create = true;
                $this->index = false;
                break;
            case 'edit':
                $this->create = true;
                $this->index = false;
                break;
            case 'return':
                $this->create = false;
                $this->index = true;
                break;

            default:
                # code...
                break;
        }
    }

    public function render()
    {
        return view('livewire.admin.refunds.index');
    }
}
