<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundsController extends Controller
{
    public function __invoke(){
        return view('refunds.index');
    }
}
