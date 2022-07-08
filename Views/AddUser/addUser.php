<?php
if (isset($error)) {
?>
    <!-- Toast message to display error -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast show fade" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header" style="color: crimson;">
                <i class="fas fa-times-circle" style="color: crimson;"></i>
                <strong class="me-auto">Cannot add this user</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $error[0] ?>
            </div>
        </div>
    </div>
<?php
}
?>
<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add New User</h4>
        </div>

        <form method="POST" action="<?= WEBROOT . 'addUser' ?>" id="form" class="form" onsubmit="return checkInputs()" enctype="multipart/form-data">

            <div class="form-control form-outline form-input">
                <label class="form-label" for="id">Employee ID</label>
                <select class="form-select" id="employee_id" name="employee_id" aria-label="Default select example">
                    <option value="">Select employee...</option>
                    <?php
                    if (isset($employees)) {
                        foreach ($employees as $employee) {
                    ?>
                            <option value="<?= $employee['emp_id'] ?>"><?= $employee['emp_id'] ?> - <?= $employee['firstname'] ?> <?= $employee['lastname'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <!-- <input type="text" id="employee_id" name="employee_id" class="form-control" placeholder="eg: 0001" /> -->
                <small>Error message</small>
            </div>

            <div class="form-control form-outline form-input">
                <label class="form-label" for="username">Username</label>
                <input type="username" name="username" id="username" class="form-control" placeholder="johndoe" />
                <small>Error message</small>
            </div>

            <div class="form-control form-outline form-input">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                <small>Error message</small>
            </div>

            <div class="form-control form-outline form-input">
                <label class="form-label" for="c_password">Confirm Password</label>
                <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm your password" />
                <small>Error message</small>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-control form-outline form-input">
                        <label class="form-label" for="role">Role</label>
                        <select class="form-select" aria-label="Default select example" name="role" id="role">
                            <option value="">Select role...</option>
                            <option value="HR Manager">HR Manager</option>
                            <option value="Second Manager">Second Manager</option>
                            <option value="General Employee">General Employee</option>
                        </select>
                        <small>Error message</small>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-outline dropdown mb-4">
                        <label class="form-label up-lable" for="email">Profile Picture</label>
                        <input class="up-input" id="image" type="file" name="image" accept="image/*">
                    </div>
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="submit" name="submit">Add User</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/addUserValidate.js" />

    </div>
</div>