@extends('layout.master')
@section('listCategory')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
            
                    <a href="{{ route('addProduct')}}" class="btn btn-primary">Thêm mới sản phẩm</a>
                </div>
                <div class="col-sm-3">
                    
                </div>
                <form action="" role="form">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group">
                                <input type="text" name="keyword" value="" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-sm btn-default" type="submit">Tìm kiếm</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
			</div>
			
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="i-checks m-b-none">
                                    <input type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Thương hiệu</th>
                            <th>Mô tả</th>
                            <th>Nội dung</th>
                            <th>Giá</th>
                            <th>Ảnh</th>

                            {{-- <th>Hiển thị</th> --}}
                            <th>Ngày thêm</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
           
                        @foreach ($products as $product)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                                </td>
                                <td>{{ $product->product_name }}</td>
                                <td>
                                    @if($product->category_id)
                                        {{ $product->category->category_name}}
                                    @endif
                                </td>
                                {{-- <td><span class="text-ellipsis">
									@php
										if($category->category_status == 0) {
											echo '<a href="#"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>';
										}
										else {
											echo '<a href="#"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>';
											
										}
									@endphp
										
                                </span></td> --}}
                                <td><span class="text-ellipsis">
                                    @if($product->brand_id)
                                        {{ $product->brand->brand_name}}
                                    @endif
                                </span></td>
                                <td>
                                    @php
                                        $rest = substr("$product->product_desc", 0, 50);
                                        echo $result = substr($rest, 0, strrpos($rest, ' '));
                                    @endphp
                                </td>
                                <td>
                                    @php
                                        $rest = substr("$product->product_content", 0, 50);
                                        echo $result = substr($rest, 0, strrpos($rest, ' '));
                                    @endphp
                                </td>
                                <td>{{ $product->product_price }}</td>
                                <td>
                                    {{-- {{$product->getProductImage()}} --}}
                                    <img style="width: 100px" src="{{$product->getProductImage()}}" alt="">
                                </td>
                                <td>{{ $product->created_at }}</td>
                                <td style="display:flex">
                                    <a style="margin-right: 8px" href="" class="btn btn-primary" ui-toggle-class="">Sửa</a>
                                    {{-- <a href="" class="btn btn-danger" ui-toggle-class="">Xóa</a> --}}

                                    <form action="" method="POST" role="form">
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger btn-delete">delete</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    {{-- <script>
		$(document).ready(function() {
			$('.btn-delete').click(function() {
				let isDelete = confirm('Bạn có muốn xóa?');
				if(isDelete) {
					$(this).parents('form').submit();
				}
			})
		});
	</script> --}}
@endsection
