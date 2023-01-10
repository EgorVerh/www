@extends('layout') 
	 @section('vvod')
	 <h2>Автор(ы) книги {{$mesto->name}}</h2>
	 @if(count ($visited))
	 <form method="get">
	  @foreach ($visited as $newplace)
	  <a href="/author/books/{{ $newplace->id}}"><li>{{ $newplace->name}}</li></a>
	  @endforeach
     </form>
	 @else
	 <p>Авторов нет</p>
	 @endif
	  @endsection
	
