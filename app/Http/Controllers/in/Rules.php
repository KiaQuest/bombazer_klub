<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Rules extends Controller
{
    public function show(){
        return view('in.rules');
    }

}
