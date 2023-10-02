<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
  <title> @yield('title','web') </title>
 
<link rel="shortcut icon" type="image/x-icon" href="https://freshcart.codescandy.com/assets/images/favicon/favicon.ico">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Theme CSS -->
<link rel="stylesheet" href="web/css/bootstrap.min.css">
<link rel="stylesheet" href="web/css/theme.min.css">
<link rel="stylesheet" href="web/css/font.css">
 
	  
<style>
.form-group.has-icon .fa {
position: absolute;
margin: .7rem .8rem;
pointer-events: none;
color: #aaa;
}
.form-group.has-icon .form-control{
padding-right: 2.375rem;
}

</style>

</head>
<body>

@include('web.include-web.header')
  @yield('content')
  
  


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"  style="direction: rtl;">
  <div class="offcanvas-header border-bottom">
    <div class="text-start">
      <h5 id="offcanvasRightLabel" class="mb-0 fs-4">عربة التسوق</h5>
     </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="">
   
      <ul class="list-group list-group-flush">
        <li class="list-group-item py-3 ps-0 border-top">
          <div class="row align-items-center">
            
            <div class="col-3 col-md-3 col-lg-4" >
            <img src="web/img/aa.jpg" style="padding-left:10px;" alt="Ecommerce" class="icon-shape icon-xxl">
            <h6 class="mb-0">اسم المنتج اسم المنتج </h6>
            </div>

            <div class="col-4 col-md-3 col-lg-3">
			      <img src="web/img/delete.png" style="width:15px;">
            </div>
			
            <div class="col-3 col-md-3 col-lg-3">
            العدد 1
            </div>

            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$5.00</span>
            </div>
			
          </div>
        </li>
      </ul>
     
      <div class="d-flex justify-content-between mt-4">
        <a href="#" class="btn btn-primary">الدفع</a>
       </div>

    </div>
  </div>
</div>

<!-- Modal -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"  style="direction: rtl;">
  <div class="offcanvas-header border-bottom">
    <div class="text-start">
      <h5 id="offcanvasRightLabel" class="mb-0 fs-4">عربة التسوق</h5>
     </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="">
   
      <ul class="list-group list-group-flush">


        <li class="list-group-item py-3 ps-0 border-top">
          <div class="row align-items-center">
		  
            <div class="col-3 col-md-3 col-lg-4" >
 
              <img src="aa.jpg" style="padding-left:10px;" alt="Ecommerce" class="icon-shape icon-xxl">
                <h6 class="mb-0">اسم المنتج اسم المنتج </h6>
 
            </div>

            <div class="col-4 col-md-3 col-lg-3">
			<img src="web/img/delete.png" style="width:15px;">

            </div>
			
            <div class="col-3 col-md-3 col-lg-3">
            العدد 1
            </div>

            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$5.00</span>
            </div>
			
          </div>

        </li>
 
     

      </ul>
      <!-- btn -->
      <div class="d-flex justify-content-between mt-4">
        <a href="#" class="btn btn-primary">الدفع</a>
       </div>

    </div>
  </div>
</div>



  <script src="web/js/jquery.min.js"></script>
<script src="web/js/bootstrap.bundle.min.js"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

</body>
</html>