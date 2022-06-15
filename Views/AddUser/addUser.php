<!doctype html>
<html lang="en">

<head>
    <title>Add User</title>
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

        .wrapper {
            max-width: 600px;
            min-height: 380px;
            margin: 50px auto;
            padding: 40px 30px 30px 30px;
            background-color: #ffffff;
            border-radius: 15px;
        }

        .up-input {
            border: 1px dashed #aaa;
            width: 278px;
            max-width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
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

        .hr_logo img {
            width: 100%;
            height: 150px;
            object-fit: cover;
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

        /* Navbar styles */

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #ffffff;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .sidenav a {
            /* padding: 6px 8px 6px 16px; */
            text-decoration: none;
            /* color: #818181; */
            display: block;
            text-align: center;
            margin: 20px;
            padding: 10px;
            border-bottom: 1px solid gray;
        }

        .sidenav a:hover {
            color: white;
            background-image: url(../../Resources/Images/bg.jpg);
            background-size: cover;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .fas {
            margin-right: 10px;
        }
    </style>

</head>

<body>
    <div class="sidenav">
        <div class="logo hr_logo">
            <img src="../../Resources/Images/hrms_logo.png" alt="logo">
        </div>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#clients">Clients</a>
        <a href="#contact">Contact</a>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="logo">
                <img src="../../Resources/Images/login.png" alt="logo">
            </div>
            <div class="text-center">
                <h4 class="mt-1 mb-4 pb-1">Add New User</h4>
            </div>

            <form>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Employee ID</label>
                    <input type="email" id="employee_id" class="form-control" placeholder="Employee ID" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Email address" />
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4" style="margin: 10px 0;">
                        <label class="form-label" for="email">Role</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select leave type...</option>
                            <option value="annual">HR Manager</option>
                            <option value="casual">Second Manager</option>
                            <option value="maternity">General Employee</option>
                        </select>
                    </div>

                    <div class="form-outline col-md-6 mb-4">
                        <label class="form-label" for="email">Profile Picture</label>
                        <input class="up-input" id="fileToUpload" type="file" name="fileToUpload" accept="image/*">
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <!--- to continue enter YOUR password --->
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Password" />
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" type="button">Add User</button>
                </div>
            </form>
        </div>
    </div>
</body>