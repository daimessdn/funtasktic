@extends('layouts.auths')

@section('content')
	<div class="jumbotron-auth bg-dark text-light">
		<h1>Register into funtasktic</h1>
		<form action="/register/verify" class="form-inline" method="POST">
			@csrf
	
			<div class="form-group">
				<label for="name">
					Username:
				</label>
				<input tyle="text" class="form-control ml-1 mr-3" name="name" required />
			</div>
	
			<div class="form-group">
				<label for="email">
					Email:
				</label>
				<input tyle="email" class="form-control ml-1 mr-3 mb-2" name="email" required />
			</div>
	
			<div class="form-group">
				<label for="password">
					Password:
				</label>
				<input type="password" class="form-control ml-1 mr-3 mb-2" name="password" required />
			</div>
	
			<span>
				Have already? <a href="/login"> Login and have more fun!</a>
			</span>
	
			<button type="submit" class="btn btn-primary btn-sm ml-3 mb-2">submit</button>
		</form>
	</div>
@endsection