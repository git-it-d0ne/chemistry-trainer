/* Adding or Subtracting Nav Bars */
const toggleButton = document.getElementsByClassName('toggle-button')[0];
const navbarLinks = document.getElementsByClassName('navbar-links')[0];
const navbarLinks2 = document.getElementsByClassName('navbar-links')[1];
const navbarLinks3 = document.getElementsByClassName('navbar-links')[2];
//const navbarLinks4 = document.getElementsByClassName('navbar-links')[3];
const organicNavbarLinks = document.getElementsByClassName('organic-navbar-links')[0];


toggleButton.addEventListener('click', () => {
	navbarLinks.classList.toggle('active');
	navbarLinks2.classList.toggle('active');
	navbarLinks3.classList.toggle('active');
	organicNavbarLinks.classList.toggle('active');
	//navbarLinks4.classList.toggle('active');
})



/* Functions for Converting Between Masses */
function massConverter() {
	startingUnit = prompt("What unit are you starting with? (Type a number...)\n1 = grams | 2 = kilograms | 3 = pounds\n");
	endingUnit = prompt("What unit are you converting to? (Type a number...)\n1 = grams | 2 = kilograms 3 = pounds\n")

	if (startingUnit == '2' && endingUnit == '1') {
		kilogramsToGrams();
	}

	if (startingUnit == '3' && endingUnit == '1') {
		poundsToGrams();
	} 
}


function kilogramsToGrams() {
	const kilograms = prompt("How many kilograms do you have? ");
	const grams = 1000 * parseFloat(kilograms);
	document.getElementById("kToG").innerHTML = "Formula: grams = kilograms * 1000";
	document.getElementById("kToGStep1").innerHTML = "Grams = 1000 * " + kilograms.toString();
	document.getElementById("kToGStep2").innerHTML = "Grams =  " + grams.toString();
	document.getElementById("clearMass").style.display = "inline-block";
}

function poundsToGrams() {
	const pounds = prompt("How many pounds do you have? ");
	const grams = 453.592 * parseFloat(pounds);
	document.getElementById("lbToG").innerHTML = "Formula: grams = pounds * 453.592";
	document.getElementById("lbToGStep1").innerHTML = "Grams = 453.592 * " + pounds.toString();
	document.getElementById("lbToGStep2").innerHTML = "Grams =  " + grams.toString();
	document.getElementById("clearMass").style.display = "inline-block";
}

/* Temperature stuff */
function temperatureConverter() {
	const startingUnit = prompt("What unit are you starting with? (Type a number...)\n1 = Celsius | 2 = Fahrenheit | 3 = Kelvin\n");
	const endingUnit = prompt("What unit are you converting to? (Type a number...)\n1 = Celsius | 2 = Fahrenheit 3 = Kelvin\n")

	if (startingUnit == '1' && endingUnit == '2') {
		celsiusToF();
	} 

	if (startingUnit == '1' && endingUnit == '3') {
		celsiusToK();
	} 		

	if (startingUnit == '2' && endingUnit == '1') {
		fahrenheitToC();
	}

	if (startingUnit == '2' && endingUnit == '3') {
		fahrenheitToK();
	}  
}

function celsiusToF() {
	const celsius = prompt("What are the degrees Celsius?");
	document.getElementById("cToFEquation").innerHTML = "Formula: F = 1.8(Degrees Celsius) + 32";
	document.getElementById("cToFstep1").innerHTML = "Step 1: F = 1.8(" + celsius.toString() + ") + 32";
	const newValue = 1.8 * parseFloat(celsius);
	document.getElementById("cToFstep2").innerHTML = "Step 2: F = " + newValue.toString() + " + 32";
	const finalValue = newValue + 32;
	document.getElementById("cToFstep3").innerHTML ="F = " + finalValue.toString();
	document.getElementById("clearTemperature").style.display = "inline-block";
}

