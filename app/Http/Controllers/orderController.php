<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;


class orderController extends Controller
{
    //
    public function createOrder(Request $request ,$id ,$title)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|min:5',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'number' => 'required|integer'
        ],
        [
            'name.required' => 'الأسم مطلوب',
            'phone.required' => 'الموبايل مطلوب',
            'phone.numeric' => 'يجب ان يكون الموبايل ارقام فقط',
            'phone.min' => 'ادخل الموبايل بشكل صحيح',
            'country.required' => 'البلد مطلوبة',
            'city.required' => 'المدينة مطلوبة',
            'number.required' => 'عدد المنتج مطلوب',
            'number.integer' => 'ادخل عدد المنتج بالارقام فقط',
            'address.required' => 'العنوان مطلوب'
        ]
    );
 
    $noti ="noti";
    $order= order::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'country'=>$request->country,
        'city'=>$request->city,
        'number'=>$request->number,
        'address'=>$request->address,
        'description'=>$request->description ,
        'product'=>$request->title,
        'price'=>$request->price,
        'img'=>$request->img,
        'noti'=>$noti
     ]);
     
     
     if(!$order){
        return redirect(route('create.order',[$id,$title]))->with("error"," error");
    }
    else
    {
    return redirect(route('create.order',[$id,$title]))->with("success","سوف نتواصل بك قريبا");
    }
    }


    public function showOrder()
    {
        $orders = order::orderBy('id', 'desc')->paginate(15);     
        return view('dashboard.order.orders',compact('orders'));
    }

    public function oneOrder($id)
    {
        $orders = order::findorFail($id); 
        $noti ='read';
        $orders->update([
            'noti'=>$noti
    ]);    
        return view('dashboard.order.order-page',compact('orders'));
    }

    public function orderDestroy($id) 
    {        
        $order= order::findorFail($id)->delete();
        if(!$order){
            return back()->with("error"," error");
        }
        else
        {
        return back()->with("success","Deleted successfully");
        }

    }

}
