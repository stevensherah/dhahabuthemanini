@extends('layouts.app')

@section('content')
<section class="row ">

        
    <div class="col-md-10 offset-1 card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h2>Your Blog Posts</h2></span>
                      <ul class="nav nav-tabs float-right" data-tabs="tabs">
                        <li class="nav-item">
                            <form method="GET" action="{{ url('/posts') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0" role="search">
                                <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                        <span class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                            </form>
                        </li>  
                        <li class="nav-item">
                          <a class="btn btn-green" href="/posts/create">ADD NEW</a>
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
                                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
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