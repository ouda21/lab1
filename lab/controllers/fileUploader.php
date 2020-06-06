<?php
    include_once "config/database_connector.php";
    class File_Uploader
    {
        private $target_directory = "uploads/";
        private $size_limit = 100000;
        private $uploadOk =true;
        private $file_original_name;
        private $file_type;
        private $file_size;
        private $final_file_name;

        public function setOriginalName($name)
        {
            $this->file_original_name = $name;
        }

        public function getOriginalName()
        {
            return $this->file_original_name;
        }

        public function setFileType($type)
        {
            $this->file_type = $type;
        }

        public function getFileType()
        {
            return $this->file_type;
        }

        public function setFileSize($size)
        {
            $this->file_size = $size;
        }

        public function getFileSize()
        {
            return $this->file_size;
        }
        public function setFinalFileName($final_name)
        {
            $this->final_file_name = $final_name;
        }

        public function getFinalFileName()
        {
            return $this->final_file_name;
        }

        public function fileUpload()
        {
            if($this->fileWasSelected() == true)
            {
                if($this->fileSizeIsCorrect() == true)
                {
                    if($this->fileTypeIsCorrect() == true)
                    {
                        if($this->fileAlreadyExists() == true)
                        {
                            if($this->moveFile() == true)
                            {
                                if($this->saveFilePathTo() == true)
                                {
                                    return true;
                                }
                                else
                                {
                                    return false;
                                }
                            }
                            else
                            {
                                echo "Sorry, your file was not uplpaded";
                            }
                        }
                        else
                        {
                            echo "Sorry file already exists";
                        }
                    }
                    else
                    {
                        echo "Upload only jpeg,jpg,png or gif file";
                    }
                }
                else
                {
                    echo "File size too large";
                }
            }
            else
            {
                echo "File not an image";
            }
        }
        public function fileAlreadyExists()
        {
            $name = $this->getOriginalName();
            if(file_exists($name))
            {
                return false;
            }
            return true;
        }
        public function saveFilePathTo()
        {
            $name = $this->getOriginalName();
            $sql = "INSERT INTO `user`( `profile_picture`) VALUES ('$name')";

            $db = new Database_COnnect;
            $conn = $db->connect();

            if(mysqli_query($conn,$sql))
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }
        public function moveFile()
        {
            if($this->uploadOk == 0)
            {

                return false;
            }
            else
            {
                $final = $this->getFinalFileName();
                $origin = $this->getOriginalName();
                $target = $this->target_directory . basename($origin);
                if(move_uploaded_file($final,$target))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
        public function fileTypeIsCorrect()
        {
            $type = $this->getFileType();
            if($type != "jpg" && $type != "png" && $type != "gif" && $type != "jpeg")
            {
                return true;
            }
            return false;

        }
        public function fileSizeIsCorrect()
        {
            $size = $this->getFileSize();
            
            if($size > $this->size_limit)
            {
                return false;
            }
            return true;
        }
        public function fileWasSelected()
        {
            $name = $this->getFinalFileName();
            $check = getImageSize($name);
            if($check !== false)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }