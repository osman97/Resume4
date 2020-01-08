var buttons = document.getElementsByClassName("myButton");

for (var i = 0; i < buttons.length; i++) {
	buttons[i].addEventListener("click", function(){writeOnClick(this.id);});
}

var whatDidIChoose = ' ';
var operand1 = 0;
var result1 = 0;

function writeOnClick(character) {
	var displayString = document.getElementsByTagName("h1")[0].textContent;
	
	if ((displayString.includes(".")) && (character == "."))
		return;
	
	if(character == '+') {
		whatDidIChoose = '+';
		operand1 = parseFloat(document.getElementsByTagName("h1")[0].textContent);
		document.getElementsByTagName("h1")[0].textContent = " ";
		document.getElementById("+").disabled = true;
		document.getElementById("-").disabled = true;
		document.getElementById("×").disabled = true;
		document.getElementById("÷").disabled = true;
		return;
	}
	if(character == '-') {
		whatDidIChoose = '-';
		operand1 = parseFloat(document.getElementsByTagName("h1")[0].textContent);
		document.getElementsByTagName("h1")[0].textContent = " ";
		document.getElementById("+").disabled = true;
		document.getElementById("-").disabled = true;
		document.getElementById("×").disabled = true;
		document.getElementById("÷").disabled = true;
		return;
	}
	if(character == '×') {
		whatDidIChoose = '×';
		operand1 = parseFloat(document.getElementsByTagName("h1")[0].textContent);
		document.getElementsByTagName("h1")[0].textContent = " ";
		document.getElementById("+").disabled = true;
		document.getElementById("-").disabled = true;
		document.getElementById("×").disabled = true;
		document.getElementById("÷").disabled = true;
		return;
	}
	if(character == '÷') {
		whatDidIChoose = '÷';
		operand1 = parseFloat(document.getElementsByTagName("h1")[0].textContent);
		document.getElementsByTagName("h1")[0].textContent = " ";
		document.getElementById("+").disabled = true;
		document.getElementById("-").disabled = true;
		document.getElementById("×").disabled = true;
		document.getElementById("÷").disabled = true;
		return;
	}
	if(character == '=') {
		if (whatDidIChoose == ' ')
			return;
		if (whatDidIChoose == '+') { 
			result1 = operand1 + parseFloat(document.getElementsByTagName("h1")[0].textContent);
			displayString = result1;
			document.getElementsByTagName("h1")[0].textContent = displayString;
			return;
			}
		if (whatDidIChoose == '-') {
			result1 = operand1 - parseFloat(document.getElementsByTagName("h1")[0].textContent);
			displayString = result1;
			document.getElementsByTagName("h1")[0].textContent = displayString;
			return;
		}
		if (whatDidIChoose == '×') {
			result1 = operand1 * (parseFloat(document.getElementsByTagName("h1")[0].textContent));
			displayString = result1;
			document.getElementsByTagName("h1")[0].textContent = displayString;
			return;
		}
		if (whatDidIChoose == '÷') {
			result1 = operand1 / (parseFloat(document.getElementsByTagName("h1")[0].textContent));
			displayString = result1;
			document.getElementsByTagName("h1")[0].textContent = displayString;
			return;
		}
	}
	document.getElementById("+").disabled = false;
	document.getElementById("-").disabled = false;
	document.getElementById("×").disabled = false;
	document.getElementById("÷").disabled = false;
	displayString += character;
	document.getElementsByTagName("h1")[0].textContent = displayString;
};