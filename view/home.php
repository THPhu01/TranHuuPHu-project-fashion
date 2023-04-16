
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Trang Chủ</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/navigation.css">
	<link rel="stylesheet" type="text/css" href="vendor/revolution/css/settings.css">
<!--===============================================================================================-->
<!-- Font-google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Saira+Stencil+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
<!-- Font-google -->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
	<!-- Slider -->
	<section class="sec-slider">
		<div class="rev_slider_wrapper fullwidthbanner-container">
			<div id="rev_slider_3" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
				<ul>
					<!-- Slide 1 -->
					<li data-transition="fade">
						<!--  -->
						<img src="images/banner-nike.jpg" alt="IMG-BG" class="rev-slidebg">
					</li>

					<!-- Slide 2 -->
					<li data-transition="fade">
						<!--  -->
						<img src="images/banner-adidas.jpg" alt="IMG-BG" class="rev-slidebg">
					</li>
				</ul>				
			</div>
		</div>
	</section>

	<!-- Special Product -->
	<section class="sec-specical-product bg0 p-t-145 p-b-80 p-rl-60 p-rl-0-xl">
		<div class="size-a-1 flex-col-c-m p-b-55">

			<h3 class="txt-center txt-l-101 cl3 respon1">
				SẢN PHẨM NỔI BẬT
			</h3>
		</div>

		<!-- slide5 -->
		<div class="wrap-slick5">
			<div class="slick5">
				<?php
					foreach($res as $r){
						echo '
						<div class="item-slick5 p-all-15">
							<div class="block1">
								<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
									<img src="img/'.$r[4].'" alt="IMG">
		
									<div class="block1-content flex-col-c-m p-b-46">
										<a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
											'.$r[3].'
										</a>
		
										<span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
											'.currency_format($r[5]).'
										</span>
		
										<div class="block1-wrap-icon flex-c-m flex-w trans-05">
											<a href="?ctrl=index.php&act=productDetail&id='.$r[0].'" class="block1-icon flex-c-m wrap-pic-max-w">
												<img src="images/icons/icon-view.png" alt="ICON">
											</a>
		
											<a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
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
			</div>

			<div class="wrap-dot-slick5 p-rl-15 p-t-40"></div>
		</div>
	</section>

	<!-- Why chose -->
	<section class="sec-whychose bg12 p-t-120" style="padding: 50px 0 120px 0">
		<div class="container">
			<div class="row">
				<div class="col-md-7 order-md-2">
					<div class="p-l-50 p-t-60 p-l-0-lg">
						<div class="size-a-1 flex-col-l-m p-b-65">
							<h3 class="txt-l-101 cl3 respon1">
								SẢN PHẨM GIẢM GIÁ	
							</h3>
						</div>
						<br>
						<br>
						<br>
						<br>
						<div>
							<div class="flex-w p-b-50">
								<div class="size-w-23">
									<span class="txt-m-101 cl3">
										<?php
											echo $result[12][3];
										?>
									</span>
									<p class="txt-s-101 cl6 p-t-12"">
										<span style="text-decoration-line : line-through;">
											<?php
												echo currency_format($result[12][5]);
											?>
										</span>
										&nbsp;
										<span style="font-size: 15px; color: red">Giảm 50%</span><br>
										<span>
											<?php
												echo currency_format($result[12][6]);
											?>
										</span>
									</p>
									<p class="txt-s-101 cl6 p-t-12">
										<?php
											echo $result[12][8];											
										?>
									</p>
								</div>
							</div>
							<div class="flex-w">
								<a href="?ctrl=index.php&act=productDetail&id=13"><input class="btn btn-dark" type="button" style="font-family: 'KoHo', sans-serif" value="XEM NGAY"></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-5 order-md-1">
					<div class="flex-b h-full">
						<div class="wrap-pic-max-w"><img src="img/<?php echo $result[12][4]?>" style="height: 100%" alt="IMG"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Product -->
	<div class="sec-product bg0 p-t-145 p-b-25">
		<div class="container">
			<div class="size-a-1 flex-col-c-m p-b-48">

				<h3 class="txt-center txt-l-101 cl3 respon1">
					SẢN PHẨM
				</h3>
			</div>

			<div class="p-b-46">
			</div>
			
			<div class="row isotope-grid">
				<!-- - -->
				<?php
					foreach($res as $r){
						echo '<div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item fruit-juic-fill other-fill">
						<!-- Block1 -->
						<div class="block1">
							<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
								<img src="img/'.$r['imgURL'].'" alt="IMG">
	
								<div class="block1-content flex-col-c-m p-b-46">
									<a href="product-single.html" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
										'.$r['nameProduct'].'
									</a>
	
									<span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
										'.currency_format($r['oldPrice']).'
									</span>
	
									<div class="block1-wrap-icon flex-c-m flex-w trans-05">
										<a href="?ctrl=index.php&act=productDetail&id='.$r[0].'" class="block1-icon flex-c-m wrap-pic-max-w">
											<img src="images/icons/icon-view.png" alt="ICON">
										</a>
	
										<a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
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
			</div>
		</div>
	</div>
	<!-- Product2 -->
	<section class="sec-product2 bg0 p-t-113 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-b-60">
					<div class="m-l--15 respon7">
						<!-- slide6 -->
						<div class="wrap-slick6">
							<div class="flex-col-l p-b-25 p-rl-15">

								<div class="flex-w flex-t w-full p-t-5">
									<h4 class="size-w-5 m-r-20">
										<span class="txt-l-109 cl6">
											THƯƠNG HIỆU
										</span>

										<span class="txt-l-108 cl3">
											(Brand)
										</span> 
									</h4>

									<div class="wrap-arrow-slick6 flex-w m-t-6">
										<button class="arrow-slick6 prev-slick6"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
              							<button class="arrow-slick6 next-slick6"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>

							<div class="slick6">
								<?php
									foreach($resBrand as $r)
									{
										echo '<div class="item-slick6 p-all-15">
												<!-- Block1 -->
													<div class="block1 rs1-block1">
														<div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
															<img src="img'.$r[2].'" alt="IMG">
														</div>
													</div>	
											</div>';
											}
												
										?>
										
									
								<!-- - -->
							</div>
						</div>
					</div>		
				</div>

			</div>
		</div>
	</section>

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
	<script src="vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="js/revo-custom.js"></script>
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