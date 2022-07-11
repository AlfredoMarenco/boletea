<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EnclosureController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PerformanceController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Livewire\Admin\Calendar\ShowEvent;
use App\Http\Livewire\Admin\Maps\MapsCreate;
use Illuminate\Support\Facades\Route;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('/calendar/{recinto?}', [CalendarController::class, 'filter'])->name('calendar.filter');
Route::get('/calendar/event/{calendar}',ShowEvent::class)->name('calendar.show');
Route::resource('/categories', CategoryController::class);
Route::resource('/enclosures', EnclosureController::class);
Route::resource('/events', EventController::class);
Route::resource('/performances', PerformanceController::class);
Route::get('/map-create/{enclosure}',MapsCreate::class)->name('maps.create');


/* Route::get('/permision',function(){
    $role = Permission::all();
    return $role;
}); */
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
