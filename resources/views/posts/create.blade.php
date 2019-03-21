@extends('layouts.app')

@section('content')
<section class="row ">
        <div class="col-md-10 offset-1 card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title"><h2>CREATE POST</h2></span>                     
                    </div>
                  </div>
                </div>
                <div class="card-body"> 


                    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{Form::text('title', '', ['class' => 'form-control ', 'placeholder' => 'Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                    </div>
                    <div class="form-control">                        
                        {!! Form::file('cover_image') !!}
                    </div>
                    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}
            
            </div>
        </div>
</section>
@endsection