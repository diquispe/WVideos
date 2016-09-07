@extends('layout')
@section('content')



    <!--Inicio contenido personzalizado-->

    <div class="container">
        <div class="panel-heading">
            <span class="panel-title">Últimas Chicas</span>
        </div>
        <div class="ultimos_videos">
            <p>Desde aqui usted puede administrar, ver o editar los siguientes items</p>

            <div class="filas-chicas">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Estado</th>
                        <th>Url</th>
                        <th>Imagen</th>
                        <th>Posicion</th>
                        <th>Pais</th>
                        <th>Idioma</th>
                        <th>FEC. creacion</th>
                        <th>FEC. modif
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($anuncios as $anuncio)
                        @include('anuncios.partials.item', compact('chicas'))
                    @endforeach
                    </tbody>
                </table>

                {{ $anuncios->render() }}<p>De {{ $anuncios->total() }} Anuncios publicados publicados.</p>
            </div>




        </div>
    </div>

@endsection