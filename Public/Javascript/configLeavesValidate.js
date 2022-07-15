const editBtn = document.getElementById('edit_btn');
const saveBtn = document.getElementById('save_btn');
const form_cntrl = document.getElementsByClassName('form-control');
// hr details
const hr_anual = document.getElementById('hr_anual');
const hr_casual = document.getElementById('hr_casual');
const hr_no_pay = document.getElementById('hr_no_pay');
const hr_maternity = document.getElementById('hr_maternity');
const hr_m_no_pay = document.getElementById('hr_m_no_pay');
// second details
const second_anual = document.getElementById('second_anual');
const second_casual = document.getElementById('second_casual');
const second_no_pay = document.getElementById('second_no_pay');
const second_maternity = document.getElementById('second_maternity');
const second_m_no_pay = document.getElementById('second_m_no_pay');
// general details
const general_anual = document.getElementById('general_anual');
const general_casual = document.getElementById('general_casual');
const general_no_pay = document.getElementById('general_no_pay');
const general_maternity = document.getElementById('general_maternity');
const general_m_no_pay = document.getElementById('general_m_no_pay');

function showHide() {
    editBtn.hidden = true;
    saveBtn.hidden = false;
    document.querySelectorAll(".td-value").forEach(looping);
    form_cntrl.style.background_color = 'none';
}

function looping(tdValue) {
    tdValue.toggleAttribute("disabled");
}

function checkInputs() {
    const inputs = [
        hr_anual,
        hr_casual,
        hr_no_pay,
        hr_maternity,
        hr_m_no_pay,
        second_anual,
        second_casual,
        second_no_pay,
        second_maternity,
        second_m_no_pay,
        general_anual,
        general_casual,
        general_no_pay,
        general_maternity,
        general_m_no_pay
    ];

	let isValid = true;

    for (let i = 0; i < inputs.length; i++) {
        console.log(inputs[i].value);
        if (inputs[i].value === '' || inputs[i].value == null) {
            setErrorFor(inputs[i], 'Leave count cannot be empty');
            isValid = false;
        } else if (!isNum(inputs[i].value)) {
            setErrorFor(inputs[i], 'Leave count must be an integer');
            isValid = false;
        } else if (inputs[i].value > 365) {
            setErrorFor(inputs[i], 'Leave count must be less than 365');
            isValid = false;
        } else {
            setSuccessFor(inputs[i]);
        }
    }

    console.log(isValid);
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