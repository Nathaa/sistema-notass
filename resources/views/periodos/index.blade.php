@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 periodos
                 @can('periodos.create')
                 <a href="{{ route('periodos.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Crear
                </a>
                 @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($periodos as $periodo)
                        <tr>
                            <td>{{ $periodo->id }}</td>
                            <td>{{ $periodo->nombre}}</td>
                            <td>{{ $periodo->duracion}}</td>
                            <td>{{ $periodo->año}}</td>
                            
                            <td width="10px">
                                    @can('periodos.edit')
                                      <a href="{{ route('periodos.edit', $periodo->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('periodos.destroy')
                                          {!! Form::open(['route' => ['periodos.destroy', $periodo->id],
                                          'method' =>'DELETE']) !!}
                                          <button class="btn btn-sm btn-danger">
                                              Eliminar
                                          </button>
                                        {!! Form::close() !!}
                                         @endcan
                                     </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{ $periodos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection