<div class="container">
    <div class="wrapper">
        <div class="logo">
            <img src="<?= WEBROOT ?>/Resources/Images/login.png" alt="logo" height="50px" width="50px">
        </div>
        <div class="text-center">
            <h4 class="mt-1 mb-4 pb-1">Login</h4>
        </div>

        <form method="POST" action="<?= WEBROOT . 'login' ?>">
            <div class="form-outline form-input mb-4" style="border-radius: 20px;">
                <label class="form-label" for="username">Username</label>
                <input type="username" name="username" id="username" class="form-control" placeholder="abc@email.com" />
            </div>

            <div class="form-outline form-input mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
                <button class="btn btn-primary" type="submit" name="submit">Log in</button>
                <br><br>
                <a class="text-muted" href="#">Forgot password?</a>
            </div>
        </form>

    </div>
</div>