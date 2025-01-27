<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ChicagoController extends Controller
{
    public function index(){
        $date = date('Ymd');
        $events = Event::where('visible','ch')->where('fechaBusqueda', '>=', $date)->orderBy('fechaBusqueda')->get();

        return view('chicago.index',compact('events'));
    }
}
