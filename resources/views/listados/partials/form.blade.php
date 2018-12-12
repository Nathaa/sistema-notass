<div class="form-group">
        {!! Form::label('clase_id', 'Seleccionar clase') !!}
        <div class="form-group">
            <select name="clase_id" id= "clase_id" class="form-control" required>
                <option value="">--Clases--</option>
                @foreach ($clases as $clase)
                <option value="{{ $clase->id }}"> {{ $clase->fechaClase}}</option>  
                @endforeach
            </select>    
        </div>     
</div>

<div class="form-group">
        {!! Form::label('alumnoNombre', 'Seleccione el alumno') !!}
        <div class="form-group">
            <select name="alumnoNombre" id= "alumnoNombre" class="form-control" required>
                <option value="">--Alumnos--</option>
                @foreach ($alumnos as $alumno)
                <option value="{{ $alumno->nombre }}"> {{ $alumno->nombre}}</option>  
                @endforeach
            </select>    
        </div>     
</div>

<div class="form-group">
        {!! Form::label('estadoAsistencia', 'Seleccione el estado de asistencia del alumno') !!}
        <div class="form-group">
            <select name="estadoAsistencia" id= "estadoAsistencia" class="form-control" required>
                <option value="">--Estados--</option>
                @foreach ($estados as $estado)
                <option value="{{ $estado->nombre }}"> {{ $estado->nombre}}</option>  
                @endforeach
            </select>    
        </div>     
</div>



<div class="form-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a href="{{ route('clases.index') }}" class="btn btn-sm btn-danger" > Regresar</a>
</div>