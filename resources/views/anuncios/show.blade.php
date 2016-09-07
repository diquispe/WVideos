@extends('layout')
@section('content')


    <!-- Inicio campo personzalizado-->

    <div class="container">
        <div class="fila">
            <div class="details_video">
                <h1>{{ $anuncio->title }}  -  {{ $anuncio->pais }}</h1>
                <p class="descripcion">{{ $anuncio->idioma }}</p>
            </div>
            <div class="video_individual">
                <div class="col-xs-7 col_vid">
                    dfdfdf
                </div>
                <div class="col-xs-5 col_ban col bannesr_vid_individual">
                    <img src="{{ asset ('images/banner1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>






@endsection