@extends('layouts.app')

@section('title', 'Editar Imagen')
	
@section('content')	

	{!! Form::model($imagen,['route'=>['imagenes.update', $imagen->slug], 'method'=>'PUT', 'files'=>true]) !!}

		@include('imagenes.form')

			{!! Form::submit('Actualizar', ['class'=>'btn btn-primary row justify-content-center']) !!}
		</div>

	{!! Form::close() !!}

{{-- 	<form method="POST" action="/imagenes/{{ $imagen->slug }}" class="form-group" enctype="multipart/form-data">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<div class="form-group col-sm-4">
			<div class="row justify-content-center">
				<label for="">Nombre</label>
				<input type="text" name="nam_img" value="{{ $imagen->nam_img }}" class="form-control"><br>
			</div>

			<div class="row justify-content-center">
				<label for="">Descripcion</label>
				<textarea type="text" rows="4" name="desc_img" class="form-control">{{ $imagen->description }}</textarea><br>
			</div>

			<div class="row justify-content-center">
				<label for="">Imagen</label>
				<input type="file" name="imagen"><br>
			</div>

			<div class="">
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
		</div>
	</form> --}}
@endsection