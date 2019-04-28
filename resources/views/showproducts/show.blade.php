@extends('layouts.index')


@section('content')
	
<div class="wrapper">

        <!-- original -->
        <div class="header header-filter"  style="background-image: url('/storage/{{$product->cover_image}}'); max-height: 100%;">
                        
                <div class="container">
                                <div class="row">
                                                <div class="col-md-8">
                                                <h1 style="text-transform: uppercase;" class="title">{{ $product->title }}</h1>
                                                 <p class="post-meta">Posted by <a href="/products/{{$product->id}}">{{$product->user->name}}</a> on {{$product->created_at->toFormattedDateString()}}</p>
                                                 <hr>
                                                 <a class="btn btn-gold"  href="#">Activities</a>
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
                                                                 {{-- <h1 style="margin: -30px 0">{{ $product->title }}</h1> 
                                                                <hr> --}}
                                                                <section>
                                                                        <div class="container container post-preview">
                                                                                 <h2 class="post-meta">Posted by <a href="/products/{{$product->id}}">{{$product->user->name}}</a> on {{$product->created_at->toFormattedDateString()}}</h2>
                                                                                 {{-- <img style="max-width:100%; max-height:100%;" src="/storage/{{$product->cover_image}}"> --}}
                                                                                <hr>
                                                                                <h3 style="padding:0 50px" class="post-subtitle blog card">
                                                                                        {!! $product->body !!}
                                                                                </h3>
                                                                        </div>
                                                                        <hr>
                                                                         @include('include.eventsection') 
                                                                         {{-- @include('include.gallery') 
                                                                         @include('include.testimonials') 
                                                                         @include('include.news')  --}}

                                                                
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