@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Notas asignados
                </div>
                $conta=0;
                @foreach($notas as $nota)
                <tr>
                <div class="panel-body">
                
                        <div class="list-group">
                        <ol>    
                          <li>{{ $nota->notas }}</li>     
                        </ol>   
                        </div> 
                        {{ $conta=$nota->notas }}
                      </div>
                       </tr>
                @endforeach
                 $promedio=$conta/$cantidad
                <div class="card-footer">
                       
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection
