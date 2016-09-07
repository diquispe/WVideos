@extends('layout')

        @section('content')

        <!--Inicio contenido personzalizado-->
        <div class="container">
            <div class="panel-heading">
                <span class="panel-title">Últimos Videos de la Categoria: </span>
            </div>
            <div class="ultimos_videos">
                <div class="row">
                    <div class="col-xs-12">Hay {{ count($categoria->videos)}} videos publicados en esta categoria</div>
    	            @foreach ($categoria->videos as $video)
                        @include('videos.partials.item', compact('video'))
    				@endforeach

                </div>
            </div>
        </div>

        @endsection