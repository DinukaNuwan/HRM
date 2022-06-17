<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/report.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Reporting Module</h4>
        </div>

        <form>

            <div class="form-outline mb-4">
                <label class="form-label text-center" for="email">Report Type</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" onchange="f('employee')">
                    <label class="form-check-label" for="inlineRadio1"><i class="fas fa-user-tie"></i>Employee</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onchange="f('leave')">
                    <label class="form-check-label" for="inlineRadio2"><i class="fas fa-calendar-check"></i>Leave</label>
                </div>
            </div>

            <div class="content" id="content" style="display: none">
                <div id="employee" style="display: none;">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Department Name</label>
                        <input type="text" id="text" class="form-control" placeholder="Department name" />
                    </div>
                </div>

                <div id="leave" style="display: none;">
                    <div class="row">
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

        <script>
            function f(report_type) {
                switch (report_type) {
                    case "employee":
                        document.getElementById("content").style.display = "block";
                        document.getElementById("employee").style.display = "block";
                        document.getElementById("leave").style.display = "none";
                        break;
                    case "leave":
                        document.getElementById("content").style.display = "block";
                        document.getElementById("leave").style.display = "block";
                        document.getElementById("employee").style.display = "none";
                        break;
                    default:
                        break;
                }
            }
        </script>
    </div>
</div>