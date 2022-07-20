<?php

namespace App\Http\Livewire\Admin\Maps;

use App\Models\Enclosure;
use App\Models\Map;
use App\Models\PriceCategory;
use App\Models\Section;
use Livewire\Component;

class MapsCreate extends Component
{
    //Variables utilizadas durante la creacion del mapa
    public $enclosure;
    public $map;
    public $name;
    public $description;
    public $categories_price=0;
    public $sections_count=0;
    public $array_categories = [];
    public $array_sections = [];
    public $prices_categories=[];
    public $rules = [];
    public $category_price_name;
    public $category_price_color="#FFFFFF";
    public $section_name;
    public $section_name_real;
    public $section_price_category_id;
    public $section_capacity;
    public $sections_map=[];



    //Vanderas de visibilidad para face de creacion de mapas
    public $create = true;
    public $category_price = false;
    public $category_price_create = false;
    public $sections = false;
    public $sections_create = false;
    public $set_categories = false;


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
            $this->array_sections += ["section_name.$i" => "required",];
            $this->array_sections += ["section_name_real.$i" => "required",];
            /* $this->array_sections += ["section_price_category_id.$i" => "required",]; */
            $this->array_sections += ["section_capacity.$i" => "required"];
        }
        /* $this->prices_categories = $this->map->prices_categories; */
        $this->sections_create = true;
        $this->sections = false;
    }


    public function return(){
        $this->sections_map = $this->map->sections;
        $this->emit('render');
    }

    public function create_sections(){
        $this->validate($this->array_sections);
        for ($i=1; $i <= $this->sections_count ; $i++) {
            Section::create([
                'name_section' => $this->section_name[$i],
                'name_real' => $this->section_name_real[$i],
                /* 'price_category_id' => $this->section_price_category_id[$i], */
                'capacity' => $this->section_capacity[$i],
                'map_id' => $this->map->id,
            ]);
        }
        $this->sections_create = false;
        $this->set_categories = true;

    }

    public function render()
    {
        return view('livewire.admin.maps.maps-create');
    }
}
