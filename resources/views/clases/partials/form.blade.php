<div class="form-group">
        {!! Form::label('asistencia_id', 'Elija un control de asistencia') !!}
        <div class="form-group">
            <select name="asistencia_id" id= "asistencia_id" class="form-control" required>
                <option value="">--Asistencias--</option>
                @foreach ($asistencias as $asistencia)
                <option value="{{ $asistencia->id }}"> {{ $asistencia->nombre}}</option>  
                @endforeach
            </select>    
        </div>
       
        
</div>

<div class="form-group">
    {{ Form::label('fechaFinal', 'Fecha de la clase')}}
    {{ Form::date('fechaFinal',null,['class' => 'form-control']) }}
</div>


<div class="form-group">
          
          {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>