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

                <div class="row profile_info">

                    <div class="personal">
                        <div class="row">
                            <p><i class="fas fa-user-shield"></i>Personal Details:</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John" value="<?= $profile_details['firstname'] ?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="John" value="<?= $profile_details['lastname'] ?>" disabled />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="johndoe@email.com" value="<?= $profile_details['email'] ?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="mobile_no">Mobile Number</label>
                                <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="07XXXXXXXX" value="<?= $profile_details['mobile'] ?>" disabled />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label mt-10" for="address">Address</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Address" value="<?= $profile_details['address'] ?>" disabled />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="birthday">Date of Birth</label>
                                <input type="date" id="birthday" name="birthday" class="form-control" max=<?= strval($yesterday) ?> value="<?= $profile_details['date_of_birth'] ?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="marital_status">Marital Status</label>
                                <select class="form-select" id="marital_status" name="marital_status" aria-label="Default select example" disabled>
                                    <option value=""><?php if ($profile_details['marital_status'] == '1') echo 'Married';
                                                        else echo 'Unmarried'; ?></option>
                                    <option value="married">Married</option>
                                    <option value="unmarried">Unmarried</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="employment">
                        <div class="row">
                            <p><i class="fas fa-briefcase"></i>Employment Deatis:</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="firstname">Job Title</label>
                                <select class="form-select" name="job_title" id="job_title" aria-label="Default select example" disabled>
                                    <option value=""><?= $profile_details['job_title'] ?></option>
                                    <option value="HR Manager">HR Manager</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Software Engineer">Software Engineer</option>
                                    <option value="QA Engineer">QA Engineer</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="pay_grade">Pay Grade</label>
                                <select class="form-select" id="pay_grade" name="pay_grade" aria-label="Default select example" disabled>
                                    <option value="">Level <?= $profile_details['pay_grade'] ?></option>
                                    <option value="Level 1">Level 1</option>
                                    <option value="Level 2">Level 2</option>
                                    <option value="Level 3">Level 3</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="pay_grade">Employment Status</label>
                                <select class="form-select" id="emp_status" name="emp_status" aria-label="Default select example" disabled>
                                    <option value=""><?php
                                                        $status = ['1' => 'Intern-Fulltime', '2' => 'Intern-Parttime', '3' => 'Contract-Fulltime', '4' => 'Contract-Parttime', '5' => 'Permanent', '6' => 'Freelance'];
                                                        echo $status[$profile_details['employment_status']];
                                                        ?></option>
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

                    <div class="emergency">
                        <div class="row">
                            <p><i class="fas fa-exclamation-triangle"></i>Emergency Details:</p>
                        </div>
                        <label class="form-label" for="name">Name of the Contact Person</label>
                        <input type="text" id="emergency_name" name="emergency_name" class="form-control" placeholder="John Doe" value="<?= $profile_details['name'] ?>" disabled />

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="relationship">Relationship With Him/her</label>
                                <input type="text" id="relationship" name="relationship" class="form-control" placeholder="Ex: Mother" value="<?= $profile_details['relationship'] ?>" disabled />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="mobile_no">Mobile Number</label>
                                <input type="text" id="emergency_moble_no" name="emergency_mobile_no" class="form-control" placeholder="07XXXXXXXX" value="<?= $profile_details['emgMobile'] ?>" disabled />
                            </div>
                        </div>
                    </div>

                    <!-- <div class="personal">
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
                                    <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="07XXXXXXXX" />
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
                                    <input type="date" id="birthday" name="birthday" class="form-control" max=<?= strval($yesterday) ?>>
                                    <small>Error message</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-control form-outline form-input">
                                    <label class="form-label" for="marital_status">Marital Status</label>
                                    <select class="form-select" id="marital_status" name="marital_status" aria-label="Default select example">
                                        <option value="">select marital status...</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                    <small>Error message</small>
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
                                    <select class="form-select" name="job_title" id="job_title" aria-label="Default select example">
                                        <option value="">select job title...</option>
                                        <option value="HR Manager">HR Manager</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Software Engineer">Software Engineer</option>
                                        <option value="QA Engineer">QA Engineer</option>
                                    </select>
                                    <small>Error message</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-control form-outline form-input" id="emp">
                                    <label class="form-label" for="pay_grade">Pay Grade</label>
                                    <select class="form-select" id="pay_grade" name="pay_grade" aria-label="Default select example">
                                        <option value="">select pay grade...</option>
                                        <option value="Level 1">Level 1</option>
                                        <option value="Level 2">Level 2</option>
                                        <option value="Level 3">Level 3</option>
                                    </select>
                                    <small>Error message</small>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-control form-outline form-input" id="emp">
                                    <label class="form-label" for="pay_grade">Employment Status</label>
                                    <select class="form-select" id="emp_status" name="emp_status" aria-label="Default select example">
                                        <option value="">select employment status...</option>
                                        <option value="Intern-Fulltime">Intern-Fulltime</option>
                                        <option value="Intern-Parttime">Intern-Parttime</option>
                                        <option value="Contract-Fulltime">Contract-Fulltime</option>
                                        <option value="Contract-Parttime">Contract-Parttime</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Freelance">Freelance</option>
                                    </select>
                                    <small>Error message</small>
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
                                    <input type="text" id="emergency_moble_no" name="emergency_mobile_no" class="form-control" placeholder="07XXXXXXXX" />
                                    <small>Error message</small>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <?php
                    if ($role != '4') {
                    ?>
                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary" name="submit" type="submit">Edit Info</button>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="text-center pt-1 mb-5 pb-1 edit_disabled">
                            <button class="btn btn-primary" name="submit" type="submit" disabled>Edit Info</button>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>