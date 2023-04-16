
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cửa Hàng</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
<!-- Font-google -->
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Saira+Stencil+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@500&display=swap" rel="stylesheet">
	
<!-- Font-google -->
	
<!--===============================================================================================-->
</head>
<body class="animsition">
	<?php
		if (!function_exists('currency_format')) {
			function currency_format($number, $suffix = 'đ') {
				if (!empty($number)) {
					return number_format($number, 0, ',', '.') . "{$suffix}";
				}
			}
		}
	?>
	<!-- Header -->
	<?php
		include_once("widget/header.php");
	?>
	<!-- Content page -->
	<div class="bg0 p-t-85 p-b-95">
		<div class="container">
			<div class="flex-w flex-r-m p-b-45 flex-row-rev">
				<div class="flex-w flex-m p-tb-8">
					<div class="flex-w flex-m m-tb-7">
						<button class="dis-block lh-00 pos-relative how-icon1 m-r-15 js-show-list">
							<img class="icon-main trans-04" src="images/icons/icon-menu-list.png" alt="ICON">
							<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-menu-list1.png" alt="ICON">
						</button>

						<button class="dis-block lh-00 pos-relative how-icon1 menu-active js-show-grid">
							<img class="icon-main trans-04" src="images/icons/icon-grid.png" alt="ICON">
							<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-grid1.png" alt="ICON">
						</button>
					</div>
				</div>

				<span class="txt-s-101 cl9 m-r-30 size-w-53">
					
				</span>
			</div>

			<!-- Shop grid -->
			<div class="shop-grid">
				<div class="row">
					<?php
						foreach($result as $rPro){
							echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-30">
							<!-- Block1 -->
							<div class="block1">
								<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
									<img src="img/'.$rPro['imgURL'].'" alt="IMG">
	
									<div class="block1-content flex-col-c-m p-b-46">
										<a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
											'.$rPro['nameProduct'].'
										</a>
	
										<span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
											'.currency_format($rPro['oldPrice']).'
										</span>
	
										<div class="block1-wrap-icon flex-c-m flex-w trans-05">
											<a href="./index.php?act=productDetail&id='.$rPro['idProduct'].'" class="block1-icon flex-c-m wrap-pic-max-w">
												<img src="images/icons/icon-view.png" alt="ICON">
											</a>
	
											<a href="?ctrl=shop.php&act=add-cart&item='.$rPro['idProduct'].'" class="block1-icon flex-c-m wrap-pic-max-w">
												<img src="images/icons/icon-cart.png" alt="ICON">
											</a>
	
											<a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
												<img class="icon-addwish-b1" src="images/icons/icon-heart.png" alt="ICON">
												<img class="icon-addedwish-b1" src="images/icons/icon-heart2.png" alt="ICON">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>';
						}
					?>
					<!-- - -->
					
				</div>
			</div>

			<!-- Shop list -->
			<div class="shop-list dis-none">
				<?php
					foreach($result as $rPro){
						echo '<div class="row p-b-30">
						<div class="col-sm-5 col-md-4 col-lg-3">
							<a href="?ctrl=index.php&act=productDetail&id='.$rPro['idProduct'].'" class="wrap-pic-w bo-all-1 bocl12 hov8 trans-04">
								<img src="img/'.$rPro['imgURL'].'" alt="PRODUCT">
							</a>
						</div>
	
						<div class="col-sm-7 col-md-8 col-lg-9">
							<div class="p-t-5 p-b-20">
								<div class="flex-w flex-sb-m">
									<a href="product-single.html" class="txt-m-120 cl3 hov-cl10 trans-04 m-r-20 js-name1">
										'.$rPro['nameProduct'].'
									</a>
	
									<a href="wishlist.html" class="lh-00 pos-relative how-icon1 m-tb-15 js-addwish1">
										<img class="icon-main trans-04" src="images/icons/icon-heart-color.png" alt="ICON">
										<img class="ab-t-l icon-hov trans-04" src="images/icons/icon-heart-color2.png" alt="ICON">
									</a>
								</div>
	
								<span class="txt-m-117 cl9">
									'.currency_format($rPro['oldPrice']).'
								</span>
	
								<p class="txt-s-101 cl6 p-t-18">
									'.$rPro['description'].'
								</p>
	
								<div class="flex-w p-t-29">
									<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 js-addcart1">
										Thêm vào giỏ
									</button>
								</div>	
							</div>
						</div>
					</div>';
					}
				?>
				
			</div>

			<!-- Pagination -->
			<div class="flex-w flex-c-m p-t-47">
				<a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
					1
				</a>

				<a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
					2
				</a>

				<a href="#" class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
					Next
					<span class="lnr lnr-chevron-right m-t-3 m-l-7"></span>
					<span class="lnr lnr-chevron-right m-t-3"></span>
				</a>
			</div>
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
	<script src="vendor/noui/nouislider.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>