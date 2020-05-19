<?php
    include_once "php/user.php";

    if(isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $password =md5($_POST["pass"]);

        $user = new User($email,$password);
        if($user->login())
        {
            
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
    <form action="" method="post">
        <input type="email" name="email" id="" placeholder="Enter your email"><br><br>
        <input type="password" name="pass" id="" placeholder="Enter your password"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>