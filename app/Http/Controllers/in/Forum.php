<?php

namespace App\Http\Controllers\in;

use App\Http\Controllers\Controller;
use App\Models\ForumModel;
use Illuminate\Http\Request;

class Forum extends Controller
{
    public function show(){

        $forum = ForumModel::join('users', 'forum.user_id', '=', 'users.id')
            ->select('forum.*', 'users.nickname')->latest()->take(50)
            ->get();
// dd($forum);
        return view('in.forum' , compact('forum'));
    }


    public function do(Request $request){
        // dd($request->all());

        ForumModel::insert([
            'user_id' => session('userID'),
            'text' => $request->text
        ]);
        // $forum = ForumModel::join('forum', 'users.id', '=', 'forum.user_id')
        // ->select('forum.text', 'forum.created_at','users.nickname')
        // ->get(['nickname' , 'forum.text' ,'created_at'])->toArray();


        return redirect()->back();
    }
}
