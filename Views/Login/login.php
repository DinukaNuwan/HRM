<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(../../Resources/Images/bg.jpg);
            background-size: cover;
        }

        .btn {
            min-width: 100%;
        }

        .btn {
            width: fit-content;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
            border: 1px solid gray;
        }

        .btn:hover {
            color: white;
            background-image: url(../../Resources/Images/bg.jpg);
            background-size: cover;
        }

        .wrapper {
            max-width: 400px;
            min-height: 400px;
            margin: 50px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ffffff;
            border-radius: 15px;
        }

        .logo {
            width: 100px;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="logo">
                <img src="../../Resources/Images/login.png" alt="logo">
            </div>
            <div class="text-center">
                <h4 class="mt-1 mb-4 pb-1">Login</h4>
            </div>

            <form action=<?php echo WEBROOT . "login" ?> method="post">
                <div class="form-outline form-input mb-4" style="border-radius: 20px;">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email address" name="email"/>
                </div>

                <div class="form-outline form-input mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password"/>
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" type="submit" name="login">Log in</button>
                    <br><br>
                    <a class="text-muted" href="#">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</body>