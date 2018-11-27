@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 rangos
                 @can('rangos.create')
                 <a href="{{ route('rangos.create') }}" 
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
                        @foreach($rangos as $rango)
                        <tr>
                            <td>{{ $rango->id }}</td>
                            <td>{{ $rango->nombre}}</td>
                            <td>{{ $rango->duracion}}</td>
                            <td>{{ $rango->fechaInicio}}</td>
                            <td>{{ $rango->fechaFinal}}</td>
                            <td width="10px">
                               @can('rangos.show')
                                 <a href="{{ route('rangos.show', $rango->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver
                                 </a>
                                @endcan
                            </td>
                            <td width="10px">
                                    @can('rangos.edit')
                                      <a href="{{ route('rangos.edit', $rango->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('rangos.destroy')
                                          {!! Form::open(['route' => ['rangos.destroy', $rango->id],
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
                    {{ $rangos->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection