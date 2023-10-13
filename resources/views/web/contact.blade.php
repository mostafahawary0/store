@extends('web.layout')
@section('title','كنوز الطبيعة')
@section('description','كنوزالطبيعة للعلاج بي الأعشاب والضعف الجنسي ')
@section('keywords','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogtitle','الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('ogimg',asset('web/img/logo.png'))
@section('ogdes', 'كنوزالطبيعة للعلاج بي الأعشاب والضعف الجنسي ')
@section('twitile', 'الضعف الجنسي , العلاج بالاعشاب , زيوت الشعر')
@section('twimg',asset('web/img/logo.png'))
@section('twdes', 'كنوزالطبيعة للعلاج بي الأعشاب والضعف الجنسي ')


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
address = document.getElementById('address').value;							
                
x = true;

if(phone.length < 5 || phone.indexOf("") == -1)
{
    document.getElementById('xphone').innerHTML = "<div class='alert alert-danger' style='font-family: cairo1;'> الموبايل او البريد الالكتروني مطلوب</div>";
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
    

if(address.length < 2 || address.indexOf("") == -1)
{
    document.getElementById('xaddress').innerHTML = "<div class='alert alert-danger'style='font-family: cairo1;'>الرسالة مطلوبة </div>";
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
      

<style>
.inp
{
height:50px; 
font-family: 'cairo';
margin-bottom:20px;
}
</style>


        <div class="container">
             <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" style="color:#f00;" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5" style="font-family: 'cairo';">أتصل بنا </h4>
                    <p>+201011117709</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3"style="color:#f00;"  aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5" style="font-family: 'cairo';">العنوان</h4>
                   <address style="font-family: 'cairo';">الجيزة - التعاون فيصل - شارع ابي عمار </address>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-address-book fa-5x mb-3" style="color:#f00;" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5" style="font-family: 'cairo';">يمكنك التواصل بنا</h4>
<a href="https://www.facebook.com/naturetreasurescom?mibextid=ZbWKwL" target="_blank"> <i class="fa fa-facebook" style="font-size:20px; color:#000;"></i> </a>
&nbsp;
&nbsp;
<a href="https://www.youtube.com/channel/UCHJ7xrHB0Hj7mUoP7iUElrw" target="_blank"> <i class="fa fa-youtube-play" style="font-size:20px; color:#000;"></i>  </a>
&nbsp;
&nbsp;
<a href="https://wa.me/0201011117709" target="_blank"> <i class="fa fa-whatsapp" style="font-size:20px; color:#000;"></i>  </a>
&nbsp;
&nbsp;
<a href="https://www.instagram.com/kanouzeltabya/" target="_blank"> <i class="fa fa-instagram" style="font-size:20px; color:#000;"></i>  </a>
                  </div>
                </div>
             </div>
   
           </div>
       </div>
 
<section class="py-5" style="direction: rtl;">
            <div class="container">
                <div class="row gx-4 gx-lg-5 align-items-center">
       
                    <div class="col-md-6"  style="font-family: 'font'; ">


<form action="#" onsubmit="return save()" method="post">
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
				<h4 style="font-family: 'cairo1';">تم الارسال سوف نتواصل بك قريبا</h4>	
				<h5 style="font-family: 'cairo1';">{{session('success')}}</h5>
			</div>
		</div>
	</div>
</div>


@endif
 
  <i class="fa fa-envelope" aria-hidden="true" 
  style="background:#f00; color:#fff; padding:10px; border-radius:5px;"></i>
  <span style="font-family: 'cairo1'; font-size:20px; color:#000;"> أتصل بنا</span>
</div>
 
  <div class="form-group col-lg-6">
    
<input type="text"  value="{{old('name')}}" id="name" class="form-control inp  @error('name') is-invalid @enderror"
name="name"  placeholder="الاسم">
<div  id="xname"> </div>
     @error('name')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror 
   </div>

  <div class="form-group col-lg-6">
     <input type="text"  value="{{old('phone')}}" id="phone" class="form-control inp  @error('phone') is-invalid @enderror"
      name="phone"   placeholder="رقم الموبايل أو البريد الالكتروني">
      <div id="xphone"> </div>
     @error('phone')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror 
  </div>

  
   
  <div class="form-group col-lg-12" style="margin-bottom:10px;">
     <textarea type="text" id="address" name="description" class="form-control @error('description') is-invalid @enderror" 
     style="font-family: 'cairo';"  placeholder="الرسالة">{{old('description')}}</textarea>
     <div id="xaddress"> </div>
     @error('description')
    <div class="alert alert-danger" style="font-family: 'cairo1';">{{ $message }}</div>
    @enderror 
  </div>


  <button type="submit" class="btn btn-primary" style="font-family: 'cairo3'; background:#f00;">ارسال</button>
</div>
</form>

                    </div>


                    
                <div class="col-md-6"  style="padding:50px;">
                
 
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.284404176798!2d31.166605825294965!3d29.99998902067709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145845da0a54a8ed%3A0x80a0951186065358!2z2LTYp9ix2Lkg2KfZhNmF2YTZgyDZgdmK2LXZhCAmINin2YTYqti52KfZiNmG2Iwg2KPZiNmE2Ykg2KfZhNmH2LHZhdiMINin2YTYt9in2YTYqNmK2KnYjCDYp9mE2KzZitiy2KkgMzUzMTM0MQ!5e0!3m2!1sar!2seg!4v1697110134065!5m2!1sar!2seg" 
            style="width:100%; height:300px; margin: 0 auto;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       
            </div>

                </div>

                
            </div>
            </div>
        </section>


@endsection