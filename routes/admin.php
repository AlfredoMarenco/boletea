<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\RefundController;
use App\Http\Livewire\Admin\Calendar\ShowEvent;
use App\Http\Livewire\Admin\Calendar\ShowEventShowcase;
use App\Jobs\SendEmails;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('/refunds', [RefundController::class, 'index'])->name('refunds.index');
Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::get('/calendar/showcase', [CalendarController::class, 'showcase'])->name('calendar.index.showcase');
Route::post('/calendar/{recinto?}', [CalendarController::class, 'filter'])->name('calendar.filter');
Route::get('/calendar/event/{calendar}',ShowEvent::class)->name('calendar.show');
Route::get('/calendar/calendar/event/{calendar}',ShowEventShowcase::class)->name('calendar.show.showcase');
Route::get('/sendemail',function(){

    $clients = Client::where('status',null)->inRandomOrder()->take(10)->get();


    foreach ($clients as $client) {
        SendEmails::dispatch($client->email);
        $client->status = "send";
        $client->save();
    }

    return "Email enviado";
});


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
