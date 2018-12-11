@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Listado de asistencia
                 </br>
                 </br>
                 </br>

                 <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Asistencia</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        @foreach($listados as $listado)
                        <tr>
                            <td>{{ $listado->alumnoNombre}}</td>
                            <td>{{ $listado->estadoAsistencia}}</td>


                             
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            
                <div class="card-footer">
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection