<?php 
$fileLevel = "";
$title = "Your personal web designer | Deej Potter Designs";
include "templates/header.php" 
?>

<main id="main">
	
	<!-- Hero section -->
	<?php
		$bgColour = "primary";
		$bgImage = "images/laptop-60-opacity.png";
		$textColour = "light";
		$sectionH1 = "Deej Potter Designs";
		$sectionP = "Your own personal web designer. <br>Prices start at $100. <br><strong>Contact me now!</strong>";
		$otherClasses = "inset-background-cover";
		include "templates/home-hero.php"
	?>

	<!-- Basic section -->
	<?php
		$bgColour = "light";
		$textColour = "dark";
		$bgImage = "";
		$sectionH2 = "I’m here to help you";
		$sectionP = "I know there is a lot to learn when it comes to the internet so I’m here to guide you through the whole journey. 
		You’ll have personal contact with me the whole time and I will be happy to answer any questions you have. 
		I also have varying levels of service after your website is finished so you can be sure you will never be left 
		not knowing what to do next.";
		$otherClasses = "";
		include "templates/basic-section.php"
	?>
		
</main>

<?php include "templates/footer.php" ?>