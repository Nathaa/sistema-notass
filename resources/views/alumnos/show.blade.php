@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Alumno
                </div>

                <div class="panel-body">
                  <p><strong>Nombre Completo :</strong> {{ $alumno->nombre }}</p>
                  <p><strong>Edad :</strong> {{ $alumno->edad }}</p>
                  <p><strong>Dirección del alumno :</strong> {{ $alumno->direccion }}</p>
                  <p><strong>Encargado de alumno :</strong> {{ $alumno->encargado }}</p>
                  <p><strong>Curso :</strong> {{ $alumno->curso->nombre }}</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection