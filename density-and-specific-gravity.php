		<?php
			include_once 'header.php';
		?>

		<main>
			<div class="intro-description">
				<h1>Density and Specific Gravity</h1>
			</div>

			<p class="marquee"><span>Spread the word about the site!</span></p>

			<div class="body">
				<div class="primary-setup">
					<a href="https://funny-science-shirts-2.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner1.jpg"></a>
					<div class="styled-paragraph">
						<div class="navbox">
							<div class="body-header">
								<h2 id="navigation">Navigation</h2>
							</div>

							<div class="data-jumper">
								<a href="#density" class="data-jumper-child">What is Density?</a>
								<a href="#specific-gravity" class="data-jumper-child">What is Specific Gravity?</a>
								<a href="#density-calculator" class="data-jumper-child">Density Calculator</a>
								<a href="#specific-gravity-calculator" class="data-jumper-child">Specific Gravity Calculator</a>
							</div>
						</div>
						
						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="density">What is Density?</h2>
								</div>
								
								<div class="equations">
									<span>$$\rho = \frac{m}{V}$$</span> 
									<span>OR</span>
									<span>&rho; = <em>m</em> / <em>V</em></span>
								</div>
								<p>Density is a relationship between the mass and volume of a substance. You can calculate the density of something by<span class="emphasize"> taking its mass and dividing it by its volume</span>. Your textbook or worksheet might tell you that the density of a substance is the quotient of its mass and volume. Don't be confused, it means the same thing.</p> 

								<ul>
									<li>Density can be used to figure out the identity of unknown substances.</li>
									<li>The symbol for density (&rho;) is called rho
									<li>Density is a physical quantity because it has a number value and multiple unit types</li>
									<li>Basically, density is an amount of mass per a certain amount of volume</li>
								</ul>
								<p>When dealing with solids, the unit used for density is often grams per cubic centimeter, which you will see written as...</p>
								<div class="equations">
									<span>$$\frac{g}{cm^3}$$</span>
									<span>OR</span>
									<span><em>g</em> / <em>cm</em><sup>3</sup></span>
								</div>

								<p>When dealing with liquid, the unit used for density is often grams per milliliter, which you will see written as...</p>

								<div class="equations">
									<span>$$\frac{g}{mL}$$</span>
									<span>OR</span>
									<span><em>g</em> / <em>mL</em></span>
								</div>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">						
								<div class="section-heading">
									<h2 id=specific-gravity>What is Specific Gravity?</h2>
								</div>
								<p>Specific gravity is a value that is found by <span class="emphasize">dividing the density of a substance by the density of water</span>.</p>
								<ul>
									<li>As long as the temperature is not higher than 25 degress Celsius, one can safely assume that the density of water is 1.00 g/mL</li>
									<li>The concept of specific gravity can be thought of as an equation where: specificGravity = substanceDensity/waterDensity</li>
								</ul>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="temperature-conversions">Density and Specific Gravity Calculators</h2>
								</div>
								<div class="common-problem">
									<p>Many of the calculator functions on the</p> 
										<ul>

										</ul>
								</div> 

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2 id="density-calculator">Density Calculator</h2>
									</div>
									<div class="button-formatter">
										<button onclick="density()">Calculate Density</button>
									</div>
									<p id="densityEquation"></p>
									<p id="densityStep1"></p>
									<p id="densityStep2"></p>
									<div class="button-formatter">
										<button id="clearDensity" onclick="clearSpecificGravityAndDensity()">Clear Work</button>
									</div>
								</div>

								<br>



								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2 id=specific-gravity-calculator>Specific Gravity Calculator</h2>
									</div>

									<div class="button-formatter">
										<button onclick="specificGravity()">Specific Gravity</button>
									</div>
									<p id="specificGravityEquation"></p>
									<p id="specificGravityStep1"></p>
									<p id="specificGravityStep2"></p>
									<div class="button-formatter">
										<button id="clearSpecificGravity" onclick="clearSpecificGravityAndDensity()">Clear Work</button>
									</div>
								</div>
								
							</div>
						</div>

						<br>


					</div>
					<a href="https://computer-programming-shirts.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner2.jpg"></a>
				</div>
			</div>
		</main>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
	</body>
</html>
