<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/png" href="{{ URL::to('/')}}/assets/img/favicon.png">


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	{!! Html::style('vendor/font-awesome/css/font-awesome.min.css') !!}

	
	{{-- Materia Css Icons --}}

	{!! Html::style('iconfont/material-icons.css') !!}



	<!-- CSS Files -->
	{!! Html::style('assets/css/bootstrap.min.css') !!}
	{!! Html::style('assets/css/material-kit.css.map') !!}
	{!! Html::style('assets/css/style.css') !!}

	<!-- CUSTOM CSS -->
	{!! Html::style('assets/css/demo.css') !!}
	{!! Html::style('assets/css/material-kit.css') !!}
	{!! Html::style('assets/css/style.css') !!}


</head>

<body class="landing-page">

	@include('include.navbar')
	
	@include('include.flashmessage')

	@yield('content')
	
	@include('include.modals')

	@include('include.footer')
	

        


        </div>
	
</body>

	<!--   Core JS Files   -->
	<script src="{{ URL::to('/')}}/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="{{ URL::to('/')}}/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="{{ URL::to('/')}}/assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="{{ URL::to('/')}}/assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="{{ URL::to('/')}}/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="{{ URL::to('/')}}/assets/js/material-kit.js" type="text/javascript"></script>

</html>
