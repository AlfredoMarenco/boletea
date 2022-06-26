<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    //Relacion muchos a muchos con la tabla points
    public function points()
    {
        return $this->belongsToMany(Point::class);
    }

    //Relacion uno a muchos con el modelo enclosure
    public function enclosures()
    {
        return $this->hasMany(Enclosure::class);
    }

}
