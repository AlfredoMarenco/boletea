<?php

namespace App\Http\Livewire\Admin\Refunds;

use App\Models\Refund;
use Livewire\Component;

class TableIndex extends Component
{
    public $search;
    public $name;
    public $email;
    public function render()
    {
        return view('livewire.admin.refunds.table-index', [
            'refunds' => Refund::where('user_id', auth()->user()->id)->paginate(5)
        ]);
    }
}
