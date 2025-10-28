<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Livewire\Admin\Calendar\ShowEvent;
use App\Http\Livewire\Admin\Calendar\ShowEventShowcase;
use App\Jobs\SendEmails;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');
Route::group(['prefix' => 'calendar','middleware' => ['role:venue-manager']], function () {
    Route::get('/', [CalendarController::class, 'index'])->name('calendar.index');
    Route::get('/showcase', [CalendarController::class, 'showcase'])->name('calendar.index.showcase');
    Route::post('/{recinto?}', [CalendarController::class, 'filter'])->name('calendar.filter');
    Route::get('/event/{calendar}',ShowEvent::class)->name('calendar.show');
    Route::get('/calendar/event/{calendar}',ShowEventShowcase::class)->name('calendar.show.showcase');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');