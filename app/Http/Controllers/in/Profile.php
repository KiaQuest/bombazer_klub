<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use App\Models\Grouping;
use App\Models\Log;
use App\Models\ozvModel;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
// use vendor\autoload;

class Profile extends Controller
{
    // public function __construct()
    // {
    //     if (Auth::check()) {
    //         echo 'olup';
    //     }else {
    //         echo 'olmuyup';
    //     }

    // }


    public function show()
    {

        $data = User::where('id',  session('userID'))->get();
        return view('in.profile', compact('data'));
    }

    public function doOzv($fee, $klub_id, $league, $group)
    {

        $money = User::where('id',  session('userID'))->first('charge');

        $have = $money->charge;
        $q = $have - $fee;
        if ($q >= 0) {

            $userID =  session('userID');

            $tt = Clubs::find($klub_id)->user()->attach($userID, ['amount' => $fee, 'league' => $league]);

            // اعمال کیف پول
            $klubName = Clubs::where('id' , $klub_id)->get('name')->pluck('name')->toArray();

            User::where('id',  session('userID'))->update(['charge' => $q]);
            Clubs::where('id' , $klub_id)->increment('members', 1);
            Grouping::where('id' ,  $group)->increment('pop', 1);
            Log::insert([
                'user_id' => session('userID'),
                'name' => session('name'),
                'action' => 13,
                'ip1' => request()->ip(),
                'effect' => $klubName[0],
                'fee' => $fee,
            ]);

            return redirect()->back()->with('ozv', 'Kluba ozv olduz ☻♥');
        } else {
            return redirect()->back()->with('ozvOlmade', 'Kafi Azeriz yoxde :(');
        }
    }


    public function joined()
    {

        $data = ozvModel::join('clubs', 'user_clubs.club_id', '=', 'clubs.id')
        ->select('user_clubs.*', 'clubs.name', 'clubs.group')
        ->where('user_id',  session('userID'))->get();

        return view('in.joined', compact('data'));


    }

}
