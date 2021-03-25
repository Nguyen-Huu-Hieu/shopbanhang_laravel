@extends('customer.account_customer')
@section('account_order')

    <div class="col-sm-9">
        <h3>Lịch sử mua hàng</h3>
        <table border="1px solid gray">
            <thead>
                {{-- <th>STT</th> --}}
                <th>Tên SP</th>
                <th>Số lượng</th>
                <th>Ngày mua</th>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    @foreach($orders_detail as $order_detail)
                        @php
                            if($order_detail->order_id == $order->id) {
                                echo "<tr><td>" .$order_detail->product_name .  "</td><td>" . $order_detail->product_sales_quantity . "</td><td>" .$order->created_at ."</td></tr>";
                            }
                        @endphp
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@endsection