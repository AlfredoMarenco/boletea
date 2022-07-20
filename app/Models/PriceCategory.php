<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceCategory extends Model
{
    use HasFactory;
    /* protected $table = 'price_categories';
    protected $primaryKey = 'price_category_id'; */

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
}
