@extends('layout.master')
@section('order_detail')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Chi tiết đơn hàng
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
                <div class="row">
                    <div class="col-sm-12">

                        <div class="col-sm-4">
                            <h4>Trạng thái đơn hàng: </h4>
                            <div>
                                @php
                                    if($order->order_status == 0) {
                                        echo "Chờ duyệt";
                                    }
                                @endphp
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h4>Thông tin người mua</h4>
                            <table>
                                <tr>
                                    <td>Họ tên: </td>
                                    <td>
                                        @if($order->shipping_id)
                                            {{ $order->shipping->shipping_name}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>SĐT: </td>
                                    <td>
                                        @if($order->shipping_id)
                                            {{ $order->shipping->shipping_phone}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td>
                                        @if($order->shipping_id)
                                            {{ $order->shipping->shipping_email}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ nhận hàng: </td>
                                    <td>
                                        @if($order->shipping_id)
                                            {{ $order->shipping->shipping_address}}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ghi chú: </td>
                                    <td>
                                        @if($order->shipping_id)
                                            {{ $order->shipping->shipping_note}}
                                        @endif
                                    </td>
                                </tr>
                            </table>

                        </div>
                        
                        <div class="col-sm-4">
                            <h4>Phương thức thanh toán</h4>
                            <div>
                                @php
                                    if($order->payment_id) {
                                        $payment = $order->payment->payment_method;
                                        if($payment == 0) {echo "Thanh toán khi nhận hàng";}
                                        else echo "Chuyển khoản";
                                    }
                                @endphp
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div>
                    <h4>Thông tin đơn hàng</h4>
                    <div>
                        <table border="1px">
                            <thead>
                                <tr>
                                    <th>Mã SP</th>
                                    <th>Tên SP</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Giảm giá</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orderDetail as $order_detail)
                                    
                                    <tr>
                                        <td>{{ $order_detail->product_id}}</td>
                                        <td>{{ $order_detail->product_name}}</td>
                                        <td>{{ $order_detail->product_sales_quantity}}</td>
                                        <td>{{ $order_detail->product_price}}</td>
                                        <td>0</td>
                                        <td>
                                            @php
                                                $qty = $order_detail->product_sales_quantity;
                                                $price = $order_detail->product_price;
                                                $detail_price = $qty * $price;
                                                echo $detail_price;
                                            @endphp
                                        </td>
                                    </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
    
                </div>
            </div>


            <div>
                <table>
                    <tr>
                        <td>Tổng tiền hàng:</td>
                        <td>{{ $order->order_total}}</td>
                    </tr>
                    <tr>
                        <td>Khuyến mãi:</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Phí vận chuyển: </td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Tổng cộng:</td>
                        <td>{{ $order->order_total}} đ</td>
                    </tr>
                </table>
            </div>
     
            {{-- <footer class="panel-footer">
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
            </footer> --}}
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
