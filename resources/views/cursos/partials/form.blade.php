<div class="form-group">
    {{ Form::label('nombre', 'Nombre completo del curso')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('descripcion', 'Descripcion del curso')}}
        {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>


<div class="btn-group btn-group-lg">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a href="{{ route('periodos.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>   
   
</div>
