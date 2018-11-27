<div class="form-group">
    {{ Form::label('nombre', 'Nombre del periodo')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('duracion', 'Duracion del periodo')}}
        {{ Form::text('duracion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('año', 'Año del periodo')}}
    {{ Form::integer('año',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>