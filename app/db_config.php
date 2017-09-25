<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'photography');

if(!$connection) {
	die("Connection error " . mysqli_connect_error());
}
