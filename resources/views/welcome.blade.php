@extends('dashboard.layout')
@section('title','home')

@section('content')

<li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">logout</a>
        </li>
        

@auth
{{auth() ->user() -> name}}
@endauth

@endsection