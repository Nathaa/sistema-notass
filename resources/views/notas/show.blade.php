@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 nota
                </div>

                <div class="panel-body">
                  <p><strong>Nota</strong> {{ $nota->notas }}</p>
                  <p><strong>Descripcion</strong> {{ $nota->descripcion }}</p>
                  <p><strong>Nombre del alumno</strong> {{ $nota->alumno->nombre }}</p>
                  <p><strong>Curso</strong> {{ $nota->curso->nombre }}</p>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection