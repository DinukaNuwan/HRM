<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add New User</h4>
        </div>

        <form method="POST" action="<?= WEBROOT . 'addUser' ?>">

            <div class="form-outline mb-4">
                <label class="form-label" for="id">Employee ID</label>
                <input type="text" id="employee_id" name="employee_id" class="form-control" placeholder="Employee ID" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="username">Username</label>
                <input type="username" name="username" id="username" class="form-control" placeholder="Username" />
            </div>
            <div class="row">
                <div class="col-md-6 mb-4" style="margin: 10px 0;">
                    <label class="form-label" for="role">Role</label>
                    <select class="form-select" aria-label="Default select example" name="role" id="role">
                        <option selected>Select role...</option>
                        <option value="HR Manager">HR Manager</option>
                        <option value="Second Manager">Second Manager</option>
                        <option value="General Employee">General Employee</option</>
                    </select>
                </div>

                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Profile Picture</label>
                    <input class="up-input" id="fileToUpload" type="file" name="photo" name="fileToUpload" accept="image/*">
                </div>
            </div>

            <div class="form-outline mb-4">
                <!--- to continue enter YOUR password --->
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="submit" name="submit">Add User</button>
            </div>
        </form>
    </div>
</div>