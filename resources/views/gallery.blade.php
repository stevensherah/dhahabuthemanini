@extends('layouts.index')


@section('content')
	

<div class="wrapper">
        
                @if(count($galleries) > 0)
                                                                                                
                @foreach ($galleries->take(1) as $item)
		<div class="header header-filter"  style="background-image: url('/storage/{{$item->cover_image}}');">
				
		<div class="container">
				<div class="row">
						<div class="col-md-8">
						<h1 class="title">Our Portfolio.</h1>
						<h4>{{$item->title}}</h4>
						<br />
						<a href="#" class="btn btn-info btn-raised btn-lg">VIEW MORE</a>
						</div>
				</div>
		</div>
                </div>
                @endforeach
                @else
                        <p>No gallery found</p>
                @endif

		<div class="main main-raised">					
	
						
                <section>
                        <div class="section landing-section">       
                        <h2 class="text-center title">gallary</h2>
                                        <div class="row">
                                                @if(count($galleries) > 0)
                                                                                                
                                                @foreach ($galleries as $item)
                        
                                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
                                                                        <a href="#" data-image-id="" data-toggle="modal" data-title=""
                                                                        data-target="#image-gallery">
                                                                        <img class="img-rounded img-responsive img-raised"
                                                                                src="/storage/{{$item->cover_image}}"
                                                                                alt="Retratos">
                                                                        </a>
                                                        </div>
                                                @endforeach
                                                @else
                                                        <p>No gallery found</p>
                                                @endif
                                        </div>
                        </div>
                </section>

                        
                        @include('include.contactsection')

                </div>

                </div>

@endsection