function fahrenheitToC() {
	const fahrenheit = prompt("What are the degrees Fahrenheit?")
	const difference = parseFloat(fahrenheit) - 32
	document.getElementById("fToCEquation").innerHTML = "Formula: Celsius = (Degrees Fahrenheit - 32) / 1.8";
	document.getElementById("fToCstep1").innerHTML = "Step 1: Celsius = ("  + fahrenheit + " - 32) / 1.8";
	document.getElementById("fToCstep2").innerHTML = "Step 2: Celsius = " + difference.toString() + " / 1.8";
	window.nextStep = difference / 1.8;
	document.getElementById("fToCstep3").innerHTML = "Celsius = " + nextStep.toString();
	document.getElementById("clearTemperature").style.display = "inline-block";
}

function fahrenheitToK() {
	//fahrenheitToC();
	const fahrenheit = prompt("What are the degrees Fahrenheit?")
	const difference = parseFloat(fahrenheit) - 32
	document.getElementById("fToCEquationKelvin").innerHTML = "<strong>Convert Fahrenheit to Celsius</strong><br>Formula: Celsius = (Degrees Fahrenheit - 32) / 1.8";
	document.getElementById("fToCstep1Kelvin").innerHTML = "Step 1: Celsius = ("  + fahrenheit + " - 32) / 1.8";
	document.getElementById("fToCstep2Kelvin").innerHTML = "Step 2: Celsius = " + difference.toString() + " / 1.8";
	window.nextStep = difference / 1.8;
	document.getElementById("fToCstep3Kelvin").innerHTML = "Celsius = " + nextStep.toString();
	//document.getElementById("clear2").style.display = "inline-block";
	const kelvin = nextStep + 273.15;
	document.getElementById("fToKEquation").innerHTML = "<strong>Convert Celsius to Kelvin</strong><br>Formula: Kelvin = Celsius + 273.15";
	document.getElementById("fToKstep1").innerHTML = "Step 4: Kelvin = " + nextStep.toString() + " + 273.15";
	document.getElementById("fToKstep2").innerHTML = "Kelvin = " + kelvin.toString();
	document.getElementById("clearTemperature").style.display = "inline-block";
}

function celsiusToK() {
	const celsius = prompt("What are the degrees Celsius?");	
	const kelvin = parseFloat(celsius) + 273.15;
	document.getElementById("cToKEquation").innerHTML = "Formula: Kelvin = Celsius + 273.15";
	document.getElementById("cToKstep1").innerHTML = "Step 1: Kelvin = " + celsius + " + 273.15";
	document.getElementById("cToKstep2").innerHTML = "Kelvin = " + kelvin.toString();
	document.getElementById("clearTemperature").style.display = "inline-block";

}


function howMuchHeat1() {
	const massOfSubstance = prompt("What is the mass of the substance in grams?");
	const initialTemperature = prompt("What is the starting temperature in Celsius?");
	const finalTemperature = prompt("What is the ending temperature in Celsius?");
	const specificHeat = prompt("What is the specific heat of the substance?");
	let changeInTemperature = finalTemperature - initialTemperature;
	changeInTemperature = Math.abs(changeInTemperature);
	const substanceCapacityProduct = massOfSubstance * specificHeat;
	let finalProduct = substanceCapacityProduct * changeInTemperature;
	finalProduct = finalProduct.toFixed(3);
	document.getElementById("change-in-temp").innerHTML = "<strong>Calculate the amount the temperature changed by...</strong>";
	document.getElementById("change-in-temp-step1").innerHTML = "Change in temperature = absolute value of (original temperature - final temperature)"
	document.getElementById("change-in-temp-step2").innerHTML = "Original Temperature = " + initialTemperature.toString() + "<br>Final Temperature =  " + finalTemperature.toString();
	document.getElementById("change-in-temp-step3").innerHTML = "Change in Temperature = |" + initialTemperature.toString() + " - " + finalTemperature.toString() + "|";
	document.getElementById("change-in-temp-step4").innerHTML = "Change in Temperature = " + changeInTemperature.toString();
	document.getElementById("how-much-heat-prompt").innerHTML = "<strong>Calculate how much heat is needed...</strong>";
	document.getElementById("how-much-heat-one-equation").innerHTML = "Formula: Heat Needed = mass of substance * heat capacity * &#916;T";
	document.getElementById("how-much-heat-one-step1").innerHTML = "Heat Needed = " + massOfSubstance.toString()  + " * " + specificHeat.toString() + " * "  + changeInTemperature.toString();
	document.getElementById("how-much-heat-one-step2").innerHTML = "Heat Needed = " + substanceCapacityProduct + " * " + changeInTemperature;
	document.getElementById("how-much-heat-one-step3").innerHTML = "Heat Needed = " + finalProduct + " Joules";
	document.getElementById("clear3").style.display = "inline-block";
}


