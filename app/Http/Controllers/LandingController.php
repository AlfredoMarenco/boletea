<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmails;
use App\Mail\TennisFestMailable;
use App\Models\Client;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->orderBy('fechaBusqueda')->get();
       /*  $clients = Client::where('status',null)->take(4)->get();
        foreach ($clients as $client) {
            Mail::to($client->email)->queue(new TennisFestMailable($client->name));
            $client->status = "send";
            $client->save();
        } */

        /* Mail::to('daniel.gomez@boletea.com')->queue(new TennisFestMailable('Daniel')); */
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
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', '%Feria De Torreón%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.feria-torreon', compact('events'));
    }

    public function eventsPoliforum()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', '%Poliforum%')->orderBy('fechaBusqueda', 'asc')->get();
        return view('landing.poliforum', compact('events'));
    }

    public function eventsColima()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->where('recinto', 'LIKE', 'La Petatera')->orderBy('fechaBusqueda', 'asc')->get();
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

    public function ticketassist()
    {
        return view('landing.ticketassist');
    }

    public function privacity()
    {
        return view('landing.privacity');
    }

    public function showEvent(Event $event)
    {
        if ($event->name == 'juniorhemmyvalenzuelagabitooscarmaydonguadalajara') {
            return redirect('https://boletea.com/evento/juniorhremmyvalenzuelagabitooscarmaydonguadalajara');
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

    public function eventsJuntos(){
        $date = date('Ymd');
        $events = Event::where('title','LIKE','%JORGE MEDINA%')->where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->orderBy('fechaBusqueda')->get();
        return view('landing.event-juntos',compact('events','date'));
    }

    public function eventsJuntosFans(){
        return view('landing.event-juntos-fans');
    }




    public function landing2025()
    {
        $date = date('Ymd');
        $events = Event::where('visible', 'LIKE', 'si')->where('fechaBusqueda', '>=', $date)->orderBy('fechaBusqueda')->get();
        return view('landing2025.home', compact('events'));
    }
}