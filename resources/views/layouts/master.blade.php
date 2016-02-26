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

	<link rel="stylesheet" href="{{ asset('/sass/app.scss') }}" >


</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>