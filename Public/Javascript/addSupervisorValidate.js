const form = document.getElementById('form');
const supervisor = document.getElementById('supervisor');

function checkInputs() {
	const supervisorValue = supervisor.value;

	let isValid = true;

	//validate role
	if (supervisorValue === '' || supervisorValue == null) {
		setErrorFor(supervisor, 'Supervisor cannot be empty');
		isValid = false;
	} else {
		setSuccessFor(supervisor);
	}

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