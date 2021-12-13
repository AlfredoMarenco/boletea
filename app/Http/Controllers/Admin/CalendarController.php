<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index($recinto = null)
    {
        if ($recinto) {
            $events = Calendar::where('recinto', '=', $recinto)->get();
        }else{
            $events = Calendar::all();
        }

        return view('calendar.index', compact('events'));
    }

    public function show(Calendar $calendar)
    {
        return $calendar;
    }
}
