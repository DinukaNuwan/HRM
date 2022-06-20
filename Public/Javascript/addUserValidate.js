const form = document.getElementById('form');
const id = document.getElementById('employee_id');
const username = document.getElementById('username');
const password = document.getElementById('password');
const cpassword = document.getElementById('c_password');
// const role = document.getElementById('role');

function checkInputs() {
	const idValue = id.value;
    const usernameValue = username.value;
	const passwordValue = password.value;
    const cpasswordValue = cpassword.value;
	// const roleValue = role.value;

	let isValid = true;

    //validate id
    if (idValue === '' || idValue == null) {
		setErrorFor(id, 'ID cannot be empty');
		isValid = false;
	} else if (!isNum(idValue)){
        setErrorFor(id, 'ID must contains only digits');
		isValid = false;
    } else {
		setSuccessFor(id)
	}

	//validate username
	if (usernameValue === '' || usernameValue == null) {
		setErrorFor(username, 'Username cannot be empty');
		isValid = false;
	} else {
		setSuccessFor(username)
	}
	
	//validate password
	if (passwordValue === '' || passwordValue == null) {
		setErrorFor(password, 'Password cannot be empty');
		isValid = false;
	} else if (passwordValue.length < 8) {
        setErrorFor(password, 'Password should include atleast 8 characters');
		isValid = false;
    } else if (passwordValue.length > 16) {
        setErrorFor(password, 'Password cannot exceed 16 characters');
		isValid = false;
    } else {
		setSuccessFor(password)
	}

    //validate c_password
    if (cpasswordValue === '' || cpasswordValue == null) {
		setErrorFor(cpassword, 'Confirm password cannot be empty');
		isValid = false;
	} else if (passwordValue !== cpasswordValue) {
        setErrorFor(cpassword, 'Passwords does not match');
		isValid = false;
    } else {
		setSuccessFor(cpassword)
	}

    //validate role
    // if (roleValue === '' || roleValue == null) {
    //     setErrorFor(role, 'role cannot be empty');
    // } else {
	// 	setSuccessFor(role)
	// }

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

function isNum(number) {
	return /^\d+$/.test(number);
}