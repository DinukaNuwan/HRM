<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add Supervisor</h4>
        </div>

        <form method="POST" action="<?= WEBROOT . 'addsupervisor/' . $emp_id ?>" id="form" class="form" onsubmit="return checkInputs()">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="c_password">Employee Id</label>
                        <input type="text" name="employee_id" id="employee_id" class="form-control" value="<?= $emp_id ?>" disabled />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="c_password">Employee Name</label>
                        <input type="text" name="employee_name" id="employee_name" class="form-control" value="<?= $emp_name ?>" disabled />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="c_password">Department</label>
                        <input type="text" name="department" id="department" class="form-control" value="<?= $emp_dept ?>" disabled />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="supervisor">Select Supervisor</label>
                        <select class="form-select" aria-label="Default select example" name="supervisor" id="supervisor">
                            <option value="">Select supervisor...</option>
                            <?php
                            foreach ($supervisors as $supervisor) {
                            ?>
                                <option value="<?= $supervisor['emp_id'] ?>"><?= $supervisor['emp_id'] ?> - <?= $supervisor['firstname'] ?>&nbsp;<?= $supervisor['lastname'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <small>Error message</small>
                    </div>
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="submit" name="submit">Add Supervisor</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/addSupervisorValidate.js" />

    </div>
</div>