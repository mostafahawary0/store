<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> </title>
    <link href="/css/bootstrap.min.css"  rel="stylesheet">
  </head>
  <body>

  
@if($errors->any())
<div class="col-12">

@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}} </div>
@endforeach

</div>
@endif


@if(session()->has('error'))

<div class="alert alert-danger">{{session('error')}}</div>

@endif



@if(session()->has('success'))

<div class="alert alert-success">{{session('success')}}</div>

@endif


  <form action="{{route('login.dashboard')}}" method="POST" class="ms-auto me-auto">
@csrf
 
  <div class="mb-3">
    <label  class="form-label">Email address</label>
    <input type="email" class="form-control" name="email">
   </div>


  <div class="mb-3">
    <label   class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>