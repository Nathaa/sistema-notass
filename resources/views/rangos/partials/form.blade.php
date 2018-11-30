<div class="form-group">
    {{ Form::label('nombre', 'Nombre del Modulo')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('duracion', 'Duracion del modulo')}}
        {{ Form::text('duracion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('fechaInicio', 'Fecha de inicio del modulo')}}
    {{ Form::date('fechaInicio',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::label('fechaFinal', 'Fecha final del modulo')}}
    {{ Form::date('fechaFinal',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {!! Form::label('periodo_id', 'Agregar Periodo') !!}
        <div class="form-group">
            <select name="periodo_id" id= "periodo_id" class="form-control" required>
                <option value="">--periodo--</option>
                @foreach ($periodos as $periodo)
                <option value="{{ $periodo->id }}"> {{ $periodo->nombre}}</option>  
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
</div>