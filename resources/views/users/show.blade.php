@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                 user
                </div>

                <div class="panel-body">
                  <p><strong>Nombre Completo</strong> {{ $user->name }}</p>
                  <p><strong>Edad</strong> {{ $user->email }}</p>
                  <p><strong>Direccion del user</strong> {{ $user->password }}</p>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection