<?php
    include_once("../model/connect.php");
    include_once("../model/category.php");
    include_once("../model/brand.php");
    include_once("../model/product.php");
    include_once("../model/user.php");

    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'index';
    }
    $product = new product();
    $cate = new category();
    switch($act){
        case 'index':
            include_once("../admin/index.php");
            break;
            // Show danh sách SP
        case 'listProduct':
            include_once("../admin/products.php");
            break;
            // Show form thêm sản phẩm
        case 'addProduct':
            include_once("../admin/addproduct.php");
            break;
            // Show danh sách loại
        case 'listCate':
            include_once("../admin/category.php");
            break;
            // Show form thêm loại
        case 'addCate':
            include_once("../admin/addcategory.php");
            break;
            // Show danh sách khách hàng
        case 'listUser':
            include_once("../admin/user.php");
            break;
            // Show form sửa sản phẩm
        case 'showEditPro':
            include_once("../admin/editProduct.php");
            break;
            // Sửa sản phẩm
        case 'editProduct':
            if(isset($_POST['save'])){
                $id = $_POST['idPro'];
                $name = $_POST['name'];
                $oPrice = $_POST['oldPrice'];
                $nPrice = $_POST['newPrice'];
                $quantity = $_POST['quantity'];
                $des = $_POST['description'];

                $result = $product->updateProduct($id , $name , $oPrice , $nPrice , $quantity , $des);
                header("location: ?act=listProduct");
                break;
            }
            // Xóa sản phẩm
        case 'deleteProduct':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $product->deleteProduct($id); 
                header("location: ?act=listProduct");
                break;
                
            }
            // Thêm sản phẩm
        case 'addPro':
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $brand = $_POST['brand'];
                $cate = $_POST['cate'];
                $description = $_POST['description'];

                $result = $product->addProduct($cate , $brand , $name , $price , $quantity , $description);
                header('Refresh:0.2; ?act=listProduct');
                break;
            }
        
            // Show form sửa loại sản phẩm
        case 'showEditCate':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $cate->getCategoryById($id);
                include_once("../admin/editcategory.php");
                break;
            }
            // Thêm loại sản phẩm
        case 'addCategory':
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $result = $cate->addCate($name);
                header("Refresh:0.2; ?act=listCate");
                break;
            }
            // Sửa loại sản phẩm
        case 'editCate':
            if(isset($_POST['submit'])){
                $id = $_POST['idCate'];
                $name = $_POST['name'];

                $result = $cate->updateCate($id , $name);
                header("Refresh:0.2; ?act=listCate");
                break;
            }
            // Xóa loại
        case 'deleteCate':
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $cate->deleteCate($id);
                header("Refresh:0.2; ?act=listCate");
                break;
            }
    }
