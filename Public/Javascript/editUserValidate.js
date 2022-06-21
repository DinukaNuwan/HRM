const form = document.getElementById('form');
const firstname = document.getElementById('first_name');
const lastname = document.getElementById('last_name');
const address = document.getElementById('address');
const birthday = document.getElementById('birthday');
const mobileNo = document.getElementById('moble_no');

function checkInputs() {

    const firstnameValue = firstname.value;
    const lastnameValue = lastname.value;
    const addressValue = address.value;
    const birthdayValue = birthday.value;
    const mobileNoValue = mobileNo.value;

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;

    let isValid = true;

    //validate firstname
    if (firstnameValue === '' || firstnameValue == null) {
        setErrorFor(firstname, 'First name cannot be empty');
        isValid = false;
    } else if (firstnameValue.length > 45) {
        setErrorFor(firstname, 'Cannot exceed 45 characters');
        isValid = false;
    } else {
        setSuccessFor(firstname);
    }

    //validate lastname
    if (lastnameValue === '' || lastnameValue == null) {
        setErrorFor(lastname, 'Last name cannot be empty');
        isValid = false;
    } else if (lastnameValue.length > 45) {
        setErrorFor(lastname, 'Cannot exceed 45 characters');
        isValid = false;
    } else {
        setSuccessFor(lastname);
    }

    //validate address
    if (addressValue === '' || addressValue == null) {
        setErrorFor(address, 'Address cannot be empty');
        isValid = false;
    } else {
        setSuccessFor(address);
    }

    //validate birthday
    if (birthdayValue === '' || birthdayValue == null) {
        setErrorFor(birthday, 'Birthday cannot be empty');
        isValid = false;
    } else if (birthdayValue >= today) {
        setErrorFor(birthday, 'Mast be a past date');
        isValid = false;
    } else {
        setSuccessFor(birthday);
    }

    //validate mobile no
    if (mobileNoValue === '' || mobileNoValue == null) {
        setErrorFor(mobileNo, 'Mobile number cannot be empty');
        isValid = false;
    } else if (!isNum(mobileNoValue)) {
        setErrorFor(mobileNo, 'Not a valid mobile number');
        isValid = false;
    } else if (mobileNoValue.length < 10) {
        setErrorFor(mobileNo, 'Cannot be less than 10 digits');
        isValid = false;
    } else if (mobileNoValue.length > 10) {
        setErrorFor(mobileNo, 'Cannot exceed 10 digits');
        isValid = false;
    } else if (!isMobileNo(mobileNoValue)) {
        setErrorFor(mobileNo, 'Not a valid mobile number');
        isValid = false;
    } else if (!(mobileNoValue["0"] === '0')) {
        setErrorFor(mobileNo, 'Must start with 0');
        isValid = false;
    } else {
        setSuccessFor(mobileNo);
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

function isMobileNo(mobileNo) {
    return /^\d{10}$/.test(mobileNo);
}