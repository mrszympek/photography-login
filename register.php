<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login panel</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
<section class="section section--left">
	<div class="wrap-small">
		<div class="login-container">
			<a href="#" class="login-logo">
				<img src="img/logo.png" alt="">
			</a>
			<h2 class="login-title">Register in to your page</h2>

			<form action="app/register.php" method="post">
				<input class="login__input" name="name" type="text" placeholder="Name">
				<input class="login__input" name="email" type="text" placeholder="Email">
				<input class="login__input" name="password" type="password" placeholder="Password">
				<input class="button login__button" type="submit" value="Register">
			</form>

			<p>Have an account? <a href="index.php">Login Here</a></p>
		</div>
	</div>
</section>

<section class="section section--right"></section>

</body>
</html>