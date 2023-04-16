
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chi tiết sản phẩm</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/slide100/slide100.css">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Font-google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Saira+Stencil+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo&display=swap" rel="stylesheet">
<!-- Font-google -->
	
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<?php
		include_once("widget/header.php");

		if (!function_exists('currency_format')) {
			function currency_format($number, $suffix = 'đ') {
				if (!empty($number)) {
					return number_format($number, 0, ',', '.') . "{$suffix}";
				}
			}
		}
	?>
	
	<!-- Title page -->
	<section class="how-overlay2 bg-img1" style="background-image: url(images/bg-07.jpg);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					shop
				</h2>

				<span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="index.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Trang Chủ
					</a>

					<a href="shop-product-grid.html" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						/ Sản phẩm
					</a>

					<a href="#" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						/ Chi tiết sản phẩm
					</a>
				</span>
			</div>
		</div>
	</section>
	
	<!-- Product detail -->
	<section class="sec-product-detail bg0 p-t-105 p-b-70">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-6">
					<div class="m-r--30 m-r-0-lg">
						<!-- Slide 100 -->
						<div id="slide100-01">
							<div class="wrap-main-pic-100 bo-all-1 bocl12 pos-relative">
								<div class="main-frame">
									<div class="wrap-main-pic">
										<div class="main-pic">
											<img src="img<?php echo $result['imgURL']?>">
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<div class="col-md-5 col-lg-6">
					<div class="p-l-70 p-t-35 p-l-0-lg">
						<h4 class="js-name1 txt-l-104 cl3 p-b-16">
							<?php echo $result['nameProduct']?>
						</h4>

						<span class="txt-m-117 cl9">
							<?php echo currency_format($result['oldPrice'])?>
						</span>
						
						<div class="flex-w flex-m p-t-30 p-b-27">	
							<span class="fs-16 cl11 lh-15 txt-center m-r-15">
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
								<i class="fa fa-star m-rl-1"></i>
							</span>

							<span class="txt-s-115 cl6 p-b-3">
								(1 customer review)
							</span>
						</div>
						

						<div class="flex-w flex-m p-t-55 p-b-30">
							<div class="wrap-num-product flex-w flex-m bg12 p-rl-10 m-r-30 m-b-30">
								<div class="btn-num-product-down flex-c-m fs-29"></div>

								<input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product" value="1">

								<div class="btn-num-product-up flex-c-m fs-16"></div>
							</div>

							<button class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04 m-b-30 js-addcart1">
								Thêm vào giỏ hàng	
							</button>
						</div>

						<div class="txt-s-107 p-b-6">
							<span class="cl6">
								Loại :
							</span>

							<span class="cl9">
								<?php echo $resultCate['nameCategory']?>
							</span>
						</div>

						<div class="txt-s-107 p-b-6">
							<span class="cl6">
								Thương hiệu :
							</span>

							<a href="#" class="txt-s-107 cl9 hov-cl10 trans-04">
								<?php
									echo $resultBrand['nameBrand']
								?>
							</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Tab01 -->
			<div class="tab02 p-t-80">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Bình luận</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<!-- - -->
					<div class="tab-pane fade show active" id="description" role="tabpanel">
						<div class="p-t-30">
							<p class="txt-s-112 cl9">
								<?php
									echo $result['description'];
								?>
							</p>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="info" role="tabpanel">
						<ul class="p-t-21">
							<li class="txt-s-101 flex-w how-bor2 p-tb-14">
								<span class="cl6 size-w-54">
									Weight
								</span>

								<span class="cl9 size-w-55">
									0.5 kg
								</span>
							</li>

							<li class="txt-s-101 flex-w how-bor2 p-tb-14">
								<span class="cl6 size-w-54">
									Counrty of Origin
								</span>

								<span class="cl9 size-w-55">
									Imported
								</span>
							</li>

							<li class="txt-s-101 flex-w how-bor2 p-tb-14">
								<span class="cl6 size-w-54">
									Quality
								</span>

								<span class="cl9 size-w-55">
									Oraganic
								</span>
							</li>
						</ul>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="reviews" role="tabpanel">
						<div class="p-t-36">
							

							<!-- Add review -->
							<form method="post" action="?ctrl=index.php&act=addComment" class="w-full p-t-42">
								<h5 class="txt-m-102 cl3 p-b-20">
									Bình luận sản phẩm
								</h5>

								
								<span class="txt-s-101 cl6">
									Bình luận của bạn *
								</span>

								<div class="row p-t-12">
									<div class="col-sm-6 p-b-30">
										<input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" value="<?php echo $resultUserForm['name']?>">
									</div>

									<div class="col-sm-6 p-b-30">
										<input class="txt-s-101 cl3 plh1 size-a-25 bo-all-1 bocl11 focus1 p-rl-20" type="text" value="<?php echo $resultUserForm['email']?>">
									</div>

									<div class="col-12 p-b-30">
										<textarea class="txt-s-101 cl3 plh1 size-a-26 bo-all-1 bocl11 focus1 p-rl-20 p-tb-10" name="review" placeholder="Your review *"></textarea>
									</div>
								</div>

								<div class="flex-r">
									<button  class="flex-c-m txt-s-103 cl0 bg10 size-a-27 hov-btn2 trans-04">
										Submit
									</button>
								</div>
							</form>


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
	<script src="vendor/slide100/slide100.js"></script>
	<script src="js/slide100-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>