<?php
    class brand
    {
        var $idBrand = null;
        var $nameBrand = null;
        var $imgBrand = null;

        public function __construct(){
            if(func_num_args() == 3){
                $this->idBrand = func_num_args(0);
                $this->nameBrand = func_get_arg(1);
                $this->imgBrand = func_get_arg(2);
            }
        }

        public function getBrand(){
            $db = new connect();
            $strQuery = "SELECT * FROM brand";
            $result = $db->getList($strQuery);
            return $result;
        }

        public function getBrandById($id){
            $db = new connect();
            $strQuery = "SELECT * FROM brand WHERE idBrand = '$id'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
    }
?>