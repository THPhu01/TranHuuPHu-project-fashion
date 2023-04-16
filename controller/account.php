<?php
    include_once("../model/connect.php");
    include_once("../model/user.php");
    include_once("../model/role.php");
    include_once("../model/product.php");
    include_once("../controller/shop.php");
    
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }else{
        $act = 'form';
    }
    $user = new user(); 
    $product = new product();
    switch($act){
        case 'form':
            include_once("../view/form-account.php");
            break;
        case 'showRegister':
            include_once("../view/register.php");
            break;
        case 'login':
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $pass = $_POST['password'];

                $password = md5($pass);

                $result = $user->login($username);
                if($username == $result['nameUser'] && $password == $result['password']){
                    $_SESSION['user'] = $result['nameUser'];
                    echo '<script language="javascript">alert("Đăng nhập thành công!")</script>';
                    header("Refresh: 0.5; ?act=loged");
                }else{
                    echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu!")</script>';
                    header("Refresh: 0.1; ?act=form");
                }
            }
        case 'loged': 
            $result = $user->getUserByName($_SESSION['user']);
            include_once("../view/loged.php");
            break;
        case 'logout':
            session_unset();
            header("Refresh: 0.3; ?act=loged");
            break;
        case 'update':
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];

                $result = $user->updateInfo($username , $name , $address , $phone);
                if($result){
                    echo '<script language="javascript">alert("Thay đổi thông tin thành công")</script>';
                    header("Refresh: 0.3; ?act=loged");
                    break;
                }else{
                }
            }
        case 'changePass':
            $username = $_SESSION['user'];
            $passold = $_POST['oldpass'];
            $passnew = $_POST['newpass'];

            $newpass = md5($passnew);
            $oldpass = md5($passold);

            $result = $user->getUserByName($username);
            if(isset($_POST['submit-changepass']) && $oldpass == $result['password']){
                $result = $user->changePass($username , $newpass);
                echo '<script language="javascript">alert("Thay đổi mật khẩu thành công, mời đăng nhập lại!")</script>';
                header("Refresh: 0.3; ?act=logout");
                break;
            }else{
                echo '<script language="javascript">alert("Thay đổi mật khẩu không thành công!")</script>';
                header("Refresh: 0.3; ?act=loged");
                break;
            }
        case 'register':
            
            if(isset($_POST['submit'])){
                $username = $_POST['usernameReg'];
                $email = $_POST['emailReg'];
                $name = $_POST['nameReg'];
                $address = $_POST['addressReg'];
                $phone = $_POST['phoneReg'];
                $pass = $_POST['passReg'];

                $password = MD5($pass);

                $result = $user->checkForm($username , $email);

                if($result['nameUser'] != $username && $result['email'] != $email){
                    $result = $user->register($username , $name , $address , $phone , $email , $password);
                    header("location: ./account.php");
                }else{
                    echo '<script language="javascript">alert("Tên đăng nhập hoặc email đã tồn tại!!!")</script>';
                    header("Refresh: 0.5; ?act=showRegister");
                }
                
            }
        
            
    }
