<div class="form-group col-sm-4">
	<div class="row justify-content-center">
		{!! Form::label('name', 'Nombre') !!}
		{!! Form::text('nam_img', null, ['class'=>'form-control']) !!}<br>
	</div>
	<div class="row justify-content-center">
		{!! Form::label('slug', 'Slug') !!}
		{!! Form::text('slug', null, ['class'=>'form-control']) !!}<br>
	</div>
	<div class="row justify-content-center">
		{!! Form::label('description', 'Descripcion') !!}
		{{-- {!! Form::text('desc_img', null, ['class'=>'form-control']) !!} --}}
		{!! Form::textarea('description',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40]) !!}<br>
	</div>
	<div class="row justify-content-center">
		{!! Form::label('imagen', 'Imagen') !!}
		{!! Form::file('imagen') !!}<br>
	</div>
	<div class="">
</div>			