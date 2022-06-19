<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add New Employee</h4>
        </div>

        <form action="#" method="POST">

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" />
                </div>
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="mobile_no">Mobile Number</label>
                    <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="Mobile Number" />
                </div>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Address" />
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="birthday">Date of Birth</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" placeholder="BIrthday" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="marital_status">Marital Status</label>
                    <select class="form-select" id="marital_status" name="marital_status" aria-label="Default select example">
                        <option selected>Select marital status...</option>
                        <option value="married">Married</option>
                        <option value="unmarried">Unmarried</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="job_title">Job Title</label>
                    <input type="text" id="job_title" name="job_title" class="form-control" placeholder="Ex: Supervisor" />
                </div>
                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="pay_grade">Pay Grade</label>
                    <select class="form-select" id="pay_grade" name="pay_grade" aria-label="Default select example">
                        <option selected>Select pay grade...</option>
                        <option value="married">Grade 1</option>
                        <option value="unmarried">Geade 2</option>
                        <option value="unmarried">Geade 3</option>
                    </select>
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" name="submit" type="button">Add Employee</button>
            </div>
        </form>
    </div>
</div>