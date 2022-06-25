const form = document.getElementById('form');
const leaveType = document.getElementById('leave_type');
const leavedate = document.getElementById('leave_date');
const returnDate = document.getElementById('return_date');
const reason = document.getElementById('reason');

function checkInputs() {

    const leaveTypeValue = leaveType.value;
    const leavedateValue = leavedate.value;
    const returnDateValue = returnDate.value;
    const reasonValue = reason.value;

    var today = new Date();
    var dd = String(today.getDate() + 1).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    tomorow = yyyy + '-' + mm + '-' + dd;

    let isValid = true;

    //validate leave type
    if (leaveTypeValue === '' || leaveTypeValue == null) {
        setErrorFor(leaveType, 'Leave type cannot be empty');
        isValid = false;
    } else {
        setSuccessFor(leaveType);
    }

    //validate leave date
    if (leavedateValue === '' || leavedateValue == null) {
        setErrorFor(leavedate, 'Leave date cannot be empty');
        isValid = false;
    } else if (leavedateValue < tomorow) {
        setErrorFor(leavedate, 'Must be from tomorow onwards');
        isValid = false;
    } else {
        setSuccessFor(leavedate);
    }

    //validate return date
    if (returnDateValue === '' || returnDateValue == null) {
        setErrorFor(returnDate, 'Return date cannot be empty');
        isValid = false;
    } else if (returnDateValue <= leavedateValue) {
        setErrorFor(returnDate, 'Must be after leaving date');
        isValid = false;
    } else {
        setSuccessFor(returnDate);
    }

    //validate reason
    if (reasonValue === '' || reasonValue == null) {
        setErrorFor(reason, 'Reason cannot be empty');
        isValid = false;
    } else if (reasonValue.length > 225) {
        setErrorFor(reason, 'Cannot exceed 255 characters');
        isValid = false;
    } else {
        setSuccessFor(reason);
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