@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 alumnos del paciente
                </div>
                @foreach($alumnos as $alumno)
                <tr>
                <div class="panel-body">
                  <p><strong>id</strong> {{ $alumno->id }}</p>
                  <p><strong>Descripcion</strong> {{ $alumno->nombre }}</p>
                  <p><strong>Fecha</strong> {{ $alumno->edad }}</p>
                  <p><strong>Hora</strong> {{ $alumno->direccion}}</p>
                  <p><strong>Hora</strong> {{ $alumno->encargado}}</p>
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
