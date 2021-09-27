<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/quienessomos', [LandingController::class, 'about'])->name('about');
Route::get('/terminosycondiciones', [LandingController::class, 'conditions'])->name('conditions');
Route::get('/avisodeprivacidad', [LandingController::class, 'privacity'])->name('privacity');
Route::get('/evento/{event}', [LandingController::class, 'showEvent'])->name('showEvent');
Route::get('/todos-los-eventos', [LandingController::class, 'allEvents'])->name('allEvents');
Route::get('/feria-de-torreon', [LandingController::class, 'eventsFeria'])->name('eventsFeria');
Route::get('/poliforum-feria-de-torreon', [LandingController::class, 'eventsPoliforum'])->name('eventsPoliforum');
Route::get('/velariaferiagomezpalacio', [LandingController::class, 'eventsVelaria'])->name('eventsVelaria');
Route::get('/palenqueferiagomezpalacio', [LandingController::class, 'eventsPalenque'])->name('eventsPalenque');

