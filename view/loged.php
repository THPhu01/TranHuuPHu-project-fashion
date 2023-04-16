
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tài Khoản</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<!-- Font-google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Saira+Stencil+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
<!-- Font-google -->
</head>
<body class="animsition">
	<!-- Header -->
	<?php
		include_once("widget/header.php");
	?>
	
	<!-- Title page -->
	<section class="how-overlay2 bg-img1" style="background-color: white">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					Tài khoản của tôi
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Trang chủ
					</a>

					<span>
						/ Tài khoản của tôi
					</span>
				</span>
			</div>
		</div>
	</section>

	<!-- content page -->
	<div class="bg0 p-t-95 p-b-50" style="padding: 0px;">
		<div class="container">
			
		</div>
	</div>


	<!-- Subscribe -->
	<section class="sec-subscribe parallax100 how-overlay1 p-tb-65" style="background-image: url(images/bg-03.jpg);">
		<div class="container" style="height: 600px;">
        <div class="card text-center">
            <div class="card-header" style="font-weight: bold; font-size: 20px;">
                <span style="clear: both; margin-right: -100px"><?php echo "Tài Khoản : " . $result['name']?></span>
				<?php
					if($result['role'] == 1){
						echo '<span><a href="./admin.php?act=index"><button class="btn btn-primary" style="float: right; margin-top: -2px;">Quản trị website</button></a></span>';
					}
				?>
                <span><a href="?ctrl=account.php&act=logout"><button class="btn btn-danger" style="float: right; margin-top: -2px;">Đăng Xuất</button></a></span>
            </div>
                <div class="card-body">
                <h5 class="card-title">Thông tin cá nhân</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sửa thông tin tài khoản</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đổi mật khẩu</a>
                    </li>
                    </ul>
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <!-- Sửa thông tin -->
                            <form method="post" action="?ctrl=account.php&act=update">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ Email</label>
                                    <input type="email" name="email" class="form-control" readonly id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $result['email'];?>">
                                    <small id="emailHelp" class="form-text text-muted">Không chia sẻ Email cho bất kì ai!</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên tài khoản</label>
                                    <input type="text" name="username" class="form-control" readonly id="exampleInputPassword1" value="<?php echo $result['nameUser'];?>">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Họ và tên</label>
                                    <input type="text" name="name" class="form-control" read-only id="exampleInputPassword1" value="<?php echo $result['name'];?>">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" value="<?php echo $result['address'];?>">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $result['phone'];?>">
                                </div>
                                <button type="submit" name="submit" class=" bg-success text-white text-center" style="width: 200px; height: 50px; border-radius: 20px;" class="btn">Lưu</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Đổi mật khẩu -->
                            <form method="post" action="?ctrl=account.php&act=changePass">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Mật khẩu cũ</label>
                                    <input type="password" name="oldpass" class="form-control" id="formGroupExampleInput" placeholder="Nhập mật khẩu cũ" required>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Mật khẩu mới</label>
                                    <input type="password" name="newpass" class="form-control" id="formGroupExampleInput2" placeholder="Nhập mật khẩu mới" required>
                                </div>
                                <button type="submit" name="submit-changepass" class=" bg-success text-white text-center" style="width: 200px; height: 50px; border-radius: 20px;" class="btn">Lưu</button>
                            </form>
                        </div>
                 </div>
        <div class="card-footer text-muted">
            <?php echo date("d / m / Y")?>
        </div>
	</div>
		</div>
	</section>

	<!-- Footer -->
	<?php
		include_once("widget/footer.php");
	?>
	

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="lnr lnr-chevron-up"></span>
		</span>
	</div>

	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>