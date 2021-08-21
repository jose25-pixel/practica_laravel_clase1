@extends('layout')
@section('content')
<h1>Contatos</h1>

<form  method="post" action="{{route('contact')}}" accept-charset="utf-8">
	@csrf
	<input type="" name="name" placeholder="Nombre. ." value="Jose"> <br>
	<input type="email" name="email" placeholder="Email..." value="josezavaleta@gmail.com"><br>
	<input type="" name="subject" placeholder="Asunto...." value="Asunto de prueba"><br>
	<textarea name="content" placeholder="Mensaje...."> Mensaje de prueba</textarea><br>
       <button type=""> Enviar</button>
	</form>


<ul>
 	@if($contactos)
	 	@foreach ($contactos as $conta)
	        	<li>{{$conta['title']}}</li>
	 	@endforeach
 	@else
 	<li>no hay proyecto par mostrar</li>
    @endif
 </ul>
@endsection