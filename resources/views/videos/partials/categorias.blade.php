<div class="col-xs-3 text-center">
    <a href="{{ route('videos.categoria', $categoria->getRouteKey()) }}">
        <span class="tiempo_v"></span>
        <img src="{{ $categoria->imagen }}">
        <span class="limit_text"></span>
    </a>
    <p class="category_video">{{ $categoria->name }}</p>
    <P>{{ $categoria->created_at->format('d/m/Y') }}</P>
</div>