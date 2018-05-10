@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Puerta

                <a href="{{ route('puertas.index') }}" 
                    class="btn btn-sm btn-danger pull-right">
                        Salir
                    </a>
                </div>

                <div class="panel-body">
                  {!! Form::open(['route' =>'puertas.store'])!!}

                 

                        @include('puertas.partials.form')

                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection