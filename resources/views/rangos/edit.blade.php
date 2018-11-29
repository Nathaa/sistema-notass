@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 rango
                </div>

                <div class="panel-body">
                 {!! Form::model($rango, ['route' => ['rangos.update', $rango->id],
                 'method' =>'PUT'])  !!}
                  
                 @include('rangos.partials.form')

                 {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection