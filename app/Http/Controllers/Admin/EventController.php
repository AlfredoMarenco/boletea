<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::latest()->paginate();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.events.create',compact('categories'));
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
            'name' => 'required',
            'category_id' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg',
            'slider_url' => 'image|mimes:jpeg,png,jpg',
        ]);
        if ($request->file('slider_url')) {
            $slider = $request->file('slider_url')->store('events/sliders');
        }else{
            $slider = null;
        }

        $event = Event::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'image_url' =>  $request->file('image_url')->store('events/images'),
            'slider_url' => $slider,
            'url_redirect' => $request->url_redirect,
        ]);
        return redirect()->route('events.edit',$event)->with('success', 'Evento creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $categories = Category::all();
        return view('admin.events.edit', compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg',
            'slider_url' => 'image|mimes:jpeg,png,jpg',
        ]);
        if ($request->file('slider_url')) {
            Storage::delete($event->slider_url);
            $slider = $request->file('slider_url')->store('events/sliders');
        }
        if ($request->file('image_url')) {
            Storage::delete($event->image_url);
            $image = $request->file('image_url')->store('events/images');
        }
        $event->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'image_url' => $image ?? $event->image_url,
            'slider_url' => $slider ?? $event->slider_url
        ]);

        return redirect()->route('events.edit',$event)->with('success', 'Evento actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if ($event->performances->count() > 0) {
            return redirect()->route('events.edit',$event)->with('error', 'No se puede eliminar el evento porque tiene funciones ligadas');
        }else{
            $event->delete();
            return redirect()->route('events.index')->with('success', 'Evento eliminado correctamente');
        }
    }
}
