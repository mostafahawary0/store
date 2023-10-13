

  <div class="border-bottom ">
 
    <div class="py-5" style="">
      <div class="container">
        <div class="row w-100 align-items-center gx-lg-2 gx-0">
		

<div class="col-md-3 col-xxl-3  d-none d-lg-block">
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
	
 
<div class="col-xxl-5 col-lg-5 d-none d-lg-block" style="direction: rtl;">

<form action="{{route('search')}}" method="post">
  @csrf
<div class="input-group mb-3">
<input type="text" class="form-control" style="font-family:cairo; border-bottom-left-radius: 0; border-top-left-radius: 0;" 
name="search" placeholder="ابحث عن منتج هنا ">
<div class="input-group-append">
<button class="btn btn-info" type="submit" 
style="height:50px;  border-bottom-right-radius: 0; border-top-right-radius: 0;" id="button-addon2">
  <span class="fa fa-search d-block"></span>
</button>
</div>
</div>
</form>


</div>
   
      
		 


<div class="col-xxl-3 col-lg-4 text-end">


<a class="navbar-brand d-none d-lg-block" href="#">
<img src="{{asset('web/img/logo.png')}}" style="width:200px;" alt="logo">
</a>

<div class="d-flex justify-content-between w-100 d-lg-none">
<a class="navbar-brand" href="#">
<img src="{{asset('web/img/logo.png')}}" style="width:200px;"  alt="logo">
</a>

<div class="d-flex align-items-center lh-1">

 
<button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
<img src="{{asset('web/img/menu.png')}}" style="width:25px;" alt="menu">
</button>
</div>
</div>

</div>
		 
		  
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
      <div class="container">

        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
		
          <div class="offcanvas-header pb-1" style="direction: rtl;">
            <a href="#"><img src="{{asset('web/img/logo.png')}}" style="width:200px;" alt="logo"></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
		  
          <div class="offcanvas-body">
 
          <style>
.nav-link
{
  font-family: 'cairo1';
  font-size:17px;
}
.dropdown-item
{
  font-family: 'cairo1';
  font-size:17px;
}
.nav-item {
padding-left:20px
}
</style>
     
             <div class="col-lg-12" style="direction: rtl; text-align:right;">
              <ul class="navbar-nav align-items-center ">
			  
                <li class="nav-item w-100 w-lg-auto">
                  <a class="nav-link" href="{{route('home')}}" > الرئيسية </a>
                </li>
				
                <li class="nav-item w-100 w-lg-auto">
                  <a class="nav-link" href="{{route('about.us')}}"> من نحن </a>
                </li>
                @foreach(\App\Models\section::limit(3)->get() as $section)
                <li class="nav-item w-100 w-lg-auto">
                  <a class="nav-link" href="{{route('section',[$section->id,$section->sectionAR])}}"> 
                    {{$section->sectionAR}}</a>
                </li>
                @endforeach
	 
                <li class="nav-item dropdown w-100 w-lg-auto">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    تسوق <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                    @foreach(\App\Models\section::all() as $section)
                <li><a class="dropdown-item"  href="{{route('section',[$section->id,$section->sectionAR])}}"> {{$section->sectionAR}}</a></li>
                @endforeach
                  </ul>
  			     </li>
			
				<li class="nav-item w-100 w-lg-auto">
                  <a class="nav-link" href="{{route('contact')}}"> أتصل بنا  </a>
                </li>
				
              </ul>
			  
            </div>
          </div>
        </div>
      </div>
    </nav>


</div>
 

<div class="col-xxl-12 col-lg-12 d-md-none  d-lg-block d-lg-none  d-xl-block d-xl-none  d-xxl-block d-xxl-none" style="direction: rtl; padding:20px;">

<form action="{{route('search')}}" method="post">
  @csrf
<div class="input-group mb-3">
<input type="text" class="form-control" style="font-family:cairo; border-bottom-left-radius: 0; border-top-left-radius: 0;" 
name="search" placeholder="ابحث عن منتج هنا ">
<div class="input-group-append">
<button class="btn btn-info" type="submit" 
style="height:50px;  border-bottom-right-radius: 0; border-top-right-radius: 0;" id="button-addon2">
  <span class="fa fa-search d-block"></span>
</button>
</div>
</div>
</form>


</div>