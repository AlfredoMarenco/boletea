<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ChicagoController extends Controller
{
    public function index(){

        $events = Event::where('visible','ch')->get();

        return view('chicago.index',compact('events'));
    }
}
