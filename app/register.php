<?php

include 'db_config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hash_pass = md5($password);


//register
$db = "INSERT INTO user(name, email, password) VALUES('$name' ,'$email', '$hash_pass')";
$query = mysqli_query($connection, $db);



header("Location: ../index.php");

