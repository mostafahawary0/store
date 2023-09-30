<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminAuthController extends Controller
{
    function login2()
    {
        
        if (Auth::guard('admin')->check()){
            return redirect(route('homedashboard'));
        }
        return view('dashboard.login');
        
    }

    function reg()
    {
    
        if (Auth::guard('admin')->check()){
            return redirect(route('homedashboard'));
        }
        return view('dashboard.registration');
    }

    function loginpost2(Request $request){
   
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request -> only ('email' , 'password');
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->intended(route('homedashboard'));
        }
        return redirect(route('dashboard'))->with("error","login error");
     }


    function regpost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $admin= Admin::create($data);

        if(!$admin){
            return redirect(route('reg'))->with("error","registration error");
        }
        return redirect(route('dashboard'))->with("success","registration success");
     }


     function logout(){
        Auth::guard('admin')->logout();
        return redirect(route('dashboard'));
     }


}
