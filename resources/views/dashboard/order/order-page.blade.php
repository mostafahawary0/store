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
                  <li class="breadcrumb-item active"> <a href="{{route('show.order')}}"> Orders </a> </li>
                  <li class="breadcrumb-item active"> Order page  </li>
                 </ol>
              </nav>
            </div>
            
            <div class="container-fluid"> 
            <div class="row"> 
<table>  
<tr> <td style="width:100px;  height:45px;"> <h4>Name: </h4> </td> <td> <h4><span style="color:#E95F71;">  {{$orders->name}} </span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4>Phone: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->phone}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4>Country: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->country}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4>City: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->city}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4>Quantity: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->number}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4>Address:</h4> </td> <td> <h4> <span style="color:#E95F71;"> {{$orders->address}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4> Description: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->description}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4> Product: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->product}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4> Price: </h4> </td> <td> <h4><span style="color:#E95F71;"> {{$orders->price}}</span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4> Image: </h4> </td> <td> <h4><span style="color:#E95F71;"> <img src="{{asset('image/'.$orders->img)}}" style="width:50px; height:50px;" ></span></h4></td> </tr>
<tr> <td style="width:100px; height:45px;"> <h4> Time: </h4> </td> <td><span  style="color:#E95F71;"> {{ \Carbon\Carbon::parse($orders->created_at)->diffForHumans() }} </span> </td> </tr>
</table>
          </div>
          </div>


</div>


@endsection