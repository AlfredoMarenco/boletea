<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ReportSantos extends Component
{

    public $date_start;
    public $date_end;

    public function mount(){
        $this->date_start = Carbon::today()->toDateTimeLocalString();
        $this->date_end = Carbon::now()->toDateTimeLocalString();
    }

    public function render()
    {
        $users = User::whereHas('kits',function (Builder $query){
            $query->where('club','LIKE','santos');
        })->get();
        return view('livewire.report-santos',[
            'users' => $users
        ])->layout('layouts.santos');
    }
}
