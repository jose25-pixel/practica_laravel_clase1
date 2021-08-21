@extends('layout')
@section('title','Portafolio')
@section('content')
<h1>Portafolio</h1>




<ul>


 	@if($portafoliooo)
	 	@foreach ($portafoliooo as $pportafolioIten)
	        	<li>{{$pportafolioIten['title']}}</li>
	 	@endforeach
 	@else
 	<li>no hay proyecto par mostrar</li>
    @endif
 </ul>


@endsection