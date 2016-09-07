<div class="container box_carrusel">
    <div class="row">
        <div class="col-xs-12">
            <div id="demo">
                <div id="owl-demo" class="owl-carousel">
                    <?php $chicas = DB::table('chicas')->get();?>
                    @foreach($chicas as $chica)
                        <div class="item scroller">
                            <a href="{{ route('chicas.chica', $chica->url) }}" class="escort cboxElement">
                                <img src="/uploads/{{$chica->image}}" width="96px;" height="130px;">
                            </a>
                            <a href="{{ route('chicas.chica', $chica->id) }}" class="escort cboxElement">{{ substr($chica->name, 0,11) }}</a>
                            <div class="ciudad">({{ $chica->ciudad }})</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>