/* Counting Decimal Places */
function countDecimals() {

}

// Density and Specific Gravity Content 
function density() {
	const mass = prompt("What is the mass of the substance in grams?");
	const volume = prompt("What is the volume of the substance in mililiters?");
	const  density = mass/volume;
	document.getElementById("densityEquation").innerHTML = "Density Formula: Mass of Substance/Volume of Substance";
	document.getElementById("densityStep1").innerHTML = "Step 1: Density = " + mass.toString() + " / " + volume.toString();
	document.getElementById("densityStep2").innerHTML = "Step 2: Density = " + density.toString();
	document.getElementById("clearDensity").style.display = "inline-block";
}

function specificGravity() {
	const sampleDensity = parseFloat(prompt("What is the density of the sample?\n"));
	const waterDensity = parseFloat(prompt("What is the density of the water?\n"));
	const specificGravity = sampleDensity/waterDensity;
	document.getElementById("specificGravityEquation").innerHTML = "Specific Gravity Formula: Sample Density/Water Density";
	document.getElementById("specificGravityStep1").innerHTML = "Step 1: Specific Gravity = " + sampleDensity.toString() + " / " + waterDensity.toString();
	document.getElementById("specificGravityStep2").innerHTML = "Step 2: Specific Gravity = " + sampleDensity.toString() / waterDensity.toString();
	document.getElementById("clearSpecificGravity").style.display = "inline-block";

}

// Moles and Percent Composition Content
function molesToParticles() {
	const avogadro = 6.022E23;
	const moles = parseFloat(prompt("How many moles of the element do you have?\n"));
	const particles = moles * avogadro;
	const stringParticles = particles.toString();
	// Try the split method for an actual superscript
	const splitParticles = stringParticles.split("e+")[1];
	const leftSplit = stringParticles.split("e")[0];
	document.getElementById("moles-to-particles-equation").innerHTML = 'Particles = Moles of element * 6.022 * 10<sup>23</sup>';
	document.getElementById("moles-to-particles-step1").innerHTML = moles.toString() + ' mol * (6.022 * 10<sup>23</sup>)';
	document.getElementById("moles-to-particles-step2").innerHTML = leftSplit + " * 10<sup>" + splitParticles + "</sup>";
	document.getElementById("clearMolesToParticles").style.display = "inline-block";
	document.getElementById("moles-to-particles-notice").innerHTML = "NOTE: Your calculator might show the answer like this: " + particles.toString();
}

function particlesToMoles() {
	const avogadro = 6.022E23;
	const particles = parseFloat(prompt("How many particles do you have?\nNOTE: Use a capital E in place of * 10 | Example: 2.034E12 = 2.034 * 10^24\n"));
	const moles = particles / avogadro;
	document.getElementById("particles-to-moles-equation").innerHTML = 'Moles = particles of element / 6.022 * 10<sup>23</sup>';
	document.getElementById("particles-to-moles-step1").innerHTML = particles.toString() + ' particles / 6.022 * 10<sup>23</sup>';
	document.getElementById("particles-to-moles-step2").innerHTML = moles.toString();
	document.getElementById("clearParticlesToMoles").style.display = "inline-block";	
}

