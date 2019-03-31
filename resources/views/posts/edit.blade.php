@extends('layouts.app')

@section('content')
    <section class="card">
        <h1 class="card-heading card-header card-header-tabs card-header-primary">Edit Post</h1>
    
    <div class="card-body">
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, [ 'id' => 'my-editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-control">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>
    </section>
@endsection