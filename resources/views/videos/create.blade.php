@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Nuevo Video</h1>
            {{ Form::open(['route' => 'videos.store', 'method' => 'POST', 'files' => true]) }}
                @include('videos.partials.form')

                <button type="submit" class="btn btn-primary">Enviar Video</button>

            {{ Form::close() }}
        </div>
    </div>
</div>


@endsection