@extends('Layouts.index')


@section('content')
	
<div class="wrapper">

        <!-- original -->
@if(count($posts) > 0)
@foreach($posts as $post)
        <div class="header header-filter"  style="background-image: url('/storage/cover_images/{{$post->cover_image}}'); max-height: 100%;">
                        
                <div class="container">
                                <div class="row">
                                                <div class="col-md-8">
                                                <h1 class="title">Latest Blog Post</h1>
                                                <p class="post-meta">Posted by <a href="/posts/{{$post->id}}">{{$post->user->name}}</a> on {{$post->created_at}}</p>
                                                <h2 class="post-title">
                                                                {{$post->title}}
                                                </h2>
                                                <br />
                                                <a href="/posts/{{$post->id}}" class="btn btn-gold btn-info btn-lg">Read More</a>
                                                </div>
                                                {{-- <div class="col-md-3 well">
                                                        <H4 style="color:black">Categories</H4>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>                                      
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>                                                  
                                                </div> --}}
                                </div>
                </div>
        </div>

@endforeach
        {{$posts->links()}}
@else
        <p>No posts found</p>
@endif


        <!--end of original -->


                <div class="main main-raised">
                        <div class="container">
                                <div class="section text-center section-landing">

                                        <!-- BLOG MAIN CONTENT -->

                                        <section>   
                                                <div class="row">                                                       
                                                                
                                                                        <!-- Main Content -->
                                                        <div class="row text-left">                                              
                                                                <h1 class="text-center" style="margin-top:-30px">Other Post</h1>
                                                                <hr>
                                                                <section>
                                                                        @if(count($posts) > 0)
                                                                        @foreach($posts as $post)
                                                                        <div class="container container post-preview">
                                                                                <img style="max-width:100%; max-height:100%;" src="/storage/cover_images/{{$post->cover_image}}">
                                                                                <a href="/posts/{{$post->id}}"></a>
                                                                                <h2 class="post-title">
                                                                                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                                                                                </h2>
                                                                                </a>
                                                                                <p class="post-meta">Posted by <a href="/posts/{{$post->id}}">{{$post->user->name}}</a> on {{$post->created_at}}</p>
                                                                                <h3 class="post-subtitle">
                                                                                        {{$post->body}}
                                                                                </h3>
                                                                        </div>
                                                                        <hr>
                                                                    @endforeach
                                                                        {{$posts->links()}}
                                                                    @else
                                                                        <p>No posts found</p>
                                                                    @endif
                                                                </section>                                                               
                                                                <!-- Pager -->
                                                                <div class="text-center">
                                                                        <ul class="pagination pagination-warninggit ">
                                                                                <li><a class="btn btn-gold btn-warning" href="#">< Previous</a></li>
                                                                                <li><a href="#">1</a></li>
                                                                                <li><a href="#">2</a></li>
                                                                                <li class="active"><a href="#">3</a></li>
                                                                                <li><a href="#">4</a></li>
                                                                                <li><a href="#">5</a></li>
                                                                                <li><a class="btn btn-gold btn-warning" href="#">Next ></a></li>
                                                                        </ul>
                                                                </div>
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