<?php
    class comment
    {
        var $idComment = null;
        var $idUser = null;
        var $idProduct = null;
        var $content = null;
        var $date = null;

        public function __construct(){
            if(func_num_args() == 5){
                $this->idComment= func_get_arg(0);
                $this->idUser = func_get_arg(1);
                $this->idProduct= func_get_arg(2);
                $this->content = func_get_arg(3);
                $this->date = func_get_arg(4);
            }
        }
        // Lấy ds comment
        public function getComment(){
            $db = new connect();
            $strQuery = "SELECT * FROM comment";
            $result = $db->getList($strQuery);
            return $result;
        }
        // Lấy ds comment theo id
        public function getCommentById($idComment){
            $db = new connect();
            $strQuery = "SELECT * FROM comment WHERE idComment = '$idComment'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        // Lấy ds comment theo id người dùng
        public function getCommentByIdUser($idUser){
            $db = new connect();
            $strQuery = "SELECT * FROM comment WHERE idUser = '$idUser'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        // Lấy ds comment theo id sản phẩm
        public function getCommentByIdPro($idProduct){
            $db = new connect();
            $strQuery = "SELECT * FROM comment WHERE idProduct = '$idProduct'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        // Xóa comment
        public function deleteComment($idComment){
            $db = new connect();
            $strQuery = "DELETE FROM comment WHERE idComment = '$idComment'";
            $result = $db->exec($strQuery);
            return $result;
        }
        // Add comment
        public function addComment($idUser , $idProduct , $content){
            $db = new connect();
            $strQuery = "INSERT INTO comment(idComment, idUser, idProduct, content, date) VALUES 
            (null ,'$idUser','$idProduct','$content', null)";
            $result = $db->exec($strQuery);
            return $result;
        }
    }

?>