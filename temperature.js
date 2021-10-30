// Temperature stuff
function temperatureConverter() {
	startingUnit = prompt("What unit are you starting with? (Type a number...)\n1 = Celsius | 2 = Fahrenheit | 3 = Kelvin\n");
	endingUnit = prompt("What unit are you converting to? (Type a number...)\n1 = Celsius | 2 = Fahrenheit 3 = Kelvin\n")

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
	var celsius = prompt("What are the degrees Celsius?");
	document.getElementById("cToFEquation").innerHTML = "Formula: F = 1.8(Degrees Celsius) + 32";
	document.getElementById("cToFstep1").innerHTML = "Step 1: F = 1.8(" + celsius.toString() + ") + 32";
	var newValue = 1.8 * parseFloat(celsius);
	document.getElementById("cToFstep2").innerHTML = "Step 2: F = " + newValue.toString() + " + 32";
	var finalValue = newValue + 32;
	document.getElementById("cToFstep3").innerHTML ="F = " + finalValue.toString();
	document.getElementById("clear1").style.display = "inline-block";
}

function fahrenheitToC() {
	var fahrenheit = prompt("What are the degrees Fahrenheit?")
	var difference = parseFloat(fahrenheit) - 32
	document.getElementById("fToCEquation").innerHTML = "Formula: Celsius = (Degrees Fahrenheit - 32) / 1.8";
	document.getElementById("fToCstep1").innerHTML = "Step 1: Celsius = ("  + fahrenheit + " - 32) / 1.8";
	document.getElementById("fToCstep2").innerHTML = "Step 2: Celsius = " + difference.toString() + " / 1.8";
	window.nextStep = difference / 1.8;
	document.getElementById("fToCstep3").innerHTML = "Celsius = " + nextStep.toString();
	document.getElementById("clear1").style.display = "inline-block";
}

function fahrenheitToK() {
	//fahrenheitToC();
	var fahrenheit = prompt("What are the degrees Fahrenheit?")
	var difference = parseFloat(fahrenheit) - 32
	document.getElementById("fToCEquationKelvin").innerHTML = "<strong>Convert Fahrenheit to Celsius</strong><br>Formula: Celsius = (Degrees Fahrenheit - 32) / 1.8";
	document.getElementById("fToCstep1Kelvin").innerHTML = "Step 1: Celsius = ("  + fahrenheit + " - 32) / 1.8";
	document.getElementById("fToCstep2Kelvin").innerHTML = "Step 2: Celsius = " + difference.toString() + " / 1.8";
	window.nextStep = difference / 1.8;
	document.getElementById("fToCstep3Kelvin").innerHTML = "Celsius = " + nextStep.toString();
	//document.getElementById("clear2").style.display = "inline-block";
	var kelvin = nextStep + 273.15;
	document.getElementById("fToKEquation").innerHTML = "<strong>Convert Celsius to Kelvin</strong><br>Formula: Kelvin = Celsius + 273.15";
	document.getElementById("fToKstep1").innerHTML = "Step 4: Kelvin = " + nextStep.toString() + " + 273.15";
	document.getElementById("fToKstep2").innerHTML = "Kelvin = " + kelvin.toString();
	document.getElementById("clear1").style.display = "inline-block";
}

function celsiusToK() {
	var celsius = prompt("What are the degrees Celsius?");	
	var kelvin = parseFloat(celsius) + 273.15;
	document.getElementById("cToKEquation").innerHTML = "Formula: Kelvin = Celsius + 273.15";
	document.getElementById("cToKstep1").innerHTML = "Step 1: Kelvin = " + celsius + " + 273.15";
	document.getElementById("cToKstep2").innerHTML = "Kelvin = " + kelvin.toString();
	document.getElementById("clear1").style.display = "inline-block";

}


function howMuchHeat1() {
	massOfSubstance = prompt("What is the mass of the substance in grams?");
	initialTemperature = prompt("What is the starting temperature in Celsius?");
	finalTemperature = prompt("What is the ending temperature in Celsius?");
	specificHeat = prompt("What is the specific heat of the substance?");
	changeInTemperature = finalTemperature - initialTemperature;
	changeInTemperature = Math.abs(changeInTemperature);
	substanceCapacityProduct = massOfSubstance * specificHeat;
	finalProduct = substanceCapacityProduct * changeInTemperature;
	
	//countDecimalsHowMuchHeat1();
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

function countDecimalsHowMuchHeat1() {
	substanceCapacityProductLength = substanceCapacityProduct.split('.'); 
	var substanceCapacityProductLength = substanceCapacityProductLength[1];

	var substanceCapacityProductDecimals = substanceCapacityProductLength.length;
	console.log(substanceCapacityProductDecimals);


	var finalProductLength = finalProduct.split('.'); 
	var finalProductLength= finalProductLength[1];
	var finalProductDecimals = finalProductLength.length;
	console.log(finalProductDecimals);
}

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
	document.getElementById("clear1").style.display = "none";
	document.getElementById("clear2").style.display = "none";
	document.getElementById("clear3").style.display = "none";

}

