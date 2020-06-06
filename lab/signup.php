<?php
     include_once "controllers/user.php";
     include_once "controllers/fileUploader.php";
     if(isset($_POST['submit']))
     {
         $msg;
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $city = $_POST['city'];
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         $file = $_FILES['profile_pic']['name'];
         $utc_timestamp = $_POST['utc_timestamp'];
         $offset = $_POST['time_zone_offset'];
         $fin_file = $_FILES['profile_pic']['tmp_name'];


         $user = new User;
         $user->setFname($fname);
         $user->setLname($lname);
         $user->setCity($city);
         $user->setEmail($email);
         $user->setPassword($pass);
         $user->setUTC($utc_timestamp);
         $user->setOffset($offset);

         $uploader = new FIle_Uploader;

         $uploader->setOriginalName($file);
         $uploader->setFinalFIleName($fin_file);
         $file_upload_response = $uploader->fileUpload();

         if($user->isUserExist() === true)
         {
             echo " A user with a similar email address already exists";
         }
         else
         {
             echo $file;
            // $res = $user->save();
 
            // if($res && $file_upload_response)
            // {
            //     header("location:login.php");
            // }
            // else
            // {
            //     echo "An error occurred";
            // }
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
                    <strong>Sign up</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    <form class="md-form" style="color: #757575;" action="signup.php" method="POST" id="signup-form" enctype="multipart/form-data">

                        <div class="md-form">
                            <input type="text" id="lname" class="form-control" name="fname" required>
                            <label for="form1">First Name</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="lname" class="form-control" name="lname" required>
                            <label for="form1">Last Name</label>
                        </div>
                        <div class="md-form">
                            <input type="text" id="city" class="form-control" name="city" required>
                            <label for="form1">City Name</label>
                        </div>
                        <div class="md-form">
                            <input type="email" id="email" class="form-control" name="email" required>
                            <label for="form1">Email Address</label>
                        </div>
                        
                        <div class="md-form">
                            <input type="password" id="pass" class="form-control" name="pass" required>
                            <label for="form1">Password</label>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profile_pic" id="customFileLang" lang="en">
                            <label class="custom-file-label" for="customFileLang">Choose file</label>
                        </div>
                        <input type="hidden" name="utc_timestamp" id="utc_timestamp" value="">
                        <input type="hidden" name="time_zone_offset" id="time_zone_offset" value="">
                        <div class="md-form">
                            <input type="submit" name="submit" value="Sign Up" class="btn btn-outline-primary btn-block btn-rounded waves-effect">
                        </div>
                        <hr>
                        <div class="text-center">
                            <p>Already a member?
                                <a href="login.php">Log in</a>
                            </p>
                            <p>or sign up with:</p>
                            <a type="button" class="btn-floating btn-fb btn-sm">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-li btn-sm">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                                <i class="fab fa-github"></i>
                            </a>
                            <hr>
                            <p>By clicking
                                <em>Sign up</em> you agree to our
                                <a href="" target="_blank">terms of service</a> and
                                <a href="" target="_blank">terms of service</a>. 
                            </p>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timezone-js/0.4.13/date.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>