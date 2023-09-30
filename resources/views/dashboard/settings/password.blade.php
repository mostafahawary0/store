@extends('dashboard.layout')

@section('title','Change password')

@section('content')

<div class="page-content form-page">

<div class="bg-dash-dark-2 py-4">           
<div class="container-fluid">
                <h2 class="h5 mb-0">Change password</h2>
              </div>
            </div> 

            <div class="container-fluid py-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3 px-0">
                  <li class="breadcrumb-item"><a href="{{route('homedashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active">Settings</li>
                 </ol>
              </nav>
            </div>

  

            <section class="pt-0"> 
          <div class="container-fluid">

          <div class="col-lg-12">
                <div class="card">
              

                  <div class="card-body pt-10">

                    
 

@if(session()->has('error'))

<div class="alert alert-danger">{{session('error')}}</div>

@endif



@if(session()->has('success'))

<div class="alert alert-success">{{session('success')}}</div>

@endif

    <form action="{{route('update.password')}}" method="POST" enctype="multipart/form-data">
    @csrf

               
        <h3 class="h4 mb-0" style="color:#8A8D93;">Change password and Email</h3> <br>

        <div class="mb-3">
    <label class="form-label" style="color:#fff;">Email</label>
     <input name="email" class="form-control @error('email') is-invalid @enderror"
      value="{{Auth::guard('admin')->user()->email}}" type="text">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>

    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Old password</label>
     <input name="old" class="form-control @error('old') is-invalid @enderror"  type="password">
    @error('old')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>
 
                         
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">New password</label>
    <input  name="new"  class="form-control @error('new') is-invalid @enderror"  type="password">
        @error('new')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>
                 
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Confirm password</label>
    <input  name="confirm"  class="form-control @error('confirm') is-invalid @enderror"  type="password">
        @error('confirm')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>
                 
                

                      <button class="btn btn-primary" type="submit">Save</button>
                   
                    </form>

                  </div>
                </div>
              </div>

            
</div> 
          @endsection  
