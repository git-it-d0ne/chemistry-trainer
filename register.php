<?php include_once 'header.php';?>

		<main>
			<div class="intro-description">
				<h1>Registration</h1>
			</div>

			<p class="marquee"><span>Spread the word about the site!</span></p>

			<div class="body">
				<div class="primary-setup">
					<a href="https://funny-science-shirts-2.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner1.jpg"></a>
					<div class="styled-paragraph">

						<div class="registration">
							<section class="signup-form">
								<div class="big-section-heading">
									<h2>Please Fill out the Following Forms</h2>
								</div>
								<form class="register-form" action="includes/signup-inc.php" method="post" autocomplete="off">
									<input type="text" name="name" placeholder="Full name:">
									<input type="text" name="email" placeholder="Email:">
									<input type="text" name="uid" placeholder="Username:">
									<input type="password" name="pwd" placeholder="Password:">
									<input type="password" name="pwdrepeat" placeholder="Retype password:">
									<button type="submit" name="submit">Register</button>
								</form>
							
								<?php
									if (isset($_GET["error"])) {
										if ($_GET["error"] == "emptyinput") {
											echo "<p>Fill in all fields!</p>";
										}

										else if ($_GET["error"] == "invalidUid") {
											echo "<p>Choose a proper username!</p>";
										}

										else if ($_GET["error"] == "invalidemail") {
											echo "<p>Choose a proper email!</p>";
										}


										else if ($_GET["error"] == "passwordsdontmatch") {
											echo "<p>Passwords don't match!</p>";
										}


										else if ($_GET["error"] == "stmtfailed") {
											echo "<p>Something went wrong! Please try again</p>";
										}


										else if ($_GET["error"] == "usernametaken") {
											echo "<p>That username is taken! Please choose another</p>";
										}


										else if ($_GET["error"] == "none") {
											echo "<p>You have signed up successfully!</p>";
										}									
									}
								?>
							</section>
						</div>
					</div>
					<a href="https://computer-programming-shirts.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner2.jpg"></a>					
				</div>
			</div>
		</main>		
	</body>
</html>