function molesToGrams() {
	const initialMoles = parseFloat(prompt("How many moles are you starting with?\n"));
	const molarMass = parseFloat(prompt("What is the molar mass of the element?\n"));
	const finalValue = initialMoles * molarMass;
	document.getElementById("moles-to-grams-equation").innerHTML = 'Grams of Element = Initial Moles * Molar Mass of Element';
	document.getElementById("moles-to-grams-step1").innerHTML = initialMoles.toString() + ' mols * ' + molarMass.toString() + ' g/mol';
	document.getElementById("moles-to-grams-step2").innerHTML = finalValue.toString() + ' grams';
	document.getElementById("clearMolesToGrams").style.display = "inline-block";	

}

function gramsToMolesCompound() {
	const initialGrams = parseFloat(prompt("How many grams of the compound are you starting with?\n"));
	const uniqueElements = parseFloat(prompt("How many different elements are in the compound?\nNOTE: Do not count the same element more than once\n"));

	if (uniqueElements == '2') {
		var firstElementOccurences = parseFloat(prompt("What is the number you get when you add all the subscripts of the first element together?\nNOTE: If a number does not follow the element, assume the number is 1\n"));
		var secondElementOccurences = parseFloat(prompt("What is the number you get when you add all the subscripts of the second element together?\nNOTE: If a number does not follow the element, assume the number is 1\n"));
		
		var firstElementMolarMass = parseFloat(prompt("What is the molar mass of the first element?\nNOTE: Every element's molar mass is in the table at the end of this page\n"));
		var secondElementMolarMass = parseFloat(prompt("What is the molar mass of the second element?\nNOTE: Every element's molar mass is in the table at the end of this page\n"));

		var firstElementFinalValue = firstElementOccurences * firstElementMolarMass;
		var secondElementFinalValue = secondElementOccurences * secondElementMolarMass;

		var finalValue = firstElementFinalValue + secondElementFinalValue; 

	}
	console.log(firstElementOccurences);

	document.getElementById("grams-to-moles-compound-equation").innerHTML = 'Moles of Compound = Initial Grams of Compound * Molar Mass of Element';
	document.getElementById("grams-to-moles-compound-step1").innerHTML = '<strong>Step 1: Find the Molar Mass of Each Element in the Compound</strong>';
	document.getElementById("grams-to-moles-compound-step2").innerHTML = firstElementOccurences.toString() + ' occurences of element 1<br>' + 'Molar mass of element 1: ' 
	+ firstElementMolarMass.toString() + '<br>' + firstElementOccurences.toString() + ' * ' + firstElementMolarMass.toString() 
	+ '<br>Final value element 1: ' + firstElementFinalValue.toString() + ' grams';
	document.getElementById("grams-to-moles-compound-step3").innerHTML = secondElementOccurences.toString() + ' occurences of element 2<br>' + 'Molar mass of element 2: ' 
	+ secondElementMolarMass.toString() + '<br>' + secondElementOccurences.toString(); + ' * ' + secondElementMolarMass.toString() 
	+ '<br>Final value element 2: ' + secondElementFinalValue.toString() + 'grams';
	document.getElementById("clear-grams-to-moles-compound").style.display = "inline-block";	

}

