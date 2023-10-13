<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Section;

use Illuminate\Http\Request;

class homeController extends Controller
{ 
    public function showProduct()
    {
        $products = Product::orderBy('id', 'desc')->limit(16)->get();
        return view('web.home',compact('products'));
    }


    public function singleProduct($id, $title)
    {
         
        $products= Product::findorFail($id);
        $sections= Product::findorFail($id)->section;
        $id2 = $sections->id;
        $section = Section::where('id' , $id2)->get();
        return view('web.product',compact('products','section'));
    }

    public function showSection($id, $title)
    {
         
        $products= Product::where('section_id', $id)->paginate(12);
        $section = Section::where('id' , $id)->get();
        return view('web.section',compact('products','section'));
    }

    public function Search(Request $request)
    {
      $serial_number= $request->input('search');
      $products =Product::where('titleAR','LIKE',"%$serial_number%")->paginate(12);
      return view('web.search',compact('products'));
  
    }

}
