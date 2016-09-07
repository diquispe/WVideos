<ul id="menu">
    <li><a href="/">Inicio</a> </li>
    <li><a class="MenuBarItemSubmenu" href="#">Categorias</a>
        <ul>
            {{--@foreach($video->categorias as $categoria)
                <li>
                    <a href="">
                        {{ $categorias->name }}
                    </a>
                </li>
            @endforeach
            --}}
            <?php $categories = DB::table('categories')->get();?>
            @foreach($categories as $category)
                <li><a href="#">{{ $category->name }}</a></li>
            @endforeach

            {{--<li><a href="../categoria/anal_">ANAL</a></li>
            <li><a href="../categoria/amateur_">AMATEUR</a></li>
            <li><a href="../categoria/orgias_">ORGIAS</a></li>
            <li><a href="../categoria/trios_">TRIOS</a></li>
            <li><a href="../categoria/latinas_">LATINAS</a></li>
            <li><a href="../categoria/interracial_">INTERRACIAL</a></li>
            <li><a href="../categoria/asian_">ASIAN</a></li>
            <li><a href="../categoria/ass_">ASS</a></li>
            <li><a href="../categoria/big-ass_">BIG ASS</a></li>
            <li><a href="../categoria/big-tits_">BIG TITS</a></li>
            <li><a href="../categoria/blonde_">BLONDE</a></li>
            <li><a href="../categoria/casting_">CASTING</a></li>
            <li><a href="../categoria/hentai_">HENTAI</a></li>
            <li><a href="../categoria/public_">PUBLIC</a></li>
            <li><a href="../categoria/teens_">TEENS</a></li>
            <li><a href="../categoria/shemale_">SHEMALE</a></li>
            <li><a href="../categoria/webcams_">WEBCAMS</a></li>
            <li><a href="../categoria/gay_">GAY</a></li>
            <li><a href="../categoria/lesbian_">LESBIAN</a></li>
            <li><a href="../categoria/double-penetration_">DOUBLE PENETRATION</a></li>
            <li><a href="../categoria/masturbation_">MASTURBATION</a></li>
            <li><a href="../categoria/hardcore_">HARDCORE</a></li>--}}
        </ul>

    </li>

    {{--@foreach($items as $route => $text)
        <li role="presentation" {!! Html::classes(['active' => Route::is($route)]) !!}>
            <a href="{{ route($route) }}">{{ $text }}</a>
        </li>
    @endforeach--}}

    <?php


       function getRealUserIpMenu(){
            switch(true){
                case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
                case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
                case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
                default : return $_SERVER['REMOTE_ADDR'];
            }
        }


    $user_ip = getRealUserIpMenu();

    //$user_ip = getRealUserIp();

    if($user_ip == '::1' || $user_ip == '127.0.0.1') {
        $PPais = 'PERU';
    } else {
        echo $user_ip = getRealUserIpMenu();
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
        $PPais = strtoupper($geo["geoplugin_countryName"]);
        $PPais = str_replace(" ", "-", $PPais);
    }


    $anuncios = DB::table('anuncios')->get();?>

    <li><a href="{{ route('videos.popular') }}" @if(Route::is('videos.popular')) class="active" @endif>Videos Populares</a></li>
    <li><a href="/scorts?nickname=&pais={{ $PPais }}&ciudad=">ESCORTS</a></li>
    <li><a href="http://www.google.com">FORO ESCORTS</a></li>
    </li>
    @include ('layouts.login')
</ul>