const form = document.getElementById('form');
const firstname = document.getElementById('first_name');
const lastname = document.getElementById('last_name');
const email = document.getElementById('email');
const mobileNo = document.getElementById('moble_no');
const address = document.getElementById('address');
const birthday = document.getElementById('birthday');
const maritalStatus = document.getElementById('marital_status');
const jobTitle = document.getElementById('job_title');
const payGrade = document.getElementById('pay_grade');
const empStatus = document.getElementById('emp_status');
const emergencyName = document.getElementById('emergency_name');
const relationship = document.getElementById('relationship');
const emergencyMobleNo = document.getElementById('emergency_moble_no');

function checkInputs() {

  const firstnameValue = firstname.value;
  const lastnameValue = lastname.value;
  const emailValue = email.value;
  const mobileNoValue = mobileNo.value;
  const addressValue = address.value;
  const birthdayValue = birthday.value;
  const maritalStatusValue = maritalStatus.value;
  const jobTitleValue = jobTitle.value;
  const payGradeValue = payGrade.value;
  const empStatusValue = empStatus.value;
  const emergencyNameValue = emergencyName.value;
  const relationshipValue = relationship.value;
  const emergencyMobleNoValue = emergencyMobleNo.value;
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
    setErrorFor(firstname, 'First name cannot exceed 45 characters');
    isValid = false;
  } else {
    setSuccessFor(firstname);
  }

  //validate lastname
  if (lastnameValue === '' || lastnameValue == null) {
    setErrorFor(lastname, 'Last name cannot be empty');
    isValid = false;
  } else if (lastnameValue.length > 45) {
    setErrorFor(lastname, 'Last name cannot exceed 45 characters');
    isValid = false;
  } else {
    setSuccessFor(lastname);
  }

  //validate email
  if (emailValue === '' || emailValue == null) {
    setErrorFor(email, 'Email cannot be empty');
    isValid = false;
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, 'Not a valid email');
    isValid = false;
  } else {
    setSuccessFor(email);
  }

  //validate mobile no
  if (mobileNoValue === '' || mobileNoValue == null) {
    setErrorFor(mobileNo, 'Mobile number cannot be empty');
    isValid = false;
  } else if (!isNum(mobileNoValue)) {
    setErrorFor(mobileNo, 'Not a valid mobile number');
    isValid = false;
  } else if (mobileNoValue.length < 10) {
    setErrorFor(mobileNo, 'Mobile number cannot less than 10 digits');
    isValid = false;
  } else if (mobileNoValue.length > 10) {
    setErrorFor(mobileNo, 'Mobile number cannot exceed 10 digits');
    isValid = false;
  } else if (!isMobileNo(mobileNoValue)) {
    setErrorFor(mobileNo, 'Not a valid mobile number');
    isValid = false;
  } else if (!(mobileNoValue["0"] === '0')) {
    setErrorFor(mobileNo, 'Mobile number must start with 0');
    isValid = false;
  } else {
    setSuccessFor(mobileNo);
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

  //validate marital status
  if (maritalStatusValue === '' || maritalStatus == null) {
    setErrorFor(maritalStatus, 'Marital status cannot be empty');
    isValid = false;
  } else {
    setSuccessFor(maritalStatus);
  }

  //validate job title
  if (jobTitleValue === '' || jobTitleValue == null) {
    setErrorFor(jobTitle, 'Job title cannot be empty');
    isValid = false;
  } else {
    setSuccessFor(jobTitle);
  }

  //validate pay grade
  if (payGradeValue === '' || payGradeValue == null) {
    setErrorFor(payGrade, 'Pay grade cannot be empty');
    isValid = false;
  } else {
    setSuccessFor(payGrade);
  }

  //validate emp status
  if (empStatusValue === '' || empStatusValue == null) {
    setErrorFor(empStatus, 'Employment status cannot be empty');
    isValid = false;
  } else {
    setSuccessFor(empStatus);
  }

  //validate contact person's name
  if (emergencyNameValue === '' || emergencyNameValue == null) {
    setErrorFor(emergencyName, "Contact person's cannot be empty");
    isValid = false;
  } else if (emergencyNameValue.length > 100) {
    setErrorFor(emergencyName, "Contact person's cannot exceed 100 characters");
    isValid = false;
  } else {
    setSuccessFor(emergencyName);
  }

  //validate relation
  if (relationshipValue === '' || relationshipValue == null) {
    setErrorFor(relationship, 'Relation cannot be empty');
    isValid = false;
  } else if (relationshipValue.length > 45) {
    setErrorFor(relationship, 'Relation cannot exceed 45 characters');
    isValid = false;
  } else {
    setSuccessFor(relationship);
  }

  //validate contact person's mobile number
  if (emergencyMobleNoValue === '' || emergencyMobleNoValue == null) {
    setErrorFor(emergencyMobleNo, 'Mobile number cannot be empty');
    isValid = false;
  } else if (!isNum(emergencyMobleNoValue)) {
    setErrorFor(emergencyMobleNo, 'Not a valid mobile number');
    isValid = false;
  } else if (emergencyMobleNoValue.length < 10) {
    setErrorFor(emergencyMobleNo, 'Mobile number cannot less than 10 digits');
    isValid = false;
  } else if (emergencyMobleNoValue.length > 10) {
    setErrorFor(emergencyMobleNo, 'Mobile number cannot exceed 10 digits');
    isValid = false;
  } else if (!isMobileNo(emergencyMobleNoValue)) {
    setErrorFor(emergencyMobleNo, 'Not a valid mobile number');
    isValid = false;
  } else if (emergencyMobleNoValue == mobileNoValue) {
    setErrorFor(emergencyMobleNo, 'Cannot be same as personal number');
    isValid = false;
  } else if (!(emergencyMobleNoValue["0"] === '0')) {
    setErrorFor(emergencyMobleNo, 'Mobile number must start with 0');
    isValid = false;
  } else {
    setSuccessFor(emergencyMobleNo);
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

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isMobileNo(mobileNo) {
  return /^\d{10}$/.test(mobileNo);
}