<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('landing.index', compact('events'));
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
