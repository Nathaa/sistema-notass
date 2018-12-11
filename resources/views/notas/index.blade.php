@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Notas</b>
                 @can('notas.create')
                 <a href="{{ route('notas.create') }}" 
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
                                <th>Nota</th>
                                <th>Materia</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($notas as $nota)
                        <tr>
                            <td>{{ $nota->id }}</td>
                            <td>{{ $nota->notas}}</td>
                            <td>{{ $nota->curso->nombre}}</td>
                            <td width="10px">
                               @can('notas.show')
                                 <a href="{{ route('notas.show', $nota->id) }}"
                                 class="btn btn-sm btn-default">
                                    Ver
                                 </a>
                                @endcan
                            </td>
                            <td width="10px">
                                    @can('notas.edit')
                                      <a href="{{ route('notas.edit', $nota->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('notas.destroy')
                                          {!! Form::open(['route' => ['notas.destroy', $nota->id],
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
                    {{ $notas->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection