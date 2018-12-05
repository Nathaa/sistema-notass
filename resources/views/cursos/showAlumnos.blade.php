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
                  
                  <p><strong>Nombre Completo:</p>
                  
                    <UL>
                    <LI> </strong> {{ $alumno->nombre }}
                            
                    </UL>  
               
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
