@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Cita
                </div>

                <div class="panel-body">
                  <p><strong>Nombre</strong> {{ $rango->nombre }}</p>
                  <p><strong>Duracion</strong> {{ $rango->duracion }}</p>
                  <p><strong>fecha Inicio</strong> {{ $rango->fechaInicio }}</p>
                  <p><strong>fecha Inicio</strong> {{ $rango->fechaFinal }}</p>
                  <p><strong>fechaFinal</strong> {{ $rango->periodo->nombre }}</p>
                  <p><strong>fechaFinal</strong> {{ $rango->curso->nombre }}</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
