<?php
	include 'user.php';
?>

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
<?php
	$user = new User;

	$user->reg_user('bartek', '123', 'test@test.pl');

//	$user->log_user('test@test.pl', '123');
?>
<section class="section section--left">
    <div class="wrap-small">
        <div class="login-container">
            <a href="#" class="login-logo">
                <img src="img/logo.png" alt="">
            </a>
            <h2 class="login-title">Login in to your page</h2>
            <form action="login.php" method="post">
                <input class="login__input" type="text" placeholder="Email">
                <input class="login__input"type="password" placeholder="Password">
                <input class="button login__button" type="submit" value="Login">
            </form>
        </div>
    </div>
</section>

<section class="section section--right"></section>

</body>
</html>
