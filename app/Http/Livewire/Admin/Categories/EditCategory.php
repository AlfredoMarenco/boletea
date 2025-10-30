<?php

namespace App\Http\Livewire\Admin\Categories;

use Illuminate\Support\Str;
use Livewire\Component;

class EditCategory extends Component
{

    public $category;
    public $name;
    public $description;
    public $slug;

    public function mount()
    {
        $this->name = $this->category->name;
        $this->description = $this->category->description;
        $this->slug = $this->category->slug;
    }


    public function update(){
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:categories,slug,'.$this->category->id,
        ]);

        $this->category->update([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
        ]);
        session()->flash('message', 'Category updated successfully.');
        return redirect()->route('categories.index');
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function back(){
        return redirect()->route('categories.index');
    }

    public function render()
    {
        return view('livewire.admin.categories.edit-category');
    }
}
