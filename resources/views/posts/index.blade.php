@extends('layouts.app')

@section('content')
<section class="row ">
            <h1 class="offset-1">Your Blog Posts</h1>

    <div class="col-md-10 offset-1 card">
        <br>
        <br>
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
</section>
@endsection