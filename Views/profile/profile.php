<div class="container">
    <div class="wrapper">

        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">My Profile</h4>
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
                                <label class="form-label" for="first_name">First Name: <?= $profile_details['firstname'] ?></label>

                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="last_name">Last Name: <?= $profile_details['lastname'] ?></label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="email">Email: <?= $profile_details['email'] ?></label>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="mobile_no">Mobile Number: .........</label>
                            </div>
                        </div>

                        <div class="row">
                            <label class="form-label" for="address">Address: <?= $profile_details['address'] ?></label>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="birthday">Date of Birth: <?= $profile_details['date_of_birth'] ?></label>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="marital_status">Marital Status: <?= $profile_details['marital_status'] ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="employment">
                        <div class="row">
                            <p><i class="fas fa-briefcase"></i>Employment Deatis:</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="firstname">Job Title: <?= $profile_details['job_title'] ?></label>

                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="pay_grade">Pay Grade: <?= $profile_details['pay_grade'] ?></label>

                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="pay_grade">Employment Status: <?= $profile_details['employment_status'] ?></label>

                            </div>
                        </div>
                    </div>

                    <div class="emergency">
                        <div class="row">
                            <p><i class="fas fa-exclamation-triangle"></i>Emergency Details:</p>
                        </div>
                        <label class="form-label" for="name">Name of the Contact Person: <?= $profile_details['name'] ?></label>

                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="relationship">Relationship With Him/her: <?= $profile_details['relationship'] ?></label>

                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="mobile_no">Mobile Number: ..............</label>

                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <button class="btn btn-primary" name="submit" type="submit">Edit Info</button>
                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
</div>