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
                    <th>Nonbres y Apellidos</th>
                    <th>Usuario</th>
                    <th>Pais</th>
                    <th>FEC / Creacion</th>
                    <th>FEC / Modificacion</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
            @foreach($chicas as $chica)
                @include('chicas.partials.item', compact('chicas'))
                @endforeach
                </tbody>
            </table>

            {{ $chicas->render() }}<p>De {{ $chicas->total() }} Chicas publicados.</p>
        </div>




    </div>
</div>

@endsection