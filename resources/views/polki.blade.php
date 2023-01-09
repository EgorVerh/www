@extends('layout') 
	 @section('vvod')
	 <h2>Shkaf {{$nomer}}</h2>
	 @if(count ($visited))
	 <form method="get">
	  @foreach ($visited as $newplace)
	  <a href="/polki/books/{{ $newplace->id}}"><li>полка {{ $newplace->id}}</li></a>
	  @endforeach
     </form>
	
	 @else
	 <p>Полок нет</p>
	 @endif
	  @endsection
	
