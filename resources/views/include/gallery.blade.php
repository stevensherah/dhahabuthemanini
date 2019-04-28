<section>
        <div class="row">
                <div class="col-md-3">

                        <div class="row">
                        @if(count($gallery) > 0)
                                                                   
                        @foreach ($gallery as $item)

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
                                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                                data-target="#image-gallery">
                                                <img class="img-thumbnail"
                                                        src="/storage/{{$item->cover_image}}"
                                                        alt="Retratos">
                                                </a>
                                </div>
                        @endforeach
                        @else
                                <p>No gallery found</p>
                        @endif
                        </div>
                            
                        
                </div>
        </div>
</section>