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
		<div class="section text-center section-landing">
		@include('include.products')
		</div>
	</section>
	
	<section>
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
	</section>

			    @include('include.galleryportfolio')
			    
			    @include('include.contactsection')

			</div>
	
			</div>

@endsection

