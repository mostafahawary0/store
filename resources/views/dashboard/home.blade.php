 
 @extends('dashboard.layout')

@section('title','home')

@section('content')

<div class="page-content">
  
<div class="bg-dash-dark-2 py-4">
              <div class="container-fluid">
                <h2 class="h5 mb-0">Dashboard</h2>
              </div>
            </div> 


  {{Auth::guard('admin')->user()->name}}
  
 


 @endsection