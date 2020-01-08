<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Login into funtasktic</h1>
	<form action="/login/verify" method="POST">
		@csrf

		<label for="email">
			Email:
		</label>
		<input tyle="email" name="email" required />

		<br />

		<label for="password">
			Password:
		</label>
		<input type="password" name="password" required />

		<br />

		<button type="submit">submit</button>
	</form>
</body>
</html>