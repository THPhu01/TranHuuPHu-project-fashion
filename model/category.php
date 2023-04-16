<?php
    class category
    {   
        // Thuộc tính
        var $idCategory = null;
        var $nameCategory = null;

        // Phương thức

        public function __construct(){
            if(func_num_args() == 2){
                $this->idCategory = func_num_args(0);
                $this->nameCategory = func_get_args(1);
            }
        }

        public function getCategory(){
            $db = new connect();
            $strQuery = "SELECT * FROM category";
            $result = $db->getList($strQuery);
            return $result;
        }

        public function getCategoryById($id){
            $db = new connect();
            $strQuery = "SELECT * FROM category WHERE idCategory = '$id'";
            $result = $db->getInstance($strQuery);
            return $result;
        }

        public function addCate($name){
            $db = new connect();
            $strQuery = "INSERT INTO category(nameCategory) VALUES ('$name')";
            $result = $db->exec($strQuery);
            return $result;
        }

        public function updateCate($id , $name){
            $db = new connect();
            $strQuery = "UPDATE category SET nameCategory = '$name' WHERE idCategory = '$id'";
            $result = $db->exec($strQuery);
            return $result;
        }

        public function deleteCate($id){
            $db = new connect();
            $strQuery = "DELETE FROM category WHERE idCategory = '$id'";
            $result = $db->exec($strQuery);
            return $result;
        }
    }
