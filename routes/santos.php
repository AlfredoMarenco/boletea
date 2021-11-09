<?php

use App\Http\Livewire\Santos;
use Illuminate\Support\Facades\Route;

Route::get('/panel', Santos::class)->name('santos.kits');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return redirect()->route('santos.kits');
})->name('dashboard');
