<?php

include 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_pass = md5($password);


//register

$sql = "SELECT * FROM user WHERE email = '$email' ";
$check = mysqli_query($connection, $sql);
$count_row = $check->num_rows;

if(!$count_row == 0) {
	echo "You've been already registered";
} else {
//	$db = "INSERT INTO user(name, email, password) VALUES('$name' ,'$email', '$hash_pass')";
//	$query = mysqli_query($connection, $db);
	echo "dodaj nowy";
}

//var_dump($row);





//header("Location: ../index.php");

