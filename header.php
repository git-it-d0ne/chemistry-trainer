<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="background_styles.css">
		<link rel="stylesheet" href="styles.css">
		<script src="script.js" defer></script>
		<title>Chemistry Trainer</title>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport" />
	</head>

	<body>
		<div class="logo">
			<img class="chemistry-logo" src="ch.jpg">
		</div>
		<div class="site-heading">
			<h1 class="brand-title">Chemistry Trainer</h1>
			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
		</div>

		<nav class="navbar">
			<div class="navbar-links">
				<ul>
					<?php 
						if (isset($_SESSION["useruid"])) {
								echo "<li><a href=\"#\">Crunk Biscuit</a></li>";
							}	
					?>					
					<li><a href="aqueous-solutions.php">Aqueous Solutions</a></li>
					<li><a href="chemical-formulas-and-equations.php">Chemical Formulas and Equations</a></li>
					<li><a href="density-and-specific-gravity.php">Density and Specific Gravity</a></li>
					<li><a href="electron-orbitals-and-configurations.php">Electron Orbitals and Configurations</a></li>
				</ul>
			</div>
		</nav>

		<nav class="navbar">
			<div class="navbar-links">
				<ul>
					<li><a href="gases-and-pressure.php">Gases and Pressure</a></li>
					<li><a href="general-properties-of-matter.php">General Properties of Matter</a></li>					
					<li><a href="heat-and-temperature.php">Heat and Temperature</a></li>
					<li><a href="moles-and-percent-composition.php">Moles and Percent Composition</a></li>
				</ul>
			</div>
		</nav>

		<nav class="navbar">
			<div class="navbar-links">
				<ul>
					<li><a href="periodic-table-lookup.php">Periodic Table Lookup</a></li>
					<li><a href="stoichiometry.php">Stoichiometry</a></li>
					<li><a href="donate.php">Donate to the Website</a></li>
				</ul>
			</div>
		</nav>

		<nav class="navbar organic-navbar">
			<div class="navbar-links organic-navbar-links">
				<ul>
					<li><a href="#">Alkanes and Cycloalkanes</a></li>
					<li><a href="#">Alcohols</a></li>
					<li><a href="#">Chirality</a></li>
					<li><a href="organic-compounds.php">Organic Compounds</a></li>
				</ul>
			</div>
		</nav>