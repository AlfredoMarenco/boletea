<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin','permission:calendar']);
    }

    public function index()
    {
        $events = Calendar::all();
        $recinto = '';
        return view('calendar.index', compact('events','recinto'));
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
