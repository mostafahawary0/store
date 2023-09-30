@extends('dashboard.layout')

@section('title','Sections')

@section('content')

<div class="page-content form-page">

<div class="bg-dash-dark-2 py-4">           
<div class="container-fluid">
                <h2 class="h5 mb-0">Sections</h2>
              </div>
            </div> 

            <div class="container-fluid py-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3 px-0">
                  <li class="breadcrumb-item"><a href="{{route('homedashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="{{route('section.index')}}">Sections</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create section</li>
                </ol>
              </nav>
            </div>
            
            <section class="pt-0"> 
          <div class="container-fluid">

          <div class="col-lg-12">
                <div class="card">
              

                  <div class="card-body pt-10">

                    
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

                    <form action="{{route('section.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

               
        <h3 class="h4 mb-0" style="color:#8A8D93;">Create section</h3> <br>

    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Section in Arabic</label>
     <input name="titlear" class="form-control @error('titlear') is-invalid @enderror" value="{{old('titlear')}}"  type="text">
    @error('titlear')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>
 
                         
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Section in English</label>
    <input  name="titleen"  class="form-control @error('titleen') is-invalid @enderror" value="{{old('titleen')}}"  type="text">
        @error('titleen')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>
                            
                

                      <button class="btn btn-primary" type="submit">Save</button>
                   
                    </form>

                  </div>
                </div>
              </div>

        </div>
        </section>
 @endsection
 

