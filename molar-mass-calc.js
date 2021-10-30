function calculateMolarMass() {
	/* Build the Tables for the Chemical Symbols and Molar Masses */
	const elements = ['Ac', 'Al', 'Am', 'Sb', 'Ar', 'As', 'At', 'Ba', 'Bk', 'Be',
	'Bi', 'Bh', 'B', 'Br', 'Cd', 'Ca', 'Cf', 'C', 'Ce', 'Cs',
	'Cl', 'Cr', 'Co', 'Cn', 'Cu', 'Cm', 'Ds', 'Db', 'Dy', 'Es',
	'Er', 'Eu', 'Fm', 'Fl', 'F', 'Fr', 'Gd', 'Ga', 'Ge', 'Au',
	'Hf', 'Hs', 'He', 'Ho', 'H', 'In', 'I', 'Ir', 'Fe', 'Kr',
	'La', 'Lr', 'Pb', 'Li', 'Lv', 'Lu', 'Mg', 'Mn', 'Mt', 'Md',
	'Hg', 'Mo', 'Mc', 'Nd', 'Ne', 'Np', 'Ni', 'Nh', 'Nb', 'N',
	'No', 'Og', 'Os', 'O', 'Pd', 'P', 'Pt', 'Pu', 'Po', 'K',
	'Pr', 'Pm', 'Pa', 'Ra', 'Rn', 'Re', 'Rh', 'Rg', 'Rb', 'Ru',
	'Rf', 'Sm', 'Sc', 'Sg', 'Se', 'Si', 'Ag', 'Na', 'St', 'S',
	'Ta', 'Tc', 'Te', 'Ts', 'Tb', 'Tl', 'Th', 'Tm', 'Sn', 'Ti',
	'W', 'U', 'V', 'Xe', 'Yb', 'Y', 'Zn', 'Zr'];

	const molarMasses = [227.03, 26.981538, 243.06, 121.760, 39.948,
	74.92160, 209.99, 137.327, 247.07, 9.012183, 270.1, 10.81, 79.904,
	112.414, 40.078, 251.08, 12.0107, 140.116, 132.905452, 35.453,
	51.9961, 58.933194, 285.2, 63.546, 247.07, 281.2, 268.1, 162.50,
	252.08, 167.259, 151.964, 257.10, 289.2, 18.9984016, 223.02,
	157.25, 69.723, 72.67, 196.966569, 178.49, 269.1, 4.002602,
	164.93033, 1.00794, 114.818, 126.90447, 192.217, 55.845, 83.80,
	138.9055, 262.11, 207.2, 6.941, 293, 174.967, 24.3050, 54.938044,
	278.2, 258.10, 200.59, 95.95, 289.2, 114.24, 20.1797, 237.05, 58.6934,
	286.2, 92.90637, 14.0067, 259.10, 294.2, 190.23, 15.9994, 106.42,
	30.973762, 195.078, 244.06, 208.98, 39.0983, 140.90766, 145, 231.03588,
	226.03, 222.02, 186.207, 102.90550, 282.2, 85.4678, 101.07, 267.1,
	150.36, 44.955908, 269.1, 78.97, 28.0855, 107.8682, 22.989770, 87.62,
	32.065, 180.9479, 98, 127.60, 293.2, 158.92534, 204.3833, 232.0377,
	168.93422, 118.710, 47.867, 183.84, 238.02891, 50.9415, 131.293, 173.04,
	88.90584, 65.39, 91.224];

	/* Prompt the User for the Number of Elements in the Compound */
	const numberOfElements = prompt("How many unique elements are in the substance? ")

	/* If There is Only One Unique Element */
	if (numberOfElements == '1') {
		const symbol = prompt("What is the chemical symbol of the element? ")
		console.log(symbol)

		/* If the user-supplied symbol is in elements list, save the index of the symbol, save 
		the number of times the element occursmultiply the number of occurences by that elements 
		molar mass (located in the molarMasses array and at the same index) and save the product*/
		if (elements.includes(symbol)) {
			const indexValue = elements.indexOf(symbol);	
			var elementOccurrences = prompt("How many of that element are in the substance? ");
			elementOccurrences = parseInt(elementOccurrences);
			document.getElementById('element-one-occurrences').innerHTML = "The element: " + symbol + ' occurs ' + elementOccurrences.toString() + " times.";
			document.getElementById('element-one-molar-mass').innerHTML = "Its molar mass is: " + molarMasses[indexValue].toString() + " grams per mole";
			document.getElementById('element-one-work-shown').innerHTML = "Molar mass " + symbol + " = " + elementOccurrences.toString() + " * " + molarMasses[indexValue].toString();
			const totalMolarMassOfElement = elementOccurrences * molarMasses[indexValue];
			document.getElementById('element-one-combined-molar-mass').innerHTML = "The total molar mass contributed by " + symbol + " is: " + totalMolarMassOfElement.toString(); 
		}
	}

	if (numberOfElements == '2') {
		const firstSymbol = prompt("What is the first chemical symbol in the compound? ")
		var firstElementOccurrences = prompt("How many of the first element are in the substance? ");
		firstElementOccurrences = parseInt(firstElementOccurrences);
		const secondSymbol = prompt("What is the second chemical symbol in the compound? ")
		var secondElementOccurrences = prompt("How many of the second element are in the substance? ");
		secondElementOccurrences = parseInt(secondElementOccurrences);


		if (elements.includes(firstSymbol)) {
			const indexValue = elements.indexOf(firstSymbol);	
			document.getElementById('element-one-occurrences').innerHTML = "The element: " + firstSymbol + ' occurs ' + firstElementOccurrences.toString() + " times.";
			document.getElementById('element-one-molar-mass').innerHTML = "Its molar mass is: " + molarMasses[indexValue].toString() + " grams per mole";
			document.getElementById('element-one-work-shown').innerHTML = "Total molar mass " + firstSymbol + " = " + firstElementOccurrences.toString() + " * " + molarMasses[indexValue].toString();
			const totalMolarMassOfElement = firstElementOccurrences * molarMasses[indexValue];
			document.getElementById('element-one-combined-molar-mass').innerHTML = "The total molar mass contributed by " + firstSymbol + " is: " + totalMolarMassOfElement.toString();
		}
		if (elements.includes(secondSymbol)) {
			const indexValue = elements.indexOf(secondSymbol);	
			document.getElementById('element-two-occurrences').innerHTML = "The element: " + secondSymbol + ' occurs ' + secondElementOccurrences.toString() + " times.";
			document.getElementById('element-two-molar-mass').innerHTML = "Its molar mass is: " + molarMasses[indexValue].toString() + " grams per mole";
			document.getElementById('element-two-work-shown').innerHTML = "Total molar mass " + secondSymbol + " = " + secondElementOccurrences.toString() + " * " + molarMasses[indexValue].toString();
			const totalMolarMassOfElement = secondElementOccurrences * molarMasses[indexValue];
			document.getElementById('element-two-combined-molar-mass').innerHTML = "The total molar mass contributed by " + secondSymbol + " is: " + totalMolarMassOfElement.toString();
		}

	}
}

calculateMolarMass()