// Gas Unit Conversion Content
function gasUnitConverter() {
	const startingUnit = prompt("What unit are you starting with? (Type a number...)\n1 = atm | 2 = in Hg | 3 = kPa | 4 = mm Hg | 5 = Pa \n 6 = lb/in^2 or psi | 7 = Torr\n");
	const endingUnit = prompt("What unit are you converting to? (Type a number...)\n1 = atm | 2 = in Hg | 3 = kPa | 4 = mm Hg | 5 = Pa \n 6 = lb/in^2 or psi | 7 = Torr\n")

	if (startingUnit == '1' && endingUnit == '2') {
		atmToInHg();
	} 

	if (startingUnit == '1' && endingUnit == '3') {
		atmToKPa();
	} 		

	if (startingUnit == '1' && endingUnit == '4') {
		atmToMmHg();
	}

	if (startingUnit == '1' && endingUnit == '5') {
		atmToPa();
	}

	if (startingUnit == '1' && endingUnit == '6') {
		atmToPsi();
	}

	if (startingUnit == '1' && endingUnit == '7') {
		atmToTorr();
	}

	if (startingUnit == '2' && endingUnit == '1') {
		inHgToAtm();
	} 

	if (startingUnit == '2' && endingUnit == '3') {
		inHgToKPa();
	} 		

	if (startingUnit == '2' && endingUnit == '4') {
		inHgToMmHg();
	}

	if (startingUnit == '2' && endingUnit == '5') {
		inHgToPa();
	}

	if (startingUnit == '2' && endingUnit == '6') {
		inHgToPsi();
	}

	if (startingUnit == '2' && endingUnit == '7') {
		inHgToTorr();
	}  
}

// Initial Unit Atmospheres
function atmToInHg() {
	const initialUnits = parseFloat(prompt("How many atmospheres are you starting with?\n"));
	const inchesOfMercury = initialUnits * 29.9;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">Inches of mercury = atmospheres * 29.9 ';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' atm * 29.9';
	document.getElementById("gas-conversion-step2").innerHTML = inchesOfMercury.toString() + " in Hg";
}

function atmToKPa() {
	const initialUnits = parseFloat(prompt("How many atmospheres are you starting with?\n"));
	const kiloPascals = initialUnits * 101.352;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">KiloPascals = atmospheres * 101.352 ';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' atm * 101.352';
	document.getElementById("gas-conversion-step2").innerHTML = kiloPascals.toString() + " kPa";
}

function atmToMmHg() {
	const initialUnits = parseFloat(prompt("How many atmospheres are you starting with?\n"));
	const mmHg = initialUnits * 760;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">KiloPascals = atmospheres * 101.352 ';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' atm * 760';
	document.getElementById("gas-conversion-step2").innerHTML = mmHg.toString() + " mm Hg";
}

function atmToPa() {
	const initialUnits = parseFloat(prompt("How many atmospheres are you starting with?\n"));
	const pascals = initialUnits * 101325;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">KiloPascals = atmospheres * 101.352';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' atm * 101,325';
	document.getElementById("gas-conversion-step2").innerHTML = pascals.toString() + " Pa";
}

function atmToPsi() {
	const initialUnits = parseFloat(prompt("How many atmospheres are you starting with?\n"));
	const psi = initialUnits * 14.7;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">Psi = atmospheres * 14.7';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' atm * 14.7';
	document.getElementById("gas-conversion-step2").innerHTML = psi.toString() + " Psi";
}

function atmToTorr() {
	const initialUnits = parseFloat(prompt("How many atmospheres are you starting with?\n"));
	const torr = initialUnits * 760;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">Torr = atmospheres * 760';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' atm * 760';
	document.getElementById("gas-conversion-step2").innerHTML = torr.toString() + " Torr";
}

// Initial Unit Inches of Mercury 
function inHgToAtm() {
	const initialUnits = parseFloat(prompt("How many inches of mercury are you starting with?\n"));
	const atmospheres = initialUnits / 760;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">Torr = atmospheres * 760';
	document.getElementById("gas-conversion-step1").innerHTML = initialUnits + ' in Hg / 760';
	document.getElementById("gas-conversion-step2").innerHTML = torr.toString() + " atm";
}

