<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->orderBy('fechaBusqueda')->get();
        $explanadaferia = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', '%Explanada%')->orderBy('fechaBusqueda', 'asc')->get();
        $poliforum = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', '%Poliforum%')->orderBy('fechaBusqueda', 'asc')->get();
        $velaria = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', 'Velaria de la Feria')->where('ciudad','LIKE','Gómez Palacio, Durango.')->orderBy('fechaBusqueda', 'asc')->get();
        $palenque = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', 'Palenque de la Feria')->where('ciudad','LIKE','Gómez Palacio, Durango.')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.index', compact('events', 'explanadaferia', 'poliforum', 'velaria','palenque'));
    }

    public function allEvents()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.all-events', compact('events'));
    }

    public function eventsFeria()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', '%Explanada%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.feria-torreon', compact('events'));
    }

    public function eventsPoliforum()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', '%Poliforum%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.poliforum', compact('events'));
    }

    public function eventsVelaria()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', 'Velaria de la Feria')->where('ciudad','LIKE','Gómez Palacio, Durango.')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.velaria-feria', compact('events'));
    }

    public function eventsPalenque(){
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>', $date)->where('recinto', 'LIKE', 'Palenque de la Feria')->where('ciudad','LIKE','Gómez Palacio, Durango.')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.palenque-feria', compact('events'));
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
