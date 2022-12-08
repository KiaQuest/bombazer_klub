<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use App\Models\ForumModel;
use App\Models\Log;
use Illuminate\Http\Request;

class Forum extends Controller
{
    public function show(){

        // Log::insert([
        //     'user_id' => session('userID'),
        //     'action' => 11,
        //     'ip1' => request()->ip(),
        // ]);

        $forum = ForumModel::join('users', 'forum.user_id', '=', 'users.id')
            ->select('forum.*', 'users.nickname')->latest()->take(50)
            ->get();

        return view('in.forum' , compact('forum'));
    }


    public function do(Request $request){

        ForumModel::insert([
            'user_id' => session('userID'),
            'text' => $request->text
        ]);

        Log::insert([
            'user_id' => session('userID'),
            'name' => session('name'),
            'action' => 12,
            'ip1' => request()->ip(),
            'effect' => $request->text,
        ]);
        // $forum = ForumModel::join('forum', 'users.id', '=', 'forum.user_id')
        // ->select('forum.text', 'forum.created_at','users.nickname')
        // ->get(['nickname' , 'forum.text' ,'created_at'])->toArray();


        return redirect()->back();
    }
}
