@extends('layouts.admi')

@section('content')
<div class="list-group">
    
   @foreach($cursos as $curso)
    
   <div class="list-group">
         
        <a href="{{ route('cursos.showAlumnos', $curso->id) }}"
          class="list-group-item list-group-item-action">
          <b>{{ $curso->nombre }}</b></a>

          
    </div>
@endforeach 
</div>
@endsection

  