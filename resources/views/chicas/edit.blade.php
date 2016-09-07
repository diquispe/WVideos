@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Editar la informacion de una Chica</h1>
                {{ Form::model($chica, ['method' => 'POST', 'action' => ['ChicasController@update', $chica->id],  'files' => true  ]) }}

                    @include ("chicas.partials.form")

                <button type="submit" class="btn btn-primary">Guardar Chica</button>

                {{ Form::close() }}
                <hr>
                {{ Form::open(['method' => 'DELETE', 'action' => ['ChicasController@destroy', $chica->id]]) }}
                <div class="form-group">
                    {{ Form::submit('Eliminar Chica', ['class' => 'btn btn-danger']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection