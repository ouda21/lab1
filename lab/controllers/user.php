<?php

    include_once "interface/crud.php";
    include_once "interface/authenticator.php";
    include_once "config/database_connector.php";

    class User implements Crud,Authenticator
    {
        private $fname;
        private $lname;
        private $city;
        private $email;
        private $password;
        private $utc;
        private $offset;

        public function setFname($f)
        {
            $this->fname = $f;
        }
        public function setLname($l)
        {
            $this->lname = $l;
        }
        public function setCity($c)
        {
            $this->city = $c;
        }
        public function setEmail($e)
        {
            $this->email = $e;
        }
        public function setPassword($p)
        {
            $this->password = $p;
        }

        public function setUTC($u)
        {
            $this->utc = $u;
        }

        public function setOffset($f)
        {
            $this->offset = $f;
        }

        public function getFname()
        {
            return $this->fname;
        }
        public function getLname()
        {
            return $this->lname;
        }
        public function getCity()
        {
            return $this->city;
        }

        public function getEmail()
        {
            return $this->email;
        }
        public function getPassword()
        {
            return $this->password;
        }

        public function getUTC()
        {
            return $this->utc;
        }

        public function getOffset()
        {
            return $this->offset;
        }

        public static function create()
        {
            $instance = new self();
            return $instance;
        }
        
        public function getTime
        public function isPasswordCorrect()
        {
            $db = new Database_COnnect;
            $conn = $db->connect();

            $found = false;
            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_array($result))
            {
                if(password_verify($this->getPassword(),$row['password']))
                {
                    $found = true;
                }
                return $found;
            }
        }

        public function isUserExist()
        {
            $em = $this->getEmail();
            $db = new Database_Connect;
            $conn = $db->connect();

            $sql = "SELECT * FROM user WHERE email = '$em'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
                return true;
            }
            return false;

        }

        public function createUserSession()
        {
            session_start();
            $_SESSION['email'] = $this->email;
        }

        public function logout()
        {
            session_start();
            unset($_SESSION['email']);
            session_destroy();
            header("Location:login.php");
        }

        public function login()
        {
            if($this->isPasswordCorrect())
            {
                header("Location:private_page.php");
            }
        }
        public function save()
        {
            $fn = $this->getFname();
            $ln = $this->getLname();
            $ci = $this->getCity();
            $em = $this->getEmail();
            $pw = $this->getPassword();
            $n_pw= password_hash($pw, PASSWORD_DEFAULT);
            $ut = $this->getUTC();
            $of = $this->getOffset();
            $db = new Database_Connect;
            $conn = $db->connect();
    
            $stmt = $conn->prepare("INSERT INTO `user`(`first_name`, `last_name`, `city_name`, `email`, `password`,`utc_timestamp`,`offset`) VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("sssss",$fn, $ln, $ci, $em, $n_pw, $ut, $of);
            $res = $stmt->execute();
            return $res;
        }
        public function readAll()
        {
            $db = new Database_Connect;
            $conn = $db->connect();

            $sql = "SELECT * FROM user";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result))
                {
                    $id=$row['id'];
                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $city = $row['city'];
                }
            }
        }

        public function readUnique()
        {
            return null;
        }
        public function search()
        {
            return null;
        }
        public function update()
        {
            return null;
        }
        public function removeOne()
        {
            return null;
        }
        public function removeAll()
        {
            return null;
        }
    }