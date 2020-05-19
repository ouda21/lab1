<?php
    include_once "db-connect.php";
    if(!isset($_SESSION["username"]))
    {
        header("location:../login.php");
    }

    class FileUploader
    {

        private $file;
        private $image2;
        public function __construct($f,$img2)
        {
            $this->file = $f;
            $this->image2 = $img2;
        }

        public function upload()
        {
            $db = new Database_Connector;
            $conn = $db->connect();
            $image = $this->file;
            $img2 = $this->image2;
            $user =$_SESSION["username"];

            $target_dir = "../upload";
            $target_file = $target_dir.basename($image);

            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $ext_arr = array("jpg","jpeg","png","gif");

            if(in_array($imageFileType,$ext_arr))
            {
                $stmt = $conn->prepare("UPDATE `users` SET `image`=? WHERE email = ?");
                $stmt->bind_param("bs",$image,$user);

                if(move_uploaded_file($img2,$target_dir.$image)== true)
                {
                    echo "File moved";
                }
                else
                {
                    echo "Could not move file";
                }

            }
        }
    }