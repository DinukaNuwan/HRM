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
            <img src="<?= WEBROOT ?>/Resources/Images/edituser.png" alt="logo">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Update Info</h4>
        </div>

        <form action="#" method="POST">

            <div class="form-outline mb-4">
                <label class="form-label" for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="address">Address</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Address" />
            </div>

            <div class="row">
                <div class="form-outline col-md-6 mb-4" style="margin: 10px 0;">
                    <label class="form-label" for="birthday">Date of Birth</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" placeholder="BIrthday" />
                </div>

                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="">Profile Picture</label>
                    <input class="up-input" type="file" id="fileToUpload" name="fileToUpload" accept="image/*">
                </div>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="mobile_no">Mobile Number</label>
                <input type="text" id="moble_no" name="mobile_no" class="form-control" placeholder="Mobile Number" />
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" name="submit" type="button">Add User</button>
            </div>
        </form>
    </div>
</div>