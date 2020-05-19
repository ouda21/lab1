<?php

    include_once "user_int.php";
    include_once "db-connect.php";
    session_start();
    class User implements User_Int
    {
        private $email;
        private $password;

        public function __construct($e,$p)
        {
            $this->email = $e;
            $this->password = $p;
        }
        public function login()
        {
            $db = new Database_Connector;
            $conn = $db->connect();

            $stmt = $conn->prepare("SELECT email,pass FROM `users` WHERE email= ? AND pass = ?");
            $stmt->bind_param("ss",$this->email,$this->password);
            $stmt->execute();
            $stmt->bind_result($this->email, $this->password);
            $stmt->store_result();
            if($stmt->num_rows == 1)  //To check if the row exists
            {
                if($stmt->fetch()) //fetching the contents of the row
                {
                    $_SESSION['username'] = $this->email;
                    header("location:landing.php");
                }            
            }
            else {
                echo "INVALID USERNAME/PASSWORD Combination!";
            }
        }
    }