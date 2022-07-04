<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/login.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Login</h4>
        </div>        

        <form method="POST" action="<?= WEBROOT . 'login' ?>" id="form" class="form" onsubmit="return checkInputs()">
            <div class="form-control form-outline form-input <?php if (isset($username_err)) { echo "error"; } ?>">
                <label class="form-label" for="username">Username</label>
                <input type="username" name="username" id="username" class="form-control" placeholder="johndoe" value="<?php
                            if (isset($_GET['username']) && $_GET['username']) { echo $_GET['username']; } ?>"/>
                <small><?php if (isset($username_err)) { echo $username_err; } else { echo "Error message"; } ?></small>
            </div>
            <div class="form-control form-outline form-input <?php if (isset($password_err)) { echo "error"; } ?>">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                <small><?php if (isset($password_err)) { echo $password_err; } else { echo "Error message"; } ?></small>
            </div>
            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="submit" name="submit">Log in</button>
                <br><br>
                <a class="text-muted" href="#">Forgot password?</a>
                
            </div>
        </form>

        <?php
                if (isset($error)) {
                ?>  
                    <!-- Toast message to display error -->
                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="liveToast" class="toast show fade" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header" style="color: crimson;">
                                <i class="fas fa-times-circle" style="color: crimson;"></i>
                                <strong class="me-auto">Login Failed</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                <?= $error ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

        <script src="<?= WEBROOT ?>Public/JavaScript/loginValidate.js" />

    </div>
</div>