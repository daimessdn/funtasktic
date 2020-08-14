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

		.form-edit {
			display: none;
		}

		.nav-status {
			display: block;
			padding: .5rem 1rem;
			color: #fff;
		}

		tr {
			margin-top: 10px;
			padding: 5px 0;
			background-color: #343a40;
			color: #fff;
			border-radius: 5px;
		}

		td {
			width: 100%;
		}
	</style>
</head>
<body onload="timeTick()">
	<nav class="navbar navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand nav-status" href="/home">
				&#64;{{ $user->name }}<br />
				<span class="badge badge-primary badge-sm"> Level {{ $player->level }}</span>
			</a>
			
			<li class="nav-status">
				<i class="fa fas fa-calendar-alt"></i>
				{{ $mytime = Carbon\Carbon::now()->format('d-m-Y') }}<br />
				<i class="fa fas fa-clock"></i>
				<span id="time"></span>
			</li>


			<ul class="navbar-nav navbar-expand-lg mr-auto">
				<li class="nav-status" style="width: 200px;">
					Health: {{ $player->health }} / {{ $player->max_health }}
					<div class="progress">
						<div
							class="progress-bar"
							style="width: {{ $player->health / $player->max_health * 100 }}%"
							role="progressbar"
							aria-valuenow={{ $player->health }}
							aria-valuemin="0"
							aria-valuemax={{ $player->max_health }}
						></div>
					</div>
				</li>
				<li class="nav-status" style="width: 200px">
					XP: {{ $player->xp }} / {{ $player->max_xp }}
					<div class="progress">
						<div
							class="progress-bar"
							style="width: {{ $player->xp / $player->max_xp * 100 }}%"
							role="progressbar"
							aria-valuenow="{{ $player->xp }}"
							aria-valuemin="0"
							aria-valuemax={{ $player->max_xp }}
						></div>
					</div>
				</li>
			</ul>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<ul class="navbar-nav collapse mr-auto sticky-top" id="navbarNav">
				<li class="nav-item nav-status">
					<a class="nav-link" href="#">
						Challenge
					</a>
		        </li>
		        <li class="nav-item nav-status">
					<a class="nav-link" href="/done">
						Done
					</a>
				</li>
				<li class="nav-item nav-status">
					<a class="nav-link" href="/logout">
						<i class="fa fas fa-sign-out-alt"></i>	
						Logout
					</a>
				</li>
			</ul>
		</div>
	</nav>

	@yield('content')

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<script>
		function timeTick() {
			let date = new Date()

			let h = date.getHours()
			let m = date.getMinutes()
			let s = date.getSeconds()

			if (h < 10)
				h = "0" + h
			if (m < 10)
				m = "0" + m
			if (s < 10)
				s = "0" + s

			document.querySelector('#time').textContent = h + ":" + m + ":" + s
		
			let x = setTimeout(timeTick, 1000)
		}
	</script>
	<script src="js/app.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../../js/app.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>