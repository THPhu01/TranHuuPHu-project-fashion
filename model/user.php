<?php
    class user
    {   
        // Thuộc tính
        var $idUser = null;
        var $nameUser = null;
        var $address = null;
        var $phone = null;
        var $email = null;
        var $password = null;
        var $role = null;

        // Phương thức

        public function __construct(){
            if(func_num_args() == 7){
                $this->idUser = func_num_args(0);
                $this->nameUser = func_get_args(1);
                $this->address = func_get_args(2);
                $this->phone = func_num_args(3);
                $this->email = func_get_args(4);
                $this->password = func_get_args(5);
                $this->role = func_num_args(6);
            }
        }

        public function getUser(){
            $db = new connect();
            $strQuery = "SELECT * FROM users";
            $result = $db->getList($strQuery);
            return $result;
        }

        public function getUserByName($user){
            $db = new connect();
            $strQuery = "SELECT * FROM users WHERE nameUser = '$user'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        public function getUserById($id){
            $db = new connect();
            $strQuery = "SELECT * FROM users WHERE idUser = '$id'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        // Đổi pass dành cho admin
        public function updateUser($id , $password){
            $db = new connect();
            $strQuery = "UPDATE users SET password = '$password' WHERE idUser = '$id'";
            $result = $db->exec($strQuery);
            return $result;
        }

        // Đăng nhập
        public function login($user){
            $db = new connect();
            $strQuery = "SELECT * FROM users WHERE nameUser = '$user'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        // Đăng ký
        public function register($nameUser , $name , $address , $phone , $email , $password){
            $db = new connect();
            $strQuery = "INSERT INTO users (idUser, nameUser, name, address, phone, email, password, role) VALUES 
            (null,'$nameUser','$name','$address','$phone','$email','$password', 2)";
            $result = $db->exec($strQuery);
            return $result;
        }
        // Sửa thông tin dành cho người dùng
        public function updateInfo($nameUser , $name , $address , $phone){
            $db = new connect();
            $strQuery = "UPDATE users SET name = '$name' , address = '$address' , phone = '$phone' WHERE nameUser = '$nameUser'";
            $result = $db->exec($strQuery);
            return $result;
        }
        // Đổi mật khẩu dành cho người dùng
        public function changePass($nameUser , $password){
            $db = new connect();
            $strQuery = "UPDATE users SET password = '$password' WHERE nameUser = '$nameUser'";
            $result = $db->exec($strQuery);
            return $result;
        }
        // kiểm tra tên đăng nhập và email
        public function checkForm($nameUser , $email){
            $db = new connect();
            $strQuery = "SELECT nameUser , email FROM users WHERE nameUser = '$nameUser' OR email = '$email' ";
            $result = $db->getInstance($strQuery);
            return $result;
        }
    }
?>