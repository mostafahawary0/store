<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
use File;
class AboutController extends Controller
{
    
    function about()
    {

        $Abouts = About::orderBy('id', 'desc')->limit(1)->get();         
        return view('dashboard.about.about',compact('Abouts'));
        
    }
    
    function show()
    {

        $Abouts = About::orderBy('id', 'desc')->limit(1)->get();         
        return view('web.about',compact('Abouts'));
        
    }

       
    function update(Request $request)
    {

        
        $request->validate([
            'ar' => 'required',
            'en' => 'required',
        ],
        [
            'ar.required' => 'Content in Arabic is required.',
            'en.required' => 'Content in English is required.',
        ]
    );

    $aboutup = About::where("id", $request->id)->update([
                                                            "contentAR" => $request->ar , 
                                                            "contentEN" => $request->en
                                                        ]);
    if(!$aboutup){
        return redirect(route('about'))->with("error"," error");
    }
    return redirect(route('about'))->with("success"," Saved successfully");
        
    }

   
    function edit($id)
    {
       $abouts = About::findorFail($id);
       return view('dashboard.about.about-image',compact('abouts'));
    }


    function imageupdate(Request $request,$id)
    {
   
        $request->validate(
            [
            'img' => 'required|mimes:jpg,png,jpeg,gif,svg,bmp',
            ],
            [
            'img.required' => 'The image field is required.',
            'img.mimes' => 'The image field must be an image.'
            ]
    );

        $images = About::find($id);

        if($request->hasfile('img'))
        {
            $des='image/'.$images->photo;
            if( File::exists($des))
            {
                File::delete($des);
            }
            $image= $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->store('website','imgs');
            $images->photo=$path;
        }
        $images->update();        
        if(!$images){
            return redirect(route('image.update',$id))->with("error"," error");
        }
        else
        {
        return redirect(route('image.update',$id))->with("success"," The image has been changed");
        }
    }


}
