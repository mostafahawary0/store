<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function password()
    {
        return view('dashboard.settings.password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'old' => 'required',
            'new' => 'required|min:6|max:100',
            'confirm' => 'required|same:new'
        ],
        [
            'email.required' => 'Email is required.',
            'old.required' => 'The old password is required.',
            'new.min' => 'Your old must be at least 6 characters.',
            'new.required' => 'The new password is required.',
            'confirm.required' => 'Confirm password is required.',
            'confirm.same' => " New password  doesn't match Confirm password",
        ]
    );

    $admin= Auth::guard('admin')->user();
 
     if(!Hash::check($request->old,  $admin->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        Admin::whereId($admin->id)->update([
            'password' => Hash::make($request->new),
            'email' => $request->email
        ]);

        return back()->with("success", "Changed successfully!");

    }

}
