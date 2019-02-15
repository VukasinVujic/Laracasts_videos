@extends('layout')

@section('title','Laracast')
    


@section('content')

<h1>My first website {{ $foo }}</h1>

{{-- <ul>  // ****vezano za video 5 ******
@foreach ($tasks as $task )
     
    <li>{{ $task}}</li>
      
      
      @endforeach

    </ul>   --}}
@endsection