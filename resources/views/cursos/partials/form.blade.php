<div class="form-group">
    {{ Form::label('nombre', 'Nombre completo del curso')}}
    {{ Form::text('nombre',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
        {{ Form::label('descripcion', 'Descripcion del curso')}}
        {{ Form::text('descripcion',null,['class' => 'form-control']) }}
</div>

<div class="form-group">
    {!! Form::label('user_id', 'Agregar user') !!}
    <div class="form-group">
        <select name="user_id" id= "user_id" class="form-control" required>
            <option value="">--user--</option>
            @foreach ($users as $user)
            <option value="{{ $user->id }}"> {{ $user->name}}</option>  
            @endforeach
        </select>    
    </div>
   
    
</div>
    

<div class="btn-group">
          
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
    <a href="{{ route('cursos.index') }}" class="btn btn-sm btn-danger" > Regresar atras</a>   
   
</div>
