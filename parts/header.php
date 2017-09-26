<?php
$currentfile = basename($_SERVER['PHP_SELF']);
echo $currentfile . '<br>';

$url = 'https://buddy.works/blog';
$url = parse_url($url);
echo 'Scheme : ' . $url['scheme'] . "<br>";
echo 'Host : ' . $url['host'] . "<br>";
echo 'Path : ' . $url['path'] . "<br>";

if(!empty($_SERVER['HTTPS'])) {
	echo 'HTTPS disabled' . '<br>';
} else {
	echo 'HTTP enabled' . '<br>';
}

$email = "aa@bauhbdoasbdasd.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo $email . " Valid";
} else {
	echo $email . " Invalid";
}

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