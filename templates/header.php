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
		<nav class="navbar">
			<div class="container">
				<!-- Brand -->
				<div class="navbar-brand">
					<a class="navbar-item" href="<?php echo $fileLevel ?>index.php">
						<img src="<?php echo $fileLevel ?>images/logoOriginal.svg" width="112" height="28">
					</a>
					<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>
				<!-- Navbar menu -->
				<div class="navbar-menu">
					<div class="navbar-start">

					</div>

					<div class="navbar-end">
						<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Home</a>
						<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Documentation</a>
						<div class="navbar-item has-dropdown is-hoverable">
							<a class="navbar-link" href="<?php echo $fileLevel ?>contact.php">My work</a>
							<div class="navbar-dropdown">
								<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">About</a>
								<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Jobs</a>
								<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Contact</a>
								<hr class="navbar-divider">
								<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Report an issue</a>
							</div>
						</div>
						<div class="navbar-item">
							<div class="buttons">
								<a class="button is-primary" href="<?php echo $fileLevel ?>contact.php"><strong>Contact me</strong></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>