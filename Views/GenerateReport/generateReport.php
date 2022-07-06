<html>
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
                        <input class="form-check-input" type="radio" name="employee" id="employee_select" value="employee" onchange="load('employee')">
                        <label class="form-check-label" for="inlineRadio1"><i class="fas fa-user-tie"></i>Employees</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="leave" id="leave_select" value="leave" onchange="load('leave')">
                        <label class="form-check-label" for="inlineRadio2"><i class="fas fa-calendar-check"></i>Leaves</label>
                    </div>
                </div>
            </div>

            <div class="content" id="content" style="display: none">
                <div class="employee" id="employee" style="display: none;">
                    <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px;border-radius: 20px;">Employee by Department</p>
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="group">By Group</label>
                        <select class="form-select" id="group" name="group" aria-label="Default select example">
                            <option value="">select group...</option>
                            <option value="departement">Department</option>
                            <option value="job_title">Job Title</option>
                            <option value="pay_grade">Pay Grade</option>
                        </select>
                        <small>Error message</small>
                    </div>
                </div>
                <div class="leave" id="leave" style="display: none;">
                    <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px;border-radius: 20px;">Total Leaves in Given Period by Department</p>
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

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" name="submit" type="submit">Generate</button>
                </div>
            </div>

        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/generateReportValidate.js" />

    </div>
</div>
</html>