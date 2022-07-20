<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos inversa con la tabla maps
    public function map()
    {
        return $this->belongsTo(Map::class);
    }
    //Relacion uno a muchos con la tabla seats
    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    //Relacion uno a uno con tabla prices_categories
    public function price_category()
    {
        return $this->belongsTo(PriceCategory::class);
    }
}
