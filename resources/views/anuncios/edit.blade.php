@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Editar Anuncio: <b>{{$anuncio->title}} {{$anuncio->id}}</b> </h3>
                {{ Form::model($anuncio, ['method' => 'POST', 'action' => ['AnunciosController@update', $anuncio->id], 'files' => true ]) }}
                @include('anuncios.partials.form')

                <button type="submit" class="btn btn-primary">Guardar Anuncio</button>

                {{ Form::close() }}
                <hr>
                {{ Form::open(['method' => 'DELETE', 'action' => ['AnunciosController@destroy', $anuncio->id]]) }}
                <div class="form-group">
                    {{ Form::submit('Eliminar Anuncio', ['class' => 'btn btn-danger']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection