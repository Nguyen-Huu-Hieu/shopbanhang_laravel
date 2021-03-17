@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        {{-- <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div> --}}
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
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        {{-- <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div> --}}
        <div class="row">
            {{-- <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input type="checkbox">
                            <label>Use Coupon Code</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Use Gift Voucher</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Estimate Shipping & Taxes</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Country:</label>
                            <select>
                                <option>United States</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>
                            
                        </li>
                        <li class="single_field">
                            <label>Region / State:</label>
                            <select>
                                <option>Select</option>
                                <option>Dhaka</option>
                                <option>London</option>
                                <option>Dillih</option>
                                <option>Lahore</option>
                                <option>Alaska</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>
                        
                        </li>
                        <li class="single_field zip-field">
                            <label>Zip Code:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Get Quotes</a>
                    <a class="btn btn-default check_out" href="">Continue</a>
                </div>
            </div> --}}
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Thuế<span>0 đ</span></li>
                        <li>Phí vận chuyển<span>Free</span></li>
                        <li>Tổng tiền<span>{{Cart::subtotal()}}</span></li>
                    </ul>
                        <a class="btn btn-default check_out" href="{{Route('checkout')}}">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
@endsection