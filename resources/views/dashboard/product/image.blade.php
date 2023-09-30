

@extends('dashboard.layout')

@section('title','Products')

@section('content')


<style>
 .ck-editor__editable[role="textbox"] {
     height: 200px;
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
    <li class="breadcrumb-item active"><a href="{{route('product.create')}}"> Create Product </a></li>
    <li class="breadcrumb-item active" aria-current="page">Product image</li>
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
 
                    <form action="{{route('image.product',$products->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <h3 class="h4 mb-0" style="color:#8A8D93;">Change image</h3> <br>

                  
                    <img src="{{asset('image/'.$products->image)}}" style="width:150px;" >
                    <br>
                    <br>
                            
                    <div class="mb-3">
                    <label class="form-label" style="color:#fff;">Upload image</label>
                    <input class="form-control" id="formFile" type="file" name="img">
                    </div>

                      <button class="btn btn-primary" type="submit">Save</button>
                     </form>

                  </div>
                </div>
              </div>

        </div>
        </section>
 @endsection
 

