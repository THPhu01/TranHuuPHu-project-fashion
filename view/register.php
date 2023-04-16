
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Nhập/Đăng Ký</title>
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
			<div class="txt-center p-t-160">
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
	<div class="bg0 p-t-95 p-b-50">
		<div class="container">
			<div class="row">

				<div class="col-md-12 p-b-50">
					<div class="p-l-15 p-rl-0-lg">
						<h4 class="txt-m-124 cl3 p-b-28">
							Đăng ký 
						</h4>

						<form method="post" action="?ctrl=account.php&act=register" class="how-bor3 p-rl-30 p-t-32 p-b-66">
							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Tên tài khoản <span class="cl12">*</span> 
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="usernameReg" required>
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Địa chỉ Email <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="email" name="emailReg" required>
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Họ và tên <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="nameReg" required>
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Địa chỉ nhà <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="addressReg" required>
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Số điện thoại <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="number" name="phoneReg" required>
							</div>

							<div class="p-b-24">
								<div class="txt-s-101 cl6 p-b-10">
									Mật khẩu <span class="cl12">*</span>
								</div>

								<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password" name="passReg" required>
							</div>

							<div class="flex-w flex-m p-t-15">
								<input type="submit" name="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18" value="Đăng ký">
									
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Subscribe -->
	<section class="sec-subscribe parallax100 how-overlay1 p-tb-65" style="background-image: url(images/bg-03.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-5 p-tb-15">
					<div class="h-full flex-col-m">
						<h4 class="txt-m-110 cl0 p-b-4">
							ĐĂNG KÝ NHẬN THÔNG BÁO SỚM
						</h4>

						<p class="txt-s-101 cl0">
							Nhập Email để được nhận thông báo về sản phấm mới cũng như khuyến mãi<i></i>
						</p>
					</div>
				</div>

				<div class="col-md-7 p-tb-15">
					<form class="flex-w flex-m h-full">
						<input class="size-a-6 txt-s-106 cl6 plh0 p-rl-30 w-full-sm" type="text" name="email" placeholder="Nhập email của bạn...">
						<button class="bg10 size-a-5 txt-s-107 cl0 p-rl-15 trans-04 hov-btn2 mt-4 mt-sm-0">
							Gửi
						</button>
					</form>
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