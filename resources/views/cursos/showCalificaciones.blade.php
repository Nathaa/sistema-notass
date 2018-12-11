@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
                        <div class="btn-group btn-group-justified">
                                <a class="btn btn-primary">Notas Asignadas</a>
                        </div>
               
                
                <body>
                        <!-- Start of Table -->
                        
                        @foreach($notas as $nota)
                        <table class="table table-inverse">
                        <thead>
                        <tr>
                        
                        <th>{{ $nota->descripcion }}</th>
                        <th>{{ $nota->porcentaje}}</th>
                        </tr>
                        </thead>
                        <tbody><tr>
                        <td></td>
                        <td>{{ $nota->notas }}</td>
                        </tr><tr>
                        
                        </tbody>
                        </table>
                        @endforeach
                        <div class="btn-group btn-group-justified">
                                <a class="btn btn-primary">Promedio:</a>
                                <a class="btn btn-danger">{{ $promedio }}</a>
                              </div>   
                        </body>
                        </html>
                        
                    </body>
                <div class="card-footer">
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
