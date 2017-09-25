<?php

include 'db_config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$hash_pass = md5($password);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$hash_pass' ";

$result = mysqli_query($connection, $sql);

if (!$row = $result->fetch_assoc()) {
	echo "Login Incorrect";
} else {
	echo "login Successfully";
}
