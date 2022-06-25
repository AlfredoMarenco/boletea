<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enclosure;
use App\Models\Event;
use App\Models\Performance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PerformanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performances = Performance::paginate();
        return view('admin.performances.index', compact('performances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enclosures = Enclosure::all();
        $events = Event::all();
        return view('admin.performances.create',compact('enclosures','events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required',
            'enclosure_id' => 'required',
            'name' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'status' => 'required',
        ]);

        if($request->date_start > $request->date_end){
            return redirect()->route('performances.create')->with('error','La fecha de finalizacion no puede ser menor a la fecha de inicio');
        }

        if ($request->file('image_url')) {
            $image = $request->file('image_url')->store('performances/images');
        }else{
            $image = null;
        }
        $performance = Performance::create([
            'event_id' => $request->event_id,
            'enclosure_id' => $request->enclosure_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
            'status' => $request->status,
            'image_url' => $image,
            'description' => $request->description,
        ]);
        return redirect()->route('performances.edit',$performance)->with('success', 'Performance created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function show(Performance $performance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function edit(Performance $performance)
    {
        $enclosures = Enclosure::all();
        $events = Event::all();
        return view('admin.performances.edit', compact('performance','enclosures','events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Performance $performance)
    {
        $request->validate([
            'enclosure_id' => 'required',
            'name' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'status' => 'required',
        ]);

        if($request->date_start > $request->date_end){
            return redirect()->route('performances.edit',$performance)->with('error','La fecha de finalizacion no puede ser menor a la fecha de inicio');
        }

        if ($request->file('image_url')) {
            $image = $request->file('image_url')->store('performances/images');
        }else{
            $image = null;
        }
        $performance->update([
            'event_id' => $request->event_id,
            'enclosure_id' => $request->enclosure_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
            'status' => $request->status,
            'image_url' => $image,
            'description' => $request->description,
        ]);
        return redirect()->route('performances.edit',$performance)->with('success', 'Performance updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Performance  $performance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Performance $performance)
    {
        $performance->delete();
        return redirect()->route('performances.index')->with('success', 'Performance deleted successfully');
    }
}
