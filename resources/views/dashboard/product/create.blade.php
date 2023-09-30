@extends('dashboard.layout')

@section('title','Products')

@section('content')


<style>
 .ck-editor__editable[role="textbox"] {
     height: 150px;
 }

 .cke_contents{
    background-color:#FCF1DC;
}
</style>
<div class="page-content form-page">

<div class="bg-dash-dark-2 py-4">           
<div class="container-fluid">
                <h2 class="h5 mb-0">Products</h2>
              </div>
            </div> 

            <div class="container-fluid py-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3 px-0">
                  <li class="breadcrumb-item"><a href="{{route('homedashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active"><a href="{{route('product.index')}}">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Product</li>
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

                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

               
        <h3 class="h4 mb-0" style="color:#8A8D93;">Create product</h3> <br>

    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Product name in Arabic</label>
     <input name="titlear" class="form-control @error('titlear') is-invalid @enderror" 
     value="{{old('titlear')}}"  placeholder="المنتج"  type="text">
    @error('titlear')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>
 
  
                         
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Product name in English</label>
    <input  name="titleen"  class="form-control @error('titleen') is-invalid @enderror"  
    value="{{old('titleen')}}"  placeholder="product"  type="text">
        @error('titleen')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>



    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Select section</label>
    <select name="section" class="form-control  @error('section') is-invalid @enderror">
    <option  value="{{old('section')}}"></option>
    @foreach($sections as $section)
    <option value="{{$section->id}}"> {{$section->sectionEN}} </option>
    @endforeach
    </select>
    @error('section')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>
                   
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Price</label>
    <input  name="price"  class="form-control @error('price') is-invalid @enderror" 
    value="{{old('price')}}" placeholder="$"  type="text">
        @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>
                   
    
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Description in Arabic</label>
    <textarea id="editor" class="@error('descriptionar') is-invalid @enderror" name="descriptionar">{{old('descriptionar')}}</textarea>
    @error('descriptionar')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>

     
  <div class="mb-3">
    <label class="form-label" style="color:#fff;">Description in English</label>
    <textarea id="editor2" class="@error('descriptionen') is-invalid @enderror" name="descriptionen">{{old('descriptionen')}}</textarea>
    @error('descriptionen')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>
                

  <div class="mb-3">
    <label class="form-label" style="color:#fff;">Upload image</label>
    <input class="form-control"class="@error('img') is-invalid @enderror"   id="formFile" type="file" name="img">
    @error('img')
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
 

