<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/adduser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Add New Employee</h4>
        </div>

        <form method="POST" action="<?= WEBROOT . 'addEmployee' ?>" id="form" class="form" onsubmit="return checkInputs()">

            <div class="personal">
                <div class="row">
                    <p><i class="fas fa-user-shield"></i>Personal Details:</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" />
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Doe" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="johndoe@email.com" />
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="mobile_no">Mobile Number</label>
                            <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="+947XXXXXXXXX" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>

                <div class="form-control form-outline form-input">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="Address" />
                    <small>Error message</small>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="birthday">Date of Birth</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" placeholder="BIrthday" />
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input">
                            <label class="form-label" for="marital_status">Marital Status</label>
                            <select class="form-select" id="marital_status" name="marital_status" aria-label="Default select example">
                                <option selected>Select marital status...</option>
                                <option value="married">Married</option>
                                <option value="unmarried">Unmarried</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="employment">
                <div class="row">
                    <p><i class="fas fa-briefcase"></i>Employment Deatis:</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="emp">
                            <label class="form-label" for="firstname">Job Title</label>
                            <select class="form-select" name="job_title" aria-label="Default select example">
                                <option selected>Select job title...</option>
                                <option value="HR Manager">HR Manager</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Software Engineer">Software Engineer</option>
                                <option value="QA Engineer">QA Engineer</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="emp">
                            <label class="form-label" for="pay_grade">Pay Grade</label>
                            <select class="form-select" id="pay_grade" name="pay_grade" aria-label="Default select example">
                                <option selected>Select pay grade...</option>
                                <option value="Level 1">Level 1</option>
                                <option value="Level 2">Level 2</option>
                                <option value="Level 3">Level 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="emp">
                            <label class="form-label" for="pay_grade">Employment Status</label>
                            <select class="form-select" id="emp_status" name="emp_status" aria-label="Default select example">
                                <option selected>Select employment status...</option>
                                <option value="Intern-Fulltime">Intern-Fulltime</option>
                                <option value="Intern-Parttime">Intern-Parttime</option>
                                <option value="Contract-Fulltime">Contract-Fulltime</option>
                                <option value="Contract-Parttime">Contract-Parttime</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="emergency">
                <div class="row">
                    <p><i class="fas fa-exclamation-triangle"></i>Emergency Details:</p>
                </div>
                <div class="form-control form-outline form-input" id="emg">
                    <label class="form-label" for="name">Name of the Contact Person</label>
                    <input type="text" id="emergency_name" name="emergency_name" class="form-control" placeholder="John Doe" />
                    <small>Error message</small>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="emg">
                            <label class="form-label" for="relationship">Relationship With Him/her</label>
                            <input type="text" id="relationship" name="relationship" class="form-control" placeholder="Ex: Mother" />
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input" id="emg">
                            <label class="form-label" for="mobile_no">Mobile Number</label>
                            <input type="text" id="emergency_moble_no" name="emergency_mobile_no" class="form-control" placeholder="+947XXXXXXXXX" />
                            <small>Error message</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" name="submit" type="submit">Add Employee</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/addEmployeeValidate.js" />

    </div>
</div>