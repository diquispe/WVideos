@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Agregar Nueva Chica</h1>
                {{ Form::open(['route' => 'chicas.store', 'method' => 'POST', 'files' => true]) }}

                @include ("chicas.partials.form")

                {{ Form::submit('Guardar Chica', ['class' => 'btn btn-primary']) }}

                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection