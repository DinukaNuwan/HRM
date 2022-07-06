<?php
$yesterday = date('Y-m-d', strtotime("-1 days"));
?>

<div class="container">
    <div class="wrapper">

        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Profile</h4>
        </div>

        <?php
        if (isset($profile_details)) {
        ?>

            <div class="container">
                <div class="row profile_heading">
                    <div class="col-lg-4">
                        <div class="logo img">
                            <?php
                            if ($profile_details['photo'])
                                echo '<img src="data:image;base64,' . base64_encode($profile_details['photo']) . '" alt="image" >';
                            else
                                echo '<img src="' . WEBROOT . '/Resources/images/nopic.jpg" class="rounded-circle" width="50" />';
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-6 name">
                        <h5><?= $profile_details['firstname'] . ' ' . $profile_details['lastname'] ?></h5>
                        <h6><?= '@' . $profile_details['username'] ?></h6>
                        <?php
                        switch ($profile_details['role']) {
                            case '1':
                                echo '<h6 class="role_h"><i class="fas fa-user-cog"></i>Admin</h6>';
                                break;
                            case '2':
                                echo '<h6 class="role_h"><i class="fas fa-user-friends"></i>HR Manager</h6>';
                                break;
                            case '3':
                                echo '<h6 class="role_h"><i class="fas fa-user-tie"></i>Second Manager</h6>';
                                break;
                            case '4':
                                echo '<h6 class="role_h"><i class="fas fa-user-tie"></i>General Employee</h6>';
                                break;
                            default:
                                break;
                        }
                        ?>
                    </div>
                </div>

                <form method="POST" action="<?= WEBROOT . 'profile' ?>" id="form" class="form" onsubmit="return checkInputs()">
                    <div class="row profile_info">

                        <div class="personal">
                            <div class="row">
                                <p><i class="fas fa-user-shield"></i>Personal Details:</p>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($first_name_err)) { echo "error"; } ?>">
                                        <label class="form-label" for="first_name">First Name</label>
                                        <input type="text" id="first_name" name="first_name" class="form-control td-value" placeholder="John" value="<?= $profile_details['firstname'] ?>" disabled />
                                        <small><?php if (isset($first_name_err)) { echo $first_name_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($last_name_err)) { echo "error"; } ?>">
                                        <label class="form-label" for="last_name">Last Name</label>
                                        <input type="text" id="last_name" name="last_name" class="form-control td-value" placeholder="John" value="<?= $profile_details['lastname'] ?>" disabled />
                                        <small><?php if (isset($last_name_err)) { echo $last_name_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($email_err)) { echo "error"; } ?>">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control td-value" placeholder="johndoe@email.com" value="<?= $profile_details['email'] ?>" disabled />
                                        <small><?php if (isset($email_err)) { echo $email_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($mobile_no_err)) { echo "error"; } ?>">
                                        <label class="form-label" for="mobile_no">Mobile Number</label>
                                        <input type="text" id="moble_no" name="mobile_no" class="form-control td-value" placeholder="07XXXXXXXX" value="<?= $profile_details['mobile'] ?>" disabled />
                                        <small><?php if (isset($mobile_no_err)) { echo $mobile_no_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                            </div>

                            <div class="form-control form-outline form-input <?php if (isset($address_err)) { echo "error"; } ?>">
                                <label class="form-label mt-10" for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control td-value" placeholder="Address" value="<?= $profile_details['address'] ?>" disabled />
                                <small><?php if (isset($address_err)) { echo $address_err; } else { echo "Error message"; } ?></small>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($birthday_err)) { echo "error"; } ?>">
                                        <label class="form-label" for="birthday">Date of Birth</label>
                                        <input type="date" id="birthday" name="birthday" class="form-control td-value" max=<?= strval($yesterday) ?> value="<?= $profile_details['date_of_birth'] ?>" disabled />
                                        <small><?php if (isset($birthday_err)) { echo $birthday_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($marital_status_err)) { echo "error"; } ?>">
                                        <label class="form-label" for="marital_status">Marital Status</label>
                                        <select class="form-select td-value" id="marital_status" name="marital_status" aria-label="Default select example" disabled>
                                            <option value="married" <?php if ($profile_details['marital_status'] == '1') echo 'selected="selected"'; ?>>Married</option>
                                            <option value="unmarried" <?php if ($profile_details['marital_status'] == '2') echo 'selected="selected"'; ?>>Unmarried</option>
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
                                        <select class="form-select td-value" name="job_title" id="job_title" aria-label="Default select example" disabled>
                                            <option value="HR Manager" <?php if ($profile_details['job_title'] == 'HR Manager') echo 'selected="selected"'; ?>>HR Manager</option>
                                            <option value="Accountant" <?php if ($profile_details['job_title'] == 'Accountant') echo 'selected="selected"'; ?>>Accountant</option>
                                            <option value="Software Engineer" <?php if ($profile_details['job_title'] == 'Software Engineer') echo 'selected="selected"'; ?>>Software Engineer</option>
                                            <option value="QA Engineer" <?php if ($profile_details['job_title'] == 'QA Engineer') echo 'selected="selected"'; ?>>QA Engineer</option>
                                        </select>
                                        <small><?php if (isset($job_title_err)) { echo $job_title_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($pay_grade_err)) { echo "error"; } ?>" id="emp">
                                        <label class="form-label" for="pay_grade">Pay Grade</label>
                                        <select class="form-select td-value" id="pay_grade" name="pay_grade" aria-label="Default select example" disabled>
                                            <?= $profile_details['pay_grade']; ?>
                                            <option value="Level 1" <?php if ($profile_details['pay_grade'] == '1') echo 'selected="selected"'; ?>>Level 1</option>
                                            <option value="Level 2" <?php if ($profile_details['pay_grade'] == '2') echo 'selected="selected"'; ?>>Level 2</option>
                                            <option value="Level 3" <?php if ($profile_details['pay_grade'] == '3') echo 'selected="selected"'; ?>>Level 3</option>
                                        </select>
                                        <small><?php if (isset($pay_grade_err)) { echo $pay_grade_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($emp_status_err)) { echo "error"; } ?>" id="emp">
                                        <label class="form-label" for="emp_status">Employment Status</label>
                                        <select class="form-select td-value" id="emp_status" name="emp_status" aria-label="Default select example" disabled>
                                            <option value="Intern-Fulltime" <?php if ($profile_details['employment_status'] == '1') echo 'selected="selected"'; ?>>Intern-Fulltime</option>
                                            <option value="Intern-Parttime" <?php if ($profile_details['employment_status'] == '2') echo 'selected="selected"'; ?>>Intern-Parttime</option>
                                            <option value="Contract-Fulltime" <?php if ($profile_details['employment_status'] == '3') echo 'selected="selected"'; ?>>Contract-Fulltime</option>
                                            <option value="Contract-Parttime" <?php if ($profile_details['employment_status'] == '4') echo 'selected="selected"'; ?>>Contract-Parttime</option>
                                            <option value="Permanent" <?php if ($profile_details['employment_status'] == '5') echo 'selected="selected"'; ?>>Permanent</option>
                                            <option value="Freelance" <?php if ($profile_details['employment_status'] == '6') echo 'selected="selected"'; ?>>Freelance</option>
                                        </select>
                                        <small><?php if (isset($emp_status_err)) { echo $emp_status_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($department_err)) { echo "error"; } ?>" id="emp">
                                        <label class="form-label" for="department">Department</label>
                                        <select class="form-select td-value" id="department" name="department" aria-label="Default select example" disabled>
                                            <option value="HR" <?php if ($profile_details['department'] == '1') echo 'selected="selected"'; ?>>HR</option>
                                            <option value="IT" <?php if ($profile_details['department'] == '2') echo 'selected="selected"'; ?>>IT</option>
                                            <option value="Production" <?php if ($profile_details['department'] == '3') echo 'selected="selected"'; ?>>Production</option>
                                            <option value="Marketing" <?php if ($profile_details['department'] == '4') echo 'selected="selected"'; ?>>Marketing</option>
                                            <option value="Finance" <?php if ($profile_details['department'] == '5') echo 'selected="selected"'; ?>>Finance</option>
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
                                <input type="text" id="emergency_name" name="emergency_name" class="form-control td-value" placeholder="John Doe" value="<?= $profile_details['name'] ?>" disabled />
                                <small><?php if (isset($emergency_name_err)) { echo $emergency_name_err; } else { echo "Error message"; } ?></small>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($relationship_err)) { echo "error"; } ?>" id="emg">
                                        <label class="form-label" for="relationship">Relationship With Him/her</label>
                                        <input type="text" id="relationship" name="relationship" class="form-control td-value" placeholder="Ex: Mother" value="<?= $profile_details['relationship'] ?>" disabled />
                                        <small><?php if (isset($relationship_err)) { echo $relationship_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control form-outline form-input <?php if (isset($emergency_mobile_no_err)) { echo "error"; } ?>" id="emg">
                                        <label class="form-label" for="mobile_no">Mobile Number</label>
                                        <input type="text" id="emergency_moble_no" name="emergency_mobile_no" class="form-control td-value" placeholder="07XXXXXXXX" value="<?= $profile_details['emgMobile'] ?>" disabled />
                                        <small><?php if (isset($emergency_mobile_no_err)) { echo $emergency_mobile_no_err; } else { echo "Error message"; } ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
                        if ($role != '4') { ?>
                            <div class="text-center pt-1 pb-1">
                                <button class="btn btn-outline-primary" style="margin: 10px auto;" type="button" id="edit_btn" onclick="showHide()">Edit Info</button>
                                <button class="btn btn-outline-primary" style="margin: 10px auto;" name="submit" type="submit" id="save_btn" hidden>Save</button>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>

        <?php
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
        <script src="<?= WEBROOT ?>Public/JavaScript/profileValidate.js" />

    </div>
</div>