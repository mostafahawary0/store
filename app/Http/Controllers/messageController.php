<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class messageController extends Controller
{
    public function contact()
    {
        return view('web.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'description' => 'required'
        ],
        [
            'name.required' => 'الأسم مطلوب',
            'phone.required' => 'الموبايل او البريد الالكتروني مطلوب',
            'description.required' => 'الرسالة مطلوبة'
        ]
    );
 
    $noti ="noti";
    $message= message::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'description'=>$request->description ,
        'noti'=>$noti
     ]);
     
     
     if(!$message){
        return redirect(route('send.message'))->with("error"," error");
    }
    else
    {
    return redirect(route('send.message'))->with("success","سوف نتواصل بك قريبا");
    }
    }


    public function show()
    {
        $messages = message::orderBy('id', 'desc')->paginate(15);     
        return view('dashboard.message.inbox',compact('messages'));
    }



 

    public function one($id)
    {
        $messages = message::findorFail($id); 
        $noti ='read';
        $messages->update([
            'noti'=>$noti
    ]);    
        return view('dashboard.message.messages',compact('messages'));
    }

    

    public function messageDestroy($id)
    {        
        $message= message::findorFail($id)->delete();
        if(!$message){
            return back()->with("error"," error");
        }
        else
        {
        return back()->with("success","Deleted successfully");
        }
    }

}
