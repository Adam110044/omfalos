		<header>
			<script>
				function dropdownFunction() {
					var x = document.getElementById("MyWeekDiv");
					var y = document.getElementById("ArrowDiv");
					if (x.style.display === "none") {
						x.style.display = "block";
						y.innerHTML = "&#9650;";
					} else {
						x.style.display = "none";
						y.innerHTML = "&#9660;";
					}
				}
			</script>
			<div>
				<div>
					<span id="HeaderLogoSpan">
						<!--LOGO Image-->
						<img src="./Img/logo.png" alt="Omfalos Logo">
					</span>
					<span id="HeaderNavSpan">
						<ul>
							<!--Add links to pages-->
							<li><a href="#"><span class="HeaderNavIcon"><?php include 'icons/profileIcon.php'; ?></span><p>MY PROFILE</p></a></li>
							<li><a href="#"><span class="HeaderNavIcon"><?php include 'icons/searchIcon.php'; ?></span><p>SEARCH</p></a></li>
							<li><a href="#"><span class="HeaderNavIcon"><?php include 'icons/listIcon.php'; ?></span><p>LIST</p></a></li>
							<li><a href="#"><span class="HeaderNavIcon"><?php include 'icons/buyIcon.php'; ?></span><p>BUY</p></a></li>
						</ul>
					</span>
					<?php
						$init_ind = 5;
						if (isset($_SESSION['user_uid'])) {
							$user_uid = $_SESSION['user_uid'];
							echo '<span id="HeaderUserSpan">' . "\n";
							echo str_repeat("    ", $init_ind+1) . '<button>' . $user_uid . ' &#9660;</button>' . "\n";
							echo str_repeat("    ", $init_ind+1) . '<!-- Dropdown menu written with CSS-->' . "\n";
							echo str_repeat("    ", $init_ind+1) . '<div id="HeaderUserDropdownContent">' . "\n";
							echo str_repeat("    ", $init_ind+2) . '<a href="./myWeek.php">My Week</a>' . "\n";
							// This line needs to log the user out -> discuss changing to button OR goto log out php script
							echo str_repeat("    ", $init_ind+2) . '<a href="./Includes/logout_inc.php">Log out</a>' . "\n";
							echo str_repeat("    ", $init_ind+1) . '</div>' . "\n";
							echo str_repeat("    ", $init_ind) . '</span>' . "\n";
						} else {
							echo '<span id="HeaderUserSpan">' . "\n";
							echo str_repeat("    ", $init_ind+1) . '<button>USER &#9660;</button>' . "\n";
							echo str_repeat("    ", $init_ind+1) . '<!-- Dropdown menu written with CSS-->' . "\n";
							echo str_repeat("    ", $init_ind+1) . '<div id="HeaderUserDropdownContent">' . "\n";
							echo str_repeat("    ", $init_ind+2) . '<a href="./login.php">Login</a>' . "\n";
							echo str_repeat("    ", $init_ind+2) . '<a href="./register.php">Register</a>' . "\n";
							echo str_repeat("    ", $init_ind+1) . '</div>' . "\n";
							echo str_repeat("    ", $init_ind) . '</span>' . "\n";
						}
					?>
					
				</div>
				<div id="ArrowButtonDiv">
					<button onclick="dropdownFunction()"> <div id="ArrowDiv"> &#9660; </div> </button>
					<!-- Make feature to change background colour when clicked and make it so the arrow changes direction to movement of the MyWeekDiv-->
				</div>
			</div>
				
			<div id="MyWeekDiv" style="display:none;">
				<!-- My week goes here (hidden at start) -->
			</div>
		</header>