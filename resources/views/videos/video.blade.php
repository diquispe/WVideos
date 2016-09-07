@extends('layout')
@section('content')


<!-- Inicio campo personzalizado-->

<div class="container">
    <div class="row">
        <div class="details_video">
            <h1>{{ $video->title }}  -  {{ $video->duracion }}</h1>
            <p class="descripcion">{{ $video->descripcion }}</p>
        </div>
        <div class="video_individual">
            <div class="row">
                <div class="fondo_video">
                    <div class="col-xs-7">
                        <div class="embed-container">
                            <iframe src="http://flashservice.xvideos.com/embedframe/{{ $video->id_video }}" frameborder=0 width=510 height=400 scrolling=no></iframe>
                        </div>
                    </div>
                    <div class="col-xs-5">

                        <?php


                          function getRealUserIp2(){
                                switch(true){
                                    case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                                    case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                                    case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
                                    default : return $_SERVER['REMOTE_ADDR'];
                                }
                            }


                        $user_ip = getRealUserIp2();


                        if($user_ip == '::1' || $user_ip == '127.0.0.1') {
                            $PPais = 'PERU';
                        } else {
                            echo $user_ip = getRealUserIp2();
                            $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
                            $PPais = strtoupper($geo["geoplugin_countryName"]);
                            $PPais = str_replace(" ", "-", $PPais);
                        }


                        $anuncios = DB::table('anuncios')->get();?>

                        @foreach($anuncios as $anuncio)
                            @if($anuncio->pais==$PPais && $anuncio->posicion=='costado_video_1' && $anuncio->status=='publicado' && $anuncio->idioma=='espanol')
                                <a href="{{$anuncio->url}}" title="{{$anuncio->title}} - {{$anuncio->id}}" target="_blank"><img src="/uploads/anuncios/{{$anuncio->imagen}}" alt=""></a>
                            @endif
                        @endforeach

                        @foreach($anuncios as $anuncio)
                            @if($anuncio->pais==$PPais && $anuncio->posicion=='costado_video_2' && $anuncio->status=='publicado' && $anuncio->idioma=='espanol')
                                <a href="{{$anuncio->url}}" title="{{$anuncio->title}} - {{$anuncio->id}}" target="_blank"><img src="/uploads/anuncios/{{$anuncio->imagen}}" alt=""></a>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

    @if(Auth::guest())
        invitado
    @else
        @if (! currentUser()->hasVoted($video))
        {{ Form::open(['route' => ['votes.submit', $video->id],  'method' => 'POST']) }}
            <button type="submit" class="btn btn-primary">
                <span class="glyphicon glyphicon-thumbs-up"></span> Me Gusta
            </button>

        {{ Form::close() }}
        @else

        {{ Form::open(['route' => ['votes.destroy', $video->id], 'method' => 'DELETE']) }}
        <button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-thumbs-down"></span>  Ya no me gusta
        </button>
        {{ Form::close() }}
        @endif
    @endif
</div>



    <div class="container">
        <div class="row">
            <h4>Comentarios ({{ count($video->comentarios) }})</h4>
            @foreach($video->comentarios as $comment)
                <div class="comment col-xs-12">
                    <div class="profile-pic">
                        <a href="#"><img src="{{ asset('images/foto.png') }}" onerror="this.src='/img/profile_default_small.jpg'"></a>
                    </div>
                    <div class="bg-title grey no-border"> Usuario:{{ $comment->user->name }}: <span>{{ $comment->created_at->format('d/m/Y h:ia') }}</span> | {{ $comment->subject }}</div>
                    <div class="comment-text">{{ $comment->comment }}</div>
                    <div>{{-- $comment->user->email --}}</div>
                </div>
            @endforeach
        </div>
    </div>


@if(Auth::guest())
    <div class="container">

        <p class="bg-danger">Debes estar registrado para enviar comentarios</p>
    </div>
@else
    <div class="container">
        <h3>Nuevo Comentario</h3>

        {!! Form::open(['route' => ['comments.submit', $video->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('comment', 'Comentarios') }}
            <textarea rows="4" class="form-control" name="comment" cols="50" id="comment" value="">{{ old('comment') }}</textarea>
            @if ($errors->has('comment'))
                <span class="help-block">
                        <strong>{{ $errors->first('comment') }}</strong>
                    </span>
            @endif
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Enviar comentario</button>
        {!! Form::close() !!}
    </div>

    <div class="container">
        Votaron {{ count($video->votantes)}}, personas
        @foreach($video->votantes as $user)
            <div>{{ $user->name }}</div>
        @endforeach
    </div>

@endif




<div class="container">
    <div class="videos_adicionales">
        <div class="row">
            <?php $videos = DB::table('videos')->orderBy('created_at', 'desc')->skip(10)->take(8)->get();?>
            @foreach($videos as $video)
            <div class="col-xs-3 text-center">

                <a href="{{ route('videos.details', $video->url) }}">


                    <div class="caja animacion tiempo_v" style="background-image: url('thumbs_mozaico/{{ $video->imagen1 }}');"><span class="tiempo_v"> {{ $video->duracion }} </span></div>

                    <span class="limit_text">{{ substr($video->title, 0,35).' ... ' }}</span>

                </a>

                <p class="category_video">{{ $video->category_id }}</p>

                <P>{{ $video->created_at }}</P>
            </div>
                @endforeach
        </div>
    </div>
</div>
    
@endsection