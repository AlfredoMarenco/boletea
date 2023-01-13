<?php

use App\Http\Livewire\Atlas;
use Illuminate\Support\Facades\Route;

Route::get('/panel', Atlas::class)->name('atlas.kits');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return redirect()->route('atlas.kits');
})->name('dashboard.atlas');
