<div class="form-group">
    {{ Form::label('nombre', 'Nombre del periodo')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('duracion', 'Duracion del periodo')}}
        {{ Form::text('duracion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
      {{ Form::label('año', 'Año del periodo')}}
      {{ Form::number('año',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('curso_id', 'Agregar curso') !!}
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
    
            <a href="{{ route('periodos.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>
 
</div>