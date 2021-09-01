<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('fechaBusqueda')->get();
        $explanadaferia = Event::where('visible', 'LIKE', 'si')->where('recinto', 'LIKE', '%Explanada%')->orderBy('fechaBusqueda', 'asc')->paginate(5);
        $poliforum = Event::where('visible', 'LIKE', 'si')->where('recinto', 'LIKE', '%Poliforum%')->orderBy('fechaBusqueda', 'asc')->paginate(5);
        return view('landing.index', compact('events', 'explanadaferia', 'poliforum'));
    }

    public function allEvents()
    {
        $events = Event::where('visible', 'LIKE', 'si')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.all-events', compact('events'));
    }

    public function eventsFeria()
    {
        $events = Event::where('visible', 'LIKE', 'si')->where('recinto', 'LIKE', '%Explanada%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.feria-torreon', compact('events'));
    }

    public function eventsPoliforum()
    {
        $events = Event::where('visible', 'LIKE', 'si')->where('recinto', 'LIKE', '%Poliforum%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.poliforum', compact('events'));
    }


    public function about()
    {
        return view('landing.about');
    }

    public function conditions()
    {
        return view('landing.conditions');
    }

    public function privacity()
    {
        return view('landing.privacity');
    }

    public function showEvent(Event $event)
    {
        return view('landing.event', compact('event'));
    }
}
