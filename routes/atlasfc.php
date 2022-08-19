<?php

use App\Http\Controllers\Atlasfc\CodereadController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', [CodereadController::class,'index'])->name('atlasfc.index');
