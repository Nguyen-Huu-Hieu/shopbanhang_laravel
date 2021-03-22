@extends('layout.master')
@section('listCategory')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách đơn hàng
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
            
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
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Số ĐT</th>
                            
                            {{-- <th>Tên sản phẩm</th> --}}
                            {{-- <th>Số lượng SP</th> --}}
                            <th>Phương thức thanh toán</th>
                            <th>Địa chỉ giao hàng</th>
                            <th>Tổng tiền hàng</th>
                            <th>Giảm giá</th>
                            <th>Tổng cộng</th>
                            <th>Trạng thái</th>
                            {{-- <th>Hiển thị</th> --}}
                            <th>Thời gian đặt hàng</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label>
                            </td>
                            <td>{{$order->customer_id}}</td>
                            <td>
                                @if($order->shipping_id)
                                    {{ $order->shipping->shipping_name}}
                                @endif
                            </td>
                
                            <td><span class="text-ellipsis">
                                @if($order->shipping_id)
                                    {{ $order->shipping->shipping_phone}}
                                @endif
                            </span></td>
                                {{-- @foreach($orderDetail as $order_detail)

                                        @if($order->id == $order_detail->order_id)
                                        
                                            <td>{{ $order_detail->product_name}}</td>
                                        @endif
                                @endforeach --}}
                     
                            <td>
                                @php
                                if($order->payment_id) {
                                    $payment_method = $order->payment->payment_method;
                                    if ($payment_method == 0) {
                                        echo "Thanh toán khi nhận hàng";
                                    }
                                    else {
                                        echo "Chuyển khoản";
                                    }
                                        
                                }
                                @endphp
                            </td>
                            <td>
                                @if($order->shipping_id)
                                    {{ $order->shipping->shipping_address}}
                                @endif
                            </td>
                            <td>{{ $order->order_total}}</td>
                            <td>0 VND</td>
                            <td>{{ $order->order_total}}</td>
                            <td></td>
                            <td>{{ $order->created_at}}</td>   
                            <td style="display:flex">
                                <a style="margin-right: 8px" href="{{ Route('order_detail', $order->id)}}" class="btn btn-primary" ui-toggle-class="">Xem chi tiết</a>

                                {{-- <form action="" method="POST" role="form">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger btn-delete">delete</button>
                                </form> --}}

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
