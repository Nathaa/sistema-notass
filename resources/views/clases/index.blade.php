@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="panel-heading">
                 Clases/Sesiones
                 @can('clases.create')
                 <a href="{{ route('clases.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Agregar nueva clase
                </a>
                 @endcan

                  @can('listados.create')
                 <a href="{{ route('listados.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Gestionar asistencias
                </a>
                 @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        @foreach($clases as $clase)
                        <tr>
                            <td>{{ $clase->fechaClase}}</td>

                             <td width="10px">
                                
                                    
                                 </td>


                            <td width="10px">
                                    @can('asistencias.edit')
                                      <a href="{{ route('clases.edit', $clase->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('clases.destroy')
                                          {!! Form::open(['route' => ['clases.destroy', $clase->id],
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
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection