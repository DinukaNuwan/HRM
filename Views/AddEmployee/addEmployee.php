<?php
$yesterday = date('Y-m-d', strtotime("-1 days"));
?>

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
                        <div class="form-control form-outline form-input <?php if (isset($first_name_err)) { echo "error"; } ?>">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" />
                            <small><?php if (isset($first_name_err)) { echo $first_name_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($last_name_err)) { echo "error"; } ?>">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Doe" />
                            <small><?php if (isset($last_name_err)) { echo $last_name_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($email_err)) { echo "error"; } ?>">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="johndoe@email.com" />
                            <small><?php if (isset($email_err)) { echo $email_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($mobile_no_err)) { echo "error"; } ?>">
                            <label class="form-label" for="mobile_no">Mobile Number</label>
                            <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="07XXXXXXXX" />
                            <small><?php if (isset($mobile_no_err)) { echo $mobile_no_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                </div>

                <div class="form-control form-outline form-input <?php if (isset($address_err)) { echo "error"; } ?>">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control" placeholder="Address" />
                    <small><?php if (isset($address_err)) { echo $address_err; } else { echo "Error message"; } ?></small>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($birthday_err)) { echo "error"; } ?>">
                            <label class="form-label" for="birthday">Date of Birth</label>
                            <input type="date" id="birthday" name="birthday" class="form-control" max=<?= strval($yesterday) ?>>
                            <small><?php if (isset($birthday_err)) { echo $birthday_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($marital_status_err)) { echo "error"; } ?>">
                            <label class="form-label" for="marital_status">Marital Status</label>
                            <select class="form-select" id="marital_status" name="marital_status" aria-label="Default select example">
                                <option value="">select marital status...</option>
                                <option value="married">Married</option>
                                <option value="unmarried">Unmarried</option>
                            </select>
                            <small><?php if (isset($marital_status_err)) { echo $marital_status_err; } else { echo "Error message"; } ?></small>
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
                        <div class="form-control form-outline form-input <?php if (isset($job_title_err)) { echo "error"; } ?>" id="emp">
                            <label class="form-label" for="job_title">Job Title</label>
                            <select class="form-select" name="job_title" id="job_title" aria-label="Default select example">
                                <option value="">select job title...</option>
                                <option value="HR Manager">HR Manager</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Software Engineer">Software Engineer</option>
                                <option value="QA Engineer">QA Engineer</option>
                            </select>
                            <small><?php if (isset($job_title_err)) { echo $job_title_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($pay_grade_err)) { echo "error"; } ?>" id="emp">
                            <label class="form-label" for="pay_grade">Pay Grade</label>
                            <select class="form-select" id="pay_grade" name="pay_grade" aria-label="Default select example">
                                <option value="">select pay grade...</option>
                                <option value="Level 1">Level 1</option>
                                <option value="Level 2">Level 2</option>
                                <option value="Level 3">Level 3</option>
                            </select>
                            <small><?php if (isset($pay_grade_err)) { echo $pay_grade_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($emp_status_err)) { echo "error"; } ?>" id="emp">
                            <label class="form-label" for="emp_status">Employment Status</label>
                            <select class="form-select" id="emp_status" name="emp_status" aria-label="Default select example">
                                <option value="">select employment status...</option>
                                <option value="Intern-Fulltime">Intern-Fulltime</option>
                                <option value="Intern-Parttime">Intern-Parttime</option>
                                <option value="Contract-Fulltime">Contract-Fulltime</option>
                                <option value="Contract-Parttime">Contract-Parttime</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Freelance">Freelance</option>
                            </select>
                            <small><?php if (isset($emp_status_err)) { echo $emp_status_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($department_err)) { echo "error"; } ?>" id="emp">
                            <label class="form-label" for="department">Department</label>
                            <select class="form-select td-value" id="department" name="department" aria-label="Default select example">
                                <option value="">select department...</option>
                                <option value="HR">HR</option>
                                <option value="IT">IT</option>
                                <option value="Production">Production</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Finance">Finance</option>
                            </select>
                            <small><?php if (isset($department_err)) { echo $department_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="emergency">
                <div class="row">
                    <p><i class="fas fa-exclamation-triangle"></i>Emergency Details:</p>
                </div>
                <div class="form-control form-outline form-input <?php if (isset($emergency_name_err)) { echo "error"; } ?>" id="emg">
                    <label class="form-label" for="name">Name of the Contact Person</label>
                    <input type="text" id="emergency_name" name="emergency_name" class="form-control" placeholder="John Doe" />
                    <small><?php if (isset($emergency_name_err)) { echo $emergency_name_err; } else { echo "Error message"; } ?></small>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($relationship_err)) { echo "error"; } ?>" id="emg">
                            <label class="form-label" for="relationship">Relationship With Him/her</label>
                            <input type="text" id="relationship" name="relationship" class="form-control" placeholder="Ex: Mother" />
                            <small><?php if (isset($relationship_err)) { echo $relationship_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-control form-outline form-input <?php if (isset($emergency_mobile_no_err)) { echo "error"; } ?>" id="emg">
                            <label class="form-label" for="mobile_no">Mobile Number</label>
                            <input type="text" id="emergency_moble_no" name="emergency_mobile_no" class="form-control" placeholder="07XXXXXXXX" />
                            <small><?php if (isset($emergency_mobile_no_err)) { echo $emergency_mobile_no_err; } else { echo "Error message"; } ?></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center pt-1 pb-1">
                <button class="btn btn-primary" name="submit" type="submit">Add Employee</button>
            </div>
        </form>
        <?php
        if (isset($error)) {
            echo "error in front ";
            var_dump($error);
        }
        ?>

        <?php
        if (isset($success)) {
        ?>
            <!-- Toast message to display error -->
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                <div id="liveToast" class="toast show fade" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header" style="color: green;">
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        <strong class="me-auto">Success</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        <?= $success ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <script src="<?= WEBROOT ?>Public/JavaScript/addEmployeeValidate.js" />

    </div>
</div>