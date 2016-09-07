@extends('layout')
@section('content')



        <!--Inicio contenido personzalizado-->

<div class="container">
    <div class="panel-heading">
        <span class="panel-title">Últimos Videos</span>
    </div>
    <div class="ultimos_videos">



        <div class="row">
            @foreach($videos as $video)
                @include('videos.partials.item', compact('video'))
            @endforeach
        </div>

        {{ $videos->render() }}<p>De {{ $videos->total() }} videos publicados.</p>


    </div>
</div>

@endsection