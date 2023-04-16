<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>


	<header class="header-v2">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop">
					<div class="center-header">
						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li class="active-menu">
									<a href="./index.php">Trang Chủ</a>
								</li>

								<li>
									<a href="#">Giới Thiệu</a>
								</li>

								<li>
									<a href="./shop.php">SHOP</a>
								</li>

								<li>
									<a href="#">Góp Ý</a>
								</li>

								<li>
									<a href="#">Liên Hệ</a>
								</li>

								<li>
									<a href="#">Hỏi Đáp</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="right-header">
						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
							<div class="h-full flex-m">
								<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
									<img src="images/icons/icon-search2.png" alt="SEARCH">
								</div>
							</div>

							<div class="wrap-cart-header h-full flex-m m-l-10 menu-click">
								<div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
									<img src="images/icons/icon-cart-3.png" alt="CART">
								</div>

								<div class="cart-header menu-click-child trans-04">
									<div class="bo-b-1 bocl15">
										<div class="size-h-2 js-pscroll m-r--15 p-r-15">
											<!-- cart header item -->
											<div class="flex-w flex-str m-b-25">
												<?php
												if (!function_exists('currency_format')) {
													function currency_format($number, $suffix = 'đ')
													{
														if (!empty($number)) {
															return number_format($number, 0, ',', '.') . "{$suffix}";
														}
													}
												}
												$tt = 0;
												if (isset($_SESSION['cart'])) {

													foreach ($_SESSION['cart'] as $k => $v) {
														$id = $k;
														$soluong = $v;

														$resultSS = $product->getProductById($id);
														//print_r($tong);
														$tt += $resultSS["oldPrice"] * $soluong;
														echo '<div class="size-w-15 flex-w flex-t">
																	<a href="./index.php?act=productDetail&id=' . $id . '" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
																		<img src="img' . $resultSS['imgURL'] . '" alt="PRODUCT">
																	</a>

																	<div class="size-w-17 flex-col-l">
																		<a href="./index.php?act=productDetail&id=' . $id . '" class="txt-s-108 cl3 hov-cl10 trans-04">
																			' . $resultSS['nameProduct'] . '
																		</a>

																		<span class="txt-s-101 cl9">
																			' . currency_format($resultSS['oldPrice'] * $soluong) . '
																		</span>

																		<span class="txt-s-109 cl12">
																			x ' . $soluong . '
																		</span>
																	</div>
																</div>

																<div class="size-w-14 flex-b">
																	<button type="submit" class="lh-10">
																		<a href="./shop.php?act=closeProduct&item=' . $resultSS['idProduct'] . '"><img src="images/icons/icon-close.png" alt="CLOSE"></a>
																	</button>
																</div>';
													}
												}

												?>

											</div>
										</div>
									</div>

									<div class="flex-w flex-sb-m p-b-31">
										<span class="cl3 p-r-20 p-t-20">
											Total
										</span>

										<span class="txt-m-111 cl10 p-t-20">
											<?php
											echo currency_format($tt);
											?>
										</span>
									</div>

									<a href="./shop.php?act=showShop-cart" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
										Thanh toán
									</a>
								</div>
							</div>
							<div class="h-full flex-m">
								<div class="icon-header-item flex-c-m trans-04 icon-user">
									<?php
									if (isset($_SESSION['user'])) {
										echo '<a href="./account.php?act=loged" style="font-size: 10px; color: white;">' . $_SESSION['user'] . '</a>';
									} else {
										echo '<a href="./account.php?act=form" style="font-size: 25px; color: white;"><i class="fa fa-user"></i></a>';
									}
									?>
								</div>
							</div>
						</div>

					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
				<div class="h-full flex-m">
					<div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
						<img src="images/icons/icon-search.png" alt="SEARCH">
					</div>
				</div>

				<div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
					<div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
						<img src="images/icons/icon-cart-2.png" alt="CART">
					</div>

					<div class="cart-header menu-click-child trans-04">
						<div class="bo-b-1 bocl15">
							<!-- cart header item -->
							<div class="flex-w flex-str m-b-25">
								<div class="size-w-15 flex-w flex-t">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
										<img src="images/item-cart-01.jpg" alt="PRODUCT">
									</a>

									<div class="size-w-17 flex-col-l">
										<a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
											Cheery
										</a>

										<span class="txt-s-101 cl9">
											18$
										</span>

										<span class="txt-s-109 cl12">
											x2
										</span>
									</div>
								</div>

								<div class="size-w-14 flex-b">
									<button class="lh-10">
										<img src="images/icons/icon-close.png" alt="CLOSE">
									</button>
								</div>
							</div>

							<!-- cart header item -->
							<div class="flex-w flex-str m-b-25">
								<div class="size-w-15 flex-w flex-t">
									<a href="product-single.html" class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
										<img src="images/item-cart-02.jpg" alt="PRODUCT">
									</a>

									<div class="size-w-17 flex-col-l">
										<a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
											Asparagus
										</a>

										<span class="txt-s-101 cl9">
											12$
										</span>

										<span class="txt-s-109 cl12">
											x1
										</span>
									</div>
								</div>

								<div class="size-w-14 flex-b">
									<button class="lh-10">
										<img src="images/icons/icon-close.png" alt="CLOSE">
									</button>
								</div>
							</div>
						</div>

						<div class="flex-w flex-sb-m p-t-22 p-b-12">
							<span class="txt-m-103 cl3 p-r-20">
								Subtotal
							</span>

							<span class="txt-m-111 cl6">
								48$
							</span>
						</div>

						<div class="flex-w flex-sb-m p-b-31">
							<span class="txt-m-103 cl3 p-r-20">
								Total
							</span>

							<span class="txt-m-111 cl10">
								48$
							</span>
						</div>

						<a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
							check out
						</a>
					</div>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
				<span class="lnr lnr-cross"></span>
			</button>

			<div class="container-search-header">
				<form class="wrap-search-header flex-w">
					<button class="flex-c-m trans-04">
						<span class="lnr lnr-magnifier"></span>
					</button>
					<input class="plh1" type="text" name="search" placeholder="Tìm kiếm...">
				</form>
			</div>
		</div>
	</header>
</body>

</html>