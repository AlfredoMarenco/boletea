<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enclosure extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos con la tabla performances
    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

    //Relacion uno a muchos con el modelo city
    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
