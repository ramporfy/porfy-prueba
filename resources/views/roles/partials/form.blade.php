<div class="form-group">

	{{Form ::label('name','Nombre de la puerta')}}
	{{Form::text('name',null,['class'=>'form-control'])}}
</div>

<div class="form-group">

	{{Form ::label('description','Descripcion de la puerta')}}
	{{Form::text('description',null,['class'=>'form-control'])}}
</div>

<div class="form-group">

	
	{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
	{{Form::submit('Cancelar',['class'=>'btn btn-sm btn-danger'],route('puertas.index'))}}
</div>