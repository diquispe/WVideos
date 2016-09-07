@extends('layout')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3>Editar Video: <b>{{$video->title}}</b> </h3>
                {{ Form::model($video, ['method' => 'POST', 'action' => ['VideosController@update', $video->id] ]) }}
                    @include('videos.partials.form')

                    <button type="submit" class="btn btn-primary">Guardar Video</button>

                    {{ Form::close() }}
                <hr>
                {{ Form::open(['method' => 'DELETE', 'action' => ['VideosController@destroy', $video->id]]) }}
                <div class="form-group">
                    {{ Form::submit('Eliminar Video', ['class' => 'btn btn-danger']) }}
                </div>
                {{ Form::close() }}
    </div>
</div>
</div>


@endsection