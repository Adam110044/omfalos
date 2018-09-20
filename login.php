<?php session_start(); ?> 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./Stylesheet/style.css">
	<!-- javascript to control form here -->
</head>
<body>
	<div class="LoginKingDiv">
		<div class="LoginLogoDiv">
			<a href="index.php"><img src="./Img/logo.png", alt="OMFALOS logo"></a>
		</div>
		<hr class="LoginFormDividerLine">
		<div class="LoginFormDiv">
			<form action="./Includes/login_inc.php" method="POST">
				  <input class="LoginRegisterInputBox" type="text" name="uid" placeholder="Username">
				  <br>
				  <input class="LoginRegisterInputBox" type="text" name="pwd" placeholder="Password">
				  <br> 
			  		<label class="LoginRememberMeCheckBox">
			  		<input  type="checkbox" name="rememberMe" value="remember"> Remember Me
			  		<span class="LoginRememberMeCheckmark"></span>
					</label>
				  <br>
				  <input class="LoginSubmitButton" type="submit" name="submit" value="Log in">
			</form>
		</div>
		<div class="LoginFormEdits">
			<!-- Forgot password link -->
			<a href="#"><p>Forgotten Your Password?</p></a>
			<a href="./register.php"><button>Register</button></a>
		</div>
	</div>
	<!--Footer Placement Within the page needs to be adjusted so that it floats at the bottomof the window --> 
	 <?php include_once 'Includes/footer.php'; ?> 
	</body>
</html>