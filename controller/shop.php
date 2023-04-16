<?php
    session_start();
    include_once("../model/connect.php");
    include_once("../model/user.php");
    include_once("../model/product.php");

    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'shopPage';
    }
    $product = new product();
    $user = new user();
    switch($act){
        case 'shopPage':
            $result = $product->getProduct();
            include_once("../view/shop.php");
            break;
        case 'add-cart':
            $id = $_GET['item'];
            if(isset($_SESSION['cart'][$id])){
                $qty = $_SESSION['cart'][$id] + 1;
            }else{
                $qty = 1;
            }
            $_SESSION['cart'][$id] = $qty;
            header("location: ?act=shopPage");
            exit();
            break;
        case 'closeProduct':
            if(isset($_GET['item'])){
                $id = $_GET['item'];
                unset($_SESSION['cart'][$id]);
                header("Refresh: 0.1; ?act=shopPage");
                break;
            }
        case 'showShop-cart':
            
            include_once('../view/shop-cart.php');
            break;

        case 'showCheckOut':
            $username = $_SESSION['user'];
            $result = $user->getUserByName($username);
            include_once('../view/checkout.php');
            break;
    }
?>