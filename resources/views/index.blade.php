@extends('layouts.index')


@section('content')
	

<div class="wrapper">
	<div class="header header-filter"  style="text-transform: uppercase;  background-image: url('assets/img/bg.jpg');">
			
	<div class="container">
		<div class="row">
				<div class="col-md-8">
				<h1 class="title">WELCOME TO THE FAMILY.</h1>
				<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam dolorum officia cupiditate ullam perferendis, aperiam exercitationem. Est nam animi blanditiis incidunt illum, veritatis velit officiis, placeat dolorum eveniet numquam quibusdam!</h4>
				<br />
				<a href="{{ url('/') }}" class="btn btn-info btn-raised btn-lg">OUR PROGRAMS</a>
				</div>
		</div>
	</div>
	</div>

	<div class="main main-raised">
		<div class="container">
			<div class="section text-center section-landing">
				<div class="row">
				    <div class="col-md-8 col-md-offset-2">
					<h2 class="title">Let's talk Family</h2>
					<h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.
						<br>
					<a href="{{ url('/about') }}" class="btn btn-info btn-raised">VIEW MORE</a>
					</h5>
				    </div>
				</div>				
						
	
				<!-- <div class="features">
					<div class="row">
					    	<div class="col-md-4">
						<div class="info">
							<div class="icon icon-primary">
								<i class="material-icons">chat</i>
							</div>
							<h4 class="info-title">First Feature</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
						</div>
						<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success">
								<i class="material-icons">verified_user</i>
							</div>
							<h4 class="info-title">Second Feature</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
						</div>
						<div class="col-md-4">
						<div class="info">
							<div class="icon icon-danger">
								<i class="material-icons">fingerprint</i>
							</div>
							<h4 class="info-title">Third Feature</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
							</div>
						</div>
						</div>
						</div> -->
	
						<div class="features">
							<div class="row">
								<div class="col-md-4">
									<div class="info">
										<div class="icon icon-primary">
											<i class="material-icons">chat</i>
										</div>
										<h4 class="info-title">First Feature</h4>
										<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="info">
										<div class="icon icon-success">
											<i class="material-icons">verified_user</i>
										</div>
										<h4 class="info-title">Second Feature</h4>
										<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="info">
										<div class="icon icon-danger">
											<i class="material-icons">fingerprint</i>
										</div>
										<h4 class="info-title">Third Feature</h4>
										<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
									</div>
								</div>
							</div>
						</div>
	
				<div class="row">
				    <div class="col-md-8 col-md-offset-2">
					<h2 class="title">"Qoute of the day"</h2>
					<blockquote>
									<p>									I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.</p>
									<small>Kanye West, Musician</small>
								</blockquote>
				    </div>
				</div>	

				@include('include.events')
				
				@include('include.products')
	
	
				</div>

				
				<section class="row">
					<div class="col-md-12">
					    <h2 class="title text-center">Latest blog</h2>
							
						</div>
					    
					</div>
				</section>



<section>
	<div class="section text-center">
	<h2 class="title">Meet our team</h2>
	
		<div class="team">
			<div class="row">
				<div class="col-md-4">
					<div class="team-player">
					<img src="assets/img/avatar.jpg" alt="Thumbnail Image" class="img-raised img-circle">
					<h4 class="title">Gigi Hadid <br />
									<small class="text-muted">Model</small>
								</h4>
					<p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
					<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
					<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
					<a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team-player">
					<img src="assets/img/christian.jpg" alt="Thumbnail Image" class="img-raised img-circle">
					<h4 class="title">Christian Louboutin<br />
									<small class="text-muted">Designer</small>
								</h4>
					<p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
					<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
					<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="team-player">
					<img src="assets/img/kendall.jpg" alt="Thumbnail Image" class="img-raised img-circle">
					<h4 class="title">Kendall Jenner<br />
									<small class="text-muted">Model</small>
								</h4>
					<p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
					<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
					<a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
					<a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>


<section>
<div id="carousel">
		<h2 class="text-center title">Testimonials</h2>
	<div class="container">
		<!-- Carousel Card -->
		<div class="card-raised card-carousel">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						@foreach( $galleries as $photo )
						<li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
						@endforeach
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						@foreach( $galleries as $photo )
						<div class="item {{ $loop->first ? ' active' : '' }}" >
							<img src="/storage/{{$photo->cover_image}}" alt="{{ $photo->title }}">
							<div class="carousel-caption">
								<h4>{{$photo->title}}</h4>
								<br>
								<a href="/about"><i class="btn btn-gold">View</i></a>
							</div>
						</div>
						@endforeach
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Carousel Card -->
</div>
</section>
	
	<section>
			<div class="section landing-section">
				@include('include.gallery')
			</div>

	</section>
				<div class="section landing-section">
				<div class="row">
				    <div class="col-md-8 col-md-offset-2">
					<h2 class="text-center title">Subscribe To Our News Letter</h2>
					<form class="contact-form" method="POST" action="/">
						{{ csrf_field() }}
					    <div class="row">
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">Your Name</label>
								<input type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">Your Email</label>
								<input type="email" class="form-control" name="email">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group label-floating">
								<label class="control-label">Your Phone</label>
								<input type="phone" class="form-control" name="phone">
							</div>
						</div>
					    </div>
	
					    <div class="row">
						<div class="col-md-4 col-md-offset-4 text-center">
						    	<button class="btn btn-gold btn-raised btn-warning" type="submit">Subscribe
							</button>
						</div>
					    </div>
					</form>
				    </div>
				</div>
	
			    </div>

			    @include('include.contactsection')

			</div>
	
			</div>

@endsection

