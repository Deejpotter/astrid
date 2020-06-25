<!doctype html>
<html lang="en">

  	<head>

		<title> <?php echo $title?> </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bulma CSS -->
		<link rel="stylesheet" href="<?php echo $fileLevel ?>css/bulma.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="<?php echo $fileLevel ?>css/style.css">

 	</head>


	<body>
		
		<!-- Main header for every page -->
		<nav class="navbar navbar-expand-md">
			<div class="container">
				<!-- Brand -->
				<a class="navbar-brand" href="<?php echo $fileLevel ?>index.php">
					<img src="<?php echo $fileLevel ?>images/logo.png">
				</a>

				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<i class="fas fa-bars"></i>
				</button>

				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav nav-fill ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $fileLevel ?>pricing.php">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $fileLevel ?>about.php">About me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo $fileLevel ?>work.php">My work</a>
						</li>
						<li class="nav-item">
							<a class="btn btn-primary btn-lg shadow" href="<?php echo $fileLevel ?>contact.php">Contact me</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>