<div class="form-group">
    {{ Form::label('nombre', 'Nombre completo del alumno')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('edad', 'Edad del alumno')}}
        {{ Form::text('edad',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('direccion', 'Dirreccion completa del alumno')}}
    {{ Form::text('direccion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('encargado', 'Nombre del encargado del alumno')}}
    {{ Form::text('encargado',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>