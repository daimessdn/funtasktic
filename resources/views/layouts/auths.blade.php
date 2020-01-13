<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>funtasktic</title>
	<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet"> 
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
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

		i.fa {
			padding-right: 2px;
		}

		.nav-status {
			display: block;
			padding: .5rem 1rem;
			color: #fff;
    }
    
    .jumbotron-auth {
      padding: 1rem 1rem;
      margin-bottom: 2rem;
      background-color: #e9ecef;
    }

		tr {
			margin-top: 10px;
			padding: 5px 0;
			background-color: #343a40;
			color: #fff;
			border-radius: 5px;
		}
	</style>
</head>
<body>
  <div class="container mt-2">
	  @yield('content')
  </div>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>