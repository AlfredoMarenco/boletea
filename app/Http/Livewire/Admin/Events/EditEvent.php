<?php

namespace App\Http\Livewire\Admin\Events;

use Illuminate\Support\Str;
use Livewire\Component;

class EditEvent extends Component
{

    public $venue;
    public $name;
    public $location;
    public $description;
    public $city;
    public $state;
    public $postal_code;
    public $address;
    public $slug;

    public function mount()
    {
        $this->name = $this->venue->name;
        $this->location = $this->venue->location;
        $this->description = $this->venue->description;
        $this->city = $this->venue->city;
        $this->state = $this->venue->state;
        $this->postal_code = $this->venue->postal_code;
        $this->address = $this->venue->address;
        $this->slug = $this->venue->slug;
    }


    public function update(){
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'slug' => 'required|string|unique:venues,slug,'.$this->venue->id,
        ]);

        $this->venue->update([
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'address' => $this->address,
            'slug' => $this->slug,
        ]);

        session()->flash('message', 'Venue updated successfully.');
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
        return view('livewire.admin.events.edit-event');
    }
}
