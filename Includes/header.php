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
						<a href="./index.php"><img src="./Img/logo.png" alt="Omfalos Logo"></a>
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
					<span id="HeaderUserSpan">
						<button>USER &#9660;</button>
						<!-- Dropdown menu written with CSS-->
						<div id="HeaderUserDropdownContent">
						    <a href="./login.php">Login</a>
						    <a href="./register.php">Register</a>
						</div>
					</span>
					
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