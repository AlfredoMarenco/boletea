<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EnclosureController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Livewire\Admin\Calendar\ShowEvent;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::post('/calendar/{recinto?}', [CalendarController::class, 'filter'])->name('calendar.filter');
Route::get('/calendar/event/{calendar}',ShowEvent::class)->name('calendar.show');
Route::resource('/categories', CategoryController::class);
Route::resource('/enclosures', EnclosureController::class);

Route::get('/permision',function(){
    $role = Permission::all();
    return $role;
});


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
