<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Premium extends Controller
{
    public function show(){

        return view('in.pay');
    }
}
