<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a muchos inversa con la tabla events
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    //Relacion uno a muchos inversa con la tabla enclosures
    public function enclosure()
    {
        return $this->belongsTo(Enclosure::class);
    }

    public function getRouteKeyName()
    {
        return  "slug";
    }
}
