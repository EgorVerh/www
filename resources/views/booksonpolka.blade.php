@extends('layout') 
	 @section('vvod')
	 <h2>Полка {{$nomer}}</h2>
	 @if(count ($visited))
	 <form method="get">
	  @foreach ($visited as $newplace)
	  <a href="/authors/{{ $newplace->id}}"><li>{{ $newplace->name}}</li></a>
	  @endforeach
     </form>
	
	 @else
	 <p>Книг нет</p>
	 @endif
	  @endsection
	
