<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryTable extends Component
{
    use WithPagination;

    public $destroying = false;
    public $category;

    public function createCategory(){
        return redirect()->route('categories.create');
    }


    public function modalDestroy(Category $category){
        $this->destroying = true;
        $this->category = $category;
    }

    public function cancelDestroy(){
        $this->destroying = false;
    }

    public function confirmDestroy(){
        $this->category->delete();
        $this->destroying = false;
        session()->flash('message', 'Category deleted successfully.');
    }

    public function render()
    {
        $categories = Category::orderBy('name')->paginate(12);
        return view('livewire.admin.categories.category-table',[
            'categories' => $categories
        ]);
    }
}
