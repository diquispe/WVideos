<div class="col-xs-3 text-center">

    <a href="{{ route('videos.details', $video->url) }}">


        <div class="caja animacion tiempo_v" style="background-image: url('thumbs_mozaico/{{ $video->imagen1 }}');"><span class="tiempo_v"> {{ $video->duracion }} </span></div>

        <span class="limit_text">{{ substr($video->title, 0,35).' ... ' }}</span>

    </a>

    <p class="category_video">{{ $video->category_id }}</p>
    {{ $video->votantes()->count() }} Votos, {{ $video->comentarios()->count() }} Comentarios,<br>

    <P>{{ $video->created_at->format('d/m/Y') }}</P>
</div>