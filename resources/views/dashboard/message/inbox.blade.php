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
                  <li class="breadcrumb-item active"> Inbox  </li>
                 </ol>
              </nav>
            </div>
            

            <div class="container-fluid">
            @if(session()->has('error'))

<div class="alert alert-danger">{{session('error')}}</div>

@endif



@if(session()->has('success'))

<div class="alert alert-success">{{session('success')}}</div>

@endif


                <div class="row">
 
                @php 
use App\Models\message;
$value = message::get() 
@endphp

<h4 style="color:#fff;"> Total of Mesaages : {{$value->count()}} </h4>
                    <table>
                        <tr style="background:#E95F71; color:#fff;">
                            <td style=" padding:20px;" colspan="4"> 
                            <h3> <i class="fa fa-bell-o"></i> Messages</h3> 
                        </td>
                        </tr>
@foreach($messages as $message)
 
@if($message->noti =='noti')
<td>
<tr style="height:60px; border-bottom:1px solid #c0c0c0; background:#ccc;">
                    <td style="padding-left:10px;"> 
                    <a href="{{route('one.message',$message->id)}}">
                    <i class="fa fa-cube"></i>
                   <span style="color:#000;"> {{$message->name}} </span>
                    </a>
                    </td>

                    <td style="color:#000;"> 
                    <a href="{{route('one.message',$message->id)}}">
                    <i class="fa fa-eye-slash"></i> 
                    <span style="color:#000;">  Not Seen  </span>
                    </a>
                    </td>

                    <td style="color:#000;">
                    <a href="{{route('one.message',$message->id)}}">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span style="color:#000;">   {{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }} </span>
                     </a>
                    </td>

                    <td>
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$message->id}}">
Delelte
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$message->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <form action="{{route('message.destroy',$message->id)}}" method="post">
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
 
@else
<td>
<tr style="height:60px; border-bottom:1px solid #c0c0c0; background:#fff;">
                           
                        <td style="padding-left:10px;"> 
                            <a href="{{route('one.message',$message->id)}}">
                            <i class="fa fa-cube"></i>
                            <span style="color:#000;"> {{$message->name}} </span>
                            </a>
                            </td>

                            <td style="color:#000;"> 
                    <a href="{{route('one.message',$message->id)}}">
                    <i class="fa fa-eye-slash"></i> 
                    <span style="color:#000;">  Seen  </span>
                    </a>
                    </td>


                    <td style="color:#000;">
                    <a href="{{route('one.message',$message->id)}}">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span style="color:#000;">   {{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }} </span>
                     </a>
                    </td>

                    <td> 

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$message->id}}">
Delelte
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$message->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
        <form action="{{route('message.destroy',$message->id)}}" method="post">
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
 
@endif
                       
                        @endforeach

                    </table>

                </div>
                {{$messages->links()}}
            </div>
            



</div>

@endsection