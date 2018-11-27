<div class="form-group">
    {{ Form::label('nombre', 'Nombre completo del curso')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('descripcion', 'Descripcion del curso')}}
        {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
