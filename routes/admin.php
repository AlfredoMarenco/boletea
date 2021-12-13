<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\RefundController;
use Illuminate\Support\Facades\Route;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');
Route::get('/calendar/{recinto?}', [CalendarController::class, 'index'])->name('calendar.index');
Route::get('/calendar/event/{calendar}', [CalendarController::class, 'show'])->name('calendar.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
