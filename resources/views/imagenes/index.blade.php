@extends('layouts.app')

@section('title', 'Listado de Imagenes')
	
@section('content')		
	<div class="row">
		@foreach ($imgs as $img)
				<div class="col-sm-3">
					<div class="card text-center" style="width: 18rem;margin-top: 50px;">
						<img class="card-img-top img-circle" src="/images/{{ $img->avatar }}" alt="Imagen Card" width="180" height="180" style="background-color: #EFEFEF;">
						<div class="card-body">
							<h5 class="card-title"><em>{{ $img->nam_img }}</em></h5>
								<p class="card-text">{{ $img->description }}</p>

								<a href="/imagenes/{{ $img->slug }}" class="btn btn-warning">Màs Detalles</a><br><br>
						</div>
					</div>				
				</div>
		@endforeach
	</div>
@endsection