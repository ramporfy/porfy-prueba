@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                        Usuario
                        <a href="{{ route('users.index') }}" 
                    class="btn btn-sm btn-danger pull-right">
                        Salir
                    </a>
                </div>

                    <div class="panel-body">
                        <p><strong>Nombre:</strong>{{$user->name}}</p>
                        <p><strong>Email:</strong>{{$user->email}}</p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection