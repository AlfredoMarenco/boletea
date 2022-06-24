<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $events = Event::whereHas('performances', function ($query) {
            $query->where('status', '=', 1);
        })->get();

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

    public function cdvs()
    {
        return view('landing.cdvs');
    }

    public function streamLive(){
        return view('landing.stream-live');
    }}
