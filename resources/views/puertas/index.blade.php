@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Puertas Registradas

               
                   
                    @can('puertas.create')
                    <a href="{{ route('puertas.create') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Crear
                    </a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($puertas as $puerta)
                            <tr>
                                <td>{{ $puerta->id }}</td>
                                <td>{{ $puerta->name }}</td>
                                @can('puertas.show')
                                <td width="10px">
                                    <a href="{{ route('puertas.show', $puerta->id) }}" 
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('puertas.edit')
                                <td width="10px">
                                    <a href="{{ route('puertas.edit', $puerta->id) }}" 
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('puertas.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['puertas.destroy', $puerta->id], 
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $puertas->render() }}
                </div>

                    
                </div>
            </div>
        </div>
    </div>

@endsection