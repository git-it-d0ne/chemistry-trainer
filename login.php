<?php include_once 'header.php';?>

		<main>
			<div class="intro-description">
				<h1>Login</h1>
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
								<form class="register-form" action="includes/login-inc.php" method="post">
									<input type="text" name="name" placeholder="Username/Email:">
									<input type="password" name="pwd" placeholder="Password:">
									<button type="submit" name="submit">Login</button>
								</form>

								<?php
									if (isset($_GET["error"])) {
										if ($_GET["error"] == "emptyinput") {
											echo "<p>Fill in all fields!</p>";
										}

										else if ($_GET["error"] == "wronglogin") {
											echo "<p>Incorrect login credentials!</p>";
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