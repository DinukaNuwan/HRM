<!-- <div class="sidenav">
    <div class="logo hr_logo">
        <img src="../../Resources/Images/hrms_logo.png" alt="logo">
    </div>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
</div> -->
<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="../../Resources/Images/login.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add New User</h4>
        </div>

        <form>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Employee ID</label>
                <input type="email" id="employee_id" class="form-control" placeholder="Employee ID" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Email address" />
            </div>
            <div class="row">
                <div class="col-md-6 mb-4" style="margin: 10px 0;">
                    <label class="form-label" for="email">Role</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select leave type...</option>
                        <option value="annual">HR Manager</option>
                        <option value="casual">Second Manager</option>
                        <option value="maternity">General Employee</option>
                    </select>
                </div>

                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Profile Picture</label>
                    <input class="up-input" id="fileToUpload" type="file" name="fileToUpload" accept="image/*">
                </div>
            </div>

            <div class="form-outline mb-4">
                <!--- to continue enter YOUR password --->
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control" placeholder="Password" />
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="button">Add User</button>
            </div>
        </form>
    </div>
</div>