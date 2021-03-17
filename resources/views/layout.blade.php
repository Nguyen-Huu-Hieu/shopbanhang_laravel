<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{ asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       


    <link rel="shortcut icon" href="{{('frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="{{ Route('home')}}"><i class="fa fa-phone"></i>0962.331.881</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>huuhieu2468@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{ Route('home')}}"><img src="{{('frontend/images/logo.png')}}" alt="" /></a>
						</div>
			
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@php
								$content = Cart::content(); //hiển thị thông tin SP lên trang cart
								// $customer_name = Session::get('customer_name');
								@endphp
								{{-- <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> --}}
								{{-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> --}}
								<li><a href="{{Route('CheckCart')}}"><i class="fa fa-shopping-cart"></i>Giỏ hàng<span style="color: red">({{ count($content)}})</span></a></li>
								<?php
									$customer_name = Session::get('customer_name');
									if($customer_name == null) {
								?>
									<li><a href="{{ Route('LoginCustomer')}}"><i class="fa fa-lock"></i>Đăng nhập</a></li>
									<li><a href="{{ Route('registration.user')}}"><i class="fa fa-lock"></i>Đăng ký</a></li>
									
									<?php

								} else { ?>
									<li>
										<a href="{{ Route('account_customer')}}"><i class="fa fa-user"></i>
											@php
												echo $customer_name;
											@endphp
										</a>
									</li>

								<?php
									} ?>



							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
		

	</header><!--/header-->
	
	
	
	<section>
		<div class="container">
			<div class="row">
				
				
					<div class="col-sm-9 padding-right">
						@yield('content')
						@yield('product_detail')
						@yield('registration_user')
						@yield('login_customer')
						@yield('account_customer')
						@yield('search')
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		{{-- <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shopper</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/images/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/images/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/images/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="frontend/images/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="frontend/images/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Thông tin chung</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Liên hệ - góp ý</a></li>
								<li><a href="#">Khách hàng doanh nghiệp</a></li>

							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Hỗ trợ khách hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hướng dẫn mua hàng trực tuyến</a></li>
								<li><a href="#">Hướng dẫn thanh toán</a></li>
								<li><a href="#">Hướng dẫn mua hàng trả góp</a></li>
						
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Chính sách chung</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chính sách vận chuyển</a></li>
								<li><a href="#">Chính sách bảo hành</a></li>
								<li><a href="#">Chính sách đổi trả và hoàn tiền</a></li>
								<li><a href="#">Bảo mật thông tin khách hàng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Tổng đài hỗ trợ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hà Nội: 0962.331.881</a></li>
						
							</ul>
						</div>
					</div>
		
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{ asset('frontend/js/jquery.js')}}"></script>
	<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{ asset('frontend/js/price-range.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{ asset('frontend/js/main.js')}}"></script>
</body>
</html>