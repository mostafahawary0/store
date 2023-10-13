@extends('dashboard.layout')

@section('title','Products')

@section('content')

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
                  <li class="breadcrumb-item active">Products</li>
                  <li class="breadcrumb-item active"><a href="{{route('product.create')}}"> Create Products</a></li>
                </ol>
              </nav>
            </div>

       



            <section class="tables py-0">
          <div class="container-fluid">
            <div class="row gy-4">
      
              <div class="col-lg-12">
                <div class="card mb-0">
                  <div class="card-header">
                    <h3 class="h4 mb-0" style="color:#8A8D93"> Products  </h3>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive">

                    @if(session()->has('error'))

<div class="alert alert-danger">{{session('error')}}</div>

@endif



@if(session()->has('success'))

<div class="alert alert-success">{{session('success')}}</div>

@endif
@php 
use App\Models\product;
$value = product::get() 
@endphp

<h4 style="color:#fff;"> Total of Products : {{$value->count()}} </h4>
                      <table class="table mb-0 table-striped">
                        <thead>
                          <tr>
                             <th style="color:#fff;">Image</th>
                             <th style="color:#fff;">Add more images</th>
                             <th style="color:#fff;">Section in Arabic</th>
                            <th style="color:#fff;">Section in English</th>
                            <th style="color:#fff; text-align:center;" colspan="2">Settings</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($products as $product)
                          <tr>
                            <td> <img src="{{asset('image/'.$product->image)}}" style="width:50px; height:50px;" ></td>
                             <td style="color:#fff;"><a href="{{route('images.product',$product->id)}}" type="button" class="btn btn-warning">Add images</a></td>
                             <td style="color:#fff;">{{$product->titleAR}}</td>
                            <td style="color:#fff;">{{$product->titleEN}}</td>
                            <td style="color:#fff; text-align:center;">
                             <a href="{{route('product.edit',$product->id)}}" type="button"
                              class="btn btn-info">Edit</a>
                            </td>
                            <td style="color:#fff; text-align:center;">                         
                          
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$product->id}}">
Delelte
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$product->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <form action="{{route('product.destroy',$product->id)}}" method="post">
          @method('DELETE')
          @csrf
        <button type="submit" class="btn btn-primary">Delete</button>
         </form>
      </div>
    </div>
  </div>
</div>




                          </td>
                          </tr>
                          @endforeach
                          
                         
                        </tbody>
                      </table>
                      {{$products->links()}}
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
          </div>
        </section>



</div>
            
@endsection