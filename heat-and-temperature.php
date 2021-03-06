		<?php
			include_once 'header.php';
		?>

		<main>
			<div class="intro-description">
				<h1>Heat and Temperature</h1>
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
								<a href="#heat" class="data-jumper-child">Description of Heat</a>
								<a href="#temperature" class="data-jumper-child">Description of Temperature</a>
								<a href="#endothermic-and-exothermic" class="data-jumper-child">Endothermic and Exothermic Reactions</a>
								<a href="#heat-transfer-and-measurement" class="data-jumper-child">Heat Transfer and Measurement</a>
								<a href="#specific-heat-and-heat-capacity" class="data-jumper-child">Specific Heat and Heat Capacity</a>
								<a href="#how-much-heat-needed1" class="data-jumper-child">Common Problem: How Much Heat Needed? | Type 1</a>
								<a href="#temperature-conversions" class="data-jumper-child">Temperature Conversions</a>
								<a href="#mass-conversions" class="data-jumper-child">Mass Conversions</a>
							</div>
						</div>

						<div class="body-content">
							<div class="functionality">						
								<div class="section-heading">
									<h2 id="heat">What is Heat?</h2>
								</div>
								<p>Heat is a form of energy that spontaneously flows from a hotter body to one that is colder.</p>
								<ul>
									<li>This occurs until the objects are the same temperature</li>
									<li><span class="emphasize">Thermal equilibirum</span> is the term used when the heat has flowed until everything is the same temperature</li>
									<li>An object's rate of temperature change is affected by its initial temperature, specific heat, and mass</li>
								</ul>
								<p><span class="emphasize"></span></p>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="temperature">What is Temperature?</h2>
								</div>
								<p>Temperature can be thought of as <span class="emphasize">a measurement of the intensity of heat</span>.</p> 
								<p>Units of temperature are<span class="emphasize"> Celsius, Fahrenheit, and Kelvin</span>.</p>
								<ul>
									<li>Celsius is...</li>
									<li>Fahrenheit is...</li>
									<li>Kelvin is...</li>
								</ul>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="endothermic-and-exothermic">Endothermic and Exothermic Reactions</h2>
								</div>
								<p>A chemical process that is <span class="emphasize">endothermic</span> is one that <span class="emphasize">pertains to how much heat is used</span>.</p>

								<p>A chemical process that is <span class="emphasize">exothermic</span> is one that <span class="emphasize">pertains to how much heat is given off</span>.</p> 
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">

								<div class="section-heading">
									<h2 id="heat-transfer-and-measurement">Heat Transfer and Measurement</h2>
								</div>
								<p>The amount of heat transferred during some type of chemical process is usually <span class="emphasize">measured in Joules or calories</span>.</p>
								<ul>
									<li>You will probably see Joules used more than calories.</li>
									<li><p>One calorie is 4.184 Joules.</p> </li>
								</ul> 
							</div>
						</div>
						
						<br>

						<div class="body-content">
							<div class="functionality">						

								<div class="section-heading">
									<h2 id="specific-heat-and-heat-capacity">Specific Heat and Heat Capacity</h2>
								</div>
								<p><span class="emphasize">Specific heat is </span>the amount of heat required to raise the temperature of a gram of a specified substance one degree Celsius without changing the substance's phase (solid, liquid, gas, or plasma).</p>
								<ul>
									<li>Changes in phase tend to release or absorb substantial amounts of energy.</li>
									<li>The specific heat capacity of a substance depends on its current phase.</li>
									<li>Specific heat is measured in <sup>J</sup>/<sub>g(&#176;C)</sub></li>
								</ul>

								<br>

								<p><span class="emphasize">Specific heat is equal to: </span>temperature in Joules divided by the product of the mass of the substance in grams and the temperature change in Celsius.</p>
								<ul>
									<li>NOTE: A product is the answer you get when you multiply numbers together.</li>
									<li>Formula: SH = <sup>J</sup>/<sub>g(&#176;C)</sub></li>
								</ul>

								<br>

								<p><span class="emphasize">The heat capacity of a body is: </span> the amount of heat needed to raise its temperature 1&#176;C.</p>
								<ul>
									<li>The heat capacity of a body is <span class="emphasize">its mass in grams multiplied by its specific heat</span></li>
									<li>Formula: HC = g * SH</li>
								</ul>
							</div>
						</div>

						<br>


						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="how-much-heat-needed1">Common Problem: How Much Heat Needed?</h2>
								</div>
								<div class="common-problem">
									<p>It is fairly common to get asked problems of the following format...</p>
									<p class="question">How much heat in Joules would you need to raise 320g of liquid H2O from 26.3&#176;C to 87.2&#176;C?</p>
									<p>In such instances, heat needed is equal to the product of the mass of the substance and the specific heat capacity of water, multiplied by the change in temperature.</p>
									<ul>
										<li>In other words, heat needed = mass of substance * specific heat * change in temperature OR...</li>
										<li class="emphasize"> Heat Needed = mass of substance * heat capacity * &#916;T</li>
									</ul>
								</div>

								<div class="big-section-heading">
									<h2 id="">Calculation</h2>
								</div>

								<div class="conversionTypeList">
									<div class="border-intro">
										<div class="button-formatter">
											<button onclick="howMuchHeat1()">Begin Your Problem</button>
										</div>
										<p id="change-in-temp"></p>
										<p id="change-in-temp-step1"></p>
										<p id="change-in-temp-step2"></p>
										<p id="change-in-temp-step3"></p>
										<p id="change-in-temp-step4"></p>
										<p id="how-much-heat-prompt"></p>
										<p id="how-much-heat-one-equation"></p>
										<p id="how-much-heat-one-step1"></p>
										<p id="how-much-heat-one-step2"></p>
										<p id="how-much-heat-one-step3"></p>
										<div class="button-formatter">
											<button id="clear3" onclick="clearAll()">Erase Work</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<br>

						<!-- Temperature Converter Content Here -->
						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="temperature-conversions">Temperature Conversions</h2>
								</div>
								<div class="common-problem">
									<p>Many of the calculator functions on the page ask for specific temperature units, but you might be working with another type</p> 
										<ul>
											<li>You might have Celsius instead of Fahrenheit or Kelvin</li> 
											<li>This series of tools can be used to convert from your current unit of temperature to the one you need to answer your problem</li>
											<li>Pay attention to the process and try to get to where you can comfortably do it without the calculator</li>
										</ul>
								</div> 

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2 id="convert-celsius-to-fahrenheit">Temperature Conversion Calculator</h2>
									</div>
									<p></p>
									<div class="button-formatter">
										<button onclick="temperatureConverter()">Begin Conversion</button>
									</div>
										<p id="cToFEquation"></p>
										<p id="cToFstep1"></p>
										<p id="cToFstep2"></p>
										<p id="cToFstep3"></p>
										<p id="fToCEquation"></p>
										<p id="fToCstep1"></p>
										<p id="fToCstep2"></p>
										<p id="fToCstep3"></p>
										<p id="fToCEquationKelvin"></p>
										<p id="fToCstep1Kelvin"></p>
										<p id="fToCstep2Kelvin"></p>
										<p id="fToCstep3Kelvin"></p>
										<p id="fToKEquation"></p>
										<p id="fToKstep1"></p>
										<p id="fToKstep2"></p>
										<p id="cToKEquation"></p>
										<p id="cToKstep1"></p>
										<p id="cToKstep2"></p>
									<div class="button-formatter">
										<button id="clearTemperature" onclick="clearAll()">Erase Work</button>
									</div>
								</div>

								<br>
								
							</div>
						</div>

						<br>

						<!-- Mass Converter Content Here -->
						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="mass-conversions">Mass Conversions</h2>
								</div>
								<div class="common-problem">
									<p>Many of the calculator functions on the page ask for mass in grams, but you might be working with a different unit.</p> 
										<ul>
											<li>You might have kilograms, pounds, or ounces</li> 
											<li>This series of tools can be used to convert from your current unit of mass to the one you need to answer your problem</li>
											<li>Pay attention to the process and try to get to where you can comfortably do it without the calculator</li>
										</ul>
								</div> 

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2 id="convert-celsius-to-fahrenheit">Mass Conversion Calculator</h2>
									</div>
									<p></p>
									<div class="button-formatter">
										<button onclick="massConverter()">Begin Conversion</button>
									</div>
										<p id="kToG"></p>
										<p id="kToGStep1"></p>
										<p id="kToGStep2"></p>
										<p id="lbToG"></p>
										<p id="lbToGStep1"></p>
										<p id="lbToGStep2"></p>
									<div class="button-formatter">
										<button id="clear2" onclick="clearAll()">Erase Work</button>
									</div>
								</div>

								<br>
							</div>
						</div>
					</div>
					<a href="https://computer-programming-shirts.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner2.jpg"></a>
				</div>
			</div>
		</main>
	</body>
</html>
