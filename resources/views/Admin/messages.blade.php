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

<section id="">

        <h1 class="section-heading text-uppercase text-info text-center">Messages</h1>
        <hr>
        @if(count($messages) > 0)
            @foreach($messages as $message)
            <div class="row"> 
            <div class="col-md-2">
                {{--  #################################################  --}}
            </div>
                <div class="col-md-12 text-left pull-center">
                        <ul class="list-group">
                            <div class="row">
                                <div class="col-md-4">
                                        <li id="resepient_created_at" class="list-group-item">Created.: {{$message->created_at->toFormattedDateString() }}</li>
    
                                        <li id="resepient_name" class="list-group-item">Name: {{$message->name}}</li>
                                        <li id="resepient_email" class="list-group-item">Email: {{$message->email}}</li>
                                        <li id="resepient_phone" class="list-group-item">Phone No.: {{$message->phone}}</li>
    
                                </div>
                                <div class="col-md-8">
                                        <li id="resepient_message" class="list-group-item">Message: {{$message->message}}</li>
                                        {{--  <li class="list-group-item">Time: {{$created_at->$created_at}}</li>  --}}
                                </div>
                            </div> 
                            <br><hr>                           
                        </ul>
                </div>
                <div class="col-md-2">
                {{--  #################################################  --}}
                                </div>
            </div>
               
            @endforeach
        @endif
    </section>

@endsection
