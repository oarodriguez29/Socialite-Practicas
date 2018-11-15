@extends('layouts.app')

@section('title', 'Guardar Imagen')
	
@section('content')	

	@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route'=>'imagenes.store', 'method'=>'POST', 'files'=>true]) !!}

		@include('imagenes.form')
		
			{!! Form::submit('Guardar', ['class'=>'btn btn-success row justify-content-center']) !!}
		</div>		

	{!! Form::close() !!}

{{-- 	<form method="POST" action="/imagenes" class="form-group" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group col-sm-4">
			<div class="row justify-content-center">
				<label for="">Nombre</label>
				<input type="text" name="nam_img" class="form-control"><br>
			</div>

			<div class="row justify-content-center">
				<label for="">Descripcion</label>
				<textarea type="text" name="desc_img" class="form-control"></textarea><br>
			</div>

			<div class="row justify-content-center">
				<label for="">Imagen</label>
				<input type="file" name="imagen"><br>
			</div>

			<div class="">
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</form> --}}

@endsection