@extends('layouts.index')


@section('content')
	
<div class="wrapper">

<!-- original -->

@if(count($posts) > 0)
@foreach($posts->take(1) as $header)
{{-- <div class="header header-filter"  style="background-image: url('assets/img/{{$post->cover_image}}');"> --}}
        <div class="header header-filter"  style="background-image: url('/storage/cover_images/{{$header->cover_image}}');">

        <div class="container">
                        <div class="row">
                                <div class="col-md-8">
                                <h1 class="title" style="text-transform: uppercase;">{{$header->title}}.</h1>
                                <h4>{!! str_limit($header->body, 200) !!}</h4>
                                <hr />
                                <a class="btn btn-info btn-raised btn-lg" href="/blog/{{$header->id}}">READ MORE</a>

                                </div>
                        </div>
        </div>
</div>
@endforeach
@else
<p>No posts found</p>
@endif
<!--end of original -->


        <div class="main main-raised">
                <div class="container">
                                <div class="section section-landing row">
                                
                                <section class="col-md-9">
                                        <h1 class="text-center" style="margin: -30px 0;">Other Post</h1>
                                        <hr>
                                                @if(count($posts) > 0)
                                                @foreach($posts as $post)
                                                <div class="post-preview">
                                                        
                                                        <a href="/blog/{{$post->id}}">
                                                        <h2 class="post-title" style="text-transform: uppercase;">{{$post->title}}</h2>
                                                        <h3 class="post-subtitle"></h3>
                                                        </a>
                                                        <h3 class="post-meta">Posted by <a href="/blog/{{$post->id}}">{{$post->user->name}}</a> Tags: 
                                                                @if (count($post->tags))
                                                                        @foreach ($post->tags as $tag)
                                                                        <a href="/blog/tags/{{ $tag->name }}">{{ $tag->name }},</a>
                                                                        @endforeach                                                               
                                                                @else
                                                                Not tagged        
                                                                @endif
                                                        on {{$post->created_at->toFormattedDateString()}}</h3>
                                                        <a href="/blog/{{$post->id}}">
                                                        <img style="max-width:100%; max-height:100%;" src="{{ URL::to('/')}}/storage/cover_images/{{$post->cover_image}}">                                                     </a>

                                                        <h3 class="blog">
                                                                {{--  {{$post->body}}  --}}
                                                                {!! str_limit($post->body, 500) !!}
                                                        </h3>
                                                        
                                                        <a class="btn btn-info" href="/blog/{{$post->id}}">READ MORE</a>
                                                </div>
                                                <hr>
                                                @endforeach
                                                
                                                <!-- Pager -->
                                                <div class="text-center">
                                                        <ul class="pagination pagination-warninggit ">
                                                                {{$posts->links()}}
                                                        </ul>
                                                </div>
                                                
                                                @else
                                                <p>No posts found</p>
                                                @endif
                                        </section>

                                        <section>
                                                @include('include.sidebar')
                                        </section>
                                </div>

                @include('include.contactsection')
                </div>

        </div>

@endsection