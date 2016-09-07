<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <!-- Place favicon.ico in the root directory -->


    {{Html::style('css/normalize.css')}}
    {{Html::style('css/jquery.bxslider.css')}}

    <!-- Latest compiled and minified CSS -->

    <script src="{{ asset('js/jquery-1.12.0.min.js') }}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}}"><\/script>')</script>


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    {{ Html::style('css/main.css') }}
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,100' rel='stylesheet' type='text/css'>
</head>
<body class="body_bg">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <a href="{{ route('videos.latest') }}">
                <img src="{{ asset('images/logo_xvideos.png') }}" width="90%;">
            </a>
        </div>
        <div class="col-md-6" style="padding: 0px;">



            <?php


            function getRealUserIpLayout(){
                switch(true){
                    case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                    case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                    case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
                    default : return $_SERVER['REMOTE_ADDR'];
                }
            }


            $user_ip = getRealUserIpLayout();
            $json = file_get_contents('http://api.ipinfodb.com/v3/ip-city/?key=c1416da6c08f2b88b3a37ddb48867efa9ade52750576b606f98379518e161ad9&format=json&ip='.$user_ip);
            $array = json_decode($json, true);
            $countryName =  $array['countryName'];
            $countryName = strtoupper($countryName);

            $anuncios = DB::table('anuncios')->get();

            ?>

            @foreach($anuncios as $anuncio)

                @if($anuncio->pais==$countryName  && $anuncio->posicion=='superior' && $anuncio->status=='publicado' && $anuncio->idioma=='espanol')
                    <a href="{{$anuncio->url}}" title="{{$anuncio->title}} - {{$anuncio->id}}" target="_blank"><img src="/uploads/anuncios/{{$anuncio->imagen}}" alt=""></a>
                    @endif
            @endforeach
        </div>
        <div class="col-md-3" style="text-align: right;">
            <p style="font-size: 15px; color: #4E2E60; font-weight: bold;">
                Contacto / Anunciantes: <br>
                <i class="fa fa-phone-square"></i> 944074245 <br>
                <i class="fa fa-envelope"></i> xvideosescorts@hotmail.com</p>
        </div>
    </div>
</div>


@include('partials.carrusel')





<div class="container">
    <div class="row">
        <div class="">
            <div id="menuhor">
                {{--{!! Html::menu(config('xvideos.menu')) !!}--}}
                @include('partials.menu')
            </div>
        </div>
    </div>
</div>



@yield('content')

<div class="container">
    <div class="banner_footer">
        <div class="row">
            <div class="col-xs-12">
                @foreach($anuncios as $anuncio)
                    @if($anuncio->pais==$countryName && $anuncio->posicion=='inferior' && $anuncio->status=='publicado' && $anuncio->idioma=='espanol')
                        <a href="{{$anuncio->url}}" title="{{$anuncio->title}} - {{$anuncio->id}}" target="_blank"><img src="/uploads/anuncios/{{$anuncio->imagen}}" alt=""></a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-xs-12">
            <img src="{{ asset('images/logo_footer.png') }}" alt="">
            <p>¿Deseas ser parte de XvideosScorts.com?, registrate <a href="/chicas/registrarse"> aquí</a> o puedes <a href="/chicas/login">iniciar sesion</a> en tu cuenta</p>
        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row">
        <div class="col-xs-12">
            <p>xvideosescorts.com es una página dedicada a la publicidad de Kinesiologas o Escorts. xvideosescorts.com NO ES UNA AGENCIA DE KINESIOLOGAS , su �nica actividad es la publicidad de fotografia artistica de Kinesiologas. Todas las Escorts o kinesiologas que aparecen aqui son mayores de 18 a�os. xvideosescorts.com se aloja en servidores basados en USA, por tanto nos sometemos a las leyes americanas respecto a la publicidad online.</p>
        </div>
    </div>
</div>






<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('js/rainbow.min.js') }}"></script>

<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        speed: 500,
    });


    var clase = ".animacion";

    $(clase).hover(function() {
        $(this)
                .animate({ // 1
                    'background-position-x': "-257px",
                    'background-position-y': "0px" }, 1 )
                .animate({ // 1
                    'background-position-x': "-257px",
                    'background-position-y': "0px" }, 1000 )
                .animate({ // 2
                    'background-position-x': "-514px",
                    'background-position-y': "0px" }, 1 )
                .animate({ // 2
                    'background-position-x': "-514px",
                    'background-position-y': "0px" }, 1000 )
                .animate({ // 3
                    'background-position-x': "-514px",
                    'background-position-y': "-193px" }, 1 )
                .animate({ // 3
                    'background-position-x': "-514px",
                    'background-position-y': "-193px" }, 1000 )
                .animate({  //4
                    'background-position-x': "-257px",
                    'background-position-y': "-193px" }, 1 )
                .animate({  //4
                    'background-position-x': "-257px",
                    'background-position-y': "-193px" }, 1000 )
                .animate({ // 5
                    'background-position-x': "0px",
                    'background-position-y': "-193px" }, 1 )
                .animate({ // 5
                    'background-position-x': "0px",
                    'background-position-y': "-193px" }, 1000 )
                .animate({ // 6
                    'background-position-x': "0px",
                    'background-position-y': "-385px" }, 1 )
                .animate({ // 6
                    'background-position-x': "0px",
                    'background-position-y': "-385px" }, 1000 )
                .animate({ // 7
                    'background-position-x': "-257px",
                    'background-position-y': "-385px" }, 1 )
                .animate({ // 7
                    'background-position-x': "-257px",
                    'background-position-y': "-385px" }, 1000 )
                .animate({  //8
                    'background-position-x': "-514px",
                    'background-position-y': "-385px" }, 1 )
                .animate({  //8
                    'background-position-x': "-514px",
                    'background-position-y': "-385px" }, 1000 );
    }, function() {
        $(this).stop(true,true)
                .animate({ // 1
                    'background-position-x': "0px",
                    'background-position-y': "0px" }, 1 );
    });


</script>

<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>
