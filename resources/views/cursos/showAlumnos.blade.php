@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Alumnos asignados
                </div>
                @foreach($alumnos as $alumno)
                <tr>
                <div class="panel-body">
                
                        <div class="list-group">
                        <OL>    
                          <LI> </strong> {{ $alumno->nombre }}
                              <a href="{{ route('cursos.showCalificaciones') }}" class="list-group-item list-group-item-action">Promedio</a>
                        </OL>       
                                      
                            
                        </div> 
                   
                 
               
                </div>
                </tr>
                @endforeach
                <div class="card-footer">
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
