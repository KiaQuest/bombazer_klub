<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class Kia extends Controller
{
    public function base($id = null){

        if ($id) {

        $data = Log::where('user_id' , $id)->get();
        return view('logs' , compact('data'));

        }

        $data = Log::all();
        return view('logs' , compact('data'));
        // dd($data);

    }
}
