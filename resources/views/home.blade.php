<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>funtasktic</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css" media="screen">
		body, html, * {
			font-family: 'Helvetica Neue'
		}

		.nav-status {
			display: block;
			padding: .5rem 1rem;
			color: #fff;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
		<a class="navbar-brand" href="#">funtasktic</a>

		<ul class="navbar-nav mr-auto">
			<li class="nav-status">
				Level 1
			</li> 
			<li class="nav-status" style="width: 150px;">
				Health: 100/100
				<div class="progress">
					<div class="progress-bar" style="width: 100%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</li> 
			<li class="nav-status" style="width: 150px;">
				XP: 1/100
				<div class="progress">
					<div class="progress-bar" style="width: 1%" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</li>
		</ul>
	</nav>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>