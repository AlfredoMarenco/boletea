<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $guarded = [];

    const PENDING = 0;
    const PROCESS = 1;
    const COMPLETE = 2;
    const REJECTED = 3;
}
