@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header text-center card-header-tabs card-header-primary">
                            <h1>Products</h1>
                            <a href="{{ url('/admin/products/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>

                            <form method="GET" action="{{ url('/admin/products') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                    <span class="input-group-append">
                                        <button class="btn btn-secondary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                    </div>
                    <div class="card-body">
                       

                        <br/>
                        <hr>
                        <div >
                                @foreach($products as $item)

                                <div class="row well">
                                    <div class="col-md-6">
                                        <a href="{{ url('/admin/products/' . $item->id) }}">
                                                <img style="width:100%" src="/storage/uploads/{{$item->cover_image}}">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                            <h1 style="text-transform: uppercase;"><a href="{{ url('/admin/products/' . $item->id) }}">{{ $item->title }}</a></h1>
                                            <hr>
                                            <p>BY {{$item->user->name}} on{{  $item->created_at->toFormattedDateString() }}</p>
                                            <hr>
                                                <a href="{{ url('/admin/products/' . $item->id) }}" title="View Product"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/admin/products/' . $item->id . '/edit') }}" title="Edit Product"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                           
                                                <form method="POST" action="{{ url('/admin/products' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                        </div>
                                               
                                        </div>
                                        @endforeach
                        </div>

                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
