<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh_inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$first_name = mysqli_real_escape_string($conn, $_POST['first']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last']);
	
	if ( empty($uid) || empty($pwd) || empty($email) || empty($first_name) || empty($last_name) ) {
		header("Location: ../register.php?signup=empty");
		exit();
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../register.php?signup=invalidEmail");
		exit();
	} elseif (strlen($pwd)<8||strlen($pwd)>16) {
		header("Location: ../register.php?signup=invalidPasswordLen");
		exit();
	} elseif (!preg_match("#[0-9]+#", $pwd)) {
		header("Location: ../register.php?signup=invalidPasswordNum");
		exit();
	} elseif (!preg_match("#[a-zA-Z]+#", $pwd)) {
		header("Location: ../register.php?signup=invalidPasswordLet");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultsCheck = mysqli_num_rows($result);
		
		if ($resultsCheck > 0) {
			header("Location: ../register.php?signup=usertaken");
			exit();
		} else {
			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
			$sql = "INSERT INTO users (user_uid, user_pwd, user_email, user_first, user_last) VALUES ('$uid', '$hashedPwd', '$email', '$first_name', '$last_name');";
			$result = mysqli_query($conn, $sql);
			header("Location: ../register.php?signup=success");
			exit();
		}
	}
	
} else {
	header("Location: ../register.php?success=failure");
	exit();
}