@extends('layouts.admi')

@section('js')
@endsection

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <body style="background-color:#D6DBDF;">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </body>
            </div>
        </div>
    </div>
</div>

@endsection


@section('css')

@endsection