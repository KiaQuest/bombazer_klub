<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use App\Models\Clubs;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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

    public function doOzv($fee, $klub_id, $league)
    {

        $money = User::where('id',  session('userID'))->first('charge');

        $have = $money->charge;
        $q = $have - $fee;
        if ($q >= 0) {

            $userID =  session('userID');

            $tt = Clubs::find($klub_id)->user()->attach($userID, ['amount' => $fee, 'league' => $league]);

            // اعمال کیف پول

            User::where('id',  session('userID'))->update(['charge' => $q]);

            return redirect()->back()->with('ozv', 'Kluba ozv olduz ☻♥');
        } else {
            return redirect()->back()->with('ozvOlmade', 'Kafi Azeriz yoxde :(');
        }
    }
}
