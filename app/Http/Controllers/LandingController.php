<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmails;
use App\Models\Client;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->orderBy('fechaBusqueda')->get();
        /* $clients = Client::where('status',null)->take(2)->get();
        foreach ($clients as $client) {
            SendEmails::dispatch($client->email);
            $client->status = "send";
            $client->save();
        } */
        return view('landing.index', compact('events'));
    }

    public function allEvents()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.all-events', compact('events'));
    }

    public function eventsFeria()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', '%Explanada%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.feria-torreon', compact('events'));
    }

    public function eventsPoliforum()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', '%Poliforum%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.poliforum', compact('events'));
    }

    public function eventsVelaria()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', 'Velaria de la Feria')->where('ciudad', 'LIKE', 'Gómez Palacio, Durango.')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.velaria-feria', compact('events'));
    }

    public function eventsPalenque()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', 'Palenque de la Feria')->where('ciudad', 'LIKE', 'Gómez Palacio, Durango.')->orderBy('fechaBusqueda', 'asc')->get();
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
        if ($event->name == 'illusiononicetorreon') {
            return redirect('https://boletea.com/illusion-on-ice-torreon');
        }
        return view('landing.event', compact('event'));
    }

    public function cdvs()
    {
        return view('landing.cdvs');
    }

    public function streamLive(){
        return view('landing.stream-live');
    }

    public function illusiononice(){
        return view('landing.illusion-on-ice');
    }
}
