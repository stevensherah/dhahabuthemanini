{{-- @if(count(App\Product::all()) > 0)
@foreach (App\Product::all() as $product)
        <li style="text-transform: uppercase;"><a href="/product/{{$product}}"> --}}

@if(count($productos) > 0)
@foreach ($productos as $product)
        <li style="text-transform: uppercase;"><a href="/product/{{$product->id}}">
                        {{ $product->title  }}
        </a></li>
@endforeach
@else
<p>No Programs found</p>
@endif
