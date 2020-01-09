<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>funtasktic</title>
	<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet"> 
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css" media="screen">
		body, html, * {
			font-family: 'DM Sans';
		}

		i.fa {
			padding-right: 2px;
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
	</style>
</head>
<body onload="timeTick()">
	<nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
		<div class="container">
			<a class="navbar-brand nav-status" href="#">
				&#64;{{ $user->name }}<br />
			</a>

			<li class="nav-status">
				<a class="nav-link active" href="#">
					<span class="badge badge-primary badge-sm"> Level {{ $player->level }}</span>
				</a>
			</li>

			<ul class="navbar-nav mr-auto">
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
				<li class="nav-status">
					<i class="fa fa-calendar"></i>
					{{ $mytime = Carbon\Carbon::now()->format('d-m-Y') }}<br />
					<i class="fa fa-clock-o"></i>
					<span id="time"></span>
				</li>
				<li class="nav-status">
					<a class="nav-link" href="#">
						Challenge
					</a>
				</li>
				<li class="nav-status">
					<a class="nav-link" href="/logout">
						<i class="fa fa-sign-out"></i>	
						Logout
					</a>
				</li>
			</ul>
		</div>
	</nav>


	<form class="form sticky-top jumbotron bg-dark" action="/tasks/create" method="POST">
		@csrf
		<div class="container">
			<div class="input-group mb-2 mr-sm-2">
				<input type="text" name="task_name" class="form-control col-md-9 col-sm-8" placeholder="Input task here...">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<strong>#</strong>
					</div>
				</div>
				<input type="text" name="task_tag" class="form-control col-md-3 col-sm-4" placeholder="tag (optional)">
			</div>

			<input type="text" class="form-control mb-2 mr-sm-2" name="task_desc" placeholder="Description here">

			<label class="sr-only" for="due">Due to</label>
			<div class="input-group mb-2 mr-sm-2">
				<div class="input-group-prepend">
					<div class="input-group-text">
						<i class="fa fa-calendar"></i>
					</div>
				</div>
				<input type="date" name="due" class="form-control" placeholder="Due">
			</div>

			<button type="submit" class="btn btn-primary mb-2 btn-sm">
				<i class="fa fa-plus"></i> submit
			</button>
		</div>
	</form>

	<div class="container">

		@if (count($tasks) > 0)
			<table class="mb-3">
				@foreach($tasks as $task)

				<tr class="row">
					<td class="col-md-6">
						<strong>{{ $task->task_name }}</strong>
						@if ($task->task_tag)
							<span class="badge badge-warning">#{{ $task->task_tag }}</span>
						@endif
						<br />
						@if ($task->task_desc)
							{{ $task->task_desc }}
						@endif
						<span class="badge badge-primary">{{ $task->due }}</span>
					</td>
					<td class="col-md-6 text-right">
						<a href="tasks/{{ $task->id }}/done" class="btn btn-sm btn-primary mt-1 mb-1">mark completed</a>
						<a href="tasks/{{ $task->id }}/delete" class="btn btn-sm btn-danger mt-1 mb-1">delete</a>
					</td>
				</tr>

				@endforeach
			</table>
		@else
			<div class="row">
				<div class="col-12">
					there are no tasks here.
				</div>
			</div>
		@endif
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
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
</body>
</html>