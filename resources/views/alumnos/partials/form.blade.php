<div class="form-group">
    {{ Form::label('nombre', 'Nombre completo del alumno')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('edad', 'Edad del alumno')}}
        {{ Form::number('edad',null,['class' => 'form-control']) }}
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
    <a href="{{ route('alumnos.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>
</div>