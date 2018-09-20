<?php

session_start();

if (isset($_POST['submit'])) {
	
	//creates a connection to the database called $conn
	include_once 'dbh_inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	if ( empty($uid) || empty($pwd) ) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultsCheck = mysqli_num_rows($result);
		
		if ($resultsCheck != 1) {
			header("Location: ../login.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//login
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_uid'] = $row['user_uid'];
					$_SESSION['user_email'] = $row['user_email'];
					$_SESSION['user_first'] = $row['user_first'];
					$_SESSION['user_last'] = $row['user_last'];
					header("Location: ../login.php?login=success");
					exit();
				}
			}
		}
	}
	
} else {
	header("Location: ../login.php");
	exit();
}