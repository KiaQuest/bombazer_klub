<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Grouping;
use App\Models\Clubs;
use App\Models\ozvModel;
use Illuminate\Support\Facades\DB;

class Club extends Controller
{
    public function show(){

        $gruplar = Grouping::all();
        return view('in.grouping',compact('gruplar'));
    }
      public function showClub($id){


        $klublar = DB::table('clubs')
            ->join('grouping', 'clubs.group', '=', 'grouping.id')
            ->select('clubs.*', 'grouping.color')->where('secondGroup',$id)
            ->get();



        // $klublar = Clubs::where('secondGroup',$id)->get();
        $klublar2 = Clubs::where('group',$id)->whereNotIn('secondGroup', [$id])->get();


        $groupID = Clubs::where('secondGroup',$id)->get('group');
        // $exColors = Grouping::find()->group($groupID)->color;
        $exColors = Grouping::find($groupID);
        // dd($users);

        $mainColor = Grouping::find($id)->color;
        return view('in.clubs',compact('klublar','klublar2','mainColor','exColors'));
    }

    public function clubin($id){

        $club = Clubs::join('grouping', 'clubs.group', '=', 'grouping.id')
            ->select('clubs.*', 'grouping.color', 'grouping.groupTag')->where('clubs.id',$id)
            ->get();
            $ozv = ozvModel::where('user_id', session('userID'))->get('club_id')->pluck('club_id')->toArray();
            // dd($ozv);
            if (in_array($id , $ozv)) {
               $X = 1;
            }else {
               $X = 0;
            }

        return view('in.clubici',compact('club' ,'ozv' , 'X'));
    }
}
