@extends('Layouts.index')


@section('content')
	
<div class="wrapper">

<!-- original -->
<div class="header header-filter"  style="background-image: url('assets/img/bg2.jpeg');">
				
        <div class="container">
                        <div class="row">
                                        <div class="col-md-8">
                                        <h1 class="title style="text-transform: uppercase;"">OUR BLOG POST.</h1>
                                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolorum officia cupiditate ullam perferendis, aperiam exercitationem. Est nam animi blanditiis incidunt illum, veritatis velit officiis, placeat dolorum eveniet numquam quibusdam!</h4>
                                        <br />
                                        <a href="#" class="btn btn-info btn-raised btn-lg">VIEW MORE</a>
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
                                                        <h1 class="text-center" style="margin: -30px 0">Other Post</h1>
                                                        <hr>
                                                        <section>
                                                                @if(count($posts) > 0)
                                                                @foreach($posts as $post)
                                                                <div class="container container post-preview">
                                                                        
                                                                        <a href="/blog/{{$post->id}}">
                                                                        <h2 class="post-title" style="text-transform: uppercase;">{{$post->title}}</h2>
                                                                        </a>
                                                                        <h3 class="post-meta">Posted by <a href="/blog/{{$post->id}}">{{$post->user->name}}</a> on {{$post->created_at->toFormattedDateString()}}</h3>
                                                                        <a href="/blog/{{$post->id}}">
                                                                        <img style="max-width:100%; max-height:100%;" src="/storage/cover_images/{{$post->cover_image}}">                                                     </a>

                                                                        <h3 class="post-subtitle">
                                                                                {{$post->body}}
                                                                        </h3>
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