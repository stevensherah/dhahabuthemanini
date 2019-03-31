{{--  
@foreach($products as $item)
        <li style="text-transform: uppercase;"><a  href="#">{{ $item->title }}</a></li>  

                
@endforeach  --}}

@if(count($products) > 0)
@foreach ($products as $product)
        <li><a href="#">
                 {{ $product  }}
        </a></li>
@endforeach
@else
<p>No Tags found</p>
@endif