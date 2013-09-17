
function getClasses(elem) {
	var classString = elem.getAttribute("class");
	var classArray = classString.split(" ");
	return classArray;
}

function addClass(elem, className) {
	var classList = getClasses(elem);
	if (classList.indexOf(className) == -1) {
		classList.push(className);
	}
	var classesOut = classList.join(" ");
	elem.setAttribute("class", classesOut);
}

function validateForm() {
	var nameInput = document.myForm.name.value;
	var emailInput = document.myForm.email.value;
	var passwordInput = document.myForm.password.value;
	var confirmInput = document.myForm.confirm.value;
	var errorString = "";
	returnValue = true;
	
	if (nameInput === null || nameInput === "") {
		addClass(document.myForm.name, "invalid");
		returnValue = false;
		errorString += "Name input must not be blank.";
	}
	if (emailInput === null || emailInput === "") {
		addClass(document.myForm.email, "invalid");
		returnValue = false;
		errorString += "Email input must not be blank.";
	}
	if (passwordInput === null || passwordInput === "") {
		addClass(document.myForm.password, "invalid");
		addClass(document.myForm.confirm, "invalid");
		returnValue = false;
		errorString += "Password input must not be blank."
	}
	if (passwordInput != confirmInput) {
		addClass(document.myForm.password, "invalid");
		addClass(document.myForm.confirm, "invalid");
		returnValue = false;
		errorString += "Password must match in both fields."
	}
	
	if (!returnValue) {
		var wrapper = document.getElementById("wrapper");
		var form = document.getElementById("form");
		var errorMessage = document.createTextNode(errorString);
		wrapper.insertBefore(errorMessage, form);
	}
	
	return returnValue;
}


