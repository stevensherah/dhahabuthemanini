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
        <link rel="icon" type="image/png" href="assets/img/favicon.png">


	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link  rel="stylesheet" type="text/css" href="vendor/font-awesome/css/font-awesome.min.css">


	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-kit.css.map" rel="stylesheet"/>
	<link href="assets/css/style.css" rel="stylesheet"/>

	<!-- CUSTOM CSS -->
	<link href="assets/css/demo.css" rel="stylesheet"/>
	<link href="assets/css/material-kit.css" rel="stylesheet"/>
	<link href="assets/css/style.css" rel="stylesheet"/>


</head>

                @yield('content')
        
                @include('include.footer')
        
                
        
        
                </div>
                
</body>
        
                <!--   Core JS Files   -->
                <script src="assets/js/jquery.min.js" type="text/javascript"></script>
                <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="assets/js/material.min.js"></script>
        
                <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
                <script src="assets/js/nouislider.min.js" type="text/javascript"></script>
        
                <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
                <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
        
                <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
                <script src="assets/js/material-kit.js" type="text/javascript"></script>
        
        </html>