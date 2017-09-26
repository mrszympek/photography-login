<?php require 'parts/header.php' ?>

<section class="section section--left">
	<div class="wrap-small">
		<div class="login-container">
			<a href="#" class="login-logo">
				<img src="img/logo.png" alt="">
			</a>
			<h2 class="login-title">Login in to your page</h2>

			<form action="app/login.php" method="post">
				<input class="login__input" name="email" type="text" placeholder="Email">
				<input class="login__input" name="password" type="password" placeholder="Password">
				<input class="button login__button" type="submit" value="Login">
			</form>

			<p>Don't have an account? <a href="register.php">Register here</a></p>
		</div>
	</div>
</section>

<section class="section section--right"></section>

<?php require 'parts/footer.php' ?>
