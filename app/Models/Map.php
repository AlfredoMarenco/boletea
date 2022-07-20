<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos con la tabla sections
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    //Relacion uno a muchos con la tabla prices_categories
    public function prices_categories()
    {
        return $this->hasMany(PriceCategory::class);
    }
}
