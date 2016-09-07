@extends('layout')
@section('content')

        <!--Inicio contenido personzalizado-->

<div class="container">
    <div class="panel-heading">
        <span class="panel-title">Listado de Categorias</span>
    </div>
    <div class="ultimos_videos">
        <div class="row">

            @foreach($categorias as $categoria)
                @include('videos.partials.categorias', compact('categoria'))
            @endforeach
        </div>
         <p> Tenemos {{ $categorias->total() }} categorias de videos.</p>


    </div>
</div>

@endsection