<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add Supervisor</h4>
        </div>

        <form method="POST" action="<?= WEBROOT . 'addUser' ?>" id="form" class="form" onsubmit="return checkInputs()">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="c_password">Employee Id</label>
                        <input type="text" name="employee_id" id="employee_id" class="form-control" value="ID" disabled />
                        <small>Error message</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="c_password">Employee Name</label>
                        <input type="text" name="employee_name" id="employee_name" class="form-control" value="Name" disabled />
                        <small>Error message</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="c_password">Department</label>
                        <input type="text" name="department" id="department" class="form-control" value="Department Name" disabled />
                        <small>Error message</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="role">Select Supervisor</label>
                        <select class="form-select" aria-label="Default select example" name="role" id="role">
                            <option value="">1 - Supervisoer Name1</option>
                            <option value="HR Manager">2 - Supervisoer Name2</option>
                            <option value="Second Manager">3 - Supervisoer Name3</option>
                            <option value="General Employee">4 - Supervisoer Name4</option>
                        </select>
                        <small>Error message</small>
                    </div>
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="submit" name="submit">Add Supervisor</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/addUserValidate.js" />

    </div>
</div>