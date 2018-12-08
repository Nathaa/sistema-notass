<div class="form-group">
    {{ Form::label('notas', 'Nota del alumno')}}
    {{ Form::number('notas',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('descripcion', 'Descripcion de la nota')}}
        {{ Form::text('descripcion',null,['class' => 'form-control']) }}
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
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a href="{{ route('periodos.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>
</div>