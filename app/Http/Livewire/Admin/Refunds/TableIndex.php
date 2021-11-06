<?php

namespace App\Http\Livewire\Admin\Refunds;

use App\Models\Refund;
use Livewire\Component;

class TableIndex extends Component
{
    public $search;
    public $name;
    public $email;
    public $status = "0";
    public function render()
    {
        return view('livewire.admin.refunds.table-index', [
            'refunds' => Refund::where('user_id', auth()->user()->id)->where('status', $this->status)->latest()->paginate(5)
        ]);
    }
}
