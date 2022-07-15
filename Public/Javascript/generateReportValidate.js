const form = document.getElementById('form');
const group = document.getElementById('group');
const department = document.getElementById('department');
const fromdate = document.getElementById('from_date');
const todate = document.getElementById('to_date');
const supDpt = document.getElementById('sup_department');

const employee = document.getElementById('employee_select');
const leave = document.getElementById('leave_select');
const supervisor = document.getElementById('supervisor_select');

function checkInputs() {

    const groupValue = group.value;
    const departmentValue = department.value;
    const fromdateValue = fromdate.value;
    const todateValue = todate.value;
    const supDptValue = supDpt.value;

    const employeeValue = employee.value;
    const leaveValue = leave.value;
    const supervisorValue = supervisor.value;

    // var today = new Date();
    // var dd = String(today.getDate() + 1).padStart(2, '0');
    // var mm = String(today.getMonth() + 1).padStart(2, '0');
    // var yyyy = today.getFullYear();

    // tomorow = yyyy + '-' + mm + '-' + dd;

    let isValid = true;

    if (employeeValue == 'yes' && leaveValue == 'no' && supervisorValue == 'no') {

        //validate group
        if (groupValue === '' || groupValue == null) {
            setErrorFor(group, 'Group cannot be empty');
            isValid = false;
        } else {
            setSuccessFor(group);
        }
    }

    if (employeeValue == 'no' && leaveValue == 'yes' && supervisorValue == 'no') {

        //validate dpt
        if (departmentValue === '' || departmentValue == null) {
            setErrorFor(department, 'Department cannot be empty');
            isValid = false;
        } else {
            setSuccessFor(department);
        }

        //validate from date
        if (fromdateValue === '' || fromdateValue == null) {
            setErrorFor(fromdate, 'Date cannot be empty');
            isValid = false;
        } else {
            setSuccessFor(fromdate);
        }

        //validate to date
        if (todateValue === '' || todateValue == null) {
            setErrorFor(todate, 'Date cannot be empty');
            isValid = false;
        } else if (todateValue <= fromdateValue) {
            setErrorFor(todate, 'Must be after from date');
            isValid = false;
        } else {
            setSuccessFor(todate);
        }
    }

    if (employeeValue == 'no' && leaveValue == 'no' && supervisorValue == 'yes') {
        //validate sup_dpt
        if (supDptValue === '' || supDptValue == null) {
            setErrorFor(supDpt, 'Department cannot be empty');
            isValid = false;
        } else {
            setSuccessFor(supDpt);
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

function load(report_type) {
    document.getElementById("content").style.opacity = 0;
    document.getElementById("content").style.display = "block";
    switch (report_type) {
        case "employee":
            document.getElementById("employee").style.display = "block";
            document.getElementById("leave").style.display = "none";
            document.getElementById("supervisor").style.display = "none";
            document.getElementById("employee_select").value = 'yes';
            document.getElementById("leave_select").value = 'no';
            document.getElementById("supervisor_select").value = 'no';
            document.getElementById("employee_hidden").value = 'yes';
            document.getElementById("leave_hidden").value = 'no';
            document.getElementById("supervisor_hidden").value = 'no';
            clean(department);
            clean(fromdate);
            clean(todate);
            clean(supDpt);
            break;
        case "leave":
            document.getElementById("leave").style.display = "block";
            document.getElementById("employee").style.display = "none";
            document.getElementById("supervisor").style.display = "none";
            document.getElementById("employee_select").value = 'no';
            document.getElementById("leave_select").value = 'yes';
            document.getElementById("supervisor_select").value = 'no';
            document.getElementById("employee_hidden").value = 'no';
            document.getElementById("leave_hidden").value = 'yes';
            document.getElementById("supervisor_hidden").value = 'no';
            clean(group);
            clean(supDpt);
            break;
        case "supervisor":
            document.getElementById("supervisor").style.display = "block";
            document.getElementById("leave").style.display = "none";
            document.getElementById("employee").style.display = "none";
            document.getElementById("employee_select").value = 'no';
            document.getElementById("leave_select").value = 'no';
            document.getElementById("supervisor_select").value = 'yes';
            document.getElementById("employee_hidden").value = 'no';
            document.getElementById("leave_hidden").value = 'no';
            document.getElementById("supervisor_hidden").value = 'yes';
            clean(group);
            clean(department);
            clean(fromdate);
            clean(todate);
            break;
        default:
            break;
    }
    var intervalId = setInterval(function () {
        if (document.getElementById("content").style.opacity >= 1) {
            clearInterval(intervalId);
        } else {
            document.getElementById("content").style.opacity = parseFloat(document.getElementById("content").style.opacity) + 0.1;
        }
    }, 100);
}

function clean(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control form-outline form-input';
}