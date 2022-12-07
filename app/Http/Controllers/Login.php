<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Input\Input;

class Login extends Controller
{
    public function doLogin(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|max:20',
            'password' => 'required|max:40',
        ], [
            'name.required' => 'Ad boş ola biləmməz',
            'password.required' => 'Password boş ola biləmməz',
        ]);

        if (User::where('name', '=', $request->name)->where('password', '=', md5($request->password))->first()) {

            $userID = User::where('name', $request->name)->value('id');

            session(['userID' => $userID, 'name' => $request->name, 'must_login' => 'yes']);
            return redirect('/anaSayfa');
        } else {
            return redirect()->back()->with('field', 'ad və ya password iştibahde');
        }
    }


    public function showHomePage()
    {
        return view('home');
    }

    public function showSignUp()
    {
        return view('signUp');
    }

    public function signup(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|regex:/^[a-zA-Z0-9@#%&*]+$/u|max:20|min:3|unique:users',
            'soyad' => 'max:40',
            'password' => 'required|max:40',
            'nickname' => 'required|max:40|unique:users',
            'telfon' => 'max:40',
            'yas' => 'max:3',

        ], [
            'name.required' => 'Ad boş ola biləmməz',
            'name.regex' => 'Ad inglisi olsun',
            'name.max' => 'Ad 20 karekterdən çox ola biləmməz',
            'name.min' => 'Ad 3 karekterdən az ola biləmməz',
            'name.unique' => 'Ad artıq seçilib',
            'nickname.unique' => 'nickname artıq seçilib',
            'nickname.required' => 'nickname boş ola biləmməz',
            'password.required' => 'Password boş ola biləmməz',

        ]);
        // dd(request()->all());
        // $request->input( 'password' )->md5();
        // dd(request()->all());
        User::create(request()->all());
        return redirect()->route('m3')->with('status', 'Təbriklər! Bizdən biri oldun!');
    }

    public function landingPage(){

        return redirect('/');
    }

    public function flushSession(Request $request)
    {
        $request->session()->flush();

        return redirect('/');
    }
}
