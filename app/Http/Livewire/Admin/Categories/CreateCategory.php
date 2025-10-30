<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateCategory extends Component
{
    public $name;
    public $description;
    public $slug;

    public function store(){
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'slug' => 'required|string|max:255|unique:categories,slug',
        ]);

        Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'slug' => $this->slug,
        ]);
        session()->flash('message', 'Category created successfully.');
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
        return view('livewire.admin.categories.create-category');
    }
}
