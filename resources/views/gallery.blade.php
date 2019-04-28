@extends('layouts.index')


@section('content')
	

<div class="wrapper">
		<div class="header header-filter"  style="background-image: url('assets/img/bg2.jpeg');">
				
		<div class="container">
				<div class="row">
						<div class="col-md-8">
						<h1 class="title">ABOUT US.</h1>
						<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolorum officia cupiditate ullam perferendis, aperiam exercitationem. Est nam animi blanditiis incidunt illum, veritatis velit officiis, placeat dolorum eveniet numquam quibusdam!</h4>
						<br />
						<a href="#" class="btn btn-info btn-raised btn-lg">VIEW MORE</a>
						</div>
				</div>
		</div>
		</div>

		<div class="main main-raised">					
	
						
                <section>
                                <div class="row">
                                        <div class="col-md-3">
                        <h2>gallos</h2>
                                                <div class="row">
                                                @if(count($gallery) > 0)
                                                                                                
                                                @foreach ($gallery as $item)
                        
                                                        <div class="col-lg-3 col-md-4 col-xs-6 thumb filter retratos">
                                                                <h4>{{$item->title}}</h4>
                                                                        <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                                                        data-target="#image-gallery">
                                                                        <img class="img-thumbnail"
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
                                </div>
                        </section>

			    
			    @include('include.contactsection')

			</div>
	
			</div>

@endsection

