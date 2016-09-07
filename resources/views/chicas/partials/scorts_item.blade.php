<div class="col-xs-12 col-md-3 text-center">
    <a href="/chica/{{$chica->url}}" target="_blank">
        <div class="scort_item">
            <img src="/uploads/{{ $chica->image }}" alt="">
            <div class="nickname">{{ $chica->nickname }}</div>
            <div class="pais">{{ $chica->pais }}</div>
            <div class="pais">({{ $chica->ciudad }})</div>
            <div class="phone">{{ $chica->phone }}</div>
        </div>
    </a>
</div>