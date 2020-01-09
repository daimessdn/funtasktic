<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Register</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Register into funtasktic</h1>
	<form action="/register/verify" method="POST">
		@csrf

		<label for="name">
			Username:
		</label>
		<input tyle="text" name="name" required />

		<br />

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