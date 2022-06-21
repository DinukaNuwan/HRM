<?php
    $yesterday = date('Y-m-d',strtotime("-1 days"));
?>

<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/edituser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Update Info</h4>
        </div>

        <form action="#" method="POST" id="form" class="form" onsubmit="return checkInputs()">

            <div class="form-control form-outline form-input">
                <label class="form-label" for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" />
                <small>Error message</small>
            </div>

            <div class="form-control form-outline form-input">
                <label class="form-label" for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" />
                <small>Error message</small>
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
                        <input type="date" id="birthday" name="birthday" class="form-control" max=<?= strval($yesterday) ?> />
                        <small>Error message</small>
                    </div>
                </div>

                <div class="form-outline col-md-6 mb-2">
                    <label class="form-label" for="">Profile Picture</label>
                    <input class="up-input" type="file" id="fileToUpload" name="fileToUpload" accept="image/*">
                </div>
            </div>

            <div class="form-control form-outline form-input">
                <label class="form-label" for="mobile_no">Mobile Number</label>
                <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="Mobile Number" />
                <small>Error message</small>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" name="submit" type="submit">Add User</button>
            </div>
        </form>

        <script src="<?= WEBROOT ?>Public/JavaScript/editUserValidate.js" />
    
    </div>
</div>