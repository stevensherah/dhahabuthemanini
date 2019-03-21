
@foreach($products as $item)
        <li style="text-transform: uppercase;"><a  href="{{ url('/admin/products/' . $item->id) }}">{{ $item->title }}</a></li>
@endforeach
