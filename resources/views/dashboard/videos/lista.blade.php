@extends('layout')
@section('content')



        <!--Inicio contenido personzalizado-->

<div class="container">
    <div class="panel-heading">
        <span class="panel-title">Administrar Videos</span>
    </div>
    <div class="ultimos_videos">


            <a href="/dashboard/crear-video" class="btn btn-success">Agregar Video</a>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Categoria</th>
                    <th>Duracion</th>
                    <th>Fec. Crea.</th>
                    <th>Fec. Mod.</th>
                    <th>Accciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                        @include('dashboard.partials.item', compact('video'))
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $videos->render() }}<p>De {{ $videos->total() }} videos publicados.</p>


</div>

@endsection