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
    {{ Form::label('nombre', 'Nombre del control de asistencia')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>



<div class="form-group">
          
          {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>