<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Enclosure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EnclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enclosures = Enclosure::paginate(10);
        return view('admin.enclosures.index',compact('enclosures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('admin.enclosures.create',compact('cities'));
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
            'city' => 'required',
            'state' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg',
        ]);
        $url = $request->file('image_url')->store('enclosures/images');

        $enclosure = Enclosure::create([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'state' => $request->state,
            'maps_url' => $request->maps_url,
            'image_url' => $url,
        ]);

        return redirect()->route('enclosures.edit',$enclosure)->with('success', 'Recinto creado correctamente');
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
    public function edit(Enclosure $enclosure)
    {
        $cities = City::all();
        return view('admin.enclosures.edit',compact('enclosure','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enclosure $enclosure)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('image_url')) {
            Storage::delete($enclosure->image_url);
            $image = $request->file('image_url')->store('enclosures/images');
        }


        $enclosure->update([
            'name' => $request->name,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'state' => $request->state,
            'maps_url' => $request->maps_url,
            'image_url' => $image ?? $enclosure->image_url,
        ]);

        return redirect()->route('enclosures.edit',$enclosure)->with('success', 'Recinto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enclosure $enclosure)
    {
        if ($enclosure->image_url) {
            Storage::delete($enclosure->image_url);
        }
        if ($enclosure->performances->count()>0) {
            return redirect()->route('enclosures.edit',$enclosure)->with('error', 'Recinto tiene performances asociadas');
        }else{
            $enclosure->delete();
            return redirect()->route('enclosures.index')->with('success', 'Recinto eliminado correctamente');
        }
    }
}
