@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 rangos de modulo del periodo
                </div>

                <div class="panel-body">
                 {!! Form::open(['route' => 'rangos.store']) !!}
                  
                 @include('rangos.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection