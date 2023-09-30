<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use App\Models\product_image;
use Illuminate\Http\Request;
use File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('dashboard.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Section::all();
        return view('dashboard.product.create',compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titlear' => 'required',
            'titleen' => 'required',
            'section' => 'required',
            'price' => 'required|integer',
            'img' => 'required|mimes:jpg,png,jpeg,gif,svg,bmp',
            'descriptionar' => 'required',
            'descriptionen' => 'required'
        ],
        [
            'titlear.required' => 'Title in Arabic is required.',
            'titleen.required' => 'Title in English is required.',
            'section.required' => 'The section is required.',
            'price.required' => 'The price is required.',
            'price.integer' => 'The price is numbers only.',
            'img.required' => 'The image field is required.',
            'img.mimes' => 'The image field must be an image.',
            'descriptionar.required' => 'Descriptionar in Arabic is required.',
            'descriptionen.required' => 'Description in English is required.'
        ]
    );

    $image= $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->store('products','imgs');

    $section= Product::create([
        'titleAR'=>$request->titlear,
        'titleEN'=>$request->titleen,
        'section_id'=>$request->section,
        'price'=>$request->price,
        'image'=>$path ,
        'descriptionAR'=>$request->descriptionar,
        'descriptionEN'=>$request->descriptionen
        
     ]);
     
     if(!$section){
        return redirect(route('produc.create'))->with("error"," error");
    }
    else
    {
    return redirect(route('product.create'))->with("success","Saved successfully");
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products= Product::findorFail($id);
        $sections= Product::findorFail($id)->section;
        $id2 = $sections->id;
        $allsections = Section::where('id' ,'!=' , $id2)->get();
        
        return view('dashboard.product.edit',compact('products','sections','allsections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titlear' => 'required',
            'titleen' => 'required',
            'section' => 'required',
            'price' => 'required|integer',
            'descriptionar' => 'required',
            'descriptionen' => 'required'
        ],
        [
            'titlear.required' => 'Title in Arabic is required.',
            'titleen.required' => 'Title in English is required.',
            'section.required' => 'The section is required.',
            'price.required' => 'The price is required.',
            'price.integer' => 'The price is numbers only.',
            'descriptionar.required' => 'Descriptionar in Arabic is required.',
            'descriptionen.required' => 'Description in English is required.'
        ]
    );
    
        $section= Product::findorFail($id);
        $section->update([
                'titleAR'=>$request->titlear,
                'titleEN'=>$request->titleen,
                'section_id'=>$request->section,
                'price'=>$request->price,
                'descriptionAR'=>$request->descriptionar,
                'descriptionEN'=>$request->descriptionen
        ]);

        if(!$section){
            return redirect(route('product.edit',$id))->with("error"," error");
        }
        else
        {
        return redirect(route('product.edit',$id))->with("success","Saved successfully");
        }
    }



    function editimage($id)
    {
        $products = Product::findorFail($id);
        return view('dashboard.product.image',compact('products'));
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

        $images = Product::find($id);

        if($request->hasfile('img'))
        {
            $des='image/'.$images->image;
            if( File::exists($des))
            {
                File::delete($des);
            }
            $image= $request->file('img')->getClientOriginalName();
            $path = $request->file('img')->store('products','imgs');
            $images->image=$path;
        }
        $images->update();        
        if(!$images){
            return redirect(route('aboutimage.update',$id))->with("error"," error");
        }
        else
        {
        return redirect(route('aboutimage.update',$id))->with("success"," The image has been changed");
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $products= Product::findorFail($id);
        $images =$products->image;
        
        $des='image/'.$images;
        if( File::exists($des))
        {
            File::delete($des);
        }
        
        
        $section= Product::findorFail($id)->delete();
        if(!$section){
            return redirect(route('product.index'))->with("error"," error");
        }
        else
        {
        return redirect(route('product.index'))->with("success","Saved successfully");
        }
    }
    


    function editimages($id)
    {
        $products = Product::findorFail($id);
        $images= Product::findorFail($id)->images;
        return view('dashboard.product.images',compact('products','images'));
    }




    public function uploadimages(Request $request,$id)
    {
        $request->validate([
            'img' => 'required|mimes:jpg,png,jpeg,gif,svg,bmp',
        ],
        [
            'img.required' => 'The image field is required.',
            'img.mimes' => 'The image field must be an image.',
        ]
    );
 
        $image= $request->file('img')->getClientOriginalName();
        $path = $request->file('img')->store('products','imgs');

        $images= product_image::create([
            'product_id'=>$request->idproduct,
            'section_id'=>$request->idsection,
            'image'=>$path 
         ]);

        if(!$images){
            return redirect(route('images.product',$id))->with("error"," error");
        }
        else
       {
        return redirect(route('images.product',$id))->with("success"," success");
        } 

    }


 

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroyimages($id)
    {
        $images= product_image::findorFail($id);
        $image =$images->image;
        $id2 =$images->product_id;
        
        $des='image/'.$image;
        if( File::exists($des))
        {
            File::delete($des);
        }
        
        
        $section= product_image::findorFail($id)->delete();
        if(!$section){
            return redirect(route('images.product',$id2))->with("error2"," error");
        }
        else
        {
        return redirect(route('images.product',$id2))->with("success2","Saved successfully");
        }
    }
    


}
