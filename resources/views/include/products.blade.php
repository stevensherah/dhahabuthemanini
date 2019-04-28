<div class="features">
        <div class="row">
                <h2 class="title">Our Programs</h2>
                @if(count($productos) > 0)
                @foreach ($productos as $product)
                        <div class="col-md-4">
                                <div class="info">
                                        <div class="icon icon-primary">
                                                <img style="max-height:200px; display: -webkit-inline-box;" src="/storage/{{$product->cover_image}}" 
                                                alt="Raised Image" class="img-rounded img-responsive img-raised">
                                        </div>
                                        <h4 style="text-transform: uppercase;" class="info-title"><a href="/product/{{$product->title}}"></a>{{ $product->title  }}</h4>
                                        <p>{{ $product->title  }}</p>
                                        <a class="btn btn-info" href="/product/{{$product}}">Veiw</a>

                                </div>
                        </div>       
                @endforeach
                @else
                <p>No Programs found</p>
                @endif
        </div>
</div>