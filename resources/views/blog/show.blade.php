@extends('layouts.index')


@section('content')
	
<div class="wrapper">

        <!-- original -->
        <div class="header header-filter"  style="background-image: url('/storage/cover_images/{{$post->cover_image}}'); max-height: 100%;">
                        
                <div class="container">
                                <div class="row">
                                                <div class="col-md-8">
                                                <h1 style="text-transform: uppercase;" class="title">{{$post->title}}</h1>
                                                <p class="post-meta">Posted by <a href="/posts/{{$post->id}}">{{$post->user->name}}</a>Tags: 
                                                        @if (count($post->tags))
                                                                @foreach ($post->tags as $tag)
                                                                <a href="/blog/tags/{{ $tag->name }}">{{ $tag->name }},</a>
                                                                @endforeach                                                               
                                                        @else
                                                        Not tagged        
                                                        @endif
                                                         on {{$post->created_at->toFormattedDateString()}}</p>
                                                </div>
                                               
                                </div>
                </div>
        </div>


        <!--end of original -->


                <div class="main main-raised">
                        <div class="container">
                                <div class="section text-center section-landing">

                                        <!-- BLOG MAIN CONTENT -->

                                        <section>   
                                                <div class="row">                                                       
                                                                
                                                                        <!-- Main Content -->
                                                        <div class="row text-left">                                              
                                                                <h1 class="offset-1" style="margin: -30px 0">{{$post->title}}</h1>
                                                                <hr>
                                                                <section>
                                                                        <div class="post-preview">
                                                                                <h2 class="post-meta">Posted by <a href="/posts/{{$post->id}}">{{$post->user->name}}</a> Tags: 
                                                                                        @if (count($post->tags))
                                                                                                @foreach ($post->tags as $tag)
                                                                                                <a href="/blog/tags/{{ $tag->name }}">{{ $tag->name }},</a>
                                                                                                @endforeach                                                               
                                                                                        @else
                                                                                        Not tagged        
                                                                                        @endif
                                                                                        on {{$post->created_at->toFormattedDateString()}}
                                                                                
                                                                                </h2>

                                                                                {{--  <img style="max-width:100%; max-height:100%;" src="/storage/cover_images/{{$post->cover_image}}">  --}}
                                                                                <hr>
                                                                                <h3 style="padding:0 50px" class="post-subtitle blog card">
                                                                                        {!! $post->body !!}
                                                                                </h3>
                                                                        </div>
                                                                        <hr>
                                                                        @include('include.comments')
                                                                    {{--  <!-- Pager -->
                                                                    <div class="text-center">
                                                                            <ul class="pagination pagination-warninggit ">
                                                                                        {{$posts->links()}}
                                                                            </ul>
                                                                    </div>  --}}
                                                                </section>                                                               
                                                               
                                                                </div>
                                                        </div>
                                                </div>     
                                                                        
             
                                                </section>

                                        <!-- BLOG MAIN CONTENT -->


                                </div>

                        @include('include.contactsection')
                        </div>

                </div>

@endsection