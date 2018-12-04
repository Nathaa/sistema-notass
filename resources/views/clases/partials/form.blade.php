<div class="form-group">
    {{ Form::label('nombreFecha', 'Nombre o fecha de la clase')}}
    {{ Form::text('nombreFecha',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('asistenciaId', 'Asistencia Id')}}
    {{ Form::number('asistenciaId',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('asistenciaAlumno', 'AsistenciaAlumno')}}
    {{ Form::text('asistenciaAlumno',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('faltas', 'Faltas')}}
    {{ Form::number('faltas',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>