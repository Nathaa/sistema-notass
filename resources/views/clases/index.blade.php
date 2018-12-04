@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">
                 Clases/Sesiones
                
                 <a href="" 
                 class="btn btn-sm btn-primary pull-right">
                 Crear
                </a>
                
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->nombre}}</td>
                            <td><input type="checkbox"></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection