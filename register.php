<!-- The CSS for Logo and Underline is inherited from Login Page -->
<?php session_start(); ?> 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
	<script>
		function dropdownFunction() {
			var x = document.getElementById("ShowPostcodeResults");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
	</script>
	<!-- javascript to control form here -->
</head>
<body>
	<div class="RegisterKingDiv">
		<div class="LoginLogoDiv">
			<a href="index.php"><img src="./img/logo.png" alt="OMFALOS logo"></a>
		</div>
		<hr class="LoginFormDividerLine">
		<form action="./Includes/register_inc.php" method="POST">
			<div class="RegisterFormDiv">
				<div class="RegisterFormDiv90">
					<input id="RegisterForename" class="LoginRegisterInputBox" type="text" name="first" placeholder="Forename" pattern="^[a-zA-Z]+$" title="Must Contain Letters Only!" required><span class="RegisterValidationTickSpanFirst"><span id="RegisterTick1" class="RegisterTick"></span></span>
					<br>
					<input id="RegisterSurname" class="LoginRegisterInputBox" type="text" name="last" placeholder="Surname"><span class="RegisterValidationTickSpanLast"><span id="RegisterTick2" class="RegisterTick"></span></span>
					<br>
					<input id="RegisterUsername" class="LoginRegisterInputBox" type="text" name="uid" placeholder="Username"><span class="RegisterValidationTickSpanUid"><span id="RegisterTick3" class="RegisterTick"></span></span>
					<br>
					<input id="RegisterPassword" class="LoginRegisterInputBox" type="text" name="pwd" placeholder="Password"><span class="RegisterValidationTickSpanPwd"><span id="RegisterTick4" class="RegisterTick"></span></span>
					<br>
					<input id="RegisterConfirmPassword" class="LoginRegisterInputBox" type="text" name="checkPassword" placeholder="Confirm Password"><span class="RegisterValidationTickSpanCheckPassword"><span id="RegisterTick5" class="RegisterTick"></span></span>
					<br>
					<input id="RegisterEmail" class="LoginRegisterInputBox" type="text" name="email" placeholder="Email"><span class="RegisterValidationTickSpanEmail"><span id="RegisterTick6" class="RegisterTick"></span></span>
					<br>
					<input id="RegisterConfirmEmail" class="LoginRegisterInputBox" type="text" name="confirmEmail" placeholder="Confirm Email"><span class="RegisterValidationTickSpanCheckEmail"><span id="RegisterTick7" class="RegisterTick"></span></span>
					<br>
					<div class="RegisterPageSelections">
					<select required>
						<option value="" disabled selected>Select Your Nationality</option>
	  					<option value="">United Kingdom</option>
	  					<!-- Uncomment when this page has been made-->
						<!--<?php include_once 'Includes/selectOptionsNationality.php'; ?>-->
					</select>
					<select  required>
						<option value="" disabled selected>Select Your Current Location</option>
						<option value="">United Kingdom</option>
						<!-- Uncomment when this page has been made-->
						<!--<?php include_once 'Includes/selectOptionsLocation.php'; ?>-->
					</select>
					</div>
					<br>
					
					<!-- Address Finder -->
					<input class="RegisterInputBoxPostcode" type="text" name="postcode" placeholder="Postcode">
					<span class="RegisterButtonFindPostcode" onclick="dropdownFunction()">FIND ADDRESS</span>
					<br>
					<!-- ShowPostcodeResults Div Used to open a hidden div when the find button is pressed that shows the address results for the searched postcode--> 
					<div id="ShowPostcodeResults" style="display:none;"></div>
					<br>
					<!-- Close -  ABOVE NEEDS TO BE FINISHED -->
					<div class="RegisterFormCheckBoxes">
					<label class="RegisterCheckBox">
			  		<input  type="checkbox" name="termsAndConditions" value="agreed"> I have read and agree to the <a href="#">Terms and Conditions </a>
			  		<span class="RegisterCheckmark"></span>
					</label>
					<label class="RegisterCheckBox">
			  		<input  type="checkbox" name="over18" value="yes"> I am over 18 years old 
			  		<span class="RegisterCheckmark"></span>
					</label>
					<label class="RegisterCheckBox">
			  		<input  type="checkbox" name="extraOffers" value="yes"> I would like to sign up to recieve notifications of exclusive offers 
			  		<span class="RegisterCheckmark"></span>
					</label>
					</div>
				</div>
				<input class="RegisterSubmitButton"  value="submit" name="submit" type="submit">
			</div>
		</form>
		<div id="RegisterLinkToLogin">
		<a href="./login.php">Already a member?</a>
		</div>
	</div>
	<!-- Uncomment when done-->
	<!--<?php include_once 'Includes/footer.php'; ?>-->
</body>
<script>
	
	var forename = document.getElementById("RegisterForename");
	var tick1 = document.getElementById("RegisterTick1");
	var surname = document.getElementById("RegisterSurname");
	var tick2 = document.getElementById("RegisterTick2");
	var username = document.getElementById("RegisterUsername");
	var tick3 = document.getElementById("RegisterTick3");
	var password = document.getElementById("RegisterPassword");
	var tick4 = document.getElementById("RegisterTick4");
	var confim_password = document.getElementById("RegisterConfirmPassword");
	var tick5 = document.getElementById("RegisterTick5");
	var email = document.getElementById("RegisterEmail");
	var tick6 = document.getElementById("RegisterTick6");
	var confirm_email = document.getElementById("RegisterConfirmEmail");
	var tick7 = document.getElementById("RegisterTick7");

	var letters = "^[a-zA-Z]+$"; 
	var no_spaces = ".*\s.*";
	
	forename.onkeyup = function() { 
		if (forename.value.match(letters)) {
			tick1.style.display = "inline-block";
		} else {
			tick1.style.display = "none";
		}
	}
	surname.onkeyup = function() { 
		if (surname.value.match(letters)) {
			tick2.style.display = "inline-block";
		} else {
			tick2.style.display = "none";
		}
	}
	username.onkeyup = function() { 
		if (username.value.match(no_spaces)) {
			tick3.style.display = "inline-block";
		} else {
			tick3.style.display = "none";
		}
	}
	password.onkeyup = function() { 
		if (password.value.match(letters)) {
			tick4.style.display = "inline-block";
		} else {
			tick4.style.display = "none";
		}
	}
	confirm_password.onkeyup = function() { 
		if (confirm_password.value.match(letters)) {
			tick5.style.display = "inline-block";
		} else {
			tick5.style.display = "none";
		}
	}
	email.onkeyup = function() { 
		if (email.value.match(letters)) {
			tick6.style.display = "inline-block";
		} else {
			tick6.style.display = "none";
		}
	}
	confirm_email.onkeyup = function() { 
		if (confirm_email.value.match(letters)) {
			tick7.style.display = "inline-block";
		} else {
			tick7.style.display = "none";
		}
	}

</script>
</html>