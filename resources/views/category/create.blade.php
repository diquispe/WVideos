@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Agregar Nueva Categoria</h1>
                {{ Form::open(['route' => 'category.store', 'files' => true, 'method' => 'POST']) }}

                @include ("category.partials.form")

                <button type="submit" class="btn btn-primary">Agregar Categoria</button>

                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection