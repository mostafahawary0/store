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
                  <li class="breadcrumb-item active"><a href="{{route('product.create')}}"> Create Product </a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add more images</li>
                </ol>
              </nav>
            </div>
            
            <section class="pt-0"> 
          <div class="container-fluid">



          <div class="row">
   

          <div class="col-lg-6">
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

 

                  <form action="{{route('upload.images',$products->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
               
        <h3 class="h4 mb-0" style="color:#8A8D93;">Create More images for <span style="color:#fff;">{{$products->titleEN}}</span></h3> <br>
     

  <input type="hidden" value="{{$products->id}}" name="idproduct">
  <input type="hidden" value="{{$products->section_id}}" name="idsection">

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
			  
			  
			    <div class="col-lg-6"> 
                    
                <div class="card">
@if(session()->has('error2'))
<div class="alert alert-danger">{{session('error2')}}</div>
@endif



@if(session()->has('success2'))
<div class="alert alert-success">{{session('success2')}}</div>
@endif

              <div class="card-body pt-10">
              
              <div class="col-lg-12 text-center">
                <img src="{{asset('image/'.$products->image)}}" style="width:80px;" >
                </div>


              <table class="table mb-0 table-striped">
                        <thead>
                          <tr>
                             <th style="color:#fff;">Images</th>
                            <th style="color:#fff;">Settings</th>
                          </tr>
                        </thead>
                        @foreach ($images as $image)
                        <tbody>
                        <td style="color:#fff;"><img src="{{asset('image/'.$image->image)}}" style="width:60px; height:60px;" ></td>
                        <td style="color:#fff;"> 
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$image->id}}">
Delelte
</button>

 <div class="modal fade" id="staticBackdrop{{$image->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
       <i class="fa fa-trash" aria-hidden="true" style="color:#E95F71;"></i>  
        Delete 
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete this?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form action="{{route('delete.images',$image->id)}}" method="post">
          @method('DELETE')
          @csrf
        <button type="submit" class="btn btn-primary">Delete</button>
         </form>
      </div>
    </div>
  </div>
</div>

                    </td>
                        </tbody>
                        @endforeach
                    </table>
              
            </div>
            </div>
            </div>



              </div>

              
        </div>

        
        </section>
 @endsection
 

