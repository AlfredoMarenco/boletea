<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $events = Calendar::where('recinto','!=','showcase')->get();
        $recinto = '';
        return view('calendar.index', compact('events','recinto'));
    }

    public function showcase(){
        $events = Calendar::all();
        $recinto = '';
        return view('calendar.index-showcase', compact('events','recinto'));
    }


    public function filter(Request $request){
        $events = Calendar::where('recinto', 'LIKE', $request->recinto)->get();
        $recinto = $request->recinto;
        return view('calendar.index', compact('events','recinto'));
    }

    public function show(Calendar $calendar)
    {
        return $calendar;
    }
}
