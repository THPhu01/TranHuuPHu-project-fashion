<?php
    class role 
    {
        var $idRole = null;
        var $nameRole = null;

        public function __construct(){
            if(func_num_args() == 2){
                $this->idRole = func_num_args(0);
                $this->nameRole = func_get_args(1);
            }
        }

        public function getRole(){
            $db = new connect();
            $strQuery = "SELECT * FROM role";
            $result = $db->getList($strQuery);
            return $result;
        }

        public function getRoleById($id){
            $db = new connect();
            $strQuery = "SELECT * FROM role WHERE idRole = '$id'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
    }
?>