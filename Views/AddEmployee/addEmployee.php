<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add New Employee</h4>
        </div>

        <form>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">First Name</label>
                    <input type="text" id="first_name" class="form-control" placeholder="First Name" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">Last Name</label>
                    <input type="text" id="last_name" class="form-control" placeholder="Last Name" />
                </div>
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">Mobile Number</label>
                    <input type="text" id="moble_no" class="form-control" placeholder="Mobile Number" />
                </div>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="email">Address</label>
                <input type="text" id="address" class="form-control" placeholder="Address" />
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">Date of Birth</label>
                    <input type="date" id="birthday" class="form-control" placeholder="BIrthday" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Marital Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select marital status...</option>
                        <option value="married">Married</option>
                        <option value="unmarried">Unmarried</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">Job Title</label>
                    <input type="text" id="job_title" class="form-control" placeholder="Ex: Supervisor" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="firstname">Pay Grade</label>
                    <input type="text" id="pay_grade" class="form-control" placeholder="Pay  Grade" />
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="button">Add Employee</button>
            </div>
        </form>
    </div>
</div>