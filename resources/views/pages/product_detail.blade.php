@extends('layout')
@section('product_detail')
				
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{ $product->getProductImage()}}" alt="" />
								{{-- <h3>ZOOM</h3> --}}
							</div>
							{{-- <div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="{{ $product->getProductImage()}}" alt=""></a>
										  <a href=""><img src="{{ $product->getProductImage()}}" alt=""></a>
										  <a href=""><img src="frontend/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="frontend/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="frontend/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="frontend/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="frontend/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="frontend/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="frontend/images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div> --}}

						</div>
						<div class="col-sm-7">
							<form action="{{ route('save_cart')}}" method="post">
								@csrf
								
								<div class="product-information"><!--/product-information-->
									{{-- <img src="frontend/images/product-details/new.jpg" class="newarrival" alt="" /> --}}
									<h2>{{ $product->product_name}}</h2>
									<p>Mã SP: {{ $product->id}}</p>
									{{-- <img src="frontend/images/product-details/rating.png" alt="" /> --}}
									<span>
										<span>Giá: {{number_format($product->product_price)}} đ</span><br>
										<label>Số lượng:</label>
										<input name="quantity" type="number" value="1" min="1"/>
										<input name="productid_hidden" type="hidden" value="{{ $product->id}}">
										<p><b>Tình trạng: </b>{{ $product->product_status}}</p>
										<p><b>Số lượng có sẵn: </b></p>
										<p><b>Brand:</b>{{ $product->brand_id}}</p>
										
									</span>
									<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
								</div><!--/product-information-->
								<div class="order">
									<button type="button" class="btn btn-warning buy_now">
										<a href="{{Route('checkout')}}">
											<span>ĐẶT MUA NGAY</span><br>
											Nhanh chóng, thuận tiện
										</a>
									</button>
									<button type="submit" class="btn btn-success add_cart">
										<i class="fa fa-shopping-cart"></i>
										<span>CHO VÀO GIỎ HÀNG</span><br>
										Mua tiếp sẩn phẩm khác
									</button>
								</div>
							</form>
						</div>
					</div><!--/product-details-->
			</div>
			<div class="box_content col-sm-12"><!--category-tab-->
				<div class="container">
					<div class="row">

						<div class="left_content ">
							<h3>ĐẶC ĐIỂM NỔI BẬT</h3>
							<div class="boxArticle " style="font-size: 16px">
								{{ $product->product_content}}
							</div>
						</div>
						{{-- <div class="right_content col-sm-4">
							<h3>TIN TỨC LIÊN QUAN</h3>
						</div> --}}
					</div>
				</div>
			</div><!--/category-tab-->
		</div>
	</section>
	

	
@endsection
  
