
@extends('web.layout')
@section('title','كنوز الطبيعة')
@section('description','كنوزالطبعه للعلاج بي الأعشاب والضعف الجنسي ')
@section('keywords','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogtitle','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogimg',asset('web/img/logo.png'))
@section('ogdes', 'كنوزالطبعه للعلاج بي الأعشاب والضعف الجنسي ')
@section('twitile', 'الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('twimg',asset('web/img/logo.png'))
@section('twdes', 'كنوزالطبعه للعلاج بي الأعشاب والضعف الجنسي ')


@section('content')



<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
               
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          
            @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <a href="{{route('single.product',[$product->id,$product->titleAR])}}">
           <img class="card-img-top" src="{{asset('image/'.$product->image)}}" alt="..." /> 
            </a>
                            <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <a href="{{route('single.product',[$product->id,$product->titleAR])}}">
                         <h5 class="fw-bolder" style="font-family: 'cairo3';">{{$product->titleAR}}</h5>
                        </a>
                        <!-- Product price-->
                        <div class="text-center">
                        <a href="{{route('single.product',[$product->id,$product->titleAR])}}">
                         <table style="width:100%;"> 
                             <tr>
                             <td style="font-family: 'cairo3'; font-size:17px; text-align:right; color:#803160;">   ج . م </td>
                            <td  style="font-family: 'cairo3'; font-size:17px; text-align:left; color:#803160;">  {{$product->price}}  </td>
                         
                            </tr>
                            </table>
                                </a>
                        </div>
                          
                    </div>
                </div>
                            <!-- Product actions-->
    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
        <div class="text-center">
            <a   href="{{route('single.product',[$product->id,$product->titleAR])}}"
            style="background:#fff; color:#803160; font-size:16px; font-family: 'cairo3';  
            border:1px solid #803160; border-radius:7px; padding-left:30px;  padding-right:30px; padding-top:3px; padding-bottom:3px;"
            > 
            أطلب الأن
            </a>
            </div>
    </div>
                        </div>
                    </div>
                    
            @endforeach
 
                </div>
                <div class="container text-center"> {{$products->links()}}   </div>
                
            </div>
        </section>

        @endsection