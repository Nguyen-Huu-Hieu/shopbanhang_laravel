@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">

        <div class="register-req">
            <p>Vui lòng đăng ký để mua hàng</p>
        </div><!--/register-req-->

        <div class="review-payment">
            <h2>Sản phẩm</h2>
        </div>

        <div class="table-responsive cart_info">
            @php
                $content = Cart::content(); //hiển thị thông tin SP lên trang cart
               
            @endphp
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Ảnh</td>
                        <td class="description">Tên</td>
                        <td class="price">Đơn giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $value_content)
                        
                    
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="frontend/images/ .{{$value_content->options->image}}" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$value_content->name}}</a></h4>
                            
                        </td>
                        <td class="cart_price">
                            <p>{{number_format( $value_content->price) .' đ'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="qty" value="{{$value_content->qty}}" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
								{{-- <input name="quantity" type="number" value="{{$value_content->qty}}" min="1"/> --}}

                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                @php
                                    $subtotal = $value_content->price * $value_content->qty;
                                    echo number_format($subtotal) . ' đ';
                                @endphp
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{Route('delete_to_cart', $value_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>

        <div class="shopper-informations">
            <div class="row">
                {{-- <div class="col-sm-3">
                    <div class="shopper-info">
                        <p>Thông tin người mua</p>
                        <form>
                            <input type="text" placeholder="Họ tên">
                            <input type="number" placeholder="Số ĐT">
                            <input type="text" placeholder="Địa chỉ giao hàng">
                        </form>
                        <a class="btn btn-primary" href="">Get Quotes</a>
                        <a class="btn btn-primary" href="">Continue</a>
                    </div>
                </div> --}}
                <form action="{{Route('save-checkout-customer')}}" method="post">
                    <div class="col-sm-8 clearfix">
                        <div class="bill-to">
                            <h4>Thông tin người mua</h4>
                            <div class="form-one">
                                    @csrf
                                    <input type="text" name="shipping_name" placeholder="Họ tên khách hàng" required>
                                    <input type="text" name="shipping_phone" placeholder="Số ĐT" required>
                                    <input type="text" name="shipping_email" placeholder="Email" >
                                    <input type="text" name="shipping_address" placeholder="Địa chỉ nhận hàng" required>
                                    <textarea name="shipping_note"  placeholder="Lưu ý cho người bán" rows="16"></textarea>
                                    <input style="margin-top: 20px" type="submit" value="Đặt hàng" name="order" class="btn btn-default">
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-4 payment-options">
                            <h4>Phương thức thanh toán</h4>
                            <span>
                                <label><input name="payment_method" value="0" type="radio"> Thanh toán khi nhận hàng</label>
                                <p>Thanh toán tiền khi nhận được hàng.
                                    Quý khách ở ngoại tỉnh sẽ chịu thêm 1% giá trị đơn hàng từ chi phí thu hộ. 
                                    Quý khách ở Hà Nội được miễn phí.</p>
                                </span>
                                <span>
                                    <label><input name="payment_method" value="1" type="radio"> Chuyển khoản</label>
                                    <p>Quý khách chuyển khoản trước theo thông tin dưới đây :<br>
                                        MB-Bank: 0830118828888 <br>
                                        Chủ tài khoản: Nguyen Huu Hieu
                                    </p>
                                </span>
                                
                        </div>
                        
                    </form>
            </div>
        </div>

       
</section> <!--/#cart_items-->

@endsection