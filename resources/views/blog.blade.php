@extends('Layouts.index')


@section('content')
	
<div class="wrapper">

        <!-- original -->

        <div class="header header-filter"  style="background-image: url('assets/img/bg2.jpeg'); max-height: 100%;">
                        
                <div class="container">
                                <div class="row">
                                                <div class="col-md-8">
                                                <h1 class="title">Latest Blog Post</h1>
                                                <h2 class="post-title">
                                                                I believe every human has a finite number of heartbeats. I dont intend to waste any of mine.
                                                </h2>
                                                <br />
                                                <a href="#" class="btn btn-gold btn-info btn-lg">Read More</a>
                                                </div>
                                                <div class="col-md-3 well">
                                                        <H4 style="color:black">Categories</H4>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>                                      
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>
                                                        <button class="btn btn-gold btn-xs">Extra Small</button>                                                  
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
                                                                <div class="col-lg-10 col-lg-offset-1 col-md-8 col-md-offset-1">
                                                                <div class="post-preview">
                                                                {{--  <div class="header header-filter">
                                                                        <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">
                                                                        <a href="post.html">
                                                                        <h2 class="post-title">
                                                                                Man must explore, and this is exploration at its greatest
                                                                        </h2>
                                                                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
                                                                        <h3 class="post-subtitle">
                                                                                Problems look mighty small from 150 miles up
                                                                        </h3>
                                                                        </a>
                                                                        
                                                                </div>  --}}
                                                                <hr>
                                                                <div class="post-preview">
                                                                        <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">
                                                                        <a href="post.html">
                                                                        <h2 class="post-title">
                                                                                I believe every human has a finite number of heartbeats. I dont intend to waste any of mine.
                                                                        </h2>
                                                                        </a>
                                                                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                                                                </div>
                                                                <hr>
                                                                <div class="post-preview">
                                                                        <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">

                                                                        <a href="post.html">
                                                                        <h2 class="post-title">
                                                                                Science has not yet mastered prophecy
                                                                        </h2>
                                                                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                                                                        <h3 class="post-subtitle">
                                                                                We predict too much for the next year and yet far too little for the next ten.
                                                                        </h3>
                                                                        </a>
                                                                        
                                                                </div>
                                                                <hr>
                                                                <div class="post-preview">
                                                                        <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">
                                                                        <a href="post.html">
                                                                        <h2 class="post-title">
                                                                                Failure is not an option
                                                                        </h2>
                                                                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                                                                        <h3 class="post-subtitle">
                                                                                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                                                                        </h3>
                                                                        </a>
                                                                        
                                                                </div>
                                                                <hr>
                                                                <div class="post-preview">
                                                                                <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">
                                                                                <a href="post.html">
                                                                                <h2 class="post-title">
                                                                                        I believe every human has a finite number of heartbeats. I dont intend to waste any of mine.
                                                                                </h2>
                                                                                </a>
                                                                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                                                                </div>
                                                                <hr>
                                                                <div class="post-preview">
                                                                        <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">

                                                                        <a href="post.html">
                                                                        <h2 class="post-title">
                                                                                Science has not yet mastered prophecy
                                                                        </h2>
                                                                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                                                                        <h3 class="post-subtitle">
                                                                                We predict too much for the next year and yet far too little for the next ten.
                                                                        </h3>
                                                                        </a>
                                                                        
                                                                </div>
                                                                <hr>
                                                                <div class="post-preview">
                                                                        <img style="max-width:100%; max-height:100%; backgroud:red;" src="assets/img/bg2.jpeg">
                                                                        <a href="post.html">
                                                                        <h2 class="post-title">
                                                                                Failure is not an option
                                                                        </h2>
                                                                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                                                                        <h3 class="post-subtitle">
                                                                                Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                                                                        </h3>
                                                                        </a>
                                                                        
                                                                </div>
                                                                <hr>
                                                                <!-- Pager -->
                                                                <div class="text-center">
                                                                        <ul class="pagination pagination-warninggit ">
                                                                                <li><a href="#"><</a></li>
                                                                                <li><a href="#">1</a></li>
                                                                                <li><a href="#">2</a></li>
                                                                                <li class="active"><a href="#">3</a></li>
                                                                                <li><a href="#">4</a></li>
                                                                                <li><a href="#">5</a></li>
                                                                                <li><a href="#">></a></li>
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