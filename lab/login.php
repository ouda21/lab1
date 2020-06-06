<?php
     include_once "controllers/user.php";
     if(isset($_POST['submit']))
     {
         $msg;
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         
         $user = new User;
         $user->setEmail($email);
         $user->setPassword($pass);
        
         if($user->isPasswordCorrect())
         {
             $user->login();
             $user->createUserSession();
         }
         else
         {
             echo 'error';
             //header("location:login.php");
         }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="assets/MDB/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/MDB/css/mdb.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card sign-up">
                <h5 class="card-header info-color white-text text-center py-3">
                    <strong>Sign in</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="md-form" style="color: #757575;" action="login.php" method="POST" id="signup-form">

                        <div class="md-form">
                            <input type="email" id="email" class="form-control" name="email" required>
                            <label for="form1">Email Address</label>
                        </div>
                        <div class="md-form">
                            <input type="password" id="pass" class="form-control" name="pass" required>
                            <label for="form1">Password</label>
                        </div>
                       
                        <div class="md-form">
                            <input type="submit" name="submit" value="Sign In" class="btn btn-outline-primary btn-block btn-rounded waves-effect">
                        </div>
                        <hr>
                        <div class="text-center">
                            <p>Not a member?
                                <a href="signup.php">Sign Up</a>
                            </p>
                            <p>or sign in with:</p>
                            <a type="button" class="btn-floating btn-fb btn-sm">
                                <i class="fa fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-li btn-sm">
                                <i class="fa fa-linkedin-in"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                                <i class="fab fa-github"></i>
                            </a>
                            <hr>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/MDB/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/MDB/js/popper.js"></script>
    <script type="text/javascript" src="assets/MDB/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/MDB/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timezone-js/0.4.13/date.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>