<div class="form-group">
    {{ Form::label('notas', 'Nota del alumno')}}
    {{ Form::number('notas',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('descripcion', 'Descripcion de la nota')}}
        {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a href="{{ route('periodos.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>
</div>