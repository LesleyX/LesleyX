<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>LesleyX</title>
	
	<!-- Typekit Fonts -->
	<script src="//use.typekit.net/udt8boc.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('/css/app.scss') }}" >
	<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">


</head>
<body>
	<div class="container">
		@include('layouts.partials.alerts')
		@yield('content')
	</div>
</body>
</html>