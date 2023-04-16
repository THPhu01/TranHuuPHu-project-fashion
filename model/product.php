<?php
    class product
    {
        // Thuộc tính
        var $idProduct = null;
        var $nameProduct = null;
        var $imgURL = null;
        var $oldPrice = null;
        var $newPrice = null;
        var $quantity = null;
        var $description = null;
        // Phương thức
        public function __construct(){
            if(func_num_args() == 7){
                $this->idProduct = func_num_args(0);
                $this->nameProduct = func_get_args(1);
                $this->imgURL = func_get_args(2);
                $this->oldPrice = func_num_args(3);
                $this->newPrice = func_num_args(4);
                $this->quantity = func_num_args(5);
                $this->description = func_get_args(6);
            }
        }
        // Lấy sản phẩm
        public function getProduct(){
            $db = new connect();
            $strQuery = "SELECT * FROM products";
            $result = $db->getList($strQuery);
            return $result;
        }
        // Lấy 12 sản phẩm
        public function getProductLimit(){
            $db = new connect();
            $strQuery = "SELECT * FROM products LIMIT 12";
            $result = $db->getList($strQuery);
            return $result;
        }
        // Lấy id sản phẩm
        public function getProductById($idProduct){
            $db = new connect();
            $strQuery = "SELECT * FROM products WHERE idProduct = '$idProduct'";
            $result = $db->getInstance($strQuery);
            return $result;
        }
        // Thêm sản phẩm
        public function addProduct($cate , $brand , $name , $oldPrice , $quantity , $description){
            $db = new connect();
            $strQuery = "INSERT INTO products (idCategory , idBrand , nameProduct , oldPrice , quantity , description) 
            VALUES ('$cate' , '$brand' , '$name' , '$oldPrice' , '$quantity' , '$description')";
            $result = $db->exec($strQuery);
            return $result;
        }
        // private function checkUpload($name){
        //     $target_dir = "../img/";
        //     $target_file = $target_dir . basename($_FILES[$name]["name"]);
        //     $uploadOk = 1;
        //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENTION));
        //     // KIỂM TRA CÓ PHẢI ẢNH HAY KHÔNG!
        //     $check = getimagesize($_FILES[$name]['tmp_name']);
        //     if($check != false){
        //         echo "File là ảnh - " . $check['mime'] . ".";
        //         $uploadOk = 1;
        //     }esle{
        //         echo "File không phải ảnh";
        //         $uploadOk = 0;
        //     }
        // }
        // Cập nhật sản phẩm
        public function updateProduct($idProduct , $nameProduct , $oldPrice , $newPrice , $quantity , $description){
            $db = new connect();
            $strQuery = "UPDATE products SET nameProduct = '$nameProduct' , oldPrice = '$oldPrice' , newPrice = '$newPrice' , quantity = '$quantity' , 
            description = '$description' WHERE idProduct = '$idProduct'";
            $result = $db->exec($strQuery);
            return $result;
        }
        // Xóa sản phẩm
        public function deleteProduct($idProduct){
            $db = new connect();
            $strQuery = "DELETE FROM products WHERE idProduct = '$idProduct'";
            $result = $db->exec($strQuery);
            return $result;
        }
    }
?>