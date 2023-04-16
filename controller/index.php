<?php
    session_start();
    include_once("../model/connect.php");
    include_once("../model/product.php");
    include_once("../model/category.php");
    include_once("../model/user.php");
    include_once("../model/comment.php");
    include_once("../model/brand.php");

    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'index';
    }
    $brand = new brand();
    $category = new category();
    $product = new product();
    $comment = new comment();
    $user = new user();
  
    switch($act){
        case 'index':
            $resBrand = $brand->getBrand();
            $result = $product->getProduct();
            $res = $product->getProductLimit();
            include_once("../view/home.php");
            break;
        case 'productDetail':
            $id = $_GET['id'];
            $username = $_SESSION['user'];
            
            $result = $product->getProductById($id);
            $resultBrand = $brand->getBrandById($result['idBrand']);
            $resultCate = $category->getCategoryById($result['idCategory']);
            $resultComment = $comment->getCommentByIdPro($id);


            $resultUserForm = $user->getUserByName($username);
            include_once("../view/product-detail.php");
            break;
        case 'addComment':
            $id = $_GET['id'];
            $review = $_POST['review'];
            $username = $_SESSION['user'];
            $resultUser = $user->getUserByName($username);
            
            $result = $comment->addComment($resultUser['idUser'] , $id , $review);

    }
