@extends('layout')
@section('search')

<div class="header-bottom"><!--header-bottom-->
	<div class="container">
		<div class="row">
	
			<div class="col-sm-4">
				<h3>Chọn danh mục sản phẩm</h3>
				<div class="nav">
					@foreach($categories as $category)
						<a href="{{ Route('ProductByCategory', $category->category_id)}}">{{ $category->category_name}}</a>
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
						
					<a href="">{{ $brand->brand_name}}<a>
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

<div class="container">
	<div class="row">
	
		
			<div class="col-sm-12">
				<div class="features_items "><!--features_items-->
									{{-- <h2 class="title text-center">Điện thoại nổi bật</h2> --}}
									@foreach($products as $product)
										<div class="col-sm-3">
											<a href="{{ route('product.detail', $product->id)}}">
													<div class="product-image-wrapper">
														<div class="single-products">
																<div class="productinfo text-center">
																	<img src="{{ $product->getProductImage()}}" alt="" />
																	<h4 class="product_name">{{$product->product_name}}</h4>
																	<span class="product_price">{{ $product->product_price}} đ</span><br>
																</div>
																{{-- <div class="product-overlay">
																	<div class="overlay-content">
																		<h2>$56</h2>
																		<p>Easy Polo Black Edition</p>
																		<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
																	</div>
																</div> --}}
														</div>
														{{-- <div class="choose">
															<ul class="nav nav-pills nav-justified">
																<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
																<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
															</ul>
														</div> --}}
													</div>
											</a>
										</div>
									@endforeach
									
									
				</div><!--features_items-->


@endsection

