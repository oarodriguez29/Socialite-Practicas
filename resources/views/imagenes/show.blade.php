@extends('layouts.app')

@section('title', 'Imagen')
	
@section('content')
	<div class="card text-center">
		<img class="card-img-top img-circle mx-auto d-block" src="/images/{{ $imagen->avatar }}" alt="Imagen Card" width="200" height="200" style="background-color: #EFEFEF;">		
	</div><br>
	<div class="text-center">
		<h5 class="card-title"><em><b>{{ $imagen->nam_img }}</b></em></h5>		
		<p>{{ $imagen->description }}</p>
	</div>

	<div class="btn-toolbar">
		<div class="col-sm-5"></div>		
		<div class="btn-group">
			<a class="btn btn-primary" href="{{ url('/imagenes/') }}">Volver...</a>
		</div>

		<div class="btn-group">
			<a href="/imagenes/{{ $imagen->slug }}/edit" class="btn btn-success">Editar</a>
		</div>

		<div class="btn-group">			
			{!! Form::open(['route'=>['imagenes.destroy', $imagen->slug],'method'=>'DELETE']) !!}
					{!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>		
	</div>

@endsection