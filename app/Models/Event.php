<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos con la tabla categories inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relacion uno a muchos con la tabla performances
    public function performances(){
        return $this->hasMany(Performance::class);
    }

    public function getRouteKeyName()
    {
        return  "slug";
    }
}
