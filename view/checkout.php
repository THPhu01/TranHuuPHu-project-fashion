<!DOCTYPE html>
<html lang="en">
<head>
	<title>Thanh Toán</title>
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
<!-- Font-google -->
</head>
<body class="animsition">

	<!-- Header -->
	<?php
		include_once("widget/header.php");
	?>
	
	<!-- Title page -->
	<section class="how-overlay2 bg-img1" style="background-image: url(images/bg-07.jpg);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					Đơn hàng của bạn
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Trang chủ
					</a>

					<span>
						/ Đơn hàng
					</span>
				</span>
			</div>
		</div>
	</section>

	<!-- content page -->
	<div class="bg0 p-t-95 p-b-50">
		<div class="container">	
			<form method="post" action="?ctrl=account.php&act=checkout">
				<div class="row">
					<div class="col-md-7 col-lg-8 p-b-50">
						<div>
							<h4 class="txt-m-124 cl3 p-b-28">
								Thông tin khách hàng
							</h4>
							<form>
							<div class="row p-b-50">
								<div class="col-sm-12 p-b-23">
									<div>
										<div class="txt-s-101 cl6 p-b-10">
											Họ và tên <span class="cl12">*</span>
										</div>

										<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="name" value="<?php echo $result['name']?>">
									</div>
								</div>

								<div class="col-12 p-b-23">
									<div>
										<div class="txt-s-101 cl6 p-b-10">
											Tên người dùng
										</div>

										<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="username" value="<?php echo $result['nameUser']?>">
									</div>
								</div>

								<div class="col-12 p-b-23">
									<div>
										<div class="txt-s-101 cl6 p-b-10">
											Địa Chỉ <span class="cl12">*</span>
										</div>

										<input class="plh2 txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1 m-b-20" type="text" name="address" value="<?php echo $result['address']?>" >

									</div>
								</div>

								<div class="col-sm-6 p-b-23">
									<div>
										<div class="txt-s-101 cl6 p-b-10">
											Số điện thoại <span class="cl12">*</span>
										</div>

										<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="phone" value="<?php echo $result['phone']?>">
									</div>
								</div>

								<div class="col-sm-6 p-b-23">
									<div>
										<div class="txt-s-101 cl6 p-b-10">
											Địa chỉ Email <span class="cl12">*</span>
										</div>

										<input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-20 focus1" type="text" name="email" value="<?php echo $result['email']?>">
									</div>
								</div>	
							</div>
							
						</div>
					</div>

					<div class="col-md-5 col-lg-4 p-b-50">
						<div class="how-bor4 p-t-35 p-b-40 p-rl-30 m-t-5">
							<h4 class="txt-m-124 cl3 p-b-11">
								Đơn hàng của bạn
							</h4>

							<div class="flex-w flex-sb-m cl6 bo-b-1 bocl15 p-b-21 p-t-18">
								<span>
									Sản phẩm
								</span>

								<span>
									Tổng
								</span>
							</div>
							
							<!--  -->
							<?php
								if (!function_exists('currency_format')) {
									function currency_format($number, $suffix = 'đ') {
										if (!empty($number)) {
											return number_format($number, 0, ',', '.') . "{$suffix}";
										}
									}
								}
								if(isset($_SESSION['cart'])){
									foreach($_SESSION['cart'] as $k => $v){
										$id = $k;
										$soluong = $v;
										$product = new product();
										$resultTT = $product->getProductById($id);
										$tt += $resultTT['oldPrice'] * $soluong;
										echo '<div class="flex-w flex-sb-m txt-s-101 cl6 bo-b-1 bocl15 p-b-21 p-t-18">
												<span style="font-size : 15px; max-width: 200px">
													'.$resultTT['nameProduct'].'
													<img class="m-rl-3" src="images/icons/icon-multiply.png" alt="icon">
													<span style="color: red;">'.$soluong.'</span>
												</span>
				
												<span>
													'.currency_format($resultTT['oldPrice']).'
												</span>
											</div>';
									}
								}
							?>
							
							
							<!--  -->

							<div class="flex-w flex-m p-tb-23">
								<span class="size-w-61 cl6">
									Total
								</span>

								<span class="size-w-62 cl10">
									<?php
										echo currency_format($tt);
									?>
								</span>
							</div>


							<button type="submit" name="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-21 hov-btn2 trans-04 p-rl-10">
								Chấp nhận thanh toán
							</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>


	<!-- Subscribe -->
	<section class="sec-subscribe parallax100 how-overlay1 p-tb-65">
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