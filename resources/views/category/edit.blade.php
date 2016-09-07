@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Editar la categoria: {{ $category->name }}</h1>
                {{ Form::model($category, ['method' => 'POST', 'files' => true, 'action' => ['CategoriesController@update', $category->id] ]) }}

                @include ("category.partials.form")

                <button type="submit" class="btn btn-primary">Guardar Categoria</button>

                {{ Form::close() }}
                <hr>

                {{ Form::open(['method' => 'DELETE', 'action' => ['CategoriesController@destroy', $category->id]]) }}
                <div class="form-group">
                    {{ Form::submit('Eliminar Categoria', ['class' => 'btn btn-danger']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>


@endsection