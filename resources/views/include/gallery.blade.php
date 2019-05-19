<h2 class="text-center title">Testimonials</h2>
<div class="row">
        @if(count($galleries) > 0)                                                        
        @foreach ($galleries->take(4) as $item)

                <div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
                                <a href="#" data-image-id="" data-toggle="modal" data-title=""
                                data-target="#image-gallery">
                                <img class="img-rounded img-responsive img-raised"
                                        src="/storage/{{$item->cover_image}}"
                                        alt="Retratos">
                                </a>
                </div>
        @endforeach
        @else
                <p>No gallery found</p>
        @endif
</div>
               