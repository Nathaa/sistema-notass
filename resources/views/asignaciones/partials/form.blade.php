<div class="form-group">
        {!! Form::label('curso_id', 'Elija un curso') !!}
        <div class="form-group">
            <select name="curso_id" id= "curso_id" class="form-control" required>
                <option value="">--Cursos--</option>
                @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}"> {{ $curso->nombre}}</option>  
                @endforeach
            </select>    
        </div>        
</div>


<div class="form-group">
        {!! Form::label('alumno_id', 'Elija un alumno') !!}
        <div class="form-group">
            <select name="alumno_id" id= "alumno_id" class="form-control" required>
                <option value="">--Alumnos--</option>
                @foreach ($alumnos as $alumno)
                <option value="{{ $alumno->id }}"> {{ $alumno->nombre}}</option>  
                @endforeach
            </select>    
        </div>        
</div>


<div class="form-group">
          
          {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>