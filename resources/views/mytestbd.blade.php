@extends('layoutstart') 
	 @section('vvod')
	 <h2>Shkafs</h2>
	 @if(count ($visited))
	 <form method="get">
	  @foreach ($visited as $newplace)
	  <a href="/polki/{{ $newplace->id}}"><li>шкаф {{ $newplace->id}}</li></a>
	  @endforeach
     </form>
	
	 @else
	 <p>Шкафов нет</p>
	 @endif
	  @endsection
	
