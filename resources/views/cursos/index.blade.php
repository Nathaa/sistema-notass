@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 <b>Cursos</b>
                 @can('cursos.create')
                 <a href="{{ route('cursos.create') }}" 
                 class="btn btn-sm btn-primary pull-right">
                 Crear
                </a>
                 @endcan
                </div>

                <body style="background-color:#D6DBDF;">
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Maestro Asignado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <td>{{ $curso->id }}</td>
                            <td>{{ $curso->nombre}}</td>
                            <td>{{ $curso->user->name}}</td>
                          
                           
                            <td width="10px">
                                    @can('cursos.edit')
                                      <a href="{{ route('cursos.edit', $curso->id) }}"
                                      class="btn btn-sm btn-default">
                                         Editar
                                      </a>
                                     @endcan
                                 </td>
                                 <td width="10px">
                                        @can('cursos.destroy')
                                          {!! Form::open(['route' => ['cursos.destroy', $curso->id],
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
                    {{ $cursos->render() }}
                </div>
                </body>
            </div>
        </div>
    </div>
</div>
@endsection