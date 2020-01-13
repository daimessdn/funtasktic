@extends('layouts.auths')

@section('content')
	<div class="jumbotron-auth bg-dark text-light">
		<h1>Login into funtasktic</h1>
		<form action="/login/verify" class="form-inline" method="POST">
			@csrf

			<div class="form-group">
				<label for="email">
					Email:
				</label>
				<input tyle="email" class="form-control ml-1 mr-3" name="email" required />
			</div>

			<div class="form-group">
				<label for="password">
					Password:
				</label>
				<input type="password" class="form-control ml-1 mr-3" name="password" required />
			</div>

			<span>
				Don't have account? <a href="/register">Create one!</a>
			</span>

			<button type="submit" class="ml-3 btn btn-primary btn-sm">submit</button>
		</form>
	</div>
@endsection