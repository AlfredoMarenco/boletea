<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Livewire\Admin\Calendar\ShowEvent;
use Illuminate\Support\Facades\Route;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');
Route::get('/calendar/{recinto?}', [CalendarController::class, 'index'])->name('calendar.index');
Route::get('/calendar/event/{calendar}',ShowEvent::class)->name('calendar.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
