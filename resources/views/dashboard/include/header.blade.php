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
             <span class="badge bg-dash-color-1">5</span></a>

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink1">
            
                    <li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="ms-3">   <strong class="d-block">Nadia Halsey</strong>
                    <span class="d-block text-xs">lorem ipsum dolor sit amit</span>
                    <small class="d-block">9:30am</small>
                  </div>
                  </a>
                  </li>
 
               
                <li>
                  <a class="dropdown-item text-center message" href="#"> 
                  <strong>See All Messages <i class="fas fa-angle-right ms-1"></i></strong>
                </a>
              </li>
              </ul>
            </li>
            <!-- Tasks dropdown                   -->
            <li class="list-inline-item dropdown px-lg-2"><a class="nav-link text-reset px-1 px-lg-0" id="navbarDropdownMenuLink2" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           
            <i class="fa fa-bell" aria-hidden="true" style="font-size:20px;"></i> 
            <span class="badge bg-dash-color-3">9</span></a>


              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark"
               aria-labelledby="navbarDropdownMenuLink2">
                
               
               <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex justify-content-between mb-1">
                        <strong>Task 1</strong><span>40% complete</span></div>
                    <div class="progress" style="height: 2px">
                      <div class="progress-bar bg-dash-color-1" role="progressbar" style="width: 40%" 
                      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                    </div>
                    </div>
                  </a>
                </li>
 
             
                <li>          
                   <a class="dropdown-item text-center" href="#"> 
                    <strong>See All Tasks  <i class="fas fa-angle-right ms-1"></i></strong>
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
           
        </ul> 
      </nav>
</header>