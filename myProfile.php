<html>
<head>
	<?php include_once 'Includes/metadata.php'; ?>
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
</head>

<body>
	<?php include_once 'Includes/header.php'; ?>
	
	<!-- start main code here! -->
	<span class="MyProfileLeftSpan">
		<div id="MyProfileDetails">
		<div class="UserNameDiv">
			<p>@USERNAME</p>
			<svg class="EditSymbolMyProfile" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-5 17l1.006-4.036 3.106 3.105-4.112.931zm5.16-1.879l-3.202-3.202 5.841-5.919 3.201 3.2-5.84 5.921z"/></svg>
		</div>
		<div class="ProfileAndSocialLinks">
			<span class="ProfileAndSocialLinksLeft">
				<img src="./Img/profilepic.png" alt="Profile Picture">
			</span>
			<span class="ProfileAndSocialLinksRight">
				<div class="ProfileSocialLinks" id="youtubeIcon"><?php include 'Includes/icons/youtubeIcon.php'; ?></div>
				<div class="ProfileSocialLinks" id="instagramIcon"><?php include 'Includes/icons/instagramIcon.php'; ?></div>
				<div class="ProfileSocialLinks" id="facebookIcon"><?php include 'Includes/icons/facebookIcon.php'; ?></div>
				<div class="ProfileSocialLinks" id="snapchatIcon"><?php include 'Includes/icons/snapchatIcon.php'; ?></div>
				<div class="ProfileSocialLinks" id="linkedinIcon"><?php include 'Includes/icons/linkedinIcon.php'; ?></div>
			</span>
		</div>
		<div class="MyProfileDetailsInside">
			<table id="tableOfDetails">
			  <tr>
			    <th>Email:</th>
			    <td>Email@email.com</td>
			  </tr>
			  <tr>
			    <th>Nationality:</th>
			    <td></td>
			  </tr>
				<tr>
					<th>Address:</th>
					<td></td>
				</tr>
			  <tr>
			    <th>Description:</th>
			    <td></td>
			  </tr>
			</table>
		</div>
			<!-- details section:  Username, picture, nation, email, firstname?, lastname?, description -->
		</div>
		<div id="MyProfileDetailsDivider"></div>
		<div id="MyProfileStats">
			<div class="StatsHeaderDiv">
			<h5> STATS </h5>
			</div>
			<div class="StatsBoxesDiv">
				<div class="StatsBoxesTopDiv">
					<span class="StatsBoxSpan"></span><span class="StatsBoxSpan"></span><span class="StatsBoxSpan"></span>
				</div>
				<div class="StatsBoxesBottomDiv">
					<span class="StatsBoxSpan"></span><span class="StatsBoxSpan"></span><span class="StatsBoxSpan"></span>
				</div>
			</div>
		</div>
	</span>
	<span class="MyProfileDividerSpan"></span>
	<span class="MyProfileRightSpan">
		<!-- Add href's to all these divs to the correct pages + make those pages! -->
		<a href=""><div class="MyProfileButton" id="MyProfileButton1">MY MEAL BOOK</div></a>
		<a href=""><div class="MyProfileButton" id="MyProfileButton2">SAVED WEEKS</div></a>
		<a href=""><div class="MyProfileButton" id="MyProfileButton3">SAVED LISTS</div></a>
		<a href=""><div class="MyProfileButton" id="MyProfileButton4">FOLLOWING</div></a>
		<a href=""><div class="MyProfileButton" id="MyProfileButton5">FOLLOWERS</div></a>
	</span>
	
	<!-- end main code here! -->

	<?php include_once 'Includes/footer.php'; ?>
</body>
</html>