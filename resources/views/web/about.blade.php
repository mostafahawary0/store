@extends('web.layout')

@foreach($Abouts as $About) 

@section('title','من نحن')
@section('title','كنوز الطبيعة')
@section('description',$About->contentAR)
@section('keywords','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogtitle','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogimg',asset('web/img/logo.png'))
@section('ogdes', $About->contentAR)
@section('twitile', 'الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('twimg',asset('web/img/logo.png'))
@section('twdes', $About->contentAR)




@section('content')
 


       <!-- Product section-->
       <section style="direction: rtl; ">
            <div class="container-fluid">
         
                <div class="row">
                    <div class="col-lg-12" style="padding:50px;"> 
                        <h3 style="font-family: 'cairo1';"> من نحن  </h3> 
                    </div>
                  <div class="col-lg-6" style="font-family: 'cairo1'; font-size:17px; line-height:40px;"> 
                   {!! $About->contentAR !!} 
                </div>  
                  <div class="col-lg-6">   <img src="{{asset('image/'.$About->photo)}}" style="width:80%;"> </div> 
           
                </div>
            </div>
        </section>

        @endforeach 
@endsection