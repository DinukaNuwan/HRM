const form = document.getElementById('form');

const group = document.getElementById('group');
const groupDept = document.getElementById('group_dept');
const groupTitle = document.getElementById('group_title');
const groupGrade = document.getElementById('group_grade');

const department = document.getElementById('department');
const fromdate = document.getElementById('from_date');
const todate = document.getElementById('to_date');

const supDpt = document.getElementById('sup_department');
const supFromDate = document.getElementById('sup_from_date');
const supToDate = document.getElementById('sup_to_date');

const employee = document.getElementById('employee_hidden');
const leave = document.getElementById('leave_hidden');
const supervisor = document.getElementById('supervisor_hidden');

function checkInputs() {

    const groupValue = group.value;
    const groupDeptValue = groupDept.value;
    const groupTitleValue = groupTitle.value;
    const groupGradeValue = groupGrade.value;

    const departmentValue = department.value;
    const fromdateValue = fromdate.value;
    const todateValue = todate.value;

    const supDptValue = supDpt.value;
    const supFromDateValue = supFromDate.value;
    const supToDateValue = supToDate.value;

    const employeeValue = employee.value;
    const leaveValue = leave.value;
    const supervisorValue = supervisor.value;

    let isValid = true;

    if (employeeValue == 'yes' && leaveValue == 'no' && supervisorValue == 'no') {

        //validate group
        if (groupValue === '' || groupValue == null) {
            setErrorFor(group, 'Group cannot be empty');
            isValid = false;
        } else {
            setSuccessFor(group);
        }

        if (groupValue == 'Department') {
            if (groupDeptValue === '' || groupDeptValue == null) {
                setErrorFor(groupDept, 'Department cannot be empty');
                isValid = false;
            } else {
                setSuccessFor(groupDept);
            }
        } else if (groupValue == 'Job Title') {
            if (groupTitleValue === '' || groupTitleValue == null) {
                setErrorFor(groupTitle, 'Job title cannot be empty');
                isValid = false;
            } else {
                setSuccessFor(groupTitle);
            }
        } else if (groupValue == 'Pay Grade') {
            if (groupGradeValue === '' || groupGradeValue == null) {
                setErrorFor(groupGrade, 'Pay grade cannot be empty');
                isValid = false;
            } else {
                setSuccessFor(groupGrade);
            }
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

        //validate from date
        if (supFromDateValue === '' || supFromDateValue == null) {
            setErrorFor(supFromDate, 'Date cannot be empty');
            isValid = false;
        } else {
            setSuccessFor(supFromDate);
        }

        //validate to date
        if (supToDateValue === '' || supToDateValue == null) {
            setErrorFor(supToDate, 'Date cannot be empty');
            isValid = false;
        } else if (supToDateValue <= supFromDateValue) {
            setErrorFor(supToDate, 'Must be after from date');
            isValid = false;
        } else {
            setSuccessFor(supToDate);
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
            document.getElementById("employee_hidden").value = 'yes';
            document.getElementById("leave_hidden").value = 'no';
            document.getElementById("supervisor_hidden").value = 'no';
            clean(department);
            clean(fromdate);
            clean(todate);
            clean(supDpt);
            clean(supFromDate);
            clean(supToDate);
            break;
        case "leave":
            document.getElementById("leave").style.display = "block";
            document.getElementById("employee").style.display = "none";
            document.getElementById("supervisor").style.display = "none";
            document.getElementById("employee_hidden").value = 'no';
            document.getElementById("leave_hidden").value = 'yes';
            document.getElementById("supervisor_hidden").value = 'no';
            clean(group);
            clean(supDpt);
            clean(supFromDate);
            clean(supToDate);
            clean(groupDept);
            clean(groupTitle);
            clean(groupGrade);
            break;
        case "supervisor":
            document.getElementById("supervisor").style.display = "block";
            document.getElementById("leave").style.display = "none";
            document.getElementById("employee").style.display = "none";
            document.getElementById("employee_hidden").value = 'no';
            document.getElementById("leave_hidden").value = 'no';
            document.getElementById("supervisor_hidden").value = 'yes';
            clean(group);
            clean(department);
            clean(fromdate);
            clean(todate);
            clean(groupDept);
            clean(groupTitle);
            clean(groupGrade);
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

//this function will clean the error messages when switching
function clean(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control form-outline form-input';
}

function displayGroup() {

    if (group.value == 'Department') {
        document.getElementById("sel_dept").style.display = "block";
        document.getElementById("sel_title").style.display = "none";
        document.getElementById("sel_grade").style.display = "none";
        clean(groupTitle);
        clean(groupGrade);
    } else if (group.value == 'Job Title') {
        document.getElementById("sel_dept").style.display = "none";
        document.getElementById("sel_title").style.display = "block";
        document.getElementById("sel_grade").style.display = "none";
        clean(groupDept);
        clean(groupGrade);
    } else if (group.value == 'Pay Grade') {
        document.getElementById("sel_dept").style.display = "none";
        document.getElementById("sel_title").style.display = "none";
        document.getElementById("sel_grade").style.display = "block";
        clean(groupDept);
        clean(groupTitle);
    } else {
        document.getElementById("sel_dept").style.display = "none";
        document.getElementById("sel_title").style.display = "none";
        document.getElementById("sel_grade").style.display = "none";
        clean(groupDept);
        clean(groupTitle);
        clean(groupGrade);
    }
}