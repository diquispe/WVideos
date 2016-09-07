@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Nuevo Anuncio</h1>
                {{ Form::open(['route' => 'anuncio.store', 'method' => 'POST', 'files' => true]) }}
                @include('anuncios.partials.form')



                <button type="submit" class="btn btn-primary">Enviar Anuncio</button>

                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection