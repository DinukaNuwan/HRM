const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');

// form.addEventListener('submit', e => {
// 	e.preventDefault();
// 	checkInputs();
// });

function checkInputs() {
	const usernameValue = username.value;
	const passwordValue = password.value;

	let isValid = true;
	
	//validate username
	if(usernameValue === '' || usernameValue == null) {
		setErrorFor(username, 'Username cannot be empty');
		isValid = false;
	} else if (usernameValue.length > 45) {
        setErrorFor(username, 'Usernamme cannot exceed 45 characters');
		isValid = false;
	} else if (usernameValue.length < 3) {
        setErrorFor(username, 'Usernamme should include atleast 3 characters');
		isValid = false;
	} else {
		setSuccessFor(username);	
	}
	
	//validate password
	if(passwordValue === '' || passwordValue == null) {
		setErrorFor(password, 'Password cannot be empty');
		isValid = false;
	} else if (passwordValue.length < 8) {
        setErrorFor(password, 'Password should include atleast 8 characters');
		isValid = false;
	} else if (passwordValue.length > 16) {
        setErrorFor(password, 'Password cannot exceed 16 characters')
		isValid = false;
    } else {
		setSuccessFor(password)
	}
	// console.log('isValid', isValid)
	return isValid;
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control form-outline form-input error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control form-outline form-input success';
}

