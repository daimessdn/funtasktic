@extends('layouts.base')

@section('content')
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
						<i class="fa fas fa-calendar-alt"></i>
					</div>
				</div>
				<input type="date" name="due" class="form-control" placeholder="Due">
			</div>

			<button type="submit" class="btn btn-primary mb-2 btn-sm">
				<i class="fa fas fa-plus"></i> submit
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

@endsection