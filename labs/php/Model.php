<?php

    include_once 'User.php';
    
    if(isset($_POST["submit"]))
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $city = $_POST['city'];

        $user = new User($first_name,$last_name,$city);
        $res = $user->save();
        if($res)
        {
            echo "Operation Successful";
        }
        else
        {
            echo "Could not complete request";
        }
    }