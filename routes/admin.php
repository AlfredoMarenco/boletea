<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Controllers\Admin\VenueController;
use App\Http\Livewire\Admin\Calendar\ShowEvent;
use App\Http\Livewire\Admin\Calendar\ShowEventShowcase;
use App\Jobs\SendEmails;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');

//Grupo de rutas para la administracion de eventos
Route::group(['prefix' => 'events','middleware' => ['role:admin|super-admin']],function(){
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::get('/{event}/edit', [EventController::class, 'edit'])->name('events.edit');

});

//Group routes for categories management
Route::group(['prefix' => 'categories','middleware' => ['role:admin|super-admin']], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
});

//Group routes for venues management
Route::group(['prefix' => 'venues','middleware' => ['role:admin|super-admin']], function () {
    Route::get('/', [VenueControlle::class, 'index'])->name('venues.index');
    Route::get('/create', [VenueController::class, 'create'])->name('venues.create');
    Route::get('/{venue}/edit', [VenueController::class, 'edit'])->name('venues.edit');
});

//Grupo de rutas del calendario para el role venue-manager
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