function inHgToKPa() {
	const initialUnits = parseFloat(prompt("How many inches of mercury are you starting with?\n"));
	const firstStep = initialUnits / 29.9;
	const kiloPascals = (initialUnits / 29.9) * 101.325;
	document.getElementById("gas-conversion-equation").innerHTML = '<span class="emphasize">KiloPascals = (in Hg / 29.9) * 101.325 ';
	document.getElementById("gas-conversion-step1").innerHTML = '(' + initialUnits + ' in Hg / 29.9) * 101.325';
	document.getElementById("gas-conversion-step2").innerHTML = firstStep.toString() + " * 101.325";
	document.getElementById("gas-conversion-step3").innerHTML = kiloPascals.toString() + " kPa";
}

// Boyle's Law Common Question Type
function boylesLawVolumeFromPressureChange() {
	const initialPressure = parseFloat(prompt("What is the intial pressure?\n"));
	const initialVolume = parseFloat(prompt("What was the initial volume in liters?\n"));
	const initialProduct = initialPressure * initialVolume;
	const secondPressure = parseFloat(prompt("What is the second pressure?\n"));
	const secondVolume = (initialPressure * initialVolume) / secondPressure;
	document.getElementById("volume-from-pressure-change-step1").innerHTML = 'V2 = ' + initialPressure.toString() + ' * ' + initialVolume.toString() + ' / ' + secondPressure.toString();
	document.getElementById("volume-from-pressure-change-step2").innerHTML = 'V2 = ' + initialProduct.toString() + ' / ' + secondPressure.toString();
	document.getElementById("volume-from-pressure-change-step3").innerHTML = 'V2 = ' + secondVolume.toString() + ' L ';
}

function boylesLawPressureFromVolumeChange() {
	const initialPressure = parseFloat(prompt("What is the intial pressure?\n"));
	const initialVolume = parseFloat(prompt("What was the initial volume in liters?\n"));
	const initialProduct = initialPressure * initialVolume;
	const secondVolume = parseFloat(prompt("What is the second volume?\n"));
	const secondPressure = (initialPressure * initialVolume) / secondVolume;
	document.getElementById("pressure-from-volume-change-equation").innerHTML = '<span class="emphasize">Original Equation: P1V1 = P2V2<br>Revised Equation: P2 = P1V1 / V2 ';
	document.getElementById("pressure-from-volume-change-step1").innerHTML = 'Divide both sides by V2 to form equation: P2 = (' + initialPressure.toString() + ')(' + initialVolume.toString() +') / ' + secondVolume.toString();
	document.getElementById("pressure-from-volume-change-step2").innerHTML = 'P2 = ' + initialProduct.toString() + ' / ' + secondVolume.toString();
	document.getElementById("pressure-from-volume-change-step3").innerHTML = 'P2 = ' + secondPressure.toString();
}

// Charles' Law Common Question Types
function charlesLawTemperatureFromVolumeChange() {
	const initialTemperature = parseFloat(prompt("What is the intial temperature?\n"));
	const initialVolume = parseFloat(prompt("What is the initial volume?\n"));
	const secondVolume = parseFloat(prompt("What is the second volume?\n"));
	const initialProduct = initialTemperature * secondVolume;
	const secondTemperature = initialProduct / initialVolume;
	document.getElementById("temperature-from-volume-change-equation").innerHTML = '$$\frac{P_1V_1}{T_1} = \frac{P_2V_2}{T_2}$$'
	/*document.getElementById("temperature-from-volume-change-equation").innerHTML = '<span class="emphasize">Original Equation:</span> <sup>V1</sup> / <sub>T1</sub> = <sup>V2</sup> / <sub>T2</sub>';*/
	document.getElementById("temperature-from-volume-change-step1").innerHTML = '<span class="emphasize">Equation after cross multiplying:</span> T2 = <sup>T1V2</sup> / <sub>V1</sub>';
	document.getElementById("temperature-from-volume-change-step2").innerHTML = '<span class="emphasize">Revised equation with your values plugged in:</span> ' + initialTemperature.toString() + " * " + secondVolume.toString() + " / " + initialVolume.toString();
	document.getElementById("temperature-from-volume-change-step3").innerHTML = '<span class="emphasize">T2:</span> ' + secondTemperature.toString() + " Kelvin";
}

