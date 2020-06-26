<?php 
$fileLevel = "";
$title = "Your personal web designer | Deej Potter Designs";
include "templates/header.php" 
?>

<main id="main">
	
	<!-- Hero section -->
	<?php
		$bgColour = "black";
		$textColour = "primary";
		$bgImage = "";
		$sectionH1 = "Astrid";
		$sectionH2 = "Cute and crazy";
		$otherClasses = "";
		include "templates/home-hero.php"
	?>

	<!-- Basic section -->
	<?php
		$bgColour = "light";
		$textColour = "dark";
		$bgImage = "";
		$sectionH2 = "I’m a cute kitty cat";
		$sectionP = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!";
		$otherClasses = "";
		include "templates/basic-section.php"
	?>

	<!-- Three col section -->
	<?php
		$bgColour = 'light';
		$textColour = 'black';
		$bgImage = '';
		$col1Icon = 'fas fa-cat';
		$col1H2 = 'I’m a cute kitty cat';
		$col1P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
		$col2Icon = 'fas fa-cat';
		$col2H2 = 'I’m a cute kitty cat';
		$col2P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
		$col3Icon = 'fas fa-cat';
		$col3H2 = 'I’m a cute kitty cat';
		$col3P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
		include 'templates/three-col.php'
	?>
		
</main>

<?php include "templates/footer.php" ?>