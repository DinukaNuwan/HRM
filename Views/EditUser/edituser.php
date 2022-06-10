<!doctype html>
<html lang="en">

<head>
    <title>Update Info</title>
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

        .wrapper {
            max-width: 600px;
            min-height: 400px;
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
    </style>

</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="logo">
                <img src="../../Resources/Images/login.png" alt="logo">
            </div>
            <div class="text-center">
                <h4 class="mt-1 mb-4 pb-1">Update Info</h4>
            </div>

            <form>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">First Name</label>
                    <input type="text" id="firstname" class="form-control" placeholder="First Name" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Last Name</label>
                    <input type="text" id="lastname" class="form-control" placeholder="Last Name" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Address</label>
                    <input type="text" id="address" class="form-control" placeholder="Address" />
                </div>

                <div class="form-outline col-md-6 mb-4">
                    <label class="form-label" for="email">Profile Picture</label>
                    <input class="up-input" id="fileToUpload" type="file" name="fileToUpload" accept="image/*">
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Birthday</label>
                    <input type="text" id="birthday" class="form-control" placeholder="Birthday" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="email">Mobile Number</label>
                    <input type="text" id="mobileno" class="form-control" placeholder="Mobile Number" />
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" type="button" style="min-width: 100%;">Add User</button>
                </div>
            </form>
        </div>
    </div>
</body>