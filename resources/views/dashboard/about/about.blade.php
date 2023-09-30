@extends('dashboard.layout')

@section('title','About us')

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
                <h2 class="h5 mb-0">About us</h2>
              </div>
            </div> 

            <div class="container-fluid py-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 py-3 px-0">
                  <li class="breadcrumb-item"><a href="{{route('homedashboard')}}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
              </nav>
            </div>
            
            <section class="pt-0"> 
          <div class="container-fluid">

          <div class="col-lg-12">
                <div class="card">
              

                  <div class="card-body pt-10">
                 
                  @foreach($Abouts as $About) 


                <div class="col-lg-12 text-center">
                 <img src="{{asset('image/'.$About->photo)}}" style="width:150px;" >
                 <br>  <br>
                <a href="{{route('image.about',$About->id)}}" class="btn btn-secondary" type="reset">
                    Change image
                </a>
            
                </div>


                <hr style="color:#fff;">
                    
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

                    <form action="{{route('update.about')}}" method="POST" enctype="multipart/form-data">
                    @csrf

               
                    <h3 class="h4 mb-0" style="color:#8A8D93;">Update content</h3> <br>

    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Content in Arabic</label>
    <textarea id="editor" class="@error('ar') is-invalid @enderror" name="ar"> {!! $About->contentAR !!}</textarea>
    @error('ar')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror   
  </div>

                    <input type="hidden" value="{{ $About->id }}" name="id">
                        
    <div class="mb-3">
    <label class="form-label" style="color:#fff;">Content in English</label>
    <textarea id="editor2" class="@error('en') is-invalid @enderror" name="en">{!! $About->contentEN !!}</textarea>
    @error('en')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror 
    </div>
                            
                

                      <button class="btn btn-primary" type="submit">Save</button>
                      @endforeach
                    </form>

                  </div>
                </div>
              </div>

        </div>
        </section>
 @endsection
 

