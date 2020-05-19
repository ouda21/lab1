<?php
    include_once "php/signup.php";

    if(isset($_POST["submit"]))
    {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $email = $_POST["email"];
        $pass = md5($_POST["pass"]);

        $user = new SignUp($fname,$lname,$city,$email,$pass);
        $checker = $user->checkUser();
        if($checker === TRUE)
        {
            die("User with similar email exist<a href='login.php'> Login Instead</a>");
        }
        else
        {
            if($save = $user->save())
            {
                echo "User saved successfully";
            }
            else
            {
                echo "<a href='index.php'>Login</a>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="fname" id="" placeholder="Enter your first name"><br><br>
        <input type="text" name="lname" id="" placeholder="Enter your last name"><br><br>
        <input type="text" name="city" id="" placeholder="Enter city"><br><br>
        <input type="email" name="email" id="" placeholder="Enter your email"><br><br>
        <input type="password" name="pass" id="" placeholder="Enter your password"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>