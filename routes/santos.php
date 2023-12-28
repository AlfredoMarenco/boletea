<?php

use App\Http\Livewire\Coupons;
use App\Http\Livewire\ReportSantos;
use App\Http\Livewire\Santos;
use Illuminate\Support\Facades\Route;

Route::get('/panel', Santos::class)->name('santos.kits');
Route::get('/coupons', Coupons::class)->name('santos.coupons');
Route::get('/reports', ReportSantos::class)->name('santos.reports');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return redirect()->route('santos.kits');
})->name('dashboard.santos');
