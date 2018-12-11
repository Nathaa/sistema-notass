<div class="form-group">
    {{ Form::label('notas', 'Nota del alumno')}}
    {{ Form::number('notas',null,['class' => 'form-control','step'=>'0.1']) }}
</div>

<div class="form-group">
        {{ Form::label('descripcion', 'Descripcion de la Nota')}}
        {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('porcentaje', 'Porcentaje de la Nota')}}
        {{ Form::text('porcentaje',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('alumno_id', 'Agregar Alumno') !!}
    <div class="form-group">
        <select name="alumno_id" id= "alumno_id" class="form-control" required>
            <option value="">--alumno--</option>
            @foreach ($alumnos as $alumno)
            <option value="{{ $alumno->id }}"> {{ $alumno->nombre}}</option>  
            @endforeach
        </select>    
    </div>
</div>

<div class="form-group">
    {!! Form::label('curso_id', 'Agregar Curso') !!}
    <div class="form-group">
        <select name="curso_id" id= "curso_id" class="form-control" required>
            <option value="">--curso--</option>
            @foreach ($cursos as $curso)
            <option value="{{ $curso->id }}"> {{ $curso->nombre}}</option>  
            @endforeach
        </select>    
    </div>
</div>



<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a href="{{ route('notas.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>
</div>

