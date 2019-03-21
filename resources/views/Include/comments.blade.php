<div class="">

                <div class="row">
                        <div class="col-md-8 ">
                                <div class="card">
                                        <h2 style="padding:1px 0" class="title text-center">Comments</h2>
                                        <hr>
                                        <ul class="">

                                                @if(count($post->comments) > 0)     
                                                @foreach ($post->comments as $comment )
                                                <li class="row card">
                                                        <div class="col-md-2">
                                                        <img src="assets/img/avatar.jpg" alt="Thumbnail Image" style="max-height:30px" class="img-circle img-raised img-responsive">
                                                        </div>
                                                        <div class="col-md-10">
                                                                <a href=""><h3 class="title">Stephen Charagu</strong></h3></a>
                                                                <p>{{ $comment->body }}.</p>
                                                                <h4 class="post-meta well">Posted on {{$comment->created_at->diffForHumans()}} <a href="">REPLY </a> <a href="">LIKE </a> on <s>{{$post->created_at->toFormattedDateString()}}</s>
                                                                <h4>Display Comments</h4>
                                                                @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
                                                                </h4>
        
                                                        </div>
                                                </li>
                                                <br>
                                                @endforeach

                                                @else
                                                <li class="row card">
                                                    <h2>NO COMMENTS YET</h2>
                                                </li>
                                                @endif
                                        
                                                <li class="row card">
                                                        <br>
                                                        <div class="col-md-12">
                                                                <h2 class="text-center well" style="background: linear-gradient(60deg, #e4b630, rgb(152, 126, 51));">Add your comment</h2>


                                                                <form class="contact-form" method="post" action="{{ route('comment.add') }}">  
                                                                {{ csrf_field() }}
                                                                <hr>
                                                                {{--  <div class="row">
                                                                <div class="col-md-12">
                                                                        <div class="form-group label-floating">
                                                                                        <label class="control-label">Your Name</label>
                                                                                        <input type="text" class="form-control" name="name">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group label-floating">
                                                                                        <label class="control-label">Your Email</label>
                                                                                        <input type="email" class="form-control" name="email">
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="form-group label-floating">
                                                                                        <label class="control-label">Your Phone</label>
                                                                                        <input type="phone" class="form-control" name="phone">
                                                                        </div>
                                                                </div>
                                                                </div>  --}}
                                                                
                                                                <div class="form-group">
                                                                        <input class="form-control" type="text" name="comment_body" />
                                                                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                                                        {{--  <textarea class="form-control" type="text" name="comment_body"  placeholder="Enter Comment" rows="5"></textarea>  --}}
                                                                </div>
                                        
                                                                

                                                                <div class="row">
                                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                                        <button class="btn btn-gold btn-raised" type="submit" data-toggle="tooltip" data-placement="top" title="Send Comment">
                                                                                        Send Comment
                                                                        </button>
                                                                </div>
                                                                </div>

                                                                {{--  {!! Form::open(['action' => 'BlogsController@addComment', 'method' => 'POST']) !!}
                                                                {{ csrf_token() }}
                                                                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}                                                                
                                                                <!--  {!! Form::submit('Send Comment', 'class' => 'btn btn-gold btn-raised') !!}  -->
                                                                <div class="col-md-4 col-md-offset-4 text-center">
                                                                        <button class="btn btn-gold btn-raised" type="submit" data-toggle="tooltip" data-placement="top" title="Send Comment">
                                                                                        Send Comment
                                                                        </button>
                                                                </div>                                                             
                                                                
                                                                {!! Form::close() !!}  --}}
                                                                
                                                        </div>
                                                </li>
                                        </ul>

                                </div>
                                
                        </div>
                        @include('include.sidebar')
                </div>
        
        </div>