// Combined Gas Law Common Question Types
function combinedGasLawFindV2() {
	const initialTemperature = parseFloat(prompt("What is the intial temperature?\n"));
	const initialVolume = parseFloat(prompt("What is the initial volume?\n"));
	const initialPressure = parseFloat(prompt("What is the initial pressure?\n"));
	
	
	document.getElementById("combined-gas-law-find-v2-equation").innerHTML = '<span class="emphasize">Original Equation:</span> <sup>V1</sup> / <sub>T1</sub> = <sup>V2</sup> / <sub>T2</sub>';
	document.getElementById("combined-gas-law-find-v2-step1").innerHTML = '<span class="emphasize">Equation after cross multiplying:</span> T2 = <sup>T1V2</sup> / <sub>V1</sub>';
	document.getElementById("combined-gas-law-find-v2-step2").innerHTML = '<span class="emphasize">Revised equation with your values plugged in:</span> ' + initialTemperature.toString() + " * " + secondVolume.toString() + " / " + initialVolume.toString();
	document.getElementById("combined-gas-law-find-v2-step3").innerHTML = '<span class="emphasize">T2:</span> ' + secondTemperature.toString() + " Kelvin";
}

// Electron Wavelength Content
function wavelengthOfElectronAtXSpeed() {
	const electronMass = 9.11E-28;
	document.getElementById("electron-grams-to-kg-equation").innerHTML = 'Crunk Biscuit';
}  

// Clearing Out Program Output

// Clear Boyle's Law Output
function clearBoylesLaw() {
	document.getElementById("volume-from-pressure-change-equation").innerHTML = "";
	document.getElementById("volume-from-pressure-change-step1").innerHTML = "";
	document.getElementById("volume-from-pressure-change-step2").innerHTML = "";
	document.getElementById("volume-from-pressure-change-step3").innerHTML = "";
	document.getElementById("pressure-from-volume-change-equation").innerHTML = "";
	document.getElementById("pressure-from-volume-change-step1").innerHTML = "";
	document.getElementById("pressure-from-volume-change-step2").innerHTML = "";
	document.getElementById("pressure-from-volume-change-step3").innerHTML = "";
	document.getElementById("clear-boyles-law").style.display = "None";
}

// Clear Charles' Law Output
function clearCharlesLaw() {
	document.getElementById("temperature-from-volume-change-equation").innerHTML = "";
	document.getElementById("temperature-from-volume-change-step1").innerHTML = "";
	document.getElementById("temperature-from-volume-change-step2").innerHTML = "";
	document.getElementById("temperature-from-volume-change-step3").innerHTML = "";
}

// Clear Combined Gas Law 
function clearCombinedGasLaw() {
	document.getElementById("combined-gas-law-find-v2-equation").innerHTML = "";
	document.getElementById("combined-gas-law-find-v2-step1").innerHTML = "";
	document.getElementById("combined-gas-law-find-v2-step2").innerHTML = "";
	document.getElementById("combined-gas-law-find-v2-step3").innerHTML = "";
	document.getElementById("clear-combined-gas-law").style.display = "None";

}

// Clear Specific Gravity and Density
function clearSpecificGravityAndDensity() {
	document.getElementById("densityEquation").innerHTML = "";
	document.getElementById("densityStep1").innerHTML = "";
	document.getElementById("densityStep2").innerHTML = "";
	document.getElementById("specificGravityEquation").innerHTML = "";
	document.getElementById("specificGravityStep1").innerHTML = "";
	document.getElementById("specificGravityStep2").innerHTML = "";
	document.getElementById("clearDensity").style.display = "none";
	document.getElementById("clearSpecificGravity").style.display = "none";

}

