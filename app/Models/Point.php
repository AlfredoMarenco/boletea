<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'schedule'];

    //Relacion muchos a muchos con la tabla cities
    public function cities()
    {
        return $this->belongsToMany(City::class);
    }
}
