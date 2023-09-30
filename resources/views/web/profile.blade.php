@extends('web.layout')
@section('title','home')

@section('content')

<li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">logout</a>
        </li>
        

@auth
{{Auth::guard('web')->user()->name}}
@endauth

@endsection