@extends('layouts.app')

@section('content')

<section class="row ">

        
    <div class="col-md-10 offset-1 card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h2>Your Blog Posts</h2></span>
                      <a class="btn btn-green" href="/posts/create">ADD NEW</a>
                      <ul style="margin: 0 50px" class="nav nav-tabs pull-right" data-tabs="tabs">
                        <li class="nav-item row ">
                            <form method="GET" action="{{ url('/posts') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="search">
                                <div class="input-group">
                                    <div style="background:white; border-radius:20px" class=" col-md-10">
                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                    </div>
                                    <br>
                                    <div class=" col-md-1">
                                        <span class="input-group-append">
                                            <button style="border-radius:100px" class="btn btn-success" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                    </div>
                            </form>
                        </li> 
                     </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  
                
                @if(count($posts) > 0)
                @foreach($posts as $post)
            
                <div class="well">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <b><h1><a href="/posts/{{$post->id}}"><b style="text-transform: uppercase;">{{$post->title}}</b></a></h1>
                                <h3 class="post-meta">Posted by <a href="/posts/{{$post->id}}">{{$post->user->name}}</a> on {{$post->created_at->toFormattedDateString()}}</h3></b>
                                <br>
                                @if(!Auth::guest())
                                @if(Auth::user()->id == $post->user_id)
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
                        
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                @endif
                            @endif
                            </div>
                        </div>
                    </div>
               
                    @endforeach
                        {{$posts->links()}}
                    @else
                        <p>No posts found</p>
                    @endif
                </div>
            </div>
    </div>
</section>
@endsection