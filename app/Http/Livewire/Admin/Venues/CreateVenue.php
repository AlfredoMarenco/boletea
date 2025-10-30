<?php

namespace App\Http\Livewire\Admin\Venues;

use App\Models\Category;
use App\Models\Venue;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateVenue extends Component
{
    public $name;
    public $location;
    public $description;
    public $city;
    public $state;
    public $postal_code;
    public $address;
    public $slug;

    public function store(){
        $this->validate([
            'name' => 'required|string|max:255',    
            'description' => 'nullable|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'slug' => 'required|string|unique:venues,slug',
        ]);

        Venue::create([
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'address' => $this->address,
            'slug' => $this->slug,
        ]);
        session()->flash('message', 'Venue created successfully.');
        return redirect()->route('venues.index');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function back(){
        return redirect()->route('venues.index');
    }

    public function render()
    {
        return view('livewire.admin.venues.create-venue');
    }
}
