<?php

use App\Http\Livewire\Algodoneros;
use Illuminate\Support\Facades\Route;

Route::get('/panel', Algodoneros::class)->name('algodoneros.kits');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return redirect()->route('algodoneros.kits');
})->name('dashboard.algodoneros');
