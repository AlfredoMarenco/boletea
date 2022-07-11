<?php

namespace App\Http\Livewire\Admin\Maps;

use App\Models\Enclosure;
use App\Models\Map;
use App\Models\PriceCategory;
use Livewire\Component;

class MapsCreate extends Component
{
    //Variables utilizadas durante la creacion del mapa
    public $enclosure,$map;
    public $name,$description;
    public $categories_price=1;
    public $sections_count=4;
    public $array_categories = [];
    public $array_sections = [];
    public $rules = [];
    public $category_price_name,$category_price_color="#FFFFFF";
    public $section_name;



    //Vanderas de visibilidad para face de creacion de mapas
    public $create = false;
    public $category_price = false;
    public $category_price_create = false;
    public $sections = false;
    public $sections_create = true;


    //Funciones utilizadas durante la creacion del mapa
    public function mount(Enclosure $enclosure)
    {
        $this->enclosure = $enclosure;
    }

    public function create_map(){
        $this->validate([
            'name' => 'required',
        ]);

        $map = Map::create([
            'name' => $this->name,
            'description' => $this->description,
            'enclosure_id' => $this->enclosure->id,
        ]);
        $this->map = $map;
        $this->reset('name','description');
        $this->create = false;
        $this->category_price = true;

    }

    public function setCategoriesPrice($value){
        $this->categories_price = $value;
        for ($i=1; $i <= $value ; $i++) {
            $this->array_categories += ["category_price_name.$i" => "required",];
            $this->array_categories += ["category_price_color.$i" => "required"];
        }
        $this->category_price_create = true;
        $this->category_price = false;
    }


    public function create_categories_price(){
        $this->validate($this->array_categories);

        for ($i=1; $i <= $this->categories_price ; $i++) {
            PriceCategory::create([
                'name' => $this->category_price_name[$i],
                'color' => $this->category_price_color[$i],
                'map_id' => $this->map->id,
            ]);
        }
        $this->category_price_create = false;
        $this->sections = true;
    }

    public function setSections($value){
        $this->sections_count = $value;
        for ($i=1; $i <= $value ; $i++) {
            $this->array_sections += ["section_name.$i" => "required"];
        }
        $this->sections_create = true;
        $this->sections = false;
    }

    public function render()
    {
        return view('livewire.admin.maps.maps-create');
    }
}
