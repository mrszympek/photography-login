<?php

class User {

	public $db;

	public function __construct() {
		$this->db = mysqli_connect('localhost', 'root', 'root', 'photography');
	}


	//register
	public function reg_user($username, $password, $email) {
		$password = md5($password);
		$sql = "INSERT INTO user ('name', 'password', 'email') VALUE($username, $password, $email)";
		$result = mysqli_query($this->db, $sql);
	}

	//login
	public function log_user($email, $password) {
		$password = md5($password);
		$sql = "SELECT email FROM user WHERE email ='$email' AND password = '$password'";

		$result = mysqli_query($this->db, $sql);
		$user_data = mysqli_fetch_array($result);
		$count_row = $result->num_rows;

		if($count_row == 1) {
			$_SESSION['login'] = true;
			$_SESSION['name'] = $user_data['name'];
			return true;
		} else {
			return false;
		}
	}

	public function get_session() {
		return $_SESSION['login'];
	}

	public function user_logout() {
		$_SESSION['login'] = FALSE;
		session_destroy();
	}

}