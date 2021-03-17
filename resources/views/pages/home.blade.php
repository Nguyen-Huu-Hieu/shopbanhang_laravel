@extends('layout')
@section('content')


<div class="header-bottom"><!--header-bottom-->
	<div class="container">
		<div class="row">
			{{-- <div class="col-sm-8">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="mainmenu pull-left">
					<ul class="nav navbar-nav collapse navbar-collapse">
						<li><a href="{{URL::to('/home')}}" class="active">Trang chủ</a></li>
						<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="shop.html">Products</a></li>
								<li><a href="product-details.html">Product Details</a></li> 
								<li><a href="checkout.html">Checkout</a></li> 
								<li><a href="cart.html">Cart</a></li> 
								<li><a href="login.html">Login</a></li> 
							</ul>
						</li> 
						<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="blog.html">Blog List</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li> 
						<li><a href="404.html">404</a></li>
					</ul>
				</div>
			</div> --}}
			<div class="col-sm-4">
				<h3>Chọn danh mục sản phẩm</h3>
				<div class="nav">
					@foreach($categories as $category)
						<a href="{{ Route('ProductByCategory', $category->category_id)}}">{{ $category->category_name}}</a><br>
					@endforeach
				</div>
				{{-- <select name="" id="" class="form-control">
					<option value="">Chọn danh mục sản phẩm</option>
					@foreach($categories as $category)
						<a href=""><option value="">{{ $category->category_name}}</option></a>
					@endforeach
				</select> --}}
			</div>
			<div class="col-sm-4">
				<h3>Chọn thương hiệu</h3>
				<div class="nav">
					@foreach($brands as $brand)
						
					<a href="{{ Route('ProductByBrand', $brand->id)}}">{{ $brand->brand_name}}</a><br>
				@endforeach
				</div>
				{{-- <select name="" id="" class="form-control">
					<option value="">Chọn thương hiệu</option>
					@foreach($brands as $brand)
						
						<option value="">{{ $brand->brand_name}}</option>
					@endforeach

				</select> --}}
			</div>
		
			<div class="col-sm-4">
				<form action="{{ Route('search')}}" method="GET">
					<div class="search_box pull-right">
						<input type="text" name="key" value="{{ request()->input('key')}}" class="form-control" placeholder="Bạn tìm gì ..."/>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!--/header-bottom-->

<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>Mua sắm thỏa thích</h2>
								{{-- <button type="button" class="btn btn-default get">Get it now</button> --}}
							</div>
							<div class="col-sm-6">
								<img src="{{('frontend/images/slider_1.png')}}" class="girl img-responsive" alt="" />
								<img  src="{{('frontend/images/slider_2.png')}}" class="girl img-responsive" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>E</span>-SHOPPER</h1>
								<h2>Mua sắm thỏa thích</h2>
								{{-- <button type="button" class="btn btn-default get">Get it now</button> --}}
							</div>
							<div class="col-sm-6">
								<img src="{{('frontend/images/slider_3.png')}}" class="girl img-responsive" alt="" />
								<img src="{{('frontend/images/slider_4.png')}}" class="girl img-responsive" alt="" />
							</div>
						</div>
						
			
						
					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section><!--/slider-->

<div class="container">
	<div class="row">
		{{-- <div class="col-sm-12"> --}}

			{{-- <div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Danh mục sản phẩm</h2>
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<div class="panel panel-default">
							@foreach($categories as $category)
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											{{ $category->category_name}}
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Apple</a></li>
											<li><a href="#">Samsung</a></li>
										
										</ul>
									</div>
								</div>
							@endforeach
						</div>
						
						
					</div><!--/category-products-->
				
					<div class="brands_products"><!--brands_products-->
						<h2>Thương hiệu</h2>
						<div class="brands-name">
							@foreach($brands as $brand)
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#">{{ $brand->brand_name}}</a></li>
								</ul>
							@endforeach
						</div>
					</div><!--/brands_products-->
					
					<div class="price-range"><!--price-range-->
						<h2>Chọn mức giá</h2>
						<div class="well text-center">
							<input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
							<b class="pull-left">0</b> <b class="pull-right">trên 20 triệu</b>
						</div>
					</div><!--/price-range-->
				
				</div>
			</div>  --}}
		
			<div class="col-sm-12">
				@foreach($categories as $category)
					
				
				<div class="features_items "><!--features_items-->
									<h2 class="title text-center">{{ $category->category_name}}</h2>
									@foreach($products as $product)
									@if($product->category_id == $category->category_id )
										<div class="col-sm-3">
											<a href="{{ route('product.detail', $product->id)}}">
													<div class="product-image-wrapper">
														<div class="single-products">
																<div class="productinfo text-center">
																	<img src="{{ $product->getProductImage()}}" alt=""/>
																	<h4 class="product_name">{{$product->product_name}}</h4>
																	<span class="product_price">{{number_format($product->product_price)}} đ</span><br>
																</div>
														</div>
													</div>
											</a>
										</div>
										@endif
									@endforeach
									
									
				</div><!--features_items-->
			
				@endforeach
			
	
			
		
			</div>
		{{-- </div> --}}
	</div>
</div>

@endsection