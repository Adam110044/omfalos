<html>
<head>
	<?php include_once 'Includes/metadata.php'; ?>
	<link rel="stylesheet" type="text/css" href="./stylesheet/style.css">
</head>

<body>
	<?php include_once 'Includes/header.php'; ?>
	<!-- start main code here! There are loads of divs and spans in this page so to avoid confusion - I will breake the code into chunks using comments -->
	
	<!-- THE LEFT -->
	<span class="MealCardLeftSpan">
		<div class="MealCardTitleDiv">
			<div class="MealCardTitleDivInner">
				
				<!-- THE TOP LEFT MEAL CARD STUFF SECTION -->
				<div class="MealCardTitleDivInnerTop">

					<!-- THE TOP LEFT MEAL CARD STUFF SECTION: TOP TITLE AND BUTTONS-->
					<span class="MealCardTitleDivInnerTopTitle">
						<p>MEAL TITLE</p>
					</span>
					<span class="MealCardTitleDivInnerTopButtons">
						<!-- Create feature to change display setting based on if the meal is in the users meal book or not --> 
						<div class="CssCircle MinusSign" style="display:none;">
						  &#8211;
						</div>
						<div class="CssCircle PlusSign">
						  &#43;
						</div>
						<svg class="EditSymbolMealCard" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-5 17l1.006-4.036 3.106 3.105-4.112.931zm5.16-1.879l-3.202-3.202 5.841-5.919 3.201 3.2-5.84 5.921z"/></svg>
					</span>
				</div>

				<!-- THE TOP LEFT MEAL CARD STUFF SECTION: MIDDLE STARS PART-->
				<div class="MealCardTitleDivInnerMiddle">
				</div>
				
				<!-- THE TOP LEFT MEAL CARD STUFF SECTION: BOTTOM ALLERGEN PART-->
				<div class="MealCardTitleDivInnerBottom">
					<div class="MealCardTitleDivInnerBottomSectioned CeleryIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned DairyIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned EggIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned FishIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned GlutenIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned LupineIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned MolluscaIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned MustardIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned NutsIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned PeanutIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned SesameseedsIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned ShellfishIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned SoyIconDiv"></div>
					<div class="MealCardTitleDivInnerBottomSectioned SulphurdioxideIconDiv"></div>
				</div>
			</div>
		</div>

		<!-- THE MIDDLE LEFT PROFILE OF CREATOR SECTION-->
		<div class="MealCardAuthorDiv">
			<div class="MealCardAuthorDivInner">
				<span class="MealCardAuthorSpanInnerLeft">
					<div class="MealCardAuthorSpanInnerLeftUpper">
						<p> Creator Name </p>
					</div>
					<div class="MealCardAuthorSpanInnerLeftLower">
						<div class="MealCardAuthorSpanInnerLeftLowerFollow"> FOLLOW </div>
						<div class="MealCardAuthorSpanInnerLeftLowerNationAndFollowers">
							<div class="MealCardAuthorSpanInnerLeftLowerFollowers">
								<!-- Create feature to display number of followers--> 
							</div>
							<div class="MealCardAuthorSpanInnerLeftLowerNation">
							</div>
						</div>
						<div class="MealCardAuthorSpanInnerLeftLowerSocialLinks">
							<!-- Add Social Links Bar that display the social media location of the creator when hovering over icons -->
						</div>
					</div>
				</span>
				<span class="MealCardAuthorSpanInnerRight">
					<div class="MealCardAuthorSpanInnerRightProfilePic"></div>
				</span>
			</div>
		</div>
		
		<!-- THE BOTTOM LEFT INGREDIENTS SECTION-->
		<div class="MealCardIngredientsDiv">
			<div class="MealCardIngredientsDivInner">
			<div class="MealCardIngredientsDivInnerTitle">
				<p> INGREDIENTS </p>
			</div>
			<div class="MealCardIngredientsDivInnerIngredients">
				<!-- Ingredients list (suggest: php) -->
			</div>
			</div>
		</div>
	</span>

				<!-- END OF LEFT HAND SIDE  -->


	<span class="MealCardRightSpan">
		<div class="ActualRecipeDiv">
		</div>
		<div class="MealCardRightSpanTagsDiv">
			<!-- Introduce meal card tags in this div --> 
		</div>
	</span>
	
	<!-- end main code here! -->
	<?php include_once 'Includes/footer.php'; ?>
</body>
</html>