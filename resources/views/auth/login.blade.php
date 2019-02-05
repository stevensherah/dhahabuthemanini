@extends('layouts.kit')

<body class="signup-page">

        <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>                    
                    </div>
        
                    <div class="collapse navbar-collapse" id="navigation-example">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                           
                        </ul>
                    </div>
                </div>
            </nav>

@section('content')
<div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/examples/sunset.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form"  method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
								<div class="header header-primary text-center">
									<h4>Log In</h4>
									
								</div>
                                {{-- <p class="text-divider">Be Classic</p> --}}
                                <hr>
								<div class="content">
								
                                            <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="control-label">E-Mail Address</label>
                    
                                                <div class="">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group label-floating {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <label for="password" class=" control-label">Password</label>
                        
                                                    <div class="">
                                                        <input id="password" type="password" class="form-control" name="password" required>
                        
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                            </div>

							        {{-- If you want to add a checkbox to this form, uncomment this code --}}

									<div class="form-group">
                                            <div class="">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                
								<div class="footer text-center">
                                        <div class="form-group">                                                
                                            <button type="submit" class="btn btn-gold btn-warning">
                                                Login
                                            </button>
                                        </div>   
                                    
                                </div>
                                <p class="text-divider"><a class="" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a></p>
							</form>
						</div>
					</div>
				</div>
			</div>


@endsection
