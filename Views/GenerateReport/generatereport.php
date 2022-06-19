<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/report.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Reporting Module</h4>
        </div>

        <form>

            <div class="form-outline">
                <p class="form-label m-auto mb-3" style="text-align:center;background-color: #e3caf0;width: fit-content;padding: 5px;border-radius: 20px;">Select Report Type</p>
                <div class="report_type">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onchange="f('employee')">
                        <label class="form-check-label" for="inlineRadio1"><i class="fas fa-user-tie"></i>Employee</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onchange="f('leave')">
                        <label class="form-check-label" for="inlineRadio2"><i class="fas fa-calendar-check"></i>Leave</label>
                    </div>
                </div>
            </div>

            <div class="content" id="content" style="display: none">
                <div class="employee" id="employee" style="display: none;">
                    <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px;border-radius: 20px;">Employee by Department</p>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Group By</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Group By</option>
                            <option value="departement">Department</option>
                            <option value="job_title">Job Title</option>
                            <option value="pay_grade">Pay Grade</option>
                        </select>
                    </div>
                </div>
                <div class="leave" id="leave" style="display: none;">
                <p class="form-label m-auto mb-3 mt-3" style="text-align:center;background-color: #c1def6;width: fit-content;padding: 5px;border-radius: 20px;">Total Leaves in Given Period by Department</p>
                    <div class="row">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Department</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Department</option>
                                <option value="departement">Department 1</option>
                                <option value="departement">Department 2</option>
                                <option value="departement">Department 3</option>
                            </select>
                        </div>
                        <div class="form-outline col-md-6 mb-4">
                            <label class="form-label" for="email">From</label>
                            <input type="date" id="leave_date" class="form-control" placeholder="" />
                        </div>
                        <div class="form-outline col-md-6 mb-4">
                            <label class="form-label" for="email">To</label>
                            <input type="date" id="return_date" class="form-control" placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" type="button">Generate</button>
                </div>
            </div>

        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/displayReportType.js" />
    </div>
</div>