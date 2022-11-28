<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Statistics extends Controller
{
    public function show(){

        $countGroup = DB::table('grouping')->count();
        $countUser = DB::table('users')->count();
        $countClub = DB::table('clubs')->count();

        return view('in.statistics',compact('countGroup','countUser','countClub'));

    }
}
