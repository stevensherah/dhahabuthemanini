@extends('layouts.app')

@section('content')


<!-- Content Header (Page header) -->

<section class="content-header">
  <h1> Subscribers <small>Latest Subscribers</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
  
</section>

<section>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Subscribers</div>
                    <br>                    
                    <div class="card">
                        <section id="">
                            @if(count($subscribes) > 0)
                                @foreach($subscribes as $subscribe)
                                <div class="row"> 
                                <div class="col-md-2">
                                    {{--  #################################################  --}}
                                </div>
                                    <div class="col-md-12 text-left pull-center">
                                            <ul class="list-group">
                                                            <li id="resepient_created_at" class="list-group-item">Created.: {{$subscribe->created_at->toFormattedDateString() }}</li>

                                                            <li id="resepient_name" class="list-group-item">Name: {{$subscribe->name}}</li>
                                                            <li id="resepient_email" class="list-group-item">Email: {{$subscribe->email}}</li>
                                                            <li id="resepient_phone" class="list-group-item">Phone No.: {{$subscribe->phone}}</li>                         
                                            </ul>
                                    </div>
                                    <div class="col-md-2">
                                    {{--  #################################################  --}}
                                    </div>
                                </div>
                                
                                @endforeach
                            @endif
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
