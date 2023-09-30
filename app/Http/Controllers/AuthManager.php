<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthManager extends Controller 
{
    function login()
    {
        if (Auth::guard('web')->check()){
            return redirect(route('profile'));
        }
        return view('web.login');
    }

    function registration(){

        if (Auth::guard('web')->check()){
            return redirect(route('profile'));
        }

        return view('web.registration');
    }


    
    function loginpost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request -> only ('email' , 'password');
        if(Auth::guard('web')->attempt($credentials)){
            return redirect()->intended(route('profile'));
        }
        return redirect(route('login'))->with("error","login error");
     }


     function registrationpost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if(!$user){
            return redirect(route('registration'))->with("error","registration error");
        }
        return redirect(route('login'))->with("success","registration success");
     }

     function logout(){
        Auth::guard('web')->logout();
        return redirect(route('login'));
     }


}
