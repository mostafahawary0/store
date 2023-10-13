@extends('web.layout')
@section('title',$products->titleAR)
@section('description',$products->descriptionAR)
@section('keywords',$products->titleAR)
@section('ogtitle',$products->titleAR)
@section('ogimg',asset('image/'.$products->image))
@section('ogdes', $products->descriptionAR)
@section('twitile', $products->titleAR)
@section('twimg',asset('image/'.$products->image))
@section('twdes', $products->descriptionAR)




@section('content')
<style>
.modal-confirm {		
	color: #434e65;
	width: 525px;
}
.modal-confirm .modal-content {
	padding: 20px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	background: #47c9a2;
	border-bottom: none;   
	position: relative;
	text-align: center;
	margin: -20px -20px 0;
	border-radius: 5px 5px 0 0;
	padding: 35px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 36px;
	margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: 15px;
	right: 15px;
	color: #000;
    background:0;
    border:0;
}
.modal-confirm .close:hover {
	opacity: 0.8;
}
.modal-confirm .icon-box {
	color: #fff;		
	width: 95px;
	height: 95px;
	display: inline-block;
	border-radius: 50%;
	z-index: 9;
	border: 5px solid #fff;
	padding: 15px;
	text-align: center;
}
.modal-confirm .icon-box i {
	font-size: 64px;
	margin: -4px 0 0 -4px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #eeb711 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border-radius: 30px;
	margin-top: 10px;
	padding: 6px 20px;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #eda645 !important;
	outline: none;
}
.modal-confirm .btn span {
	margin: 1px 3px 0;
	float: left;
}
.modal-confirm .btn i {
	margin-left: 1px;
	font-size: 20px;
	float: right;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

<script>
function save()
{
            
name = document.getElementById('name').value;							
phone = document.getElementById('phone').value;							
country = document.getElementById('country').value;							
city = document.getElementById('city').value;							
number = document.getElementById('number').value;							
address = document.getElementById('address').value;							
                
x = true;

if(phone.length < 5 || phone.indexOf("") == -1)
{
    document.getElementById('xphone').innerHTML = "<div class='alert alert-danger' style='font-family: cairo1;'> الموبايل مطلوب </div>";
    document.getElementById('phone').style.border = "2px solid #f00";
    x = false;
    }
    else
{
    document.getElementById('xphone').innerHTML = "";
}
    
if(name.length < 2 || name.indexOf("") == -1)
{
    document.getElementById('xname').innerHTML = "<div class='alert alert-danger'style='font-family: cairo1;'> الأسم مطلوب</div>";
    document.getElementById('name').style.border = "2px solid #f00";
    x = false;
    }
    else
{
    document.getElementById('xname').innerHTML = "";
}		
    
if(country.length < 2 || country.indexOf("") == -1)
{
    document.getElementById('xcountry').innerHTML = "<div class='alert alert-danger'style='font-family: cairo1;'>البلد مطلوبة  </div>";
    document.getElementById('country').style.border = "2px solid #f00";
    x = false;
    }
    else
{
    document.getElementById('xcountry').innerHTML = "";
}		
    

if(city.length < 2 || city.indexOf("") == -1)
{
    document.getElementById('xcity').innerHTML = "<div class='alert alert-danger'style='font-family: cairo1;'>المدينة مطلوبة  </div>";
    document.getElementById('city').style.border = "2px solid #f00";
    x = false;
    }
    else
{
    document.getElementById('xcity').innerHTML = "";
}		


if(number == "")
{
    document.getElementById('xnumber').innerHTML = "<div class='alert alert-danger'style='font-family: cairo1;'>عدد المنتج مطلوب  </div>";
    document.getElementById('number').style.border = "2px solid #f00";
    x = false;
    }
    else
{
    document.getElementById('xnumber').innerHTML = "";
}		


if(address.length < 2 || address.indexOf("") == -1)
{
    document.getElementById('xaddress').innerHTML = "<div class='alert alert-danger'style='font-family: cairo1;'>العنوان مطلوب  </div>";
    document.getElementById('address').style.border = "2px solid #f00";
    x = false;
    }
    else
{
    document.getElementById('xaddress').innerHTML = "";
}	

return x;			
}

                
                </script>


       <!-- Product section-->
       <section class="py-5" style="direction: rtl;">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
<img class="card-img-top mb-5 mb-md-0" src="{{asset('image/'.$products->image)}}" alt="{{$products->titleAR}}" />
                    </div>
                    <div class="col-md-6"  style="font-family: 'font';">
                        <div class="small mb-1">
                        @foreach($section as $sec)
                        <span style="color:#088A08;"> القسم : </span>  {{$sec->sectionAR}} 
                            @endforeach
                        </div>
                        <h1 class="display-5 fw-bolder">{{$products->titleAR}}</h1>
                        <div class="fs-5 mb-5">
                        <span style="color:#088A08;"> السعر : </span>     <span>{{$products->price}}</span> جنيه
                        </div>
                        <p class="lead"> 
                             {!! $products->descriptionAR !!}       
                    </p>
                         

                    <style>
                        .inp
                        {
                           height:50px; 
                           font-family: 'cairo';
                           margin-bottom:20px;
                        }
                    </style>

<form action="{{route('create.order',[$products->id,$products->titleAR])}}" onsubmit="return save()" method="post">
@csrf
  <div class="row">

  <div class="form-group col-lg-12" style="padding:20px;">
  
@if(session()->has('error'))

<div class="alert alert-danger">{{session('error')}}</div>

@endif



@if(session()->has('success'))

<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
                <img src="{{asset('web/img/true.png')}}" style="width:60px;">
				</div>
				<button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">
                <i class="fa fa-times" aria-hidden="true"></i>
                </button>
			</div>
			<div class="modal-body text-center">
				<h4 style="font-family: 'cairo1';">تم أرسال طلبك بنجاح</h4>	
				<h5 style="font-family: 'cairo1';">{{session('success')}}</h5>
			</div>
		</div>
	</div>
</div>


@endif

 
 



 


  <i class="fa fa-check" aria-hidden="true" style="background:#f00; color:#fff; padding:10px; border-radius:5px;"></i>
  <span style="font-family: 'cairo1'; font-size:20px; color:#000;"> أطلب الأن </span>
</div>

<input type="hidden" value="{{$products->titleAR}}" name="title">
<input type="hidden" value="{{$products->price}}" name="price">
<input type="hidden" value="{{$products->image}}" name="img">
<input type="hidden" value="{{$products->id}}" name="id">


  <div class="form-group col-lg-6">
<input type="text"  value="{{old('name')}}" id="name" class="form-control inp  @error('name') is-invalid @enderror"
name="name"  placeholder="الاسم بالكامل">
<div  id="xname"> </div>
     @error('name')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror 
   </div>

  <div class="form-group col-lg-6">
     <input type="number"  value="{{old('phone')}}" id="phone" class="form-control inp  @error('phone') is-invalid @enderror"
      name="phone"   placeholder="رقم الموبايل">
      <div id="xphone"> </div>
     @error('phone')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror 
  </div>

  
  <div class="form-group col-lg-6">
<input type="text"  value="{{old('country')}}" id="country" class="form-control inp  @error('country') is-invalid @enderror"
      name="country"   placeholder="البلد">
      <div id="xcountry"> </div>
     @error('country')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror
   </div>

  <div class="form-group col-lg-6">
     <input type="text" value="{{old('city')}}" id="city" 
     class="form-control inp  @error('city') is-invalid @enderror" name="city"    placeholder="المدينة">
     <div id="xcity"> </div>
     @error('city')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group col-lg-12">
     <input type="number" value="{{old('number')}}" id="number" class="form-control inp  @error('number') is-invalid @enderror" 
     name="number" placeholder="عدد المنتج بالارقام">
     <div id="xnumber"> </div>
     @error('number')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group col-lg-12">
     <input type="text" value="{{old('address')}}" id="address" class="form-control inp  @error('address') is-invalid @enderror"
      name="address"   placeholder="العنوان بالكامل">
      <div id="xaddress"> </div>
      @error('address')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group col-lg-12" style="margin-bottom:10px;">
     <textarea type="text" name="description" class="form-control" 
     style="font-family: 'cairo';"  placeholder="ملاحظات">{{old('description')}}</textarea>
  </div>


  <button type="submit" class="btn btn-primary" style="font-family: 'cairo3'; background:#f00;">ارسال</button>
</div>
</form>

                    </div>
                </div>
            </div>
            </div>
        </section>


@endsection