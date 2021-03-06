		<?php
			include_once 'header.php';
		?>

		<main>
			<div class="intro-description">
				<h1>Moles and Percent Composition</h1>
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
								<a href="#mole-avogadros-number" class="data-jumper-child">The Mole -- Avogadro's Number</a>
								<a href="#moles-in-compounds" class="data-jumper-child">Moles in Compounds</a>
								<a href="#molar-mass" class="data-jumper-child">Molar Mass</a>
								<a href="#moles-to-particles" class="data-jumper-child">Common Problem | Moles to Particles</a>
								<a href="#particles-to-moles" class="data-jumper-child">Common Problem | Particles to Moles</a>
								<a href="#particles-in-compounds" class="data-jumper-child">Common Problem | Particles of Elements in a Compound</a>
								<a href="#elements-and-their-molar-masses" class="data-jumper-child">Table: Elements and their Molar Masses</a>
							</div>
						</div>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="mole-avogadros-number">The Mole -- Avogadro's Number</h2>
								</div>

								<p>A mole is a <span class="emphasize">unit of measurement that represents 6.022 * 10<sup>23</sup></span> of whatever a person is counting.</p>

								<ul>
									<li>In chemistry, particles are generally counted in moles.</li>
									<li>6.022 * 10<sup>23</sup> is equal to 602,200,000,000,000,000,000,000</li>
									<li>1 mole of any element always has 6.022 * 10<sup>23</sup> atoms of that element.</li>
									<li>The same is true with compounds. For example, 1 mole of H<sub>2</sub>O contains 6.022 * 10<sup>23</sup> moles of water molecules</li>
									<li>Moles are used to convert between the number of particles in a substance and moles of that substance or vice cersa</li>
								</ul>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">						

								<div class="section-heading">
									<h2 id="moles-in-compounds">Moles in Compounds</h2>
								</div>

								<p>The subscripts in compound formulas and moles interact consistently. For example, the formula for the compound butane is C<sub>4</sub>H<sub>10</sub>.</p>

								<ul>
									<li>The subscripts 4 and 10 indicate that there are 4 moles of carbon and 10 moles of hydrogen in one mole of butane</li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">

								<div class="section-heading">
									<h2 id="molar-mass">Molar Mass</h2>
								</div>

								<p><span class="emphasize">Molar mass is </span>the amount of grams of an element in one mole of that element.</p>

								<ul>
									<li>Molar masses for every element can be found in the table on this page or the atomic mass section on the periodic table of elements</li>
									<li>Molar masses are great because they allow a person to convert from grams of an element to moles of it or vice versa</li>
									<li>To find the molar mass of a compound, find the molar mass of each element, multiply the molar mass of each element by its subscript in the compound, and add all the results together. See common problem examples for more detail</li>
								</ul>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="moles-to-particles">Common Problem: Convert from Moles of an Element to Particles</h2>
								</div>

								
								<div class="common-problem">
									<p>It is fairly common to get asked problems of the following format...</p>
									<p class="question">If you have 3.5 mol of Ag, how many atoms or particles of Ag are there?</p>
									<p>In such instances...</p>
									<ul>
										<li>Summary</li>
										<li class="emphasize">formula</li>
									</ul>
								</div>

								<div class="big-section-heading">
									<h2>Explanation</h2>
								</div>

								<p>To solve problems of this type...</p>

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2>Calculation</h2>
									</div>

									<div class="border-intro">
										<div class="button-formatter">
											<button onclick="molesToParticles()">Begin Your Problem</button>
										</div>
										<p id="moles-to-particles-equation"></p>
										<p id="moles-to-particles-step1"></p>
										<p id="moles-to-particles-step2"></p>
										<p id="moles-to-particles-notice"></p>

										<div class="button-formatter">
											<button id="clearMolesToParticles" onclick="clearMolesAndPercentComposition()">Erase Work</button>
										</div>
									</div>
								
								</div>
							</div>
						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="particles-to-moles">Common Problem: Convert from Particles to Moles</h2>
								</div>

								
								<div class="common-problem">
									<p>It is fairly common to get asked problems of the following format...</p>
									<p class="question">If you have 5.08 * 10<sup>23</sup> particles of of Ag, how many moles of Ag are there?</p>
									<p>When converting from particles to moles you will always end up with a number that is smaller than the one you start with. In this case, all you have to do is divide the number of particles or atoms by Avogadro's number, which is 6.022 * 10<sup>23</sup></p>
									<ul>
										<li>Summary</li>
										<li class="emphasize"><em>Formula: Particles/6.022 * 10<sup>23</sup></em></li>
									</ul>
								</div>

									<div class="big-section-heading">
										<h2>Calculation</h2>
									</div>

								<div class="border-intro">
									<div class="button-formatter">
										<button onclick="particlesToMoles()">Begin Your Problem</button>
									</div>
									<p id="particles-to-moles-equation"></p>
									<p id="particles-to-moles-step1"></p>
									<p id="particles-to-moles-step2"></p>

									<div class="button-formatter">
										<button id="clearParticlesToMoles" onclick="clearMolesAndPercentComposition()">Erase Work</button>
									</div>
								</div>

							</div> 
								

						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="particles-in-compounds">Common Problem: Calculate Particles of an Element in a Compound</h2>
								</div>


								<div class="common-problem">
									<p>It is fairly common to get asked problems of the following format...</p>
									<p class="question">When given moles of a compound, calculate how many moles there are for an individual element in the compound. For example, In 2,75 mol C<sub>4</sub>H<sub>10</sub> how many moles of carbon are present?</p>
	
								</div>

								<div class="big-section-heading">
									<h2 id="">Explanation</h2>
								</div>

								<p>In such instances the superscript that follows the chemical symbol for carbon is how many moles of carbon are in one mole of butane. In this question, you are given 2.75 moles of butane, so all you have to do is multiply 2.75 by the moles of Carbon, which is 4.</p>

								<ul>
									<li>Summary Multiply the number of moles you are given to start with by the number that follows the chemical symbol for the element you are told to find in the compound</li>
									<li class="emphasize">formula</li>
								</ul>


							</div> 
								
						</div>


						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="moles-to-grams">Common Problem: Convert from Moles to Grams of a Single Element</h2>
								</div>

								
								<div class="common-problem">
									<p>It is fairly common to be given moles of an element and be asked to find out how many grams there are of that element based on the moles. For example...</p>
									<p class="question">How many grams of are in 2.15 moles of copper?</p>
								</div>

								<div class="big-section-heading">
									<h2 id="">Explanation</h2>
								</div>

								<p>To solve problems of this type, you will need to get the molar mass of the element you were given moles for and multiply the moles and molar mass together. The molar mass for any element can be found in the table at the end of this page or in your chemistry textbook if you have one.</p>

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2>Calculation</h2>
									</div>

									<div class="border-intro">
										<div class="button-formatter">
											<button onclick="molesToGrams()">Begin Your Problem</button>
										</div>
										<p id="moles-to-grams-equation"></p>
										<p id="moles-to-grams-step1"></p>
										<p id="moles-to-grams-step2"></p>

										<div class="button-formatter">
											<button id="clearMolesToGrams" onclick="clearMolesAndPercentComposition()">Erase Work</button>
										</div>
									</div>
								</div>

							</div>

						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="moles-to-grams">Common Problem: Convert from Grams to Moles of a Compound</h2>
								</div>

								
								<div class="common-problem">
									<p>It is fairly common to be given moles of an element and be asked to find out how many moles there are of a compound based on a weight, usually in grams. For example...</p>
									<p class="question">How many moles are in 2.5 grams of butane?</p>
								</div>

								<div class="big-section-heading">
									<h2 id="">Explanation</h2>
								</div>

								<p>To solve problems of this type, you will need to </p>

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2>Calculation</h2>
									</div>

									<div class="border-intro">
										<div class="button-formatter">
											<button onclick="gramsToMolesCompound()">Begin Your Problem</button>
										</div>
										<p id="grams-to-moles-compound-equation"></p>
										<p id="grams-to-moles-compound-step1"></p>
										<p id="grams-to-moles-compound-step2"></p>
										<p id="grams-to-moles-compound-step3"></p>

										<div class="button-formatter">
											<button id="clear-grams-to-moles-compound" onclick="clearMolesAndPercentComposition()">Erase Work</button>
										</div>
									</div>
								</div>

							</div>

						</div>

						<br>

						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="moles-to-grams">Compound Molar Mass Calculator</h2>
								</div>

								
								<div class="common-problem">
									<p>It is fairly common to be given moles of an element and be asked to find out how many moles there are of a compound based on a weight, usually in grams. For example...</p>
									<p class="question">How many moles are in 2.5 grams of butane?</p>
								</div>

								<div class="big-section-heading">
									<h2 id="">Explanation</h2>
								</div>

								<p>To solve problems of this type, you will need to </p>

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2>Calculation</h2>
									</div>

									<div class="border-intro">
										<div class="button-formatter">
											<button onclick="gramsToMolesCompound()">Begin Your Problem</button>
										</div>
										<p id="grams-to-moles-compound-equation"></p>
										<p id="grams-to-moles-compound-step1"></p>
										<p id="grams-to-moles-compound-step2"></p>
										<p id="grams-to-moles-compound-step3"></p>

										<div class="button-formatter">
											<button id="clear-grams-to-moles-compound" onclick="clearMolesAndPercentComposition()">Erase Work</button>
										</div>
									</div>
								</div>

							</div>

						</div>

						<br>


						<div class="body-content">
							<div class="functionality">
								<div class="section-heading">
									<h2 id="">Tables</h2>
								</div>

								<div class="conversionTypeList">
									<div class="big-section-heading">
										<h2 id="elements-and-their-molar-masses">Elements and their Molar Masses</h2>
									</div>
									<p></p>
									<div class="table-content">
										<br>
										<table border="1" class="chem-table">
											<tr>
												<th>Element Name</th>
												<th>Chemical Symbol</th>
												<th>Molar Mass</th>
											</tr>

											<tr>
												<td>Actinium</td>
												<td>Ac</td>
												<td>227.03</td>
											</tr>

											<tr>
												<td>Aluminum</td>
												<td>Al</td>
												<td>26.981538</td>
											</tr>

											<tr>
												<td>Americium</td>
												<td>Am</td>
												<td>243.06</td>
											</tr>

											<tr>
												<td>Antimony</td>
												<td>Sb</td>
												<td>121.760</td>
											</tr>

											<tr>
												<td>Argon</td>
												<td>Ar</td>
												<td>39.948</td>
											</tr>

											<tr>
												<td>Arsenic</td>
												<td>As</td>
												<td>74.92160</td>
											</tr>

											<tr>
												<td>Astatine</td>
												<td>At</td>
												<td>209.99</td>
											</tr>

											<tr>
												<td>Barium</td>
												<td>Ba</td>
												<td>137.327</td>
											</tr>

											<tr>
												<td>Berkellium</td>
												<td>Bk</td>
												<td>247.07</td>
											</tr>

											<tr>
												<td>Beryllium</td>
												<td>Be</td>
												<td>9.012183</td>
											</tr>

											<tr>
												<td>Bismuth</td>
												<td>Bi</td>
												<td>208.98038</td>
											</tr>

											<tr>
												<td>Bohrium</td>
												<td>Bh</td>
												<td>270.1</td>
											</tr>

											<tr>
												<td>Boron</td>
												<td>B</td>
												<td>10.81</td>
											</tr>

											<tr>
												<td>Bromine</td>
												<td>Br</td>
												<td>79.904</td>
											</tr>

											<tr>
												<td>Cadmium</td>
												<td>Cd</td>
												<td>112.414</td>
											</tr>

											<tr>
												<td>Calcium</td>
												<td>Ca</td>
												<td>40.078</td>
											</tr>

											<tr>
												<td>Californium</td>
												<td>Cf</td>
												<td>251.08</td>
											</tr>

											<tr>
												<td>Carbon</td>
												<td>C</td>
												<td>12.0107</td>
											</tr>

											<tr>
												<td>Cerium</td>
												<td>Ce</td>
												<td>140.116</td>
											</tr>

											<tr>
												<td>Cesium</td>
												<td>Cs</td>
												<td>132.905452</td>
											</tr>

											<tr>
												<td>Chlorine</td>
												<td>Cl</td>
												<td>35.453</td>
											</tr>

											<tr>
												<td>Chromium</td>
												<td>Cr</td>
												<td>51.9961</td>
											</tr>

											<tr>
												<td>Cobalt</td>
												<td>Co</td>
												<td>58.933194</td>
											</tr>

											<tr>
												<td>Copernicium</td>
												<td>Cn</td>
												<td>285.2</td>
											</tr>

											<tr>
												<td>Copper</td>
												<td>Cu</td>
												<td>63.546</td>
											</tr>

											<tr>
												<td>Curium</td>
												<td>Cm</td>
												<td>247.07</td>
											</tr>

											<tr>
												<td>Darmstadtium</td>
												<td>Ds</td>
												<td>281.2</td>
											</tr>

											<tr>
												<td>Dubnium</td>
												<td>Db</td>
												<td>268.1</td>
											</tr>

											<tr>
												<td>Dysprosium</td>
												<td>Dy</td>
												<td>162.50</td>
											</tr>

											<tr>
												<td>Einsteinium</td>
												<td>Es</td>
												<td>252.08</td>
											</tr>

											<tr>
												<td>Erbium</td>
												<td>Er</td>
												<td>167.259</td>
											</tr>

											<tr>
												<td>Europium</td>
												<td>Eu</td>
												<td>151.964</td>
											</tr>

											<tr>
												<td>Fermium</td>
												<td>Fm</td>
												<td>257.10</td>
											</tr>

											<tr>
												<td>Flerovium</td>
												<td>Fl</td>
												<td>289.2</td>
											</tr>

											<tr>
												<td>Fluorine</td>
												<td>F</td>
												<td>18.9984016</td>
											</tr>

											<tr>
												<td>Francium</td>
												<td>Fr</td>
												<td>223.02</td>
											</tr>

											<tr>
												<td>Gadolinium</td>
												<td>Gd</td>
												<td>157.25</td>
											</tr>

											<tr>
												<td>Gallium</td>
												<td>Ga</td>
												<td>69.723</td>
											</tr>

											<tr>
												<td>Germanium</td>
												<td>Ge</td>
												<td>72.67</td>
											</tr>

											<tr>
												<td>Gold</td>
												<td>Au</td>
												<td>196.966569</td>
											</tr>

											<tr>
												<td>Hafnium</td>
												<td>Hf</td>
												<td>178.49</td>
											</tr>

											<tr>
												<td>Hassium</td>
												<td>Hs</td>
												<td>269.1</td>
											</tr>

											<tr>
												<td>Helium</td>
												<td>He</td>
												<td>4.002602</td>
											</tr>

											<tr>
												<td>Holmium</td>
												<td>Ho</td>
												<td>164.93033</td>
											</tr>

											<tr>
												<td>Hydrogen</td>
												<td>H</td>
												<td>1.00794</td>
											</tr>

											<tr>
												<td>Indium</td>
												<td>In</td>
												<td>114.818</td>
											</tr>

											<tr>
												<td>Iodine</td>
												<td>I</td>
												<td>126.90447</td>
											</tr>

											<tr>
												<td>Iridium</td>
												<td>Ir</td>
												<td>192.217</td>
											</tr>

											<tr>
												<td>Iron</td>
												<td>Fe</td>
												<td>55.845</td>
											</tr>

											<tr>
												<td>Krypton</td>
												<td>Kr</td>
												<td>83.80</td>
											</tr>

											<tr>
												<td>Lanthanum</td>
												<td>La</td>
												<td>138.9055</td>
											</tr>

											<tr>
												<td>Lawrencium</td>
												<td>Lr</td>
												<td>262.11</td>
											</tr>

											<tr>
												<td>Lead</td>
												<td>Pb</td>
												<td>207.2</td>
											</tr>

											<tr>
												<td>Lithium</td>
												<td>Li</td>
												<td>6.941</td>
											</tr>

											<tr>
												<td>Livermorium</td>
												<td>Lv</td>
												<td>293</td>
											</tr>

											<tr>
												<td>Lutetium</td>
												<td>Lu</td>
												<td>174.967</td>
											</tr>

											<tr>
												<td>Magnesium</td>
												<td>Mg</td>
												<td>24.3050</td>
											</tr>

											<tr>
												<td>Manganese</td>
												<td>Mn</td>
												<td>54.938044</td>
											</tr>

											<tr>
												<td>Meitnerium</td>
												<td>Mt</td>
												<td>278.2</td>
											</tr>

											<tr>
												<td>Mendelevium</td>
												<td>Md</td>
												<td>258.10</td>
											</tr>

											<tr>
												<td>Mercury</td>
												<td>Hg</td>
												<td>200.59</td>
											</tr>

											<tr>
												<td>Molybdenum</td>
												<td>Mo</td>
												<td>95.95</td>
											</tr>

											<tr>
												<td>Moscovium</td>
												<td>Mc</td>
												<td>289.2</td>
											</tr>

											<tr>
												<td>Neodymium</td>
												<td>Nd</td>
												<td>144.24</td>
											</tr>

											<tr>
												<td>Neon</td>
												<td>Ne</td>
												<td>20.1797</td>
											</tr>

											<tr>
												<td>Neptunium</td>
												<td>Np</td>
												<td>237.05</td>
											</tr>

											<tr>
												<td>Nickel</td>
												<td>Ni</td>
												<td>58.6934</td>
											</tr>

											<tr>
												<td>Nihonium</td>
												<td>Nh</td>
												<td>286.2</td>
											</tr>

											<tr>
												<td>Niobium</td>
												<td>Nb</td>
												<td>92.90637</td>
											</tr>

											<tr>
												<td>Nitrogen</td>
												<td>N</td>
												<td>14.0067</td>
											</tr>

											<tr>
												<td>Nobellium</td>
												<td>No</td>
												<td>259.10</td>
											</tr>

											<tr>
												<td>Oganesson</td>
												<td>Og</td>
												<td>294.2</td>
											</tr>

											<tr>
												<td>Osmium</td>
												<td>Os</td>
												<td>190.23</td>
											</tr>

											<tr>
												<td>Oxygen</td>
												<td>O</td>
												<td>15.9994</td>
											</tr>

											<tr>
												<td>Palladium</td>
												<td>Pd</td>
												<td>106.42</td>
											</tr>

											<tr>
												<td>Phosphorus</td>
												<td>P</td>
												<td>30.973762</td>
											</tr>

											<tr>
												<td>Platinum</td>
												<td>Pt</td>
												<td>195.078</td>
											</tr>

											<tr>
												<td>Plutonium</td>
												<td>Pu</td>
												<td>244.06</td>
											</tr>

											<tr>
												<td>Polonium</td>
												<td>Po</td>
												<td>208.98</td>
											</tr>

											<tr>
												<td>Potassium</td>
												<td>K</td>
												<td>39.0983</td>
											</tr>

											<tr>
												<td>Praseodymium</td>
												<td>Pr</td>
												<td>140.90766</td>
											</tr>

											<tr>
												<td>Promethium</td>
												<td>Pm</td>
												<td>145</td>
											</tr>

											<tr>
												<td>Protactinium</td>
												<td>Pa</td>
												<td>231.03588</td>
											</tr>

											<tr>
												<td>Radium</td>
												<td>Ra</td>
												<td>226.03</td>
											</tr>

											<tr>
												<td>Radon</td>
												<td>Rn</td>
												<td>222.02</td>
											</tr>

											<tr>
												<td>Rhenium</td>
												<td>Re</td>
												<td>186.207</td>
											</tr>

											<tr>
												<td>Rhodium</td>
												<td>Rh</td>
												<td>102.90550</td>
											</tr>

											<tr>
												<td>Roentgenium</td>
												<td>Rg</td>
												<td>282.2</td>
											</tr>

											<tr>
												<td>Rubidium</td>
												<td>Rb</td>
												<td>85.4678</td>
											</tr>

											<tr>
												<td>Ruthenium</td>
												<td>Ru</td>
												<td>101.07</td>
											</tr>

											<tr>
												<td>Rutherfordium</td>
												<td>Rf</td>
												<td>267.1</td>
											</tr>

											<tr>
												<td>Samarium</td>
												<td>Sm</td>
												<td>150.36</td>
											</tr>

											<tr>
												<td>Scandium</td>
												<td>Sc</td>
												<td>44.955908</td>
											</tr>

											<tr>
												<td>Seaborgium</td>
												<td>Sg</td>
												<td>269.1</td>
											</tr>

											<tr>
												<td>Selenium</td>
												<td>Se</td>
												<td>78.97</td>
											</tr>

											<tr>
												<td>Silicon</td>
												<td>Si</td>
												<td>28.0855</td>
											</tr>

											<tr>
												<td>Silver</td>
												<td>Ag</td>
												<td>107.8682</td>
											</tr>

											<tr>
												<td>Sodium</td>
												<td>Na</td>
												<td>22.989770</td>
											</tr>

											<tr>
												<td>Strontium</td>
												<td>St</td>
												<td>87.62</td>
											</tr>

											<tr>
												<td>Sulfur</td>
												<td>S</td>
												<td>32.065</td>
											</tr>

											<tr>
												<td>Tantalum</td>
												<td>Ta</td>
												<td>180.9479</td>
											</tr>

											<tr>
												<td>Technetium</td>
												<td>Tc</td>
												<td>98</td>
											</tr>

											<tr>
												<td>Tellurium</td>
												<td>Te</td>
												<td>127.60</td>
											</tr>

											<tr>
												<td>Tennessine</td>
												<td>Ts</td>
												<td>293.2</td>
											</tr>

											<tr>
												<td>Terbium</td>
												<td>Tb</td>
												<td>158.92534</td>
											</tr>

											<tr>
												<td>Thallium</td>
												<td>Tl</td>
												<td>204.3833</td>
											</tr>

											<tr>
												<td>Thorium</td>
												<td>Th</td>
												<td>232.0377</td>
											</tr>

											<tr>
												<td>Thulium</td>
												<td>Tm</td>
												<td>168.93422</td>
											</tr>

											<tr>
												<td>Tin</td>
												<td>Sn</td>
												<td>118.710</td>
											</tr>

											<tr>
												<td>Titanium</td>
												<td>Ti</td>
												<td>47.867</td>
											</tr>

											<tr>
												<td>Tungsten</td>
												<td>W</td>
												<td>183.84</td>
											</tr>

											<tr>
												<td>Uranium</td>
												<td>U</td>
												<td>238.02891</td>
											</tr>

											<tr>
												<td>Vanadium</td>
												<td>V</td>
												<td>50.9415</td>
											</tr>

											<tr>
												<td>Xenon</td>
												<td>Xe</td>
												<td>131.293</td>
											</tr>

											<tr>
												<td>Ytterbium</td>
												<td>Yb</td>
												<td>173.04</td>
											</tr>

											<tr>
												<td>Yttrium</td>
												<td>Y</td>
												<td>88.90584</td>
											</tr>

											<tr>
												<td>Zinc</td>
												<td>Zn</td>
												<td>65.39</td>
											</tr>

											<tr>
												<td>Zirconium</td>
												<td>Zr</td>
												<td>91.224</td>
											</tr>

										</table>
									</div>
								</div>	
							</div>
						</div>

					</div>
					<a href="https://computer-programming-shirts.creator-spring.com" class="banner-anchor" target="_blank"><img class="figure" src="banner2.jpg"></a>
				</div>
			</div>
		</main>
	</body>
</html>