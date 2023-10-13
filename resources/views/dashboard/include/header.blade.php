<header class="header">   
      <nav class="navbar navbar-expand-lg py-3 bg-dash-dark-2 border-bottom border-dash-dark-1 z-index-10">
    
        <div class="container-fluid d-flex align-items-center justify-content-between py-1">
          <div class="navbar-header d-flex align-items-center">
            
          
            <a class="navbar-brand text-uppercase text-reset" href="{{route('homedashboard')}}">
              
          <div class="brand-text brand-big">
                <strong class="text-primary">Admin</strong><strong>panel</strong>
            </div>

            <div class="brand-text brand-sm">
        <strong class="text-primary">A</strong><strong>P</strong>
    </div>
</a>
            <button class="sidebar-toggle">
            <i class="fa fa-arrow-left"></i>
            </button>
          </div>
          <ul class="list-inline mb-0">
  
            <!-- Messages dropdown -->
            <li class="list-inline-item dropdown px-lg-2"><a class="nav-link text-reset px-1 px-lg-0" id="navbarDropdownMenuLink1" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
            <i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i>
              @php 
use App\Models\message;
$messages = message::where('noti','=','noti')->get() 
@endphp

@if($messages->count() == 0)

@else
<span class="badge bg-dash-color-1">{{$messages->count()}}</span> 
@endif

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" style="overflow-y:scroll; height:300px;"
        aria-labelledby="navbarDropdownMenuLink1">
        @foreach(\App\Models\message::where('noti','=','noti')->get()  as $message)
              <li>
            <a class="dropdown-item d-flex align-items-center" href="{{route('one.message',$message->id)}}">
              <div class="ms-3">   <strong class="d-block">New message</strong>
              
              <span class="d-block text-xs"> <span style="color:#fff;"> Form : </span> {{$message->name}}</span>
              <small class="d-block">
              {{ \Carbon\Carbon::parse($message->updated_at)->diffForHumans() }}
        </small>
      </div>
      </a>
      </li>
            @endforeach
          
          <li>
            <a class="dropdown-item text-center message" href="{{route('show.inbox')}}"> 
            <strong>See All Messages  </strong>
          </a>
        </li>
        </ul>
      </li>
            <!-- Tasks dropdown                   -->
            <li class="list-inline-item dropdown px-lg-2">
              
            <a class="nav-link text-reset px-1 px-lg-0" id="navbarDropdownMenuLink2" 
            href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
            <i class="fa fa-bell" aria-hidden="true" style="font-size:20px;"></i> 
@php 
use App\Models\order;
$value = order::where('noti','=','noti')->get() 
@endphp

@if($value->count() == 0)

@else
<span class="badge bg-dash-color-3">{{$value->count()}}</span> 
@endif
    
          </a>


              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
               aria-labelledby="navbarDropdownMenuLink2" style="overflow-y:scroll; height:300px;">
                
               @foreach(\App\Models\order::where('noti','=','noti')->get()  as $order)
        
                 
              
                 <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('one.order',$order->id)}}">
                    <div style="color:#E95F71;">
                     <i class="fa fa-check-square-o" aria-hidden="true" style="color:#E95F71; font-size:18px;"></i> 
                    New order </div>
                    <div class="ms-3">   <strong class="d-block">{{$order->product}}</strong>
                    <span class="d-block text-xs"> quantity : {{$order->number}}</span>
                    <small class="d-block">{{ \Carbon\Carbon::parse($order->updated_at)->diffForHumans() }}</small>
                  </div>
                  </a>
                  </li>
                @endforeach

          
 
             
                <li>          
                   <a class="dropdown-item text-center" href="{{route('show.order')}}"> 
                    <strong>See All Orders </strong>
                  </a>
                </li>

              </ul>
            </li>
    

<li class="list-inline-item dropdown">
<a class="nav-link text-sm text-reset px-1 px-lg-0" id="languages" rel="nofollow" data-bs-target="#" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fa fa-cog" aria-hidden="true" style="font-size:30px;"></i> 
</a>
<ul class="dropdown-menu dropdown-menu-end mt-sm-3 dropdown-menu-dark" aria-labelledby="languages">

<li>
  <a class="dropdown-item" rel="nofollow" href="{{route('password')}}">
   <i class="fa fa-key"  style="color:#E95F71; font-size:18px;"></i>  Settings
   </a>
  </li>

<li>
  <a class="dropdown-item" rel="nofollow"  href="{{route('logoutdashboard')}}">
   <i class="fa fa-sign-out" aria-hidden="true" style="color:#E95F71; font-size:18px;"></i>
    Logout
  </a>
  </li>

</ul>
</li>
      
           
          </ul>
        </div>
      </nav>
    </header>




    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
   
        <ul class="list-unstyled">

              <li class="sidebar-item active"><a class="sidebar-link" href="{{route('homedashboard')}}"> 
                    <i class="fa fa-home" aria-hidden="true" style="font-size:25px; color:#E95F71;"></i>
                     &nbsp; &nbsp;
                      <span> Home </span>
                    </a>
              </li>

              <li class="sidebar-item"><a class="sidebar-link" href="{{route('about')}}"> 
              <i class="fa fa-info-circle" aria-hidden="true" style="font-size:25px;color:#E95F71;"></i>
                &nbsp; &nbsp;
                      <span>About us</span>
                    </a>
                    </li>


                    
              <li class="sidebar-item"><a class="sidebar-link" href="{{route('section.index')}}"> 
               <i class="fa fa-list-alt" aria-hidden="true" style="font-size:25px;color:#E95F71;"></i>
                &nbsp; &nbsp;
                      <span>Sections</span>
                    </a>
                    </li>

                    
              <li class="sidebar-item"><a class="sidebar-link" href="{{route('product.index')}}"> 
               <i class="fa fa-product-hunt" aria-hidden="true" style="font-size:25px;color:#E95F71;"></i>
                &nbsp; &nbsp;
                      <span>Products</span>
                    </a>
                    </li>

                    
              <li class="sidebar-item"><a class="sidebar-link" href="{{route('show.order')}}"> 
               <i class="fa fa-cube" aria-hidden="true" style="font-size:25px;color:#E95F71;"></i>
                &nbsp; &nbsp;
                      <span>Orders</span>
                    </a>
                    </li>
           
        </ul> 
      </nav>
</header>