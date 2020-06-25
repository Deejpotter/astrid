<!-- 
	-----EXAMPLE-----
	$bgColour = "primary";
	$bgImage = "images/laptop-60-opacity.png";
	$textColour = "dark";
	$sectionH1 = "Deej Potter Designs";
	$sectionP = "Your own personal web designer. <br>Prices start at $100. <br><strong>Contact me now!</strong>";
	$otherClasses = "";
	include "templates/hero.php"
 -->

<section class="hero is-<?php echo $bgColour ?> is-large <?php echo $otherClasses ?>" style='background-image:url(<?php echo $bgImage ?>);'>
  <div class="hero-body">
    <div class="container">
      <h1 class="title"><?php echo $sectionH1 ?></h1>
      <h2 class="subtitle"><?php echo $sectionP ?></h2>
    </div>
  </div>
</section>