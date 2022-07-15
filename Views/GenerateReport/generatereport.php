<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/report.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Reporting Module</h4>
        </div>

        <form method="POST" action="<?= WEBROOT ?>generatereport" id="form" class="form" onsubmit="return checkInputs()">

            <div class="form-outline">
                <div class="report_type">
                    <lable class="form-label mb-3">Select Report Type:&nbsp;&nbsp;</lable>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOption" id="employee_select" value="no" onchange="load('employee')">
                        <input type="hidden" id="employee_hidden" name="employee" value="no">
                        <label class="form-check-label" for="employee_select"><i class="fas fa-user-tie"></i>Employees</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOption" id="leave_select" value="no" onchange="load('leave')">
                        <input type="hidden" id="leave_hidden" name="leave" value="no">
                        <label class="form-check-label" for="leave_select"><i class="fas fa-calendar-check"></i>Leaves</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOption" id="supervisor_select" value="no" onchange="load('supervisor')">
                        <input type="hidden" id="supervisor_hidden" name="supervisor" value="no">
                        <label class="form-check-label" for="supervisor_select"><i class="fas fa-calendar-check"></i>supervisor</label>
                    </div>
                </div>
            </div>

            <div class="content" id="content" style="display: none">
                <div class="employee" id="employee" style="display: none;">
                    <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px 10px;border-radius: 20px;">Employee by Department</p>

                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="group">By Group</label>
                        <select class="form-select" id="group" name="group" aria-label="Default select example" onchange="displayGroup()">
                            <option value="">select group...</option>
                            <option value="Department">Department</option>
                            <option value="Job Title">Job Title</option>
                            <option value="Pay Grade">Pay Grade</option>
                        </select>
                        <small>Error message</small>
                    </div>

                    <script>
                        function displayGroup() {
                            const group = document.getElementById('group');
                            const dept = document.getElementById('sel_dept');
                            const title = document.getElementById('sel_title');
                            const grade = document.getElementById('sel_grade');

                            if (group.value == 'Department') {
                                document.getElementById("sel_dept").style.display = "block";
                                document.getElementById("sel_title").style.display = "none";
                                document.getElementById("sel_grade").style.display = "none";
                            } else if (group.value == 'Job Title') {
                                document.getElementById("sel_dept").style.display = "none";
                                document.getElementById("sel_title").style.display = "block";
                                document.getElementById("sel_grade").style.display = "none";
                            } else if (group.value == 'Pay Grade') {
                                document.getElementById("sel_dept").style.display = "none";
                                document.getElementById("sel_title").style.display = "none";
                                document.getElementById("sel_grade").style.display = "block";
                            }
                        }
                    </script>

                    <div class="sel_dept" id="sel_dept" style="display: none">
                        <label class="form-label" for="sel_dept">Select Department</label>
                        <select class="form-select" name="group_dept" aria-label="Default select example">
                            <option value="">select department...</option>
                            <option value="HR">HR</option>
                            <option value="IT">IT</option>
                            <option value="Production">Production</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Finance">Finance</option>
                        </select>
                    </div>
                    <div class="sel_title" id="sel_title" style="display: none">
                        <label class="form-label" for="sel_title">Select Job Title</label>
                        <select class="form-select" name="group_title" aria-label="Default select example">
                            <option value="">select job title...</option>
                            <option value="HR Manager">HR Manager</option>
                            <option value="Accountant">Accountant</option>
                            <option value="Software Engineer">Software Engineer</option>
                            <option value="QA Engineer">QA Engineer</option>
                        </select>
                    </div>
                    <div class="sel_grade" id="sel_grade" style="display: none">
                        <label class="form-label" for="sel_grade">Select Pay Grade</label>
                        <select class="form-select" name="group_grade" aria-label="Default select example">
                            <option value="">select pay grade...</option>
                            <option value="Level 1">Level 1</option>
                            <option value="Level 2">Level 2</option>
                            <option value="Level 3">Level 3</option>
                        </select>
                    </div>

                </div>

                <div class="leave" id="leave" style="display: none;">
                    <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px 10px;border-radius: 20px;">Total Leaves in Given Period by Department</p>

                    <div class="col">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="department">By Department</label>
                            <select class="form-select" id="department" name="department" aria-label="Default select example">
                                <option value="">select department...</option>
                                <option value="1">HR</option>
                                <option value="2">IT</option>
                                <option value="3">Production</option>
                                <option value="4">Marketing</option>
                                <option value="5">Finance</option>
                            </select>
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="from_date">From</label>
                                <input type="date" id="from_date" name="from_date" class="form-control" />
                                <small>Error message</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-control form-outline form-input">
                                <label class="form-label" for="to_date">To</label>
                                <input type="date" id="to_date" name="to_date" class="form-control" />
                                <small>Error message</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="supervisor" id="supervisor" style="display: none;">
                    <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px 10px;border-radius: 20px;">Supervisor by Department</p>

                    <div class="col">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="sup_department">By Department</label>
                            <select class="form-select" id="sup_department" name="sup_department" aria-label="Default select example">
                                <option value="">select department...</option>
                                <option value="1">HR</option>
                                <option value="2">IT</option>
                                <option value="3">Production</option>
                                <option value="4">Marketing</option>
                                <option value="5">Finance</option>
                            </select>
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" name="submit" type="submit">Generate</button>
                </div>
            </div>

        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/generateReportValidate.js" />

    </div>
</div>