// Clear Moles and Percent Composition
function clearMolesAndPercentComposition() {
	document.getElementById('moles-to-particles-equation'). innerHTML = '';
	document.getElementById('moles-to-particles-step1'). innerHTML = '';
	document.getElementById('moles-to-particles-step2'). innerHTML = '';
	document.getElementById('particles-to-moles-equation'). innerHTML = '';
	document.getElementById('particles-to-moles-step1'). innerHTML = '';
	document.getElementById('particles-to-moles-step2'). innerHTML = '';
	document.getElementById('moles-to-grams-equation'). innerHTML = '';
	document.getElementById('moles-to-grams-step1'). innerHTML = '';
	document.getElementById('moles-to-grams-step2'). innerHTML = '';
	document.getElementById("grams-to-moles-compound-equation").innerHTML = '';
	document.getElementById("grams-to-moles-compound-step1").innerHTML = '';
	document.getElementById("grams-to-moles-compound-equation").innerHTML = '';
	document.getElementById('clearMolesToParticles').style.display = "none";
	document.getElementById('clearParticlesToMoles').style.display = "none";
	document.getElementById('clearMolesToGrams').style.display = "none";
}

// Clear gas unit conversions
function clearGasUnitConversions() {
	document.getElementById('gas-conversion-equation').innerHTML = '';
	document.getElementById('gas-conversion-step1').innerHTML = '';
	document.getElementById('gas-conversion-step2').innerHTML = '';	
	document.getElementById('clear-gas').style.display = "none";
}

// Clear electron wavelength work
function clearElectronWavelengthWork() {
	document.getElementById('electron-grams-to-kg-equation').innerHTML = '';
}

// Clear all Work Make it a few more specific functions instead
function clearAll() {
	document.getElementById("cToFEquation").innerHTML = "";
	document.getElementById("cToFstep1").innerHTML = "";
	document.getElementById("cToFstep2").innerHTML = "";
	document.getElementById("cToFstep3").innerHTML = "";
	document.getElementById("fToCEquation").innerHTML = "";
	document.getElementById("fToCstep1").innerHTML = "";
	document.getElementById("fToCstep2").innerHTML = "";
	document.getElementById("fToCstep3").innerHTML = "";
	document.getElementById("fToCEquationKelvin").innerHTML = "";
	document.getElementById("fToCstep1Kelvin").innerHTML = "";
	document.getElementById("fToCstep2Kelvin").innerHTML = "";
	document.getElementById("fToCstep3Kelvin").innerHTML = "";
	document.getElementById("fToKEquation").innerHTML = "";
	document.getElementById("fToKstep1").innerHTML = "";
	document.getElementById("fToKstep2").innerHTML = "";
	document.getElementById("cToKEquation").innerHTML = "";
	document.getElementById("cToKstep1").innerHTML = "";
	document.getElementById("cToKstep2").innerHTML = "";
	document.getElementById("how-much-heat-one-equation").innerHTML = "";
	document.getElementById("change-in-temp").innerHTML = "";
	document.getElementById("change-in-temp-step1").innerHTML = "";
	document.getElementById("change-in-temp-step2").innerHTML = "";
	document.getElementById("change-in-temp-step3").innerHTML = "";
	document.getElementById("change-in-temp-step4").innerHTML = "";
	document.getElementById("how-much-heat-one-step1").innerHTML = "";
	document.getElementById("how-much-heat-one-step2").innerHTML = "";
	document.getElementById("how-much-heat-one-step3").innerHTML = "";
	document.getElementById("kToG").innerHTML = "";
	document.getElementById("kToGStep1").innerHTML = "";
	document.getElementById("kToGStep2").innerHTML = "";
	document.getElementById("lbToG").innerHTML = "";
	document.getElementById("lbToGStep1").innerHTML = "";
	document.getElementById("lbToGStep2").innerHTML = "";
	document.getElementById("clearTemperature").style.display = "none";
	document.getElementById("clearMass").style.display = "none";
	document.getElementById("clear3").style.display = "none";
}
