<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>funtasktic</title>
	<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet"> 
	<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="css/fontawesome.min.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<style type="text/css" media="screen">
		@font-face {
			font-family: "Helvetica Neue";
			src: url('fonts/HelveticaNeue-Roman.otf')
		}
		
		body, html, * {
			font-family: 'DM Sans', 'Helvetica Neue', 'Arial', sans-serif;
			font-size: 14px;
		}
	</style>
</head>
<body>
	@yield('content')

	<script src="{{ url('js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/app.js') }}" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../../